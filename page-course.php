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
                    echo '<p>COURSE</p>';
                }
                ?> 
     </div>

</section>
<section class="about-intro course-sec-btn">
    <div class='breadcrumb'>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon/course_icon.png" alt="Breadcrumb Icon">
                        <p class='breadcrumb-arrow'></p>
                        <p>コース・授業料</p>
    </div>
    <div class="course-btn-container">
        <a href="" class="course-btn course-btn-general">
全体共通
        </a>
        <a href="<?php echo home_url(); ?>/course/#course-price-primany" class="course-btn course-btn-elementary">
小学生コース
        </a>
        <a href="<?php echo home_url(); ?>/course/#course-price-middle" class="course-btn course-btn-junior">
 中学生コース
        </a>
        <a href="<?php echo home_url(); ?>/course/#course-price-high" class="course-btn course-btn-high">
高校生コース
        </a>
    </div>
</section>
<section class="course-sec-overview">
 <div class="course-overview-container">
    <div class="course-overview-title">
        <h3>Couese Overview</h3>
        <p>授業形態・簡易授業料金</p>
    </div>
    <div class="course-overview-content">
        <table class="course-table js-slidein-left">
                    <thead>
                        <tr> <th>授業</th>
                            <th>対象</th>
                            <th>費用<br>
                            （週1、月4日）</th>
                            <th>週1日　1コマ</th>
                            <th>学習形態</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>マンツーマン個別</td>
                            <td>全学年</td>
                            <td>16,000円～</td>
                            <td>60分or90分</td>
                            <td>先生1人に生徒1人</td>
                        </tr>
                        <tr>
                            <td>マンツーマン個別</td>
                            <td>全学年</td>
                            <td>15,000円～</td>
                            <td>90分</td>
                            <td>先生1人に生徒1人</td>
                        </tr>
                        <tr>
                            <td>マンツーマン個別</td>
                            <td>全学年</td>
                            <td>12,000円～</td>
                            <td>90分</td>
                            <td>先生1人に生徒1人</td>
                        </tr>
                        <tr>
                            <td>寺子屋個別</td>
                            <td>原則小中学生</td>
                            <td>3,000円～</td>
                            <td>70分</td>
                            <td>先生1人に生徒5人</td>
                        </tr>
                        <tr>
                            <td>演習個別</td>
                            <td>演習個別</td>
                            <td>4,500円～</td>
                            <td>90分</td>
                            <td>先生1人に生徒5人</td>
                        </tr>
                        <tr>
                            <td>SSSコース</td>
                            <td>中学生以上</td>
                            <td>2,500円～</td>
                            <td>開館時間帯無制限</td>
                            <td>自学学習サポート</td>
                        </tr>
                        <tr>
                            <td>学びエイド指導<br>
                            （映像授業）</td>
                            <td>中学生限定</td>
                            <td>5,500円</td>
                            <td>90分</td>
                            <td>レベル・内容ともに<br>
                            個別対応</td>
                        </tr>
                        <tr>
                            <td>ビットキャンパスタッチ<br>
                            （パソコン学習）</td>
                            <td>中学生以上</td>
                            <td>塾生無償</td>
                            <td>週に1・2日曜日・時間を<br>
                            決めて利用できます。</td>
                            <td>レベル・内容ともに<br>
                            個別対応</td>
                        </tr>
                        <tr>
                            <td>自習室・空き教室・<br>
                            音読室の利用</td>
                            <td>塾生全員</td>
                            <td>塾生無償</td>
                            <td>受験生は毎日<br>
                                非受験生は授業と合わせて<br>
                                3日以上塾に来ましょう。</td>
                            <td>自学学習</td>
                        </tr>
                    </tbody>
                </table>
    </div>
 </div>
 <div class="course-overview-summary">
    <div class="course-summary-container">
        <div class="course-summary-header">
            <h2 class="course-summary-title">Couese Summary</h2>
            <p class="course-summary-subtitle">各コースの詳細</p>
        </div>
        
        <div class="course-details-list">
            <!-- Course 1: マンツーマン個別 -->
            <div class="course-detail-item">
                <div class="course-detail-content">
                    <h3 class="course-detail-title">マンツーマン個別</h3>
                    <p class="course-detail-text">ご希望に応じて承ります。大学生・大学院生・社会人プロ講師の種類と1コマ60分または90分コースから選べます。<br>
