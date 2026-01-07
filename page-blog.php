<?php get_header(); ?>
<section class="reason-fv-sec">
    <div class='top_FV pc'>
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', array('class' => 'featured-image')); ?>
                <?php else : ?>
                    <div class="no-featured-image">No image available</div>
                <?php endif; ?>
                
    </div>
    <div class='top_FV sp'>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/fv_sp.png" alt="コース・授業料">
                    
    </div>
    <div class="sub_fv">
            <h3 class="sec_title_white"><?php the_title(); ?></h3>
    </div>
    <div class='FV_content'>
                <?php 
                $content = get_the_content();
                if (!empty(trim($content))) {
                    the_content();
                } else {
                    echo '<p>BLOG</p>';
                }
                ?> 
     </div>
</section>
<section class="about-intro blog-sec course-sec-btn">
    <div class='breadcrumb'>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon/course_icon.png" alt="Breadcrumb Icon">
                        <p class='breadcrumb-arrow'></p>
                        <p>ブログ</p>
    </div>
    <div class="blog-sec-container">
        <?php
            /**
             * ========================================
             * Blog Module - ブログ一覧セクション
             * ========================================
             * 記事一覧とページネーションを含む統合コンポーネント
             */
            // Load the blog module functions if not already loaded
            BlogListSection();
            ?>
    </div>
</section>
<?php get_footer(); ?>