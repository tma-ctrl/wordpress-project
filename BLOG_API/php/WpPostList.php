<?php
/**
 * 投稿一覧リストコンポーネント
 *
 * @param array $posts_data 投稿データ配列
 */
function WpPostList($posts_data) {
?>
<ul class="WpPostList">
  <?php foreach ($posts_data as $index => $post) {
    // カテゴリースラッグをカンマ区切りで取得（フィルター用）
    $category_slugs = array();
    if (!empty($post['categories'])) {
      foreach ($post['categories'] as $cat) {
        $category_slugs[] = sanitize_category_slug($cat->slug, $cat->term_id);
      }
    }
    // カテゴリー未設定の場合はデフォルトカテゴリを設定
    if (empty($category_slugs)) {
      $category_slugs[] = BLOG_API_DEFAULT_CATEGORY_SLUG;
    }
    $categories_attr = implode(',', $category_slugs);
  ?>
  <li class="post-item" data-index="<?php echo $index; ?>" data-categories="<?php echo esc_attr($categories_attr); ?>">
    <a href="<?php echo esc_url($post['permalink']); ?>" class="post-item-link">
      <div class="image <?php echo !$post['thumbnail']['has_thumbnail'] ? 'no-image' : ''; ?>">
        <?php if ($post['thumbnail']['has_thumbnail']) : ?>
        <?php echo $post['thumbnail']['html']; ?>
        <?php else : ?>
        <div class="no-image-placeholder">
          <span>画像なし</span>
        </div>
        <?php endif; ?>
      </div>
      <div class="content">
        <div class="meta">
          <div class="category">
            <?php render_category_badges($post['categories'], 'archive'); ?>
          </div>
          <time class="date" datetime="<?php echo esc_attr($post['date']['datetime']); ?>">
            <?php echo esc_html($post['date']['formatted']); ?>
          </time>
        </div>
        <div class="title"><?php echo esc_html($post['title']); ?></div>
      </div>
    </a>
  </li>
  <?php } ?>
</ul>
<?php } ?>
