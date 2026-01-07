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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contact_sp.png" alt="コース・授業料">
                    
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
                    echo '<p>CONTACT</p>';
                }
                ?> 
     </div>

</section>
<section class="about-intro contact-sec">
    <div class='breadcrumb'>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon/course_icon.png" alt="Breadcrumb Icon">
                        <p class='breadcrumb-arrow'></p>
                        <p>お問い合わせ</p>
    </div>
    <div class="container">
        <div class="contact-header">
            <h2 class="contact-sec-title">お問<span>い合</span>わせ</h2>
            <p>下記のお問い合わせには、受付時間内に順次対応させていただいております。<br>
            ご返信までに多少のお時間を頂く場合がございます。あらかじめご了承ください。</p>
        </div>
        <div class="contact-sec-container-form">
            <?php echo do_shortcode('[contact-form-7 id="4beb791" title="お問い合わせ"]'); ?>
        </div> 
    </div>
</section>
<!-- /お問い合わせフォームモーダル表示 -->
<div id="confirmation-modal" class="cf7-modal" style="display:none;">
    <div class="modal-content"> 
      <h3>お問い合わせ内容確認</h3>
      <ul>
        <li><strong>お名前</strong> <span id="cf_name"></span></li>
    
        <li><strong>フリガナ</strong> <span id="cf_kana"></span></li>
        <li id="cf_tel_item"><strong>電話番号</strong> <span id="cf_tel"></span></li>
        <li><strong>メールアドレス</strong> <span id="cf_email"></span></li>
        <li><strong>メールアドレス（確認用）</strong> <span id="cf_email_confirm"></span></li>
        <li><strong>お問い合わせの種類</strong> <span id="cf_type"></span></li>
        <li id="cf_text_item"><strong>お問い合わせ内容</strong><br><span id="cf_text"></span></li>
      </ul>
      <div class="modal-buttons">
        <button id="cf-edit" class="list-btn-green">修正する</button>
        <button id="cf-submit" class="list-btn-green">送信する</button>
      </div>
    </div>
</div>

<div id="cf7-success-modal" class="cf7-modal" style="display:none;">
    <div class="cf7-modal-content">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon_msg.png" alt="icon_msg">
      <p>送信が完了しました、<br>記載いただいたメールアドレス宛てに確認メールを送付しております。</p>
      <button id="cf7-modal-close" class="list-btn-green">トップページに戻る</button>
    </div>
</div>
<?php get_footer(); ?>