生徒一人ひとりに合わせた“完全個別指導”を実現します。受験対策はもちろん、学校授業の補修や苦手克服まで、
目的に応じて最適な学習プランをご提案。確かな理解と着実な成績向上をサポートします。<br>
料金は個別にご案内しますのでお問い合わせください。</p>
                </div>
                <div class="course-detail-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/course/man-to-man.png" alt="マンツーマン個別指導の様子：講師と生徒がタブレットを見ながら学習している場面" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="course-image-alt" style="display:none;">マンツーマン個別指導の様子：講師と生徒がタブレットを見ながら学習している場面</span>
                </div>
            </div>

            <!-- Course 2: スタンダード個別 -->
            <div class="course-detail-item course-detail-item-standard">
                <div class="course-detail-content">
                    <h3 class="course-detail-title">スタンダード個別</h3>
                    <p class="course-detail-text">中学受験・大学受験の生徒にはこのコースがお勧めです。<br>
                    スタンダードコースは学費に週1日の演習個別授業がついています。中学生以上は学びエイドが追加料金なしで受講でき、中学1年生から大学受験最難関レベルまで受講し放題です。</p>
                </div>
                <div class="course-detail-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/course/standard.png" alt="スタンダード個別指導の様子：講師1人に生徒2人が机で学習している場面" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="course-image-alt" style="display:none;">スタンダード個別指導の様子：講師1人に生徒2人が机で学習している場面</span>
                </div>
            </div>

            <!-- Course 3: プレミアム個別 -->
            <div class="course-detail-item course-detail-item-standard">
                <div class="course-detail-content">
                    <h3 class="course-detail-title">プレミアム個別</h3>
                    <p class="course-detail-text">中学受験・高校受験・大学受験の生徒に一番人気のコースです。費用対効果が大きいことが一番のメリットです。<br>
プレミアムコースは学費に週1日の演習個別授業がついています。中学生以上は学びエイドが追加料金なしで受講でき、中学1年生から大学受験最難関レベルまで受講し放題です。<br>
中学生はビットキャンパスタッチを追加料金なしで受講できます。</p>
                </div>
                <div class="course-detail-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/course/premium.png" alt="プレミアム個別指導の様子：講師1人に生徒3人が机で学習している場面" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="course-image-alt" style="display:none;">プレミアム個別指導の様子：講師1人に生徒3人が机で学習している場面</span>
                </div>
            </div>

            <!-- Course 4: 寺子屋学習 -->
            <div class="course-detail-item">
                <div class="course-detail-content">
                    <h3 class="course-detail-title">寺子屋学習</h3>
                    <p class="course-detail-text">小学生・中学1年生・中学2年生に適したコースです。中学生は教科書対応の映像授業が追加料金無しで受講できます。週1コースでも5教科学ぶことができます。<br>
小学校5年生以上、中学3年生まではビットキャンパスタッチを追加料金なしで受講できます。<br>
※小学6年生は受講できませんので、プレミアムコースまたはスタンダードコースを受講ください。</p>
                </div>
                <div class="course-detail-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/course/terakoya.png" alt="寺子屋学習の様子：講師と生徒が机で学習している場面" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="course-image-alt" style="display:none;">寺子屋学習の様子：講師と生徒が机で学習している場面</span>
                </div>
            </div>

            <!-- Course 5: 演習個別 -->
            <div class="course-detail-item">
                <div class="course-detail-content">
                    <h3 class="course-detail-title">演習個別</h3>
                    <p class="course-detail-text">単独での申し込みが可能です。寺子屋コースはオプションでの申し込み、個別指導のコースは無償で受講することができます。曜日時限が決まっています。<br>
                    高校生は原則学習指導・指示と学習管理になります。学びエイドかスタディサプリとの組み合わせをお勧めします。</p>
                </div>
                <div class="course-detail-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/course/enshu.png" alt="演習個別指導の様子：講師と生徒が机で学習している場面" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="course-image-alt" style="display:none;">演習個別指導の様子：講師と生徒が机で学習している場面</span>
                </div>
            </div>

            <!-- Course 6: SSSコース -->
            <div class="course-detail-item course-detail-item-standard">
                <div class="course-detail-content">
                    <h3 class="course-detail-title">SSSコース (スリーエスコース)</h3>
                    <p class="course-detail-text">スリーSコースは自宅での学習を支援・サポートするシステムです。週1コース・週2コース・通い放題コースがあり、月曜日7限と土曜日４・5・6限のみ塾に学習に来ることが可能になります。

