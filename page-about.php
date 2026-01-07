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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/fv_sp.png" alt="代木塗装工業">
                    
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
                    echo '<p>ABOUT</p>';
                }
                ?> 
     </div>

</section>
<section class="about-intro about-message-section">
    <div class='breadcrumb'>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon/breadcrumb_icon.png" alt="Breadcrumb Icon">
                        <p class='breadcrumb-arrow'></p>
                        <p>教室案内</p>
    </div>
    <div class="message-decorative-dots message-dots-bottom-left"></div>
    <div class="message-decorative-dots message-dots-top-right"></div>
    <div class="container">
        <div class="about-message-sec">
            <div class="message-nav">
                <a href="<?php echo home_url(); ?>/about/#message-body" class="message-nav-btn">塾長ごあいさつ</a>
                <a href="<?php echo home_url(); ?>/about/#about-instructor" class="message-nav-btn">講師紹介</a>
                <a href="<?php echo home_url(); ?>/about/#about-access" class="message-nav-btn">アクセス</a>
            </div>
            
            <div class="message-content">
                <div class="message-header">
                    <h2 class="message-title">MESSAGE</h2>
                    <p class="message-subtitle">代表挨拶</p>
                </div>
                
                <div class="message-body" id="message-body">
                    <div class="message-image">
                        <?php
                        $message_image_path = get_template_directory() . '/assets/img/top/admin.png';
                        $message_image_url = get_template_directory_uri() . '/assets/img/top/admin.png';
                        if (file_exists($message_image_path)) :
                        ?>
                            <img src="<?php echo esc_url($message_image_url); ?>" alt="塾長 石田 天心" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="message-image-alt" style="display: none;">塾長 石田 天心</div>
                        <?php else : ?>
                            <div class="message-image-alt">塾長 石田 天心</div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="message-text">
                        <p>天心塾塾長の石田天心です。<br>
                        28年の東進ハイスクール勤務を経て地元で日本1の塾を作りたいと天心塾を開校しました。</p>
                        
                        <p>当塾は個人塾ではあり、わずか10数年の歴史ですが中学・高校・大学受験において逆転、大逆転合格者を毎年生み出しています。</p>
                        
                        <p>DE判定から立川・昭和・武蔵野北・東大和南,小平南などへ、大学受験は毎年欠かさず難関大学合格者を送り出し、直接指導した生徒で早稲田大学には10人を超える合格者が出ています。</p>
                        
                        <p>私の目標は一番安い授業料で最高水準の講師と学習環境の提供です。<br>
                        50年以上支えられてきた地域への恩返しで、ご家庭と子どもたちを全力で応援します。是非皆さんも天心塾を支えて応援してください。</p>
                        
                        <p>よろしくお願いいたします。</p>
                        <p class="message-signature">天心塾<br>塾長 石田 天心</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-instructor" id="about-instructor">
     <div class="about-instructor-container">
        <div class="about-instructor-header">
            <p>皆さんの学習を全力でサポート！</p>
            <h5>講師紹介</h5>
        </div>
        <div class="about-instructor-content">
            <?php 
                $args = array(
                    'post_type'      => 'instructor',
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                    'posts_per_page' => -1
                );
                $post_query = new WP_Query( $args );
            ?>
            
            <?php if ( $post_query->have_posts() ) : ?>
                <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                    <?php 
                    $number = get_field('number');
                    $img_url = get_field('img_url');
                    $name = get_field('name');
                    $subject = get_field('subject');
                    $content = get_field('content');
                    ?>
                    <div class="instructor-item">
                         <div class="instructor-dots-pattern"></div>
                        
                        <div class="instructor-photo-wrapper">
                            <div class="instructor-top">
                                <div class="instructor-label"><?php echo esc_html($number); ?></div>
                                <div class="instructor-photo">
                                    <?php if (!empty($img_url)) : ?>
                                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($name); ?>" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                        <div class="instructor-photo-alt" style="display: none;"><?php echo esc_html($name); ?></div>
                                    <?php else : ?>
                                        <div class="instructor-photo-alt"><?php echo esc_html($name); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="instructor-info-wrapper">
                                <div class="instructor-name-section">
                                    <div class="instructor-name-bar"></div>
                                    <div class="instructor-name-content">
                                        <h3 class="instructor-name"><?php echo esc_html($name); ?></h3>
                                        <?php if (!empty($subject)) : ?>
                                            <span class="instructor-subject"><?php echo esc_html($subject); ?></span>
                                            <!-- <div class="instructor-subject-line"></div> -->
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if (!empty($content)) : ?>
                                    <div class="instructor-description">
                                        <?php echo wp_kses_post($content); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
     </div>
