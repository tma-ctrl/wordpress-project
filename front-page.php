<?php get_header(); ?>
<section class="top-section">
    <div class="top-section-container">
        <div class="top-section_img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_1.png" alt="代木塗装工業">
         </div>
         <div class="top-section-img-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_1.png" alt="代木塗装工業">
         </div>
    <div class="index-cover-lead">
        <p class="content">日本最高峰</p>
        <p class="content">オンリーワン個別指導</p>
    </div>
        <div class="top-section-eclipse">
        <div class="top-section-eclipse-body">
             <p>
                様々なご家庭・生徒様に対応 
                </p>
                <div class="top-img-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_pc.png" alt="代木塗装工業" class="pc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_pc.png" alt="代木塗装工業" class="sp">
            </div>
        </div>
      
    </div>
        <?php 
                $args = array(
                    'post_type'      => 'top__fv',
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                    'posts_per_page' => -1
                );
                $post_query = new WP_Query( $args );
            ?>

                <?php if ( $post_query->have_posts() ) : ?>
                    <div class="fv-boxes" id="fv-box-study">
                        <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                            <?php 
                            $image = get_field('img_url');
                            $sp_image = get_field('sp_img_url');
                    
                            if ( $image ) : 
                            ?>
                                <div class="fv-box">
                                    <img src="<?php echo esc_url($image); ?>" alt="" class='pc'>
                                    <img src="<?php echo esc_url($sp_image); ?>" alt="" class='sp'>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?> 
                    </div>
                <?php endif; ?> 
        </div>
    </div>

</section>
<section class="top-section-intro">
    <div class='top-section-intro-container'>
        <div class="top-section-intro-content">
            <div class="top-section-intro-wrapper pc">
                <div class="top-section-intro-conent-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/logo.png" alt="代木塗装工業">
                </div>
                <p class="top-section-primary-text">は、武蔵村山市大南にある個別指導塾です。</p>       
            </div>
            <div class="top-section-intro-wrapper sp">
                <div class="top-section-intro-conent-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/logo.png" alt="代木塗装工業">
                </div>
                <p class="top-section-primary-text">は、武蔵村山市大南に</p>       
            </div>
               <p class="top-section-secondary-text sp">
               ある個別指導塾です。<br>
               個人塾の個別指導ではすでに<br class="sp">オンリーワン、<br>
              そして<span>日本最高峰No.1の個人塾</span>を<br class='sp'>目指しています。</p>
              <p class="top-section-secondary-text pc">
               個人塾の個別指導ではすでにオンリーワン、<br>
              そして<span>日本最高峰No.1の個人塾</span>を目指しています。</p>
        </div>
        <div class="youtu-video">
        <iframe class="frame-video" src="https://www.youtube.com/embed/WVFgSOwPF_Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<section class="top-section-juku">
    <div class="top-section-juku-container">
        <div class="juku-text">
            <h5>天心塾に<br class="sp">お任せください!</h5>
            <p>まずは無料体験で<br class="sp">天心塾の個別指導を感じてください。</p>
        </div>
        <div class="top-section-juku-container-form">
            <div class="top-section-juku-wrapper">
                    <div class="juku-contact-information">
                        <h5>最短即日対応</h5>
                        <p>送信後、担当者より折り返しご連絡いたします。
                            <br>ご相談・体験授業は無料ですのでまずはご相談ください。
                        </p>
                        <div class="tel_body">
                            <p>お電話でのお問い合わせはこちら</p>
                            <div class="tel_container">
                                <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon_tel_intro.png" alt="代木塗装工業">
                                </div>
                                <a>042-507-1948</a>
                            </div>
                        </div>
                    </div>
                    <div class="juku-contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="663ffe3" title="コンタクトフォーム 1"]'); ?>
                    </div>
                    <!-- /お問い合わせフォームモーダル表示 -->
                    <div id="confirmation-modal" class="cf7-modal" style="display:none;">
                    <div class="modal-content">
                    <h3>お問い合わせ内容確認</h3>
                    <ul>
                        <li><strong>お名前</strong> <span id="cf_name"></span></li>
                        <li id="cf_tel_item"><strong>電話番号</strong> <span id="cf_tel"></span></li>
                        <li><strong>メールアドレス</strong> <span id="cf_email"></span></li>
                        <li><strong>ご希望</strong> <span id="cf_type"></span></li>
                    </ul>
                    <div class="modal-buttons">
                        <button id="cf-edit" class="list-btn-green">修正する</button>
                        <button id="cf-submit" class="list-btn-green">送信する</button>
                    </div>
                    </div>
            </div>
            
        </div>
    </div>
