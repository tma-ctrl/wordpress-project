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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/privacy/privacy_sp.png" alt="コース・授業料">
                    
    </div>
    <div class="sub_fv">
            <h3 class="sec_title_white"><?php the_title(); ?></h3>
    </div>
    <div class='FV_content'>
                <?php 
                    echo '<p>PRIVACY</p>';
                ?> 
     </div>
</section>
<section class="about-intro privacy-section-btn">
    <div class='breadcrumb'>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon/course_icon.png" alt="Breadcrumb Icon">
                        <p class='breadcrumb-arrow'></p>
                        <p>よくある質問</p>
    </div>
    <div class='container'>
    <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                    the_content();
                    endwhile;
                endif;
                ?>
    </div>
</section>
<?php get_footer(); ?>