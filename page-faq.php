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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/faq/faq_sp.png" alt="コース・授業料">
                    
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
                    echo '<p>Q&A</p>';
                }
                ?> 
     </div>
</section>
<section class="about-intro faq-section-btn">
    <div class='breadcrumb'>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon/course_icon.png" alt="Breadcrumb Icon">
                        <p class='breadcrumb-arrow'></p>
                        <p>よくある質問</p>
    </div>
    <div class='container'>
        <div class='faq-header js-slidein'>
            <h1>FAQ</h1>
            <p>よくある質問</p>
        </div>
        <div class='faq-content'>
            <div class='index-faq-list'>
                <?php 
                    $args = array(
                        'post_type'      => 'faq',
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'ASC',
                        'posts_per_page' => -1,
                    );
                    $post_query = new WP_Query( $args );
                    $faq_index = 0;
                    $has_posts = false;
                    
                    if ( $post_query->have_posts() ) :
                        $has_posts = true;
                        while ( $post_query->have_posts() ) : $post_query->the_post(); 
                            $faq_index++;
                            $title = get_the_title();
                            $content = get_the_content();
                            ?>
                            <dl class="js-slidein" style="transition-delay: <?php echo ($faq_index * 0.08); ?>s;">
                                <dt class="index-faq-list-title">
                                    <p class='faq-header-number'>Q</p>
                                    <p class='faq-header-title'><?php echo esc_html($title); ?></p>
                                    <span class="plus"></span>
                                </dt>
                                <dd>
                                    <div>
                                        <p class='faq-header-number faq-header-anwser'>A</p>
                                        <div class='faq-header-content'><?php echo wp_kses_post($content); ?></div>
                                    </div>
                                </dd>  
                            </dl>
                        <?php 
                        endwhile; 
                        wp_reset_postdata();
                    endif;
                
                    if ( !$has_posts ) : ?>
                        <p>よくある質問はありません。</p>
                    <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>