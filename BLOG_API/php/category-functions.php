<?php
/**
 * カテゴリー関連関数
 */

// Prevent direct access
if (!defined('ABSPATH')) {
  exit;
}

/**
 * カテゴリーの表示名とクラス名を取得する
 * WordPressのカテゴリー情報から、表示名とCSSクラス名を生成
 * 管理画面で登録したカテゴリ名をそのまま使用し、スラッグをclass_nameとして利用
 *
 * @param WP_Term $category カテゴリーオブジェクト
 * @param string $context 表示コンテキスト (未使用、後方互換性のため保持)
 * @return array ['display_name' => string, 'class_name' => string]
 *
 * @example
 * カテゴリー名: "ブログ", スラッグ: "blog" → ['display_name' => 'ブログ', 'class_name' => 'blog']
 * カテゴリー名: "ニュース", スラッグ: "news" → ['display_name' => 'ニュース', 'class_name' => 'news']
 */
function get_category_display_info($category, $context = 'archive') {
  // スラッグをサニタイズ（日本語スラッグの場合、英数字に変換）
  $class_name = sanitize_category_slug($category->slug, $category->term_id);

  return array(
    'display_name' => $category->name,
    'class_name' => $class_name
  );
}

/**
 * カテゴリースラッグをサニタイズして英数字クラス名に変換
 *
 * @param string $slug カテゴリースラッグ
 * @param int $term_id カテゴリーID
 * @return string サニタイズされたクラス名
 */
function sanitize_category_slug($slug, $term_id) {
  // 日本語や特殊文字が含まれているかチェック（URLエンコードされる文字が含まれる場合）
  if (urlencode($slug) !== $slug) {
    // 日本語スラッグの場合、カテゴリーIDベースのクラス名を返す
    return 'category-' . $term_id;
  }

  // 既に英数字の場合はそのまま返す
  return $slug;
}

/**
 * カテゴリーバッジを表示する（重複排除機能付き）
 *
 * 投稿のカテゴリー情報を取得し、HTMLバッジとして出力
 * 同じ表示名のカテゴリーは重複表示しない
 *
 * @param array $categories カテゴリーオブジェクトの配列
 * @param string $context 表示コンテキスト ('archive' または 'single')
 * @return void 直接HTMLを出力
 */
function render_category_badges($categories, $context = 'archive') {
  // カテゴリーが未設定の場合はデフォルトカテゴリを表示
  if (empty($categories)) {
    echo '<span class="category-badge ' . esc_attr(BLOG_API_DEFAULT_CATEGORY_SLUG) . '">' . esc_html(BLOG_API_DEFAULT_CATEGORY_NAME) . '</span>';
    return;
  }

  $displayed_types = array();

  foreach ($categories as $category) {
    $info = get_category_display_info($category, $context);
    $display_name = $info['display_name'];
    $class_name = $info['class_name'];

    // 同じタイプは1回だけ表示
    if (!in_array($display_name, $displayed_types)) {
      $displayed_types[] = $display_name;
      echo '<span class="category-badge ' . esc_attr($class_name) . '">' . esc_html($display_name) . '</span>';
    }
  }
}
?>
