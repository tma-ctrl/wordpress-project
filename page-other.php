<?php get_header() ?>
<section class="reason-fv-sec">
    <div class='top_FV pc'>
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', array('class' => 'featured-image')); ?>
                <?php else : ?>
                    <div class="no-featured-image">No image available</div>
                <?php endif; ?>
                
    </div>
    <div class='top_FV sp'>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/fv_sp.png" alt="代木塗装工業">
                    
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
                    echo '<p>OTHER</p>';
                }
                ?> 
     </div>

</section>
<section class="about-intro course-sec-btn">
    <div class='breadcrumb'>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon/course_icon.png" alt="Breadcrumb Icon">
                        <p class='breadcrumb-arrow'></p>
                        <p>その他教室</p>
    </div>
    <div class="course-btn-container other-btn-container">
        <a href="<?php echo home_url(); ?>/other/#other-content-sec" class="course-btn course-btn-elementary">
        学研
        </a>
        <a href="<?php echo home_url(); ?>/other/#other-calligraphy-sec" class="course-btn course-btn-junior"> 
        習字
        </a>
        <a href="<?php echo home_url(); ?>/other/#other-abacus-sec" class="course-btn course-btn-high">
        そろばん
        </a>
    </div>
</section>
<section class="other-content-sec" id="other-content-sec">
    <div class="gakken-section">
        <div class="gakken-header">
            <div class="gakken-header-title">
                <p class="gakken-subtitle">幼児～小学校まで学習コース</p>
                <h2 class="gakken-title">学研</h2>
            </div>
            <p class="gakken-description"> 学研教室は毎週火曜日、木曜日、土曜日に開講しています。<br>
            勉強をこれから始める幼児から、小学生の学習の基盤づくり、勉強の習慣をつけることを目的<br class="pc">に行っています。</p>
        </div>
        <div class="gakken-content-blocks">
            <a href="#" class="gakken-content-block" data-bubble="preparation">
                <div class="gakken-block-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/research_1.png" alt="小学校の入学準備" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="image-alt-fallback" style="display:none;">小学校の入学準備</div>
                </div>
                <div class="gakken-block-subcontent">
                     <h3 class="gakken-block-subtitle">幼児さんすう・こくご</h3>
                     <p class="gakken-block-text">ひらがなの読みや数の理解からはじめ、ひらがなの書きや文の読み取り、数の合成・分解に取り組み、小学校入学に向けた学習の土台をしっかり作ることができます。</p>
                </div>
                <div class="gakken-bubble" id="bubble-preparation">
                    <div class="bubble-content">
                        <p class="bubble-text">小学校の入学準備</p>
                    </div>
                </div>
            </a>
            
            <a href="#" class="gakken-content-block" data-bubble="basics">
                <div class="gakken-block-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/research_2.png" alt="勉強の基礎固め" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="image-alt-fallback" style="display:none;">勉強の基礎固め</div>
                </div>
                <div class="gakken-block-subcontent">
                <h3 class="gakken-block-subtitle">小学生の算数・国語</h3>
                <p class="gakken-block-text">一人一人にぴったり合った学習メニューと指導で、無理なく確実に力を伸ばします。お子さまのやる気を引き出し、自学自習の態度や机に向かう習慣を身につけます。</p>
                </div>
              
                <div class="gakken-bubble" id="bubble-basics">
                    <div class="bubble-content">
                        <p class="bubble-text">勉強の基礎固め   </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="gakken-price-section">
            <h2 class="gakken-price-title">PRICE</h2>
            <p class="gakken-price-subtitle">料金表</p>
            <div class="gakken-price-table-wrapper">
                <table class="gakken-price-table">
                    <thead>
                        <tr>
                            <th>対象</th>
                            <th>授業回数</th>
                            <th>金額</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>幼児</td>
                            <td>週2回・2人まで</td>
                            <td>¥7,150</td>
                        </tr>
                        <tr>
                            <td>小学生</td>
                            <td>週2回・算数・国語</td>
                            <td>¥8,250</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="https://www.889100.com/" class="strengths-button">
                <span>詳しくみる</span>
            </a>
        </div>