</section>
<section class="top-section-strengths">
    <div class="top-section-strengths-container">
        <div class="strengths-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/strength_img.png" alt="天心塾が選ばれる理由">
        </div>
        <div class="strengths-header">
            <h1 class="header-title">Strengths</h1>
            <p class="header-subltitle">天心塾が選ばれる理由</p>
        </div>
        <div class="strengths-body">
            <h5>目指しているものは末永く愛される<br>
                <span class="strengths-highlight">最高の個別指導塾</span></h5>
            <p>天心塾は生徒やそのご家族に寄り添い、<br class="sp">アットホームな環境の中にきちんと<br class="pc">勉強する姿勢をつくります。</p>
            <div class="strengths-content">
                <div class="strength-item">
                        <div class="strength-image">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/strengths_1.png" alt="質はそのまま価格は20~30%オフ">
                        </div>
                    <div class="strength-content-wrapper">
                        <div class="strenth-wrapper-title">
                        <div class="strength-number"><span>0</span>1</div>
                        <h3>東進ハイスクールで磨いた<br class="sp">"<span class="strength-orange">本物の力</span>"</h3>
                        </div>
                            <div class="strength-text">
                                <p>45年以上の指導経験を持つ講師が、東進28年のノウハウを活かし学力分析から学習計画まで徹底サポート。「わかる」を「できる」へ確実に導きます。</p>
                            </div>
                            
                    </div>
                </div>
                <div class="strength-item">
                        <div class="strength-image">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/strengths_2.png" alt="質はそのまま価格は20~30%オフ">
                        </div>
                    <div class="strength-content-wrapper">
                        <div class="strenth-wrapper-title">
                        <div class="strength-number"><span>0</span>2</div>
                        <h3>質はそのまま。<br class="sp">価格は<span class="strength-orange">20〜30％オフ</span>。</h3>
                        </div>
                            <div class="strength-text">
                                <p>“良い指導は高い”を覆す。45年のプロ指導を安心価格で提供し、ご家庭の負担を抑えつつ学力向上に確実にコミットします。</p>
                            </div>
                            
                    </div>
                </div>
                <div class="strength-item">
                        <div class="strength-image">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/strengths_3.png" alt="質はそのまま価格は20~30%オフ">
                        </div>
                    <div class="strength-content-wrapper">
                        <div class="strenth-wrapper-title">
                        <div class="strength-number"><span>0</span>3</div>
                        <h3>あなたに“<span class="strength-orange">ピッタリ</span>”な<br class="sp">個別指導</h3>
                        </div>
                            <div class="strength-text">
                                <p>学力や性格、目的、予算に合わせて1：1〜1：8まで選べる個別指導。<br>「しっかり見てほしい」「費用を抑えたい」など多様なニーズに応え、必要なサポートを必要な分だけ受けられる自由度の高い指導を提供します。</p>
                            </div>
                            
                    </div>
                </div>
                <div class="strength-item">
                        <div class="strength-image">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/strengths_4.png" alt="質はそのまま価格は20~30%オフ">
                        </div>
                    <div class="strength-content-wrapper">
                        <div class="strenth-wrapper-title">
                        <div class="strength-number"><span>0</span>4</div>
                        <h3><span class="strength-orange">逆転合格</span>を現実にする塾</h3>
                        </div>
                            <div class="strength-text">
                                <p>基礎が不安でもMARCHレベルまで伸ばす指導メソッド。弱点克服と得点源強化で偏差値３０台からでも逆転合格を多数実現。経験に基づく教務力で合格への道筋を明確に示します。</p>
                            </div>
                            
                    </div>
                </div>
            </div>
            <div class="strengths-footer">
                <a href="<?php echo home_url(); ?>/strength" class="strengths-button">
                    <span>詳しくみる</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="top-section-course"> 
     <div class="course_img move_1">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_1.png" alt="質はそのまま価格は20~30%オフ">
     </div>
     <div class="course_img move_2">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_1.png" alt="質はそのまま価格は20~30%オフ">
     </div>
     <div class="course_img move_3">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_1.png" alt="質はそのまま価格は20~30%オフ">
     </div>
        <div class="top-section-course-container">
            <div class="course-header">
                <div class="course-header-title">
                    <h1 class="course-title">Course • Price</h1>
                    <p class="course-subtitle">コース・授業料</p>
                </div>
                <div class="course-description">
                    <p class="course-features pc">「最安値授業料」「最高講師陣」「最良の学習環境・システム」</p>
                    <div class="sp"><p class="course-features">「最安値授業料」「最高講師陣」</p><p class="course-features">「最良の学習環境・システム」</p></div>
                    <p class="course-intro">天心塾は業界最多数のコース設定で、<br>様々なご家庭の要望・生徒さんの状況に<br class="sp">応えます。</p>
                </div>
            </div>
            <div class="course-cards">
                <a href="<?php echo home_url(); ?>/course/#course-price-primany" class="course-card">
                    <div class="course-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/course_1.png" alt="小学生コース">
                    </div>
                    <h3 class="course-card-title">小学生コース</h3>
                </a>
                <a href="<?php echo home_url(); ?>/course/#course-price-middle" class="course-card">
                    <div class="course-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/course_2.png" alt="中学生コース">
                    </div>
                    <h3 class="course-card-title">中学生コース</h3>
                </a>
                <a href="<?php echo home_url(); ?>/course/#course-price-high" class="course-card">
                    <div class="course-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/course_3.png" alt="高校生コース">
                    </div>
                    <h3 class="course-card-title">高校生コース</h3>
                </a>
            </div>
            <div class="course-navigation">
                 <a href="<?php echo home_url(); ?>/course" class="strengths-button">
                    <span>詳しくみる</span>
                </a>
            </div>
        </div>    
