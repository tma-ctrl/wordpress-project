<?php
/**
 * カテゴリーフィルターコンポーネント
 *
 * @param array $categories カテゴリー配列 [['slug' => '', 'name' => ''], ...]
 */

// Prevent direct access
if (!defined('ABSPATH')) {
  exit;
}

function CategoryFilter($categories) {
  // Define the desired order: ニュース (news), ブログ (blog), then others
  $order = array('news', 'blog');
  
  // Separate categories into ordered and unordered
  $ordered_categories = array();
  $unordered_categories = array();
  
  // Create a map for quick lookup
  $category_map = array();
  foreach ($categories as $category) {
    $category_map[$category['slug']] = $category;
  }
  
  // Add categories in the specified order
  foreach ($order as $slug) {
    if (isset($category_map[$slug])) {
      $ordered_categories[] = $category_map[$slug];
      unset($category_map[$slug]);
    }
  }
  
  // Add remaining categories that weren't in the order array
  foreach ($category_map as $category) {
    $unordered_categories[] = $category;
  }
  
  // Combine: ordered first, then unordered
  $sorted_categories = array_merge($ordered_categories, $unordered_categories);
?>
<div class="category-filter">
  <ul class="category-filter-list">
    <li class="category-filter-item">
      <button type="button" class="category-filter-button is-active" data-category="all">
        すべてみる
      </button>
    </li>
    <?php foreach ($sorted_categories as $category) : ?>
    <li class="category-filter-item">
      <button type="button" class="category-filter-button" data-category="<?php echo esc_attr($category['slug']); ?>">
        <?php echo esc_html($category['name']); ?>
      </button>
    </li>
    <?php endforeach; ?>
  </ul>
</div>
<?php
}
?>
