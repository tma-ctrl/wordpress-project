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
                    echo '<p>STRENGTHS</p>';
                }
                ?> 
     </div>

</section>
<section class="about-intro">
    <div class='breadcrumb'>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon/breadcrumb_icon.png" alt="Breadcrumb Icon">
                        <p class='breadcrumb-arrow'></p>
                        <p>天心塾の強み</p>
    </div>
    <div class="intro_bg pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/intro.png" alt="代木塗装工業">
    </div>
    <div class="intro_bg sp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/sp_intro.png" alt="代木塗装工業">
    </div>
    <div class="about_img">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img.png" alt="代木塗装工業">
    </div>
</section>
<section class="about-strengths-sec">
    <div class="about-strengths-header">
        <h2 class="about-strengths-title">
            天心塾にお任せください！
            <div class="about-strengths-bubble">
                <div class="bubble-content">
                    <p class="bubble-subtitle">お子様の学習について</p>
                    <p class="bubble-title">こんなお悩みはありませんか？</p>
                    <div class="bubble-concerns">
                        <a href="#" class="concern-box" data-concern="grades">成績が伸びるか不安</a>
                        <a href="#" class="concern-box" data-concern="attendance">通い続けられるか不安</a>
                        <a href="#" class="concern-box" data-concern="cost">個別指導は費用が高そう</a>
                    </div>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </h2>
        <p class="about-strengths-subtitle">天心塾が選ばれる理由をご紹介します</p>
    </div>
    <div class="about-strengths-container">
        <?php
        $strengths = array(
            array(
                'number' => 'その1',
                'img' => 'strength_1.png',
                'alt' => '天心塾の強み その1 - ハイステール',
                'title' => '東進ハイスクールで磨いた“<span>本物の教務力</span>”',
                'text' => '大学1年生から45年以上、常に生徒の成績向上と向き合ってきた熟練講師が直接指導します。
                <br>東進ハイスクールでの28年の経験を活かし、学力分析・学習計画・問題解決指導まで徹底サポート。
                <br>蓄積された指導ノウハウで、「わかる」を「できる」に確実に変<br class="pc">えていきます。'
            ),
            array(
                'number' => 'その2',
                'img' => 'strength_2.png',
                'alt' => '天心塾の強み その2 - 実は希望者',
                'title' => '質はそのまま。価格は<span>20〜30％オフ</span>。',
                'text' => '「いい指導は高い」という常識を覆し、地域相場より20〜30％安い授業料を実現。<br>教務歴45年のプロによる指導を、負担の少ない料金で安心して受講できます。<br>ご家庭の負担を減らしながら、生徒の学力向上にしっかりコミッ<br class="pc">トする塾です。'
            ),
            array(
                'number' => 'その3',
                'img' => 'strength_3.png',
                'alt' => 'あなたに“<span>ピッタリ</span>”な個別指導',
                'title' => 'あなたに“<span>ピッタリ</span>”な個別指導',
                'text' => '学力・性格・目的・ご家庭の予算に合わせて、1：1、1：2、
1：3、1：4、1：8の幅広い指導形態から最適な個別指導クラスを選べます。<br>「しっかり見てほしい」「費用を抑えたい」など、さまざまなニーズに対応可能。<br>必要なサポートを必要なだけ受けられる、自由度の高い個別指導<br class="pc">を提供しています。'
            ),
            array(
                'number' => 'その4',
                'img' => 'strength_4.png',
                'alt' => '天心塾の強み その4 - 達成目標を明確にする',
                'title' => '<span>逆転合格</span>を現実にする塾',
                'text' => '基礎が不安定な状態からスタートする生徒でも、MARCHレベルへ到達できる指導メソッドがあります。<br>弱点克服と得点源の伸長を徹底し、偏差値50からの逆転合格を数多く実現してきました。<br>経験に裏打ちされた教務力で、合格までの道筋を明確に示します。'
            )
        );
        
        foreach ($strengths as $strength) :
            $img_path = get_template_directory() . '/assets/img/about/' . $strength['img'];
            $img_url = get_template_directory_uri() . '/assets/img/about/' . $strength['img'];
            $img_exists = file_exists($img_path);
        ?>
        <div class="about-strength-item">
            <div class="strength-item-number">天心塾の強み <?php echo esc_html($strength['number']); ?></div>
            <div class="strength-item-content">
                <div class="strength-item-image">
                    <?php if ($img_exists) : ?>
                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($strength['alt']); ?>" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="image-alt-fallback" style="display:none;"><?php echo esc_html($strength['alt']); ?></div>
                    <?php else : ?>
                        <div class="image-alt-fallback"><?php echo esc_html($strength['alt']); ?></div>
                    <?php endif; ?>
                </div>
                <div class="strength-item-text">
                    <h3><?php echo wp_kses_post($strength['title']); ?></h3>
                    <p><?php echo wp_kses_post($strength['text']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<section class="about-indivial">
    <div class="individial_img_1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/invidial_1.png" alt="代木塗装工業">
    </div>
    <div class="individial_img_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/invidial_1.png" alt="代木塗装工業">
    </div>
    <div class="about-indivial-container">
        <div class="about-indivial-header">
            <h2 class="about-indivial-title">ご入学から個別指導が始まるまで</h2>
        </div>
        <?php
        $flow_steps = array(
            array(
                'number' => '01',
                'title'  => '学力診断・体験授業',
                'text'   => '志望校合格・成績アップへの第一歩は自分の実力や得意・苦手箇所を正しく知ることです。まずは現状の学力を把握するための学力テストを実施します。実施後、結果に基づいた体験授業を行います。',
                'img'    => 'flow_01.jpg',
                'alt'    => '学力診断・体験授業の様子'
            ),
            array(
                'number' => '02',
                'title'  => '三者面談',
                'text'   => '学力診断と体験授業の結果をふまえ、もっとも効率的な学習方法をアドバイスします。<br>充分納得した上でご入学をお決めください。',
                'img'    => 'flow_02.jpg',
                'alt'    => '三者面談の様子'
            ),
            array(
                'number' => '03',
                'title'  => '時間割決定',
                'text'   => '学習目的や性格を考えて、生徒様にピッタリの個別指導形態や時間割を決定します。',
                'img'    => 'flow_03.jpg',
                'alt'    => '時間割表のイメージ'
            ),
            array(
                'number' => '04',
                'title'  => '個別指導スタート',
                'text'   => 'いよいよ授業スタートです。<br>
                            志望校合格を目指して一緒に頑張っていきましょう！
                            全力でサポートします！',
                'img'    => 'flow_04.jpg',
                'alt'    => '個別指導の指導風景'
            ),
        );
        ?>
        <div class="about-indivial-list">
            <?php foreach ($flow_steps as $step) :
                $flow_img_path = get_template_directory() . '/assets/img/about/' . $step['img'];
                $flow_img_url  = get_template_directory_uri() . '/assets/img/about/' . $step['img'];
                $flow_img_exists = file_exists($flow_img_path);
            ?>
            <div class="about-indivial-item">
                <div class="about-indivial-item-left">
                    <div class="about-indivial-step-circle">
                        <span><?php echo esc_html($step['number']); ?></span>
                    </div>
                    <div class="about-indivial-text">
                        <h3><?php echo esc_html($step['title']); ?></h3>
                        <p><?php echo wp_kses_post($step['text']); ?></p>
                    </div>
                </div>
                <div class="about-indivial-image">
                    <?php if ($flow_img_exists) : ?>
                        <img src="<?php echo esc_url($flow_img_url); ?>" alt="<?php echo esc_attr($step['alt']); ?>" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="image-alt-fallback" style="display:none;"><?php echo esc_html($step['alt']); ?></div>
                    <?php else : ?>
                        <div class="image-alt-fallback"><?php echo esc_html($step['alt']); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer() ?>