</section>
<section class="top-section-fundamentals">
<div class="course_img move_4">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_3.png" alt="質はそのまま価格は20~30%オフ">
     </div>
     <div class="course_img move_5">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_3.png" alt="質はそのまま価格は20~30%オフ">
     </div>
     <div class="course_img move_6">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_3.png" alt="質はそのまま価格は20~30%オフ">
     </div>
    <div class="top-section-fundamentals-container">
        <div class="fundamentals-header">
            <div class="fundamentals-header-conent">
                <h1 class="fundamentals-title">Fundamentals</h1>
                <p class="fundamentals-subtitle">基礎力向上のためのコース</p>
            </div>
            <div class="fundamentals-description">
                <p class="fundamentals-features"><span>「学研」「習字」「珠算」</span></p>
                <p class="fundamentals-intro">計算力・集中力・読解力など、<br class="sp">学びの土台となる基礎力を総合的に育成します。<br>
                学ぶ姿勢・考える力を伸ばし、学校学習にも大きな効果を発揮。<br>
                お子さまの成長を多方向から支える教育メニューです。</p>
            </div>
        </div>
        <div class="fundamentals-cards">
            <a href="<?php echo home_url(); ?>/other/#other-content-sec" class="fundamentals-card">
                <div class="fundamentals-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/fundamentals_img_1.png" alt="学研コース">
                </div>
                <h3 class="fundamentals-card-title">学研コース</h3>
        </a>
            <a href="<?php echo home_url(); ?>/other/#other-calligraphy-sec" class="fundamentals-card">
                <div class="fundamentals-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/fundamentals_img_2.png" alt="習字コース">
                </div>
                <h3 class="fundamentals-card-title">習字コース</h3>
        </a>
            <a href="<?php echo home_url(); ?>/other/#other-abacus-sec" class="fundamentals-card">
                <div class="fundamentals-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/fundamentals_img_3.png" alt="そろばんコース">
                </div>
                <h3 class="fundamentals-card-title">そろばんコース</h3>
            </a>
        </div>
        <div class="fundamentals-footer">
                <a href="<?php echo home_url(); ?>/other" class="fundamentals-btn strengths-button ">
                    <span>詳しくみる</span>
                </a>
        </div>
    </div>