</section>
<section class="about-event">
    <div class="about-event-container">
    <div class="about-event-slider pc">
            <?php 
                $args = array(
                    'post_type'      => 'event',
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                    'posts_per_page' => -1
                );
                $post_query = new WP_Query( $args );
                ?>
                <?php if ( $post_query->have_posts() ) : ?>
                    <div class="event-slider" id="event-slider">
                    <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                    <?php 
                            $image = get_field('img_url');
                            $title = get_the_title();
                            ?>
                            <div class='event_item'>
                                <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    <div class="event_item_alt" style="display: none;"><?php echo esc_attr($title); ?></div>
                                <?php else : ?>
                                    <div class="event_item_alt"><?php echo esc_attr($title); ?></div>
                                <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            </div>
                            <?php endif; ?>
    </div>   
        <div class="about-event-header">
            <h2 class="event-title">Event</h2>
            <p class="event-subtitle">天心オリジナルイベント</p>
            <p class="event-description">受験直前の基本事項の確認と学習の場の提供を通して追い込み期の受験生を応援し、<br class="pc">仲間との連帯感や心に残る受験期の思い出を提供することを目的に開催しています。</p>
        </div>
        <div class="about-event-content">
            <div class="about-event-content-left">
                    <div class="event-main-image">
                            <?php
                            $main_img_path = get_template_directory() . '/assets/img/about/about-event-2.jpg';
                            $main_img_url = get_template_directory_uri() . '/assets/img/about/about-event-2.jpg';
                            $main_img_exists = file_exists($main_img_path);
                            ?>
                            <?php if ($main_img_exists) : ?>
                                <img src="<?php echo esc_url($main_img_url); ?>" alt="天心塾 イベント風景" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="event-image-alt" style="display: none;">天心塾 イベント風景</div>
                            <?php else : ?>
                                <div class="event-image-alt">天心塾 イベント風景</div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="event-christmas-tests">
                            <div class="event-test-block">
                                <h3 class="event-test-title">クリスマス1,000題テスト</h3>
                                <div class="event-test-details">
                                    <p class="event-test-grade"><span class="event-test-label">対象学年:</span> 中学3年生</p>
                                    <p class="event-test-scope"><span class="event-test-label">出題範囲:</span> 中学1~3年生の英語</p>
                                </div>
                            </div>
                            <div class="event-test-block">
                                <h3 class="event-test-title event-test-title-right">ハーフ1,000題テスト</h3>
                                <div class="event-test-details">
                                    <p class="event-test-grade"><span class="event-test-label">対象学年:</span> 中学2年生</p>
                                    <p class="event-test-scope"><span class="event-test-label">出題範囲:</span> 中学1~2年生の英語</p>
                                </div>
                            </div>
                        </div>
                </div>
            <div class="about-event-content-right">
                        <div class="event-newyear-tests">
                            <div class="event-test-block">
                                <h3 class="event-test-title">大晦日1,000題テスト</h3>
                                <div class="event-test-details">
                                    <p class="event-test-grade"><span class="event-test-label">対象学年:</span> 中学3年生</p>
                                    <p class="event-test-scope"><span class="event-test-label">出題範囲:</span> 中学1~3年生の数学</p>
                                </div>
                            </div>
                            <div class="event-test-block">
                                <h3 class="event-test-title event-test-title-right">ハーフ1,000題テスト</h3>
                                <div class="event-test-details">
                                    <p class="event-test-grade"><span class="event-test-label">対象学年:</span> 中学2年生</p>
                                    <p class="event-test-scope"><span class="event-test-label">出題範囲:</span> 中学1~2年生の数学</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="event-photo-collage">
                            <div class="event-main-image">
                                <?php
                                $collage_img1_path = get_template_directory() . '/assets/img/about/about-event-1.jpg';
                                $collage_img1_url = get_template_directory_uri() . '/assets/img/about/about-event-1.jpg';
                                $collage_img1_exists = file_exists($collage_img1_path);
                                ?>
                                <?php if ($collage_img1_exists) : ?>
                                    <img src="<?php echo esc_url($collage_img1_url); ?>" alt="天心塾 イベント" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    <div class="event-image-alt" style="display: none;">天心塾 イベント</div>
                                <?php else : ?>
                                    <div class="event-image-alt">天心塾 イベント</div>
                                <?php endif; ?>
                            </div>
                        </div>
            </div>
            <div class="about-event-slider sp">
            <?php 
                $args = array(
                    'post_type'      => 'event',
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                    'posts_per_page' => -1
                );
                $post_query = new WP_Query( $args );
                ?>
                <?php if ( $post_query->have_posts() ) : ?>
                    <div class="event-slider" id="event-slider-sp">
                    <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                    <?php 
                            $image = get_field('img_url');
                            $title = get_the_title();
                            ?>
                            <div class='event_item'>
                                <?php if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    <div class="event_item_alt" style="display: none;"><?php echo esc_attr($title); ?></div>
                                <?php else : ?>
                                    <div class="event_item_alt"><?php echo esc_attr($title); ?></div>
                                <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            </div>
                            <?php endif; ?>
            </div>        
    </div>
