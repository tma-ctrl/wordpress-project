<?php
/**
 * ブログ一覧セクション - 統合コンポーネント
 *
 * 使用方法:
 * <?php BlogListSection(); ?>
 */
function BlogListSection() {
  // 投稿データを取得
  $posts_data = getWpPostsData();

  // 投稿データからユニークなカテゴリーを抽出
  $categories = extractCategoriesFromPosts($posts_data);

  // カテゴリーフィルター
  CategoryFilter($categories);

  // 記事一覧
  WpPostList($posts_data);

  // ページネーションコンテナ
  echo '<div class="pagination-container"></div>';
}

/**
 * 投稿データからユニークなカテゴリーを抽出
 * カテゴリ未設定の記事がある場合はデフォルトカテゴリも追加
 */
function extractCategoriesFromPosts($posts_data) {
  $categories = array();
  $seen_slugs = array();
  $has_uncategorized = false;

  foreach ($posts_data as $post) {
    if (!empty($post['categories'])) {
      foreach ($post['categories'] as $cat) {
        $slug = sanitize_category_slug($cat->slug, $cat->term_id);
        if (!in_array($slug, $seen_slugs)) {
          $seen_slugs[] = $slug;
          $categories[] = array(
            'slug' => $slug,
            'name' => $cat->name,
          );
        }
      }
    } else {
      // カテゴリ未設定の記事が存在する
      $has_uncategorized = true;
    }
  }

  // カテゴリ未設定の記事があり、かつデフォルトカテゴリがまだ追加されていない場合
  $default_slug = BLOG_API_DEFAULT_CATEGORY_SLUG;
  if ($has_uncategorized && !in_array($default_slug, $seen_slugs)) {
    $categories[] = array(
      'slug' => $default_slug,
      'name' => BLOG_API_DEFAULT_CATEGORY_NAME,
    );
  }

  return $categories;
}
?>