</p>
                </div>
                <div class="course-detail-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/course/sss.png" alt="SSSコースの様子：個別ブースで学習している生徒の様子" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="course-image-alt" style="display:none;">SSSコースの様子：個別ブースで学習している生徒の様子</span>
                </div>
            </div>

            <!-- Course 7: 学びエイド指導コース -->
            <div class="course-detail-item course-detail-item-standard">
                <div class="course-detail-content">
                    <h3 class="course-detail-title">学びエイド指導コース (映像授業)</h3>
                    <p class="course-detail-text">全教科全学年のレベル別映像学習＋コーチング＋受験指導セミナーです。<br>
学びエイドコースはマンツーマン・スタンダード・プレミアム・寺子屋コースを受講する中学生以上が無償で受講することができます。<br>
参加者の志望校合格率が未参加者に比べて高いことから、中学3年生、高校3年生、高卒受験生は必修で参加いただきます。</p>
                </div>
                <div class="course-detail-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/course/manabi-aid.png" alt="学びエイド指導コースの様子：ヘッドフォンを着けてノートパソコンを見ている生徒" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="course-image-alt" style="display:none;">学びエイド指導コースの様子：ヘッドフォンを着けてノートパソコンを見ている生徒</span>
                </div>
            </div>

            <!-- Course 8: ピットキャンパスタッチ -->
            <div class="course-detail-item">
                <div class="course-detail-content">
                    <h3 class="course-detail-title">ピットキャンパスタッチ (パソコン学習)</h3>
                    <p class="course-detail-text">コマ切れ時間の活用にお勧めです。<br>
                    コンピューターの力で演習や知識の定着・暗記を主な目的としています。採点が瞬時で正確なため、効率よく知識を定着させることができます。<br>
                    中学生はビットキャンまパスタッチを追加料金なしで受講できます。<br>
                    小学生は塾の授業の復習目的や宿題として活用します。</p>
                </div>
                <div class="course-detail-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/course/pit-campus.png" alt="ピットキャンパスタッチの様子：パソコン学習の場面" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="course-image-alt" style="display:none;">ピットキャンパスタッチの様子：パソコン学習の場面</span>
                </div>
            </div>

            <!-- Course 9: 自習室・空き教室・音読室の利用 -->
            <div class="course-detail-item">
                <div class="course-detail-content">
                    <h3 class="course-detail-title">自習室・空き教室・音読室の利用</h3>
                    <p class="course-detail-text">家で勉強しない生徒・学習環境がよくない生徒はぜひご利用ください。<br>
                    また、受験生は毎日、非受験生も授業とあわせて週3日以上は塾に来る習慣をつけるため、ご活用ください。</p>
                </div>
                <div class="course-detail-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/course/self-study.png" alt="自習室の様子：静かな環境で学習している様子" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="course-image-alt" style="display:none;">自習室の様子：静かな環境で学習している様子</span>
                </div>
            </div>
        </div>
    </div>
 </div>
