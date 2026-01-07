<?php
/**
 * ブログパーマリンクシステム
 *
 * カスタム投稿タイプ 'blog' の連番URLシステムを提供
 * - 投稿順に1から連番を自動割り当て
 * - blog/id_1/#content、blog/id_2/#content のような直感的なURLを生成
 * - URL解決とリライトルール管理
 */

// Prevent direct access
if (!defined('ABSPATH')) {
  exit;
}

// ========================================
// カスタム連番システム
// ========================================

/**
 * 投稿保存時に自動的に連番を割り当て
 *
 * 新規投稿作成時に、blog_number カスタムフィールドに
 * 1から順番に連番を自動保存します
 */
function assign_blog_number($post_id, $post, $update) {
  // リビジョンまたはblog以外の投稿タイプはスキップ
  if (wp_is_post_revision($post_id) || $post->post_type !== 'blog') {
    return;
  }

  // 既に番号が割り当てられている場合はスキップ
  $existing_number = get_post_meta($post_id, 'blog_number', true);
  if (!empty($existing_number)) {
    return;
  }

  // 現在の最大番号を取得
  global $wpdb;
  $max_number = $wpdb->get_var("
    SELECT MAX(CAST(meta_value AS UNSIGNED))
    FROM {$wpdb->postmeta}
    WHERE meta_key = 'blog_number'
  ");

  $next_number = $max_number ? $max_number + 1 : 1;

  // 連番を保存
  update_post_meta($post_id, 'blog_number', $next_number);
}
add_action('save_post', 'assign_blog_number', 10, 3);

/**
 * カスタム投稿タイプ 'blog' のパーマリンクを blog_number を使用して生成
 *
 * 投稿順の連番を使用して、blog/id_1/、blog/id_2/ のような直感的なURLを生成
 */
function custom_blog_permalink($post_link, $post) {
  if ($post->post_type === 'blog') {
    $blog_number = get_post_meta($post->ID, 'blog_number', true);
    if ($blog_number) {
      return home_url('/blog/id_' . $blog_number . '/#content');
    }
    // フォールバック：blog_numberがない場合は投稿IDを使用
    return home_url('/blog/id_' . $post->ID . '/#content');
  }
  return $post_link;
}
add_filter('post_type_link', 'custom_blog_permalink', 10, 2);

/**
 * カスタムクエリ変数の追加
 */
function custom_blog_query_vars($vars) {
  $vars[] = 'blog_number';
  return $vars;
}
add_filter('query_vars', 'custom_blog_query_vars');

/**
 * カスタムリライトルールの追加
 *
 * blog/id_数字/ の形式のURLを正しく解釈できるようにする
 */
function custom_blog_rewrite_rules() {
  add_rewrite_rule(
    '^blog/id_([0-9]+)/?$',
    'index.php?blog_number=$matches[1]',
    'top'
  );
}
add_action('init', 'custom_blog_rewrite_rules');

/**
 * blog_number からの投稿解決
 *
 * URLのblog_numberから実際の投稿を検索して表示
 */
function custom_blog_parse_request($wp) {
  if (isset($wp->query_vars['blog_number'])) {
    $blog_number = intval($wp->query_vars['blog_number']);

    // blog_numberから投稿を検索
    $args = array(
      'post_type' => 'blog',
      'meta_key' => 'blog_number',
      'meta_value' => $blog_number,
      'posts_per_page' => 1,
      'post_status' => 'publish'
    );

    $posts = get_posts($args);

    if ($posts) {
      // 投稿が見つかった場合、通常の投稿表示に変換
      $wp->query_vars['post_type'] = 'blog';
      $wp->query_vars['p'] = $posts[0]->ID;
      $wp->query_vars['name'] = $posts[0]->post_name;
      unset($wp->query_vars['blog_number']);
    }
  }
}
add_action('parse_request', 'custom_blog_parse_request');

/**
 * 既存投稿に連番を割り当てる（管理画面でのみ実行）
 *
 * この関数は一度だけ実行され、既存の投稿に作成日順で連番を割り当てます
 */
function assign_existing_blog_numbers() {
  // 既に実行済みかチェック
  if (get_option('blog_numbers_assigned')) {
    return;
  }

  // 連番が未割り当ての投稿を取得（作成日順）
  $args = array(
    'post_type' => 'blog',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC',
    'post_status' => 'any',
    'meta_query' => array(
      'relation' => 'OR',
      array(
        'key' => 'blog_number',
        'compare' => 'NOT EXISTS'
      ),
      array(
        'key' => 'blog_number',
        'value' => '',
        'compare' => '='
      )
    )
  );

  $posts = get_posts($args);

  if ($posts) {
    // 現在の最大番号を取得
    global $wpdb;
    $max_number = $wpdb->get_var("
      SELECT MAX(CAST(meta_value AS UNSIGNED))
      FROM {$wpdb->postmeta}
      WHERE meta_key = 'blog_number'
    ");

    $next_number = $max_number ? $max_number + 1 : 1;

    foreach ($posts as $post) {
      update_post_meta($post->ID, 'blog_number', $next_number);
      $next_number++;
    }
  }

  // 実行済みフラグを保存
  update_option('blog_numbers_assigned', true);
}
add_action('admin_init', 'assign_existing_blog_numbers');

/**
 * ブログ番号をリセットして1から再割り当て（一度だけ実行）
 *
 * 既存のblog_numberメタデータを全て削除し、
 * 作成日順に1から連番を振り直します
 */
function reset_blog_numbers() {
  // 既に実行済みかチェック
  if (get_option('blog_numbers_reset_done')) {
    return;
  }

  global $wpdb;

  // 既存のblog_numberメタデータを全て削除
  $wpdb->query("
    DELETE FROM {$wpdb->postmeta}
    WHERE meta_key = 'blog_number'
  ");

  // 実行済みフラグを削除
  delete_option('blog_numbers_assigned');

  // 再割り当てを実行
  assign_existing_blog_numbers();

  // リセット完了フラグを保存（二度と実行されないようにする）
  update_option('blog_numbers_reset_done', true);
}
add_action('admin_init', 'reset_blog_numbers');
?>
