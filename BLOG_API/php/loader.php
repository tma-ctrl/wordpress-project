<?php
/**
 * Blog Module Loader
 *
 * このファイルをgrandseriesテーマのfunctions.phpから読み込むことで、
 * ブログモジュールの全機能を有効化します。
 *
 * 使用方法:
 * functions.phpに以下を追加:
 * require_once get_template_directory() . '/BLOG_API/php/loader.php';
 */

// Prevent direct access
if (!defined('ABSPATH')) {
  exit;
}

// ========================================
// デフォルトカテゴリ設定
// ========================================
// カテゴリ未設定の記事に適用されるデフォルトカテゴリ
// 変更する場合はここを編集するだけで全体に反映されます
define('BLOG_API_DEFAULT_CATEGORY_SLUG', 'news');
define('BLOG_API_DEFAULT_CATEGORY_NAME', 'ニュース');

// ========================================
// PHP関数の読み込み
// ========================================

// パーマリンクシステム（連番URL機能）
require_once __DIR__ . '/permalink-system.php';

// データ取得関数
require_once __DIR__ . '/getWpPostsData.php';

// カテゴリー関連関数
require_once __DIR__ . '/category-functions.php';

// 投稿一覧コンポーネント
require_once __DIR__ . '/WpPostList.php';

// カテゴリーフィルターコンポーネント
require_once __DIR__ . '/CategoryFilter.php';

// ブログ一覧セクション統合コンポーネント（推奨）
require_once __DIR__ . '/BlogListSection.php';

// ========================================
// CSS/JSアセットのエンキュー
// ========================================

function blog_module_enqueue_assets() {
  $module_uri = get_template_directory_uri() . '/BLOG_API';
  $version = '1.0.1';

  // CSS - ブログ基本スタイル
  wp_enqueue_style(
    'blog-module-styles',
    $module_uri . '/assets/css/blog.css',
    array(),
    $version
  );

  // CSS - カテゴリーフィルター
  wp_enqueue_style(
    'category-filter-styles',
    $module_uri . '/assets/css/category-filter.css',
    array('blog-module-styles'),
    $version
  );

  // JavaScript - カテゴリーフィルター（ページネーション機能含む）
  wp_enqueue_script(
    'category-filter-script',
    $module_uri . '/assets/js/category-filter.js',
    array(),
    $version,
    true
  );
}
add_action('wp_enqueue_scripts', 'blog_module_enqueue_assets');

// ========================================
// テンプレートファイルのフィルター
// ========================================

/**
 * single.phpテンプレートを BLOG_API から読み込む（カスタム投稿タイプ blog のみ）
 *
 * 注意: page-blog.phpはgrandseriesテーマの既存ファイルを使用し、
 * その中でWpPostList()コンポーネントを呼び出す形式を採用しています。
 */
function blog_module_single_template($template) {
  if (is_single() && get_post_type() === 'blog') {
    $module_template = __DIR__ . '/single.php';
    if (file_exists($module_template)) {
      return $module_template;
    }
  }

  return $template;
}
add_filter('single_template', 'blog_module_single_template');