</section>
<section class="top-section-message">
    <div class="top-section-message-container">
        <div class="message-content">
            <span class="sub">Message</span>
            <h5>最高の<span>環境</span>を、最良の<span>価格</span>で。</h5>
            <div class="message-content-body">
                <p>天心塾塾長の石田天心です。<br>
                28年の東進ハイスクール勤務を経て地元で日本1の塾を作りたいと<br class="pc">
                天心塾を開校しました。</p>

                <p>当塾は個人塾ではあり、わずか10数年の歴史ですが中学・高校・大学受験において逆転、大逆転合格者を毎年生み出しています。</p>

                <p>DE判定から立川・昭和・武蔵野北・東大和南・小平南などへ、大学受験は毎年欠かさず難関大学合格者を送り出し、直接指導した生徒で早稲田大学には10人を超える合格者が出ています。</p>

                <p>私の目標は一番安い授業料で最高水準の講師と学習環境の提供です。<br>
                50年以上支えられてきた地域への恩返しで、ご家庭と子どもたちを全力で応援します。是非皆さんも天心塾を支えて応援してください。</p>

                <p>よろしくお願いいたします。</p>
            </div>
        </div>
        <div class="message-intro">
            <div class="message-intro-text">
                <h6>経歴</h6>
                <p>東大和高校主席入学、同校卒業生総代、成蹊大学法学部卒。
                    アメリカ正規留学  2年（ポートランド州立大学他在籍・心理学、初等教育学、クリミナルジャスティスを学ぶ）。
                    大学卒業と同時に現<span>東進ハイスクール</span>に入社。</span>東進ハイスクール</span>開校以来、英語教師としても、日本全国800校のNo.1校舎、現役高校生の予備校そしては日本最大の校舎（大逆転合格社を毎年多数輩出し、年間生徒総数3000人を超える）を作り上げた総責任者として活躍。
                    約28年の勤務後<strong>地域の子どもの学力向上を目指し天心塾を開校して12年目を迎える</strong>。
                </p>
            </div>
                <div class="message-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/admin.png" alt="高校生コース">
                </div>
            
        </div>
        <div class="message-navigation">
                 <a href="<?php echo home_url(); ?>/about" class="strengths-button">
                    <span>詳しくみる</span>
                </a>
        </div>
    </div>
    <div class="message-slide">
    <p class='reason-marquee'>
        <span class="reason-marquee-inner">生きる事を尊び　学ぶ事喜ぶ　生きる事を尊び　学ぶ事喜ぶ　生きる事を尊び　学ぶ事喜ぶ　生きる事を尊び　学ぶ事喜ぶ</span>
    </p>
    <?php 
                $args = array(
                    'post_type'      => 'message_slider',
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'posts_per_page' => -1
                );
                $post_query = new WP_Query( $args );
                ?>
                <?php if ( $post_query->have_posts() ) : ?>
                <div class="message-photo" id="message-slide-photo">
                <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                        <?php 
                        $image = get_field('img_url');
                        ?>
                    <div class='message-control'>
                        <div class="fv-box-item">
                            <?php if ($image) : 
                                $title = get_the_title();
                            ?>
                                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title ? $title : 'Feature image'); ?>" >
                            <?php endif; ?>
                        </div>
                    </div> 
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?> 
                </div>
                <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>  
    </div>
    