</section>
<section class="about-access" id="about-access">
            <div class="access-decorative-dots access-dots-top-left"></div>
            <div class="access-decorative-dots access-dots-top-right"></div>
            <div class="access-decorative-dots access-dots-bottom-left"></div>
    <div class="about-access-wrapper">
        <div class="about-access-container">  
            <div class="about-access-header">
                <h2>アクセス</h2>
            </div>
            
            <div class="about-access-content">
                <div class="access-info">
                    <div class="access-info-item">
                        <span class="access-label">教室名</span>
                        <span class="access-value">天心塾</span>
                    </div>
                    <div class="access-info-item">
                        <span class="access-label">所在地</span>
                        <span class="access-value">〒208-0013 東京都武蔵村山市大南4丁目18-1</span>
                    </div>
                    <div class="access-info-item">
                        <span class="access-label">アクセス</span>
                        <div class="access-value">
                            <p>西武拝島線「玉川上水駅」より徒歩15分</p>
                            <p>東京都立上水高等学校より徒歩5分</p>
                        </div>
                    </div>
                </div>
                
                <div class="access-map">
                    <?php
                    $map_url = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.673573827698!2d139.40561107636978!3d35.73424572705898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e0f786ad75e3%3A0xff0aa296022e9583!2z5pel5pys44CB44CSMjA4LTAwMTMg5p2x5Lqs6YO95q2m6JS15p2R5bGx5biC5aSn5Y2X77yU5LiB55uu77yR77yY4oiS77yR!5e0!3m2!1sja!2sus!4v1766557998111!5m2!1sja!2sus';
                    ?>
                    <iframe 
                        src="<?php echo esc_url($map_url); ?>" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="天心塾 アクセスマップ">
                    </iframe>
                </div>
            </div>
            
            <div class="access-images">
                <div class="access-image-item">
                    <?php
                    $img1_path = get_template_directory() . '/assets/img/about/access_1.png';
                    $img1_url = get_template_directory_uri() . '/assets/img/about/access_1.png';
                    $img1_exists = file_exists($img1_path);
                    ?>
                    <?php if ($img1_exists) : ?>
                        <img src="<?php echo esc_url($img1_url); ?>" alt="天心塾 教室風景" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="access-image-alt" style="display: none;">天心塾 教室風景</div>
                    <?php else : ?>
                        <div class="access-image-alt">天心塾 教室風景</div>
                    <?php endif; ?>
                </div>
                
                <div class="access-image-item">
                    <?php
                    $img2_path = get_template_directory() . '/assets/img/about/access_2.png';
                    $img2_url = get_template_directory_uri() . '/assets/img/about/access_2.png';
                    $img2_exists = file_exists($img2_path);
                    ?>
                    <?php if ($img2_exists) : ?>
                        <img src="<?php echo esc_url($img2_url); ?>" alt="天心塾 外観" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="access-image-alt" style="display: none;">天心塾 外観</div>
                    <?php else : ?>
                        <div class="access-image-alt">天心塾 外観</div>
                    <?php endif; ?>
                </div>
                
                <div class="access-image-item">
                    <?php
                    $img3_path = get_template_directory() . '/assets/img/about/access_3.png';
                    $img3_url = get_template_directory_uri() . '/assets/img/about/access_3.png';
                    $img3_exists = file_exists($img3_path);
                    ?>
                    <?php if ($img3_exists) : ?>
                        <img src="<?php echo esc_url($img3_url); ?>" alt="天心塾 授業風景" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="access-image-alt" style="display: none;">天心塾 授業風景</div>
                    <?php else : ?>
                        <div class="access-image-alt">天心塾 授業風景</div>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="access-overlay-text">TENSHIN TENSHIN TENSHIN</div>
        </div>
    </div>
</section>
<?php get_footer() ?>