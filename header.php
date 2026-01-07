<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="天心塾,教育情報,受験情報,教室案内,コース,武蔵村山市,無料体験,個別指導,学習塾">
  <meta name="title" content="合同会社悠心塾・天心塾">
  <meta name="description" content="天心塾は、武蔵村山市大南にある個人塾の個別指導ではすでにオンリーワン、そして日本最高峰No.1の個人塾を目指しています。"></metan>
  <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/favicorn.svg">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/favicorn.png">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&family=Zen+Kaku+Gothic+New:wght@400;500;600;700;900&family=Noto+Serif+JP:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/desktop.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/mobile.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" type="text/css"> 
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" type="text/css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" rel="stylesheet">
     
     <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"></script>
     <script>
     (function() {
         var touchEvents = ['touchstart', 'touchmove', 'touchend', 'touchcancel'];
         var originalAddEventListener = EventTarget.prototype.addEventListener;
         
         EventTarget.prototype.addEventListener = function(type, listener, options) {
             var isTouchEvent = touchEvents.indexOf(type) !== -1;
             if (isTouchEvent) {
                 if (typeof options === 'boolean') {
                     options = { capture: options, passive: true };
                 } else if (typeof options === 'object' && options !== null) {
                     if (!options.hasOwnProperty('passive')) {
                         options = Object.assign({}, options, { passive: true });
                     }
                 } else {
                     options = { passive: true };
                 }
             }
             
             return originalAddEventListener.call(this, type, listener, options);
         };
     })();
     </script>
     <script type="text/javascript" charset="utf-8" src="https://kenga.tech/heatmaps-peeprryapotanqfn.js"></script>
     <script type="text/javascript" charset="utf-8" src="https://kenga.tech/heatmaps-gzldizenpsftacga.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" defer type="text/javascript"></script>
     <?php
    // 動的メタ情報の取得
    $site_name = '合同会社悠心塾・天心塾';
    $site_description = get_bloginfo('description') ?: '天心塾は、武蔵村山市大南にある個人塾の個別指導ではすでにオンリーワン、そして日本最高峰No.1の個人塾を目指しています。';
    $default_keywords = '天心塾,教育情報,受験情報,教室案内,コース,武蔵村山市,無料体験,個別指導,学習塾';
    
    // ページタイプに応じた情報を取得
    if (is_singular()) {
        $page_title = get_the_title();
        $page_description = get_the_excerpt() ?: wp_trim_words(get_the_content(), 50, '...');
        $page_url = get_permalink();
        
        // アイキャッチ画像または最初の画像を取得
        $page_image = '';
        if (has_post_thumbnail()) {
            $thumbnail_id = get_post_thumbnail_id();
            // $page_image = wp_get_attachment_image_src($thumbnail_id, 'full');
            // $page_image = $page_image ? $page_image[0] : '';
        }
        
        // カスタムフィールドからキーワードを取得（あれば）
        $page_keywords = get_post_meta(get_the_ID(), 'meta_keywords', true) ?: $default_keywords;
    } elseif (is_home() || is_front_page()) {
        $page_title = $site_name;
        $page_description = $site_description;
        $page_url = home_url();
        $page_image = get_template_directory_uri() . '/assets/img/header/ogp.png';
        $page_keywords = $default_keywords;
    } else {
        $page_title = wp_get_document_title();
        $page_description = $site_description;
        $page_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $page_image = get_template_directory_uri() . '/assets/img/header/logo.svg';
        $page_keywords = $default_keywords;
    }
    
    // 画像のフォールバック
    if (empty($page_image)) {
        $page_image = get_template_directory_uri() . '/assets/img/header/ogp.png';
    }
    
    // 絶対URLに変換
    if (!empty($page_image) && strpos($page_image, 'http') !== 0) {
        $page_image = home_url($page_image);
    }
    ?>
    
    <!-- メタデイスクリプション-->
    <meta name="description" content="<?php echo esc_attr(wp_strip_all_tags($page_description)); ?>">
    
    <!-- メタキーワード -->
    <meta name="keywords" content="<?php echo esc_attr($page_keywords); ?>">
    
    <!-- フェイスブック -->
    <meta property="og:type" content="<?php echo is_singular() ? 'article' : 'website'; ?>">
    <meta property="og:url" content="<?php echo esc_url($page_url); ?>">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:title" content="<?php echo esc_attr($page_title); ?>">
    <meta property="og:description" content="<?php echo esc_attr(wp_strip_all_tags($page_description)); ?>">
    <meta property="og:image" content="<?php echo esc_url($page_image); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
    <?php if (is_singular() && get_the_date()) : ?>
    <meta property="article:published_time" content="<?php echo esc_attr(get_the_date('c')); ?>">
    <meta property="article:modified_time" content="<?php echo esc_attr(get_the_modified_date('c')); ?>">
    <?php endif; ?>
    
    <!-- ツイッター -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo esc_url($page_url); ?>">
    <meta name="twitter:title" content="<?php echo esc_attr($page_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr(wp_strip_all_tags($page_description)); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($page_image); ?>">
    
    <!-- ページタイトル（ブラウザタブに表示） -->
    <?php
    // タイトルの設定
    $browser_title = '';
    if (is_front_page()) {
        $browser_title = '天心塾';
    } else {
        // ページタイトルを取得
        $page_name = '';
        if (is_singular()) {
            $page_name = get_the_title();
        } elseif (is_home()) {
            $page_name = get_the_title(get_option('page_for_posts', true));
            if (empty($page_name)) {
                $page_name = 'ブログ';
            }
        } elseif (is_archive()) {
            if (is_category()) {
                $page_name = single_cat_title('', false);
            } elseif (is_tag()) {
                $page_name = single_tag_title('', false);
            } elseif (is_author()) {
                $page_name = get_the_author();
            } elseif (is_post_type_archive()) {
                $page_name = post_type_archive_title('', false);
            } elseif (is_tax()) {
                $page_name = single_term_title('', false);
            } else {
                $page_name = get_the_archive_title();
            }
        } elseif (is_search()) {
            $page_name = '検索結果: ' . get_search_query();
        } elseif (is_404()) {
            $page_name = 'ページが見つかりません';
        } else {
            $page_name = !empty($page_title) ? $page_title : '天心塾';
        }
        
        if (empty($page_name)) {
            $page_name = '天心塾';
        }
        
        $browser_title = esc_html($page_name) . '｜天心塾';
    }
    ?>
    <title><?php echo $browser_title; ?></title>
  <?php
    wp_head(); 
  ?>
