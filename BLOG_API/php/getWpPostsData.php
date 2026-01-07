<?php
/**
 * WordPress投稿データ取得関数
 *
 * @param array $options クエリオプション
 *   - date_format: 日付フォーマット（デフォルト: 'Y年n月j日'）
 *   - その他: WP_Queryのパラメータ
 * @return array 整形された投稿データの配列
 */
function getWpPostsData($options = array()) {
  // デフォルト設定
  $defaults = array(
    'post_type' => 'blog',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'taxonomy' => 'blog_category',
    'category' => '', // カテゴリースラッグ
    'order' => 'DESC',
    'date_format' => 'Y年n月j日'  // 日付フォーマットのデフォルト値
  );

  // オプションをマージ
  $merged_options = wp_parse_args($options, $defaults);

  // date_formatを取り出す（WP_Queryには不要なパラメータ）
  $date_format = $merged_options['date_format'];
  unset($merged_options['date_format']);

  // WP_Query用のパラメータ
  $args = $merged_options;

  // クエリ実行
  $query = new WP_Query($args);
  $posts_data = array();

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();

      // 投稿IDを明示的に取得
      $post_id = get_the_ID();

      // カテゴリー情報を取得（カスタムタクソノミー blog_category）
      $category_data = get_the_terms($post_id, 'blog_category');
      if (is_wp_error($category_data) || empty($category_data)) {
        $category_data = array();
      }

      // サムネイル情報を取得（URLが実際に取得できるかで判定）
      $thumbnail_id = get_post_thumbnail_id($post_id);
      $has_thumbnail = false;
      $thumbnail_url = '';
      $thumbnail_html = '';

      if (!empty($thumbnail_id) && $thumbnail_id > 0) {
        $thumbnail_url = get_the_post_thumbnail_url($post_id, 'medium');

        if (!empty($thumbnail_url)) {
          $has_thumbnail = true;
          $thumbnail_html = get_the_post_thumbnail($post_id, 'medium', array('alt' => get_the_title($post_id)));
        }
      }

      $thumbnail_data = array(
        'has_thumbnail' => $has_thumbnail,
        'url' => $thumbnail_url,
        'html' => $thumbnail_html,
      );

      // 投稿データを配列に整形
      $posts_data[] = array(
        'id' => $post_id,
        'title' => get_the_title($post_id),
        'permalink' => get_the_permalink($post_id),
        'date' => array(
          'formatted' => get_the_date($date_format, $post_id),
          'datetime' => get_the_date('c', $post_id),
          'timestamp' => get_the_time('U', $post_id)
        ),
        'categories' => $category_data,
        'thumbnail' => $thumbnail_data,
        'excerpt' => get_the_excerpt($post_id),
        'author' => array(
          'id' => get_the_author_meta('ID', $post_id),
          'name' => get_the_author_meta('display_name', $post_id)
        )
      );
    }
    wp_reset_postdata();
  }

  return $posts_data;
}
?>