</section>
<section class="course-price">
    <div class="course-price-container" id="course-price-primany"> 
        <div class="course-price-header">
            <h2 class="course-price-title">小学生コース</h2>
            <p class="course-price-description">小学生コースにはマンツーマン個別から先生一人に生徒8人までの演習個別まで様々な学習形態があります。<br>お子様のペースや受験対策にあわせて選ぶ<br class="sp">ことができます。</p>
        </div>

        <!-- 学年選択ボタン -->
        <div class="grade-buttons">
            <button class="grade-btn grade-btn-1-3" data-grade="1-3">1~3年生</button>
            <button class="grade-btn grade-btn-4" data-grade="4">4年生</button>
            <button class="grade-btn grade-btn-5" data-grade="5">5年生</button>
            <button class="grade-btn grade-btn-6" data-grade="6">6年生</button>
        </div>

        <!-- コースタイプセクション -->
        <div class="course-types-wrapper">
            <!-- 1~3年生セクション -->
            <div class="grade-section" data-grade-section="1-3">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-1-3">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥17,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥31,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥42,000</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥53,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="premium-1-3">プレミアム個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4/月)</td><td>¥14,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥24,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥33,000</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥42,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="terakoya-1-3">寺小屋個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各70分×4/月)</td><td>¥3,500</td></tr>
                                        <tr><td>週2日 (各0分×8/月)</td><td>¥7,000</td></tr>
                                        <tr><td>週3日 (各70分×12/月)</td><td>¥10,000</td></tr>
                                        <tr><td>週4日 (各70分×16/月)</td><td>¥13,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="enshu-1-3">演習個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4/月)</td><td>¥4,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥8,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥11,500</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥14,500</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grade 4 Section -->
            <div class="grade-section" data-grade-section="4">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-4">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4/月)</td><td>¥17,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥31,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥42,000</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥53,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="premium-4">プレミアム個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4/月)</td><td>¥14,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥24,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥33,000</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥42,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="terakoya-4">寺小屋個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各70分×4/月)</td><td>¥4,500</td></tr>
                                        <tr><td>週2日 (各0分×8/月)</td><td>¥9,000</td></tr>
                                        <tr><td>週3日 (各70分×12/月)</td><td>¥13,000</td></tr>
                                        <tr><td>週4日 (各30分×16/月)</td><td>¥17,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="enshu-4">演習個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4/月)</td><td>¥4,000</td></tr>
                                        <tr><td>週2日 (90分×8/月)</td><td>¥8,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥11,500</td></tr>
                                        <tr><td>週4日 (各30分×16/月)</td><td>¥14,500</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5年生セクション -->
            <div class="grade-section" data-grade-section="5">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-5">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4/月)</td><td>¥17,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥31,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥42,000</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥53,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="premium-5">プレミアム個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4/月)</td><td>¥15,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥26,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥36,000</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥45,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="terakoya-5">寺小屋個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各70分×4/月)</td><td>¥5,500</td></tr>
                                        <tr><td>週2日 (各0分×8/月)</td><td>¥11,000</td></tr>
                                        <tr><td>週3日 (各70分×12/月)</td><td>¥16,000</td></tr>
                                        <tr><td>週4日 (各70分×16/月)</td><td>¥21,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="enshu-5">演習個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4/月)</td><td>¥4,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥8,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥11,500</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥14,500</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grade 6 Section -->
            <div class="grade-section" data-grade-section="6">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-6">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×12/月)</td><td>¥19,000</td></tr>
                                        <tr><td>週2日 (各90分×16/月)</td><td>¥35,000</td></tr>
                                        <tr><td>週3日 (各50分×20/月)</td><td>¥49,000</td></tr>
                                        <tr><td>週4日 (各90分×24/月)</td><td>¥62,000</td></tr>
                                    </tbody>
                                </table>
                                <p class="table-note">※週1日 (個別) +1日 (演習) +1日学びエイド</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="premium-6">プレミアム個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×12/月)</td><td>¥16,000</td></tr>
                                        <tr><td>週2日 (各90分×16/月)</td><td>¥27,000</td></tr>
                                        <tr><td>週3日 (各90分×20/月)</td><td>¥39,000</td></tr>
                                        <tr><td>週4日 (各90分×24/月)</td><td>¥45,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="terakoya-6">寺小屋個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各70分×4/月)</td><td>¥6,500</td></tr>
                                        <tr><td>週2日 (各0分×8/月)</td><td>¥13,000</td></tr>
                                        <tr><td>週3日 (各70分×12/月)</td><td>¥19,000</td></tr>
                                        <tr><td>週4日 (各70分×16/月)</td><td>¥25,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="enshu-6">演習個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4/月)</td><td>¥4,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥8,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥11,500</td></tr>
                                        <tr><td>週4日 (90分×16/月)</td><td>¥14,500</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="course-price-mid-container" id="course-price-middle">
        <div class="course-price-header">
            <h2 class="course-price-title">中学生コース</h2>
            <p class="course-price-description">中学生コースにはマンツーマン個別から先生一人に生徒8人までの演習個別まで様々な学習形態があります。<br>また、SSSコースなどにより学力に力を入れられるコースが充実しています。<br>お子様のペースや受験対策にあわせて選ぶことができます。</p>
        </div>

        <!-- 学年選択ボタン -->
        <div class="grade-buttons">
            <button class="grade-btn grade-btn-1" data-grade="1">1年生</button>
            <button class="grade-btn grade-btn-2" data-grade="2">2年生</button>
            <button class="grade-btn grade-btn-3" data-grade="3">3年生</button>
        </div>

        <!-- コースタイプセクション -->
        <div class="course-types-wrapper">
            <!-- 1年生セクション -->
            <div class="grade-section" data-grade-section="1">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-1">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥17,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥31,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥42,000</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥53,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="premium-1">プレミアム個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4/月)</td><td>¥15,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥26,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥36,000</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥46,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="weakness-1">寺小屋個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各70分×4/月)</td><td>¥8,500</td></tr>
                                        <tr><td>週2日 (各0分×8/月)</td><td>¥17,000</td></tr>
                                        <tr><td>週3日 (各70分×12/月)</td><td>¥25,000</td></tr>
                                        <tr><td>週4日 (各70分×16/月)</td><td>¥32,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="skill-1">演習個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥7,000</td></tr>
                                        <tr><td>週2日 (各90分×8/月)</td><td>¥10,000</td></tr>
                                        <tr><td>週3日 (各90分×12/月)</td><td>¥15,000</td></tr>
                                        <tr><td>週4日 (各90分×16/月)</td><td>¥20,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="sss-1">SSSコース</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1コース</td><td>¥2,500</td></tr>
                                        <tr><td>週2コース</td><td>¥3,500</td></tr>
                                        <tr><td>通い放題コース</td><td>¥5,000</td></tr>
                                        <tr><td>教材費3科</td><td>¥6,600</td></tr>
                                        <tr><td>教材費5科</td><td>¥11,000</td></tr>
                                        <tr><td>独立校対策教材1教科</td><td>¥2,200</td></tr>
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item-group">
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="manabi-1">学びエイド指導</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>月曜日7限</td><td>¥5,500</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="table-note">※1,2,8月は休講のため、学費は3,000円です。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="pit-1">ビットキャンパスタッチ</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>-</td><td>無償</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
               
            </div>

            <!-- 2年生セクション -->
            <div class="grade-section" data-grade-section="2">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-2">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥17,000</td></tr>
                                        <tr><td>週2日 (各90分×8月)</td><td>¥31,000</td></tr>
                                        <tr><td>週3日 (各90分×12月)</td><td>¥42,000</td></tr>
                                        <tr><td>週4日 (各90分×16月)</td><td>¥53,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="premium-2">プレミアム個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4月)</td><td>¥15,000</td></tr>
                                        <tr><td>週2日 (各90分×8月)</td><td>¥26,000</td></tr>
                                        <tr><td>週3日 (各90分×12月)</td><td>¥36,000</td></tr>
                                        <tr><td>週4日 (各90分×16月)</td><td>¥46,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="weakness-2">寺小屋個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各70分×4月)</td><td>¥8,500</td></tr>
                                        <tr><td>週2日 (各0分×8月)</td><td>¥17,000</td></tr>
                                        <tr><td>週3日 (各70分×12月)</td><td>¥25,000</td></tr>
                                        <tr><td>週4日 (各70分×16月)</td><td>¥32,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="skill-2">演習個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4月)</td><td>¥7,000</td></tr>
                                        <tr><td>週2日 (各90分×8月)</td><td>¥10,000</td></tr>
                                        <tr><td>週3日 (各90分×12月)</td><td>¥15,000</td></tr>
                                        <tr><td>週4日 (各90分×16月)</td><td>¥20,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="sss-2">SSSコース</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1コース</td><td>¥2,500</td></tr>
                                        <tr><td>週2コース</td><td>¥3,500</td></tr>
                                        <tr><td>通い放題コース</td><td>¥5,000</td></tr>
                                        <tr><td>教材費3科</td><td>¥66,000</td></tr>
                                        <tr><td>教材費5科</td><td>¥11,000</td></tr>
                                        <tr><td>独立校対策教材1教科</td><td>¥2,200</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item-group">
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="manabi-2">学びエイド指導</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>月曜日7限</td><td>¥5,500</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="table-note">※1,2,8月は休講のため、学費は3,000円です。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="pit-2">ビットキャンパスタッチ</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>-</td><td>無償</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3年生セクション -->
            <div class="grade-section" data-grade-section="3">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-3">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥199,000</td></tr>
                                        <tr><td>週2日 (各90分×8月)</td><td>¥35,000</td></tr>
                                        <tr><td>週3日 (各90分×12月)</td><td>¥49,000</td></tr>
                                        <tr><td>週4日 (各90分×16月)</td><td>¥62,000</td></tr>
                                    </tbody>
                                </table>
                                <p class="table-note">※週1日（個別）＋1日（演習）＋1日学びエイド</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="premium-3">プレミアム個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4月)</td><td>¥16,000</td></tr>
                                        <tr><td>週2日 (各90分×8月)</td><td>¥27,000</td></tr>
                                        <tr><td>週3日 (各90分×12月)</td><td>¥39,000</td></tr>
                                        <tr><td>週4日 (各90分×16月)</td><td>¥50,000</td></tr>
                                    </tbody>
                                </table>
                                <p class="table-note">※週1日（個別）＋1日（演習）＋1日学びエイド</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="weakness-3">寺小屋個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各70分×4/月）</td><td>¥10,000</td></tr>
                                        <tr><td>週2日 (各0分×8月)</td><td>¥20,000</td></tr>
                                        <tr><td>週3日 (各70分×12月)</td><td>¥28,000</td></tr>
                                        <tr><td>週4日 (各70分×16月)</td><td>¥35,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="skill-3">演習個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日 (各90分×4月)</td><td>¥7,000</td></tr>
                                        <tr><td>週2日 (各90分×8月)</td><td>¥10,000</td></tr>
                                        <tr><td>週3日 (各90分×12月)</td><td>¥15,000</td></tr>
                                        <tr><td>週4日 (各90分×16月)</td><td>¥20,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="sss-3">SSSコース</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1コース</td><td>¥2,500</td></tr>
                                        <tr><td>週2コース</td><td>¥3,500</td></tr>
                                        <tr><td>通い放題コース</td><td>¥5,000</td></tr>
                                        <tr><td>教材費3科</td><td>¥66,00</td></tr>
                                        <tr><td>教材費5科</td><td>¥11,000</td></tr>
                                        <tr><td>独立校対策教材1教科</td><td>¥2,200</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item-group">
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="manabi-3">学びエイド指導</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>月曜日7限</td><td>¥5,500</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="table-note">※1,2,8月は休講のため、学費は3,000円です。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="pit-3">ビットキャンパスタッチ</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>-</td><td>無償</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="course-price-high-container" id="course-price-high">
        <div class="course-price-header">
            <h2 class="course-price-title">高校生コース</h2>
            <p class="course-price-description">高校生コースにはマンツーマン指導から先生一人に生徒数人までの個別指導まで様々な学習形態があります。<br>お子様のペースや受験対策に合わせて選ぶことができます。</p>
        </div>

        <!-- 学年選択ボタン -->
        <div class="grade-buttons">
            <button class="grade-btn grade-btn-h1" data-grade="h1">1年生</button>
            <button class="grade-btn grade-btn-h2" data-grade="h2">2年生</button>
            <button class="grade-btn grade-btn-h3" data-grade="h3">3年生</button>
            <button class="grade-btn grade-btn-hs" data-grade="hs">高卒</button>
        </div>

        <!-- コースタイプセクション -->
        <div class="course-types-wrapper">
            <!-- 1年生セクション -->
            <div class="grade-section" data-grade-section="h1">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-h1">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥19,000</td></tr>
                                        <tr><td>週2日（各90分×8/月）</td><td>¥35,000</td></tr>
                                        <tr><td>週3日（各90分×12/月）</td><td>¥49,000</td></tr>
                                        <tr><td>週4日（各90分×16/月）</td><td>¥62,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="premium-h1">プレミアム個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥16,000</td></tr>
                                        <tr><td>週2日（各90分×8/月）</td><td>¥27,000</td></tr>
                                        <tr><td>週3日（各90分×12/月）</td><td>¥39,000</td></tr>
                                        <tr><td>週4日（各90分×16/月）</td><td>¥50,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item-group">
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="enshu-h1">演習個別</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>週1日（各90分×4/月）</td><td>¥8,000</td></tr>
                                            <tr><td>週2日（各90分×8/月）</td><td>¥12,000</td></tr>
                                            <tr><td>週3日（各90分×12/月）</td><td>¥18,000</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="programming-h1">学びエイド指導</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>月曜日7限</td><td>¥5,500</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="table-note">※1,2,8月は休講のため、学費は3,000円です。</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="sss-h1">SSSコース</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日コース</td><td>¥3,000</td></tr>
                                        <tr><td>週2日コース</td><td>¥4,000</td></tr>
                                        <tr><td>週3日コース</td><td>¥5,500</td></tr>
                                        <tr><td>教材費3科</td><td rowspan="2">指定市販教材<br>
                                                                    学校指定の補助教材等</td></tr>
                                        <tr><td>教材費5科</td></tr>
                                        <tr><td>独立校対策教材1教科</td><td>生徒の学力・志望校により<br>
                                                                    それぞれ教材が異なる</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- 2年生セクション -->
            <div class="grade-section" data-grade-section="h2">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-h2">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥19,000</td></tr>
                                        <tr><td>週2日 (各90分×8月)</td><td>¥35,000</td></tr>
                                        <tr><td>週3日 (各90分×12月)</td><td>¥49,000</td></tr>
                                        <tr><td>週4日 (各90分×16月)</td><td>¥62,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="premium-h2">プレミアム個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥16,000</td></tr>
                                        <tr><td>週2日（各90分×8/月）</td><td>¥27,000</td></tr>
                                        <tr><td>週3日（各90分×12/月）</td><td>¥39,000</td></tr>
                                        <tr><td>週4日（各90分×16/月）</td><td>¥50,000</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item-group">
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="enshu-h1">演習個別</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>週1日（各90分×4/月）</td><td>¥8,800</td></tr>
                                            <tr><td>週2日（各90分×8/月）</td><td>¥12,000</td></tr>
                                            <tr><td>週3日（各90分×12/月）</td><td>¥18,000</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="programming-h1">学びエイド指導</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>月曜日7限</td><td>¥5,500</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="table-note">※1,2,8月は休講のため、学費は3,000円です。</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="sss-h1">SSSコース</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日コース</td><td>¥3,500</td></tr>
                                        <tr><td>週2日コース</td><td>¥4,500</td></tr>
                                        <tr><td>通い放題コース</td><td>¥6,000</td></tr>
                                        <tr><td>教材費3科</td><td rowspan="2">指定市販教材<br>
                                                                学校指定の補助教材等</td></tr>
                                        <tr><td>教材費5科</td></tr>
                                        <tr><td>独立校対策教材1教科</td><td>指定市販教材<br>
                                                                学校指定の補助教材等</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- 3年生セクション -->
            <div class="grade-section" data-grade-section="h3">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-h3">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥20,000</td></tr>
                                        <tr><td>週2日（各90分×8/月）</td><td>¥36,000</td></tr>
                                        <tr><td>週3日（各90分×12/月）</td><td>¥51,000</td></tr>
                                        <tr><td>週4日（各90分×16/月）</td><td>¥66,000</td></tr>
                                    </tbody>
                                </table>
                                <p class="table-note">※週1日（個別）＋1日（演習）＋1日学びエイド</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="premium-h3">プレミアム個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥17,000</td></tr>
                                        <tr><td>週2日（各90分×8/月）</td><td>¥29,000</td></tr>
                                        <tr><td>週3日（各90分×12/月）</td><td>¥42,000</td></tr>
                                        <tr><td>週4日（各90分×16/月）</td><td>¥52,000</td></tr>
                                    </tbody>
                                </table>
                                <p class="table-note">※週1日（個別）＋1日（演習）＋1日学びエイド</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item-group">
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="enshu-h1">演習個別</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>週1日（各90分×4/月）</td><td>¥8,000</td></tr>
                                            <tr><td>週2日（各90分×8/月）</td><td>¥12,000</td></tr>
                                            <tr><td>週3日（各90分×12/月）</td><td>¥18,000</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="programming-h1">学びエイド指導</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>月曜日7限</td><td>¥5,500</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="table-note">※1,2,8月は休講のため、学費は3,000円です。</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="sss-h1">SSSコース</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日コース</td><td>¥4,000</td></tr>
                                        <tr><td>週2日コース</td><td>¥5,000</td></tr>
                                        <tr><td>通い放題コース</td><td>¥7,000</td></tr>
                                        <tr><td>教材費3科</td><td rowspan="2">指定市販教材<br>
                                                                    学校指定の補助教材等</td></tr>
                                        <tr><td>教材費5科</td></tr>
                                        <tr><td>独立校対策教材1教科</td><td>生徒の学力・志望校により<br>
                                                                    それぞれ教材が異なる</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- 高卒セクション -->
            <div class="grade-section" data-grade-section="hs">
                <div class="course-type-item">
                    <button class="course-type-btn" data-course="standard-hs">スタンダード個別</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日（各90分×4/月）</td><td>¥20,000</td></tr>
                                        <tr><td>週2日（各90分×8/月）</td><td>¥36,000</td></tr>
                                        <tr><td>週3日（各90分×12/月）</td><td>¥51,000</td></tr>
                                        <tr><td>週4日（各90分×16/月）</td><td>¥65,000</td></tr>
                                    </tbody>
                                </table>
                                <p class="table-note">※週1日（個別）＋1日（演習）＋1日学びエイド</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="course-type-item">
                    <button class="course-type-btn" data-course="sss-h1">SSSコース</button>
                    <div class="course-type-content">
                        <div class="course-tables-grid">
                            <div class="price-table-wrapper">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>授業/月</th>
                                            <th>月謝</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>週1日コース</td><td>¥4,500</td></tr>
                                        <tr><td>週2日コース</td><td>¥5,500</td></tr>
                                        <tr><td>通い放題コース</td><td>¥7,500</td></tr>
                                        <tr><td>教材費3科</td><td rowspan="2">指定市販教材<br>
                                                                学校指定の補助教材等</td></tr>
                                        <tr><td>教材費5科</td></tr>
                                        <tr><td>独立校対策教材1教科</td><td>生徒の学力・志望校により<br>
                                                                それぞれ教材が異なる</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-type-item-group">
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="enshu-h1">演習個別</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>週1日（各90分×4/月）</td><td>¥8,500</td></tr>
                                            <tr><td>週2日（各90分×8/月）</td><td>¥14,000</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-type-item">
                        <button class="course-type-btn" data-course="programming-h1">学びエイド指導</button>
                        <div class="course-type-content">
                            <div class="course-tables-grid">
                                <div class="price-table-wrapper">
                                    <table class="price-table">
                                        <thead>
                                            <tr>
                                                <th>授業/月</th>
                                                <th>月謝</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>月曜日7限</td><td>¥5,500</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="table-note">※1,2,8月は休講のため、学費は3,000円です。</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>