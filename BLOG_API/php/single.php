<?php get_header()?>
<section class="reason-fv-sec">
    <div class='top_FV pc'>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blog/blog_fv.png" alt="Breadcrumb Icon">
            <!-- <div class='FV_content'>
                <p>BLOG</p>
            </div> -->
        </div>
    <div class='top_FV sp'>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog_sp.png" alt="コース・授業料">
                    
    </div>
    <div class="sub_fv">
            <h3 class="sec_title_white">ブログ</h3>
    </div>
    <div class='FV_content'>
                <?php 
               
                    echo '<p>BLOG</p>';
                
                ?> 
     </div>
</section>
<section id="content" class="about-intro blog-sec single-blog-sec  blog-detail-section">
<div class='breadcrumb'>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon/course_icon.png" alt="Breadcrumb Icon">
                        <p class='breadcrumb-arrow'></p>
                        <p>ブログ</p>
    </div>
    <?php while (have_posts()) : the_post(); ?>
    <?php
      // カテゴリー情報を取得（カスタムタクソノミー blog_category）
      $categories = get_the_terms(get_the_ID(), 'blog_category');
      if (is_wp_error($categories) || empty($categories)) {
        $categories = array();
      }
    ?>
    <article class="news-content detail">
        <div class="container">
            <!-- メタ情報 -->
            <div class="meta">
                <div class="categories">
                    <?php render_category_badges($categories, 'single'); ?>
                </div>
                <time class="date" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y年n月j日'); ?></time>
            </div>

            <!-- タイトル -->
            <h1 class="post-title"><?php the_title(); ?></h1>

            <!-- アイキャッチ画像 -->
            <?php
            // サムネイル画像の存在を厳密にチェック
            $thumbnail_id = get_post_thumbnail_id();
            $has_valid_thumbnail = false;
            $thumbnail_url = '';

            if (!empty($thumbnail_id) && $thumbnail_id > 0) {
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');

                if (!empty($thumbnail_url)) {
                    $has_valid_thumbnail = true;
                }
            }
            ?>
            <div class="featured-image <?php echo !$has_valid_thumbnail ? 'no-image' : ''; ?>">
                <?php if ($has_valid_thumbnail) : ?>
                    <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                <?php else : ?>
                    <div class="no-image-placeholder">
                        <span>画像なし</span>
                    </div>
                <?php endif; ?>
            </div>

            <!-- 本文 -->
            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <!-- ナビゲーション（前後記事 + 一覧へ戻る） -->
            <nav class="post-navigation">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                <div class="nav-container">
                    <!-- 次の記事 -->
                    <div class="nav-next">
                        <?php if ($next_post) : ?>
                            <a href="<?php echo get_permalink($next_post); ?>" class="nav-link">
                                <div class="nav-content">
                                    <span class="nav-label">次の記事</span>
                                </div>
                            </a>
                        <?php else : ?>
                            <div class="nav-link disabled">
                                <div class="nav-content">
                                    <span class="nav-label">次の記事</span>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- 一覧ページへ戻る -->
                    <div class="back-to-list">
                        <a href="<?php echo home_url('/blog/'); ?>" class="strengths-button">
                            <span class="button-text">一覧に戻る</span>
                        </a>
                    </div>

                    <!-- 前の記事 -->
                    <div class="nav-previous">
                        <?php if ($prev_post) : ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" class="nav-link">
                                <div class="nav-content">
                                    <span class="nav-label">前の記事</span>
                                </div>
                            </a>
                        <?php else : ?>
                            <div class="nav-link disabled">
                                <div class="nav-content">
                                    <span class="nav-label">前の記事</span>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </article>
    <?php endwhile; ?>
</section>
<?php get_footer() ?>