</section> 
<section class="other-calligraphy-sec" id="other-calligraphy-sec">
    <div class="calligraphy-section">
        <div class="calligraphy-header">
            <div class="calligraphy-header-title">
                <p class="calligraphy-subtitle">一生使う文字を美しく</p>
                <h2 class="calligraphy-title">習字</h2>
            </div>
            <p class="calligraphy-description">習字教室は毛筆、硬筆両方を習う事ができます。毎週水曜日、金曜日に開閉しています。<br>日本習字指導員の添削指導で、段位認定を行い、美しい文字と集中力を育てます。</p>
        </div>  
        <div class="calligraphy-content-blocks">
            <div class="calligraphy-content-block">
                <div class="calligraphy-block-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/cal_1.png" alt="楽しく学ぶ、正しいじ文字" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="image-alt-fallback" style="display:none;">楽しく学ぶ、正しいじ文字</div>
                </div>
                <div class="calligraphy-block-subcontent">
                    <h3 class="calligraphy-block-title">楽しく学ぶ、正しいじ文字</h3>
                    <p class="calligraphy-block-text">初心者から上級者まで、幅広い年齢や目的に合わせてコースを選ぶことができ、日本習字の目指す「正しい文字・美しい文字」を段階的に学ぶことができます。</p>
                </div>
            </div>
            
            <a href="#" class="calligraphy-content-block" data-bubble="recommendations">
                <ul class="calligraphy-recommendations">
                    <li><div class="check-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/check-icon.png" alt="Breadcrumb Icon">
                    </div>学校のノートや提出物などをきれいな文字で書かせたい。</li>
                    <li><div class="check-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/check-icon.png" alt="Breadcrumb Icon">
                    </div>書写など基礎をしっかりと学んでほしい。</li>
                    <li><div class="check-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/check-icon.png" alt="Breadcrumb Icon">
                    </div>文字を正しく楽しく書く習慣を身につけてほしい。</li>
                    <li><div class="check-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/check-icon.png" alt="Breadcrumb Icon">
                    </div>集中力を身につけてほしい。</li>
                    <li><div class="check-img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/check-icon.png" alt="Breadcrumb Icon">
                    </div>級・段取得することにより自信をつけさせたい。</li>
                </ul>
                <div class="calligraphy-bubble" id="bubble-recommendations">
                    <div class="bubble-content">
                        <p class="bubble-text">こんなお子さまにおすすめ！</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
    <div class="calligraphy-price-section">
        <h2 class="calligraphy-price-title gakken-price-title">PRICE</h2>
        <p class="calligraphy-price-subtitle gakken-price-subtitle">料金費</p>
        <div class="calligraphy-price-table-wrapper">
            <table class="calligraphy-price-table">
                <thead>
                    <tr>
                        <th>授業</th>
                        <th>金額</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>週1日</td>
                        <td>¥4,500</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="calligraphy-event">
           <div class="calligraphy-event-header">
            <div class="calligraphy-event-header-title">
                <h3 class="calligraphy-event-title">EVENT</h3>
                <p class="calligraphy-event-subtitle">イベント</p>
            </div>
            <div class="calligraphy-event-header-content">
                <p>習字教室では季節ごとにイベントも開催しています！<br>
                季節を感じる言葉の意味を考えながら書き上げていきます。</p>
            </div>
           </div>
           <div class="calligraphy-event-image">
            <div class="calligraphy-event-image-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/calligraphy-event-image-1.png" alt="イベント画像">
            </div>
            <div class="calligraphy-event-image-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/calligraphy-event-image-2.png" alt="イベント画像">
            </div>
            <div class="calligraphy-event-image-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/calligraphy-event-image-3.png" alt="イベント画像">
            </div>
           </div>
        </div>
        <a href="https://www.889100.com/" class="strengths-button">
                <span>詳しくみる</span>
        </a>
    </div>
</section>
<section class="other-abacus-sec" id="other-abacus-sec">
    <div class="abacus-section">
        <div class="abacus-header">
            <div class="abacus-header-title">
                <p class="abacus-subtitle">集中力を高める</p>
                <h2 class="abacus-title">そろばん</h2>
            </div>
            <p class="abacus-description">毎週月曜日、水曜日に開講中。<br>
そろばんは、指を動かして脳を活性化し、算数の基礎力や暗算力を育てる教材です。<br>
計算力の向上に加え、挨拶や検定に挑む度胸、目標に向かう向上心も大切に育てます。</p>
        </div>
        <div class="abacus-content-blocks">
            <div class="abacus-content-block">
                <div class="abacus-block-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/cal_2.png" alt="そろばん教室の様子" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="image-alt-fallback" style="display:none;">そろばん教室の様子</div>
                </div>
                <div class="abacus-block-subcontent">
                    <h3 class="abacus-block-title">暗算力が、未来の学力を支える</h3>
                    <p class="abacus-block-text">暗算力は、一生の財産となります。そろばんの練習を通じて、集中力、記憶力、判断力を高め、お子さまの学習能力を総合的に向上させます。</p>
                </div>
            </div>
            
            <a href="#" class="abacus-content-block" data-bubble="recommendations">
                <ul class="abacus-recommendations">
                    <li>
                        <div class="check-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/check-icon.png" alt="チェックアイコン" onerror="this.onerror=null; this.style.display='none';">
                        </div>
                        計算が苦手なお子さま
                    </li>
                    <li>
                        <div class="check-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/check-icon.png" alt="チェックアイコン" onerror="this.onerror=null; this.style.display='none';">
                        </div>
                        集中力が続かないお子さま
                    </li>
                    <li>
                        <div class="check-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/check-icon.png" alt="チェックアイコン" onerror="this.onerror=null; this.style.display='none';">
                        </div>
                        手を使うことが好きなお子さま
                    </li>
                    <li>
                        <div class="check-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/check-icon.png" alt="チェックアイコン" onerror="this.onerror=null; this.style.display='none';">
                        </div>
                        自信をつけさせたいお子さま
                    </li>
                    <li>
                        <div class="check-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/other/check-icon.png" alt="チェックアイコン" onerror="this.onerror=null; this.style.display='none';">
                        </div>
                        向上心を育てたいお子さま
                    </li>
                </ul>
                <div class="abacus-bubble" id="bubble-recommendations">
                    <div class="bubble-content">
                        <p class="bubble-text">こんなお子さまにおすすめ！</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
    <div class="abacus-price-section">
        <h2 class="abacus-price-title gakken-price-title">PRICE</h2>
        <p class="abacus-price-subtitle gakken-price-subtitle">料金表</p>
        <div class="abacus-price-table-wrapper">
            <table class="abacus-price-table">
                <thead>
                    <tr>
                        <th>授業回数</th>
                        <th>金額</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>週1回</td>
                        <td>¥5,500</td>
                    </tr>
                    <tr>
                        <td>週2回</td>
                        <td>¥7,700</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="https://tomisoro.com/" class="strengths-button">
            <span>詳しくみる</span>
        </a>
    </div>
</section>
<?php get_footer() ?>