</head>
<body id="page-top" class="loading-active">
    <!-- ロード画面 -->
<div id="loading-screen" class="loading-screen">
  <div class="loading-screen-content">
    <div class="loading-text-container">
      <span class="loading-text">NOW LOADING...</span>
      <span class="loading-percentage" id="loading-progress-percentage">0%</span>
    </div>
    <div class="loading-progress-bar">
      <div class="loading-progress-fill" id="loading-progress-fill"></div>
    </div>
  </div> 
</div>
    <header class="main-header">
        <div class="header-container">
                <a class="header-logo" href="<?php echo home_url(); ?>" class="logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/logo.png" alt="代木塗装工業">
                    </a>
            <div class="header-navigation-section pc">
                        <nav class="header-navigation">
                            <ul class="nav-menu-list">
                                <li class="nav-item">
                                <a href="<?php echo home_url(); ?>/strength" class="nav-link">
                                    <div class="nav-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon_1.png" alt="ホーム">
                                    </div>
                                    <div class="nav-text">天心塾の強み</div>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="<?php echo home_url(); ?>/about" class="nav-link">
                                    <div class="nav-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon_2.png" alt="施工案内">
                                    </div>
                                    <div class="nav-text">教室案内 </div>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="<?php echo home_url(); ?>/course" class="nav-link">
                                    <div class="nav-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon_3.png" alt="コース・授業料">
                                    </div>
                                    <div class="nav-text">コース・授業料</div>
                                </a>
                                </li>
                                <li class="nav-item"> 
                                <a href="<?php echo home_url(); ?>/other" class="nav-link">
                                    <div class="nav-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon_4.png" alt="その他教室">
                                    </div>
                                    <div class="nav-text">その他教室</div>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="<?php echo home_url(); ?>/blog" class="nav-link">
                                    <div class="nav-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon_5.png" alt="ブログ">
                                    </div>
                                    <div class="nav-text">ブログ</div>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="<?php echo home_url(); ?>/faq" class="nav-link">
                                    <div class="nav-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon_6.png" alt="よくある質問">
                                    </div>
                                    <div class="nav-text">よくある質問</div>
                                </a>
                                </li>  
                            </ul>
                            <div class="nav-item-body">
                                <div class="nav-item msg_bg">
                                    <a href="<?php echo home_url(); ?>/contact" class="nav-link">
                                            <div class="nav-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon_msg.png" alt="無料体験予約">
                                            </div>
                                            <div class="nav-text">無料体験予約</div> 
                                        </a>
                                </div>
                                <div class="nav-item line_bg"> 
                                    <a href="https://lin.ee/O26Po8O" class="nav-link">
                                            <div class="nav-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon_line.png" alt="無料体験予約">
                                            </div>
                                            <div class="nav-text">無料体験予約</div>
                                        </a>
                                </div>
                            </div>
                           
                        </nav>
            </div>
            <div class="header-menu-sp-section sp">
            <div class="header-menu-sp"><button></button></div>
            </div> 
        </div>
        <div class="header-menu-list-sp">
      <ul>
        <li>
          <a href="<?php echo home_url(); ?>">
            ホーム
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/strength">
          天心塾について
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/about">
          教室案内
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/course">
          料金案内
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/other">
          その他教室
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/blog">
          ブログ
          </a>
        </li>
        <li>
            <a href="<?php echo home_url(); ?>/faq">
            よくある質問
            </a>
        </li>
        <li>
            <a href="<?php echo home_url(); ?>/contact">
            お問い合わせ
            </a>
        </li>
      </ul>
    </div>
    </header>