</section>
<section class="top-section-voice">
    <div class="top-section-voice-container">
         <div class="top-section-voice-header js-slidein">
            <h1>Voice</h1>
            <p>生徒の声</p>
            <p>だから天心塾は選ばれ続けています。
            </p>
         </div>
        <div class="top-section-voice-group js-slidein-left" id="voice-slider">
            <?php 
                         $args = array(
                            'post_type'      => 'voice',
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
                    $title = get_field('title');
                    $avatar_url = get_field('avatar_url');
                    $content = get_field('content');
                    $name = get_field('name');
                    ?>
                    <div class="voice-card">
                        <?php 
                        // Use default avatar if avatar_url is empty
                        $default_avatar = get_template_directory_uri() . '/assets/img/icon/default_avatar.png';
                        $final_avatar_url = !empty($avatar_url) ? $avatar_url : $default_avatar;
                        ?>
                        <div class="voice-avatar">
                            <img src="<?php echo esc_url($final_avatar_url); ?>" alt="Avatar" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'100\' height=\'100\'%3E%3Ccircle cx=\'50\' cy=\'50\' r=\'50\' fill=\'%23E0E0E0\'/%3E%3Ccircle cx=\'50\' cy=\'40\' r=\'15\' fill=\'%23999\'/%3E%3Cpath d=\'M 20 80 Q 20 60 50 60 Q 80 60 80 80 L 80 100 L 20 100 Z\' fill=\'%23999\'/%3E%3C/svg%3E';">
                        </div>
                        <?php if ($name) : ?>
                            <p class="voice-age-gender"><?php echo esc_html($name); ?></p>
                        <?php endif; ?>
                        
                        <h3 class="voice-title"><?php echo !empty($title) ? wp_kses($title, array('br' => array('class' => array()))) : 'タイトルない'; ?></h3>
                        <div class="voice-separator"></div>
                        <?php if ($content) : ?>
                            <p class="voice-content"><?php echo wp_kses($content, array('br' => array('class' => array()))); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>No voice posts found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="top-blog-sec js-slidein-left" id="blog-mark">
        <div class='container'>
        <div class='blog-title js-fadein'>
            <div class="blog-header">
                <h1>BLOG</h1>
                <p>ブログ</p>
                </div>
            <div class="blog-type">
                <div class="blog-type-item">
                    <span></span>
                    <strong>ブログ</strong>
                </div>
                <div class="blog-type-item">
                    <span></span>
                    <strong>ニュース</strong>
                </div>
            </div>
        </div>
        <div class='blog-side'>
              <?php 
                    // ブログ投稿を取得（日付順、昇順）
                    $args = array(
                        'post_type'      => 'blog',
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'ASC',
                        'posts_per_page' => -1
                    );
                    $post_query = new WP_Query( $args );
                    ?>
                    <?php if ( $post_query->have_posts() ) : ?>
                        <div class="fv-blog" id="fv-blog" dir="rtl">
                            <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                                <?php 
                                // タイトルを取得
                                $title = get_the_title();
                                
                                // 投稿コンテンツから最初の画像を抽出（トラッキングピクセルを除外）
                                $content = get_the_content();
                                $image = '';
                                $has_image = false;
                                
                                // コンテンツ内のすべての画像を検索
                                if (preg_match_all('/<img[^>]+>/i', $content, $img_matches)) {
                                    foreach ($img_matches[0] as $img_tag) {
                                        // 非表示のトラッキングピクセルをスキップ（position: absolute; left: -9999px;）
                                        if (preg_match('/position\s*:\s*absolute[^;]*left\s*:\s*-9999px/i', $img_tag)) {
                                            continue; // 非表示のトラッキングピクセルをスキップ
                                        }
                                        
                                        // src属性を抽出
                                        if (preg_match('/src=["\']([^"\']+)["\']/i', $img_tag, $src_matches)) {
                                            $img_src = $src_matches[1];
                                            
                                            // トラッキングピクセルURLをスキップ（addai.jp/api/t/sg、addai.jp/api/t/pvなど）
                                            if (preg_match('/(addai\.jp\/api\/t\/(sg|pv)|tracking|pixel|beacon)/i', $img_src)) {
                                                continue; // トラッキングピクセルURLをスキップ
                                            }
                                            
                                            // widthとheight属性を抽出
                                            $width = '';
                                            $height = '';
                                            if (preg_match('/width=["\']?(\d+)["\']?/i', $img_tag, $width_matches)) {
                                                $width = $width_matches[1];
                                            }
                                            if (preg_match('/height=["\']?(\d+)["\']?/i', $img_tag, $height_matches)) {
                                                $height = $height_matches[1];
                                            }
                                            
                                            // トラッキングピクセル（1x1画像または非常に小さい画像）をスキップ
                                            if (($width == '1' && $height == '1') || 
                                                ($width && intval($width) <= 1 && $height && intval($height) <= 1)) {
                                                continue; // この画像をスキップし、次の画像を試す
                                            }
                                            
                                            // これは実際の画像なので使用する（最初に見つかった有効な画像）
                                            $image = $img_src;
                                            $has_image = true;
                                            break; // 最初に見つかった有効な画像を使用
                                        }
                                    }
                                }
                                
                                // コンテンツに画像が見つからない場合、投稿のアイキャッチ画像を取得
                                if (!$has_image) {
                                    $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                                    if ($thumbnail_id) {
                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                        if ($thumbnail_url) {
                                            $image = $thumbnail_url;
                                            $has_image = true;
                                        }
                                    }
                                }
                                
                                // カテゴリを取得
                                $categories = get_the_terms(get_the_ID(), 'blog_category');
                                $post_date = get_the_date('Y年n月j日');
                                
                                // カテゴリ名とクラスを設定（デフォルトは「ニュース」）
                                $category_name = 'ニュース'; // デフォルトは「ニュース」
                                $category_class = 'blog-category news-category'; // デフォルトクラス
                                
                                // カテゴリが存在する場合、最初のカテゴリを使用
                                if ($categories && !is_wp_error($categories) && !empty($categories)) {
                                    $category_name = $categories[0]->name;
                                    if ($category_name == 'ニュース') {
                                        $category_class = 'blog-category news-category';
                                    } elseif ($category_name == 'ブログ') {
                                        $category_class = 'blog-category blogs-category';
                                    } else {
                                        $category_class = 'blog-category default-category';
                                    }
                                }
                                ?>
                                <!-- ブログアイテムのリンク（ホバー時に画像ズームとタイトル色変更の効果あり） -->
                                <a href="<?php the_permalink(); ?>" class="fv-blog-item" dir="ltr">
                                    <?php if ($has_image && $image) : ?>
                                        <!-- コンテンツまたはアイキャッチから取得した画像を表示（高さ300px、ホバー時にズーム） -->
                                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title ? $title : 'Feature image'); ?>" >
                                    <?php else : ?>
                                        <!-- 画像がない場合のプレースホルダー -->
                                        <div class="no-image-placeholder" >
                                            <span >画像なし</span>
                                        </div>
                                    <?php endif; ?>
                                    <div>
                                        <!-- カテゴリバッジ（デフォルトは「ニュース」） -->
                                        <span class="<?php echo esc_attr($category_class); ?>"><?php echo esc_html($category_name); ?></span>
                                        <!-- 投稿日 -->
                                        <p class="blog-date"><?php echo esc_html($post_date); ?></p>
                                    </div>
                                    <!-- タイトル（ホバー時に色が#FFA000に変更） -->
                                    <h3 class="blog-item-title"><?php echo esc_html($title); ?></h3>    
                                </a>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?> 
                        </div>
                    <?php else : ?>
                        <p>No posts found.</p>
                    <?php endif; ?> 
            </div>
    <!-- <a class='blog-detail top-service-sec-btn-link js-fadein' href="<?php echo home_url(); ?>/blog/">詳しくみる</a> -->
    <div class="course-navigation blog-navigation">
                 <a href="<?php echo home_url(); ?>/blog" class="strengths-button">
                    <span>詳しくみる</span>
                </a>
            </div>
 </section>
 <section class='faq-sec' id="faq-mark">
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
                        'posts_per_page' => 4,
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
        <div class="course-navigation faq-navigation">
                 <a href="<?php echo home_url(); ?>/faq" class="strengths-button">
                    <span>詳しくみる</span>
                </a>
            </div>
    </div>
</section>
 <?php get_footer();?>