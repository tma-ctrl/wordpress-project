$(document).ready(function() {
    $(".header-menu-sp").on("click", function() {
        $(".header-menu-sp").toggleClass("header-menu-sp-active");
        $(".header-menu-list-sp").toggleClass("header-menu-list-sp-active");
    });

    // メニュー項目がクリックされたときにメニューを閉じる
    $(".header-menu-list-sp a").on("click", function() {
        $(".header-menu-sp").removeClass("header-menu-sp-active");
        $(".header-menu-list-sp").removeClass("header-menu-list-sp-active");
    });

    // 固定ボトムナビゲーション - スクロール時に表示（モバイルのみ）
    let lastScrollTop = 0;
    const fixedBottomNav = document.getElementById('fixed-bottom-nav');
    const scrollThreshold = 100; // 100pxスクロール後に表示

    if (fixedBottomNav) {
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            // モバイルデバイスのみ表示（spクラスが表示されているかチェック）
            if (window.innerWidth <= 940) {
                if (scrollTop > scrollThreshold) {
                    // しきい値を超えてスクロール - ナビゲーションを表示
                    if (scrollTop > lastScrollTop) {
                        // 下にスクロール - ナビゲーションを表示
                        fixedBottomNav.classList.add('show');
                    } else if (scrollTop < lastScrollTop) {

                        fixedBottomNav.classList.add('show');
                    }
                } else {
                    // ページ上部付近 - ナビゲーションを非表示
                    fixedBottomNav.classList.remove('show');
                }
            } else {
                // デスクトップでは非表示
                fixedBottomNav.classList.remove('show');
            }

            lastScrollTop = scrollTop;
        }, {
            passive: true
        });

        // ウィンドウリサイズも処理
        window.addEventListener('resize', function() {
            if (window.innerWidth > 940) {
                fixedBottomNav.classList.remove('show');
            }
        });
    }

    // モバイルでスクロール時にヘッダーの背景色を変更
    const mainHeader = document.querySelector('.main-header');
    if (mainHeader) {
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            // モバイルデバイスのみ（768px以下）
            if (window.innerWidth <= 768) {
                if (scrollTop > 0) {
                    mainHeader.classList.add('scrolled');
                } else {
                    mainHeader.classList.remove('scrolled');
                }
            } else {
                // デスクトップではクラスを削除
                mainHeader.classList.remove('scrolled');
            }
        }, {
            passive: true
        });

        // ウィンドウリサイズ時にも処理
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                mainHeader.classList.remove('scrolled');
            } else {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                if (scrollTop > 0) {
                    mainHeader.classList.add('scrolled');
                } else {
                    mainHeader.classList.remove('scrolled');
                }
            }
        });

        // 展開ボタンのクリックを処理
        const expandBtn = document.getElementById('fixed-bottom-nav-expand');
        const ctaSection = document.getElementById('fixed-bottom-nav-cta');
        const ctaCloseBtn = document.getElementById('fixed-bottom-nav-cta-close');

        if (expandBtn && ctaSection) {
            expandBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                fixedBottomNav.classList.toggle('expanded');
            });
        }

        // CTA閉じるボタンのクリックを処理
        if (ctaCloseBtn) {
            ctaCloseBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                fixedBottomNav.classList.remove('expanded');
            });
        }

        // ハンバーガーメニューのトグルを処理
        const navToggle = document.getElementById('fixed-bottom-nav-toggle');
        if (navToggle) {
            navToggle.addEventListener('click', function() {
                // モバイルメニューをトグル
                $(".header-menu-sp").toggleClass("header-menu-sp-active");
                $(".header-menu-list-sp").toggleClass("header-menu-list-sp-active");
            });
        }
    }
});
$(document).ready(function() {
    $(".fixed_item").on("mouseenter", function() {
        $(this).addClass("fixed_item_active");
    }).on("mouseleave", function() {
        $(this).removeClass("fixed_item_active");
    });
});
$(document).ready(function() {
    function addClassOnIntersection(selector, className) {
        const elements = document.querySelectorAll(selector);

        elements.forEach((element) => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        element.classList.add(className);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            observer.observe(element);
        });
    }

    addClassOnIntersection(".js-slidein", "js-slidein-active");
    addClassOnIntersection(".js-fadein", "js-fadein-active");
    addClassOnIntersection(".js-slidein-left", "js-slidein-active");
    addClassOnIntersection(".js-slidein-right", "js-slidein-active");

});
// トップのFAQ
$(document).on("click", ".index-faq-list-title", function() {
    $(this).next().slideToggle(1000, "swing");
    $(this).toggleClass("index-faq-list-title-active");
});

// フローティングCTA - スクロール時に表示
$(document).ready(function() {
    const floatingCta = $(".floating-cta");
    const scrollThreshold = 100;
    let hasScrolled = false;

    if (floatingCta.length) {
        window.addEventListener("scroll", function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;


            if (window.innerWidth <= 940) {

                const isAt4rem = floatingCta.hasClass("menu-active");

                if (scrollTop > scrollThreshold && !hasScrolled) {

                    floatingCta.removeClass("is-hide");
                    hasScrolled = true;
                } else if (scrollTop <= scrollThreshold) {
                    // ページ上部付近
                    if (isAt4rem) {
                        // 下部から4remの位置にある場合、トップにスクロールしたときに非表示にする
                        floatingCta.removeClass("menu-active");
                        floatingCta.find(".close").removeClass("btn-active");
                        floatingCta.addClass("is-hide");
                        hasScrolled = false;
                    } else if (hasScrolled) {
                        // 通常のトップスクロール時の非表示
                        floatingCta.addClass("is-hide");
                        hasScrolled = false;
                    }
                }
            } else {
                // デスクトップでは非表示
                floatingCta.addClass("is-hide");
                hasScrolled = false;
            }
        }, {
            passive: true
        });

        // ウィンドウリサイズも処理
        $(window).on("resize", function() {
            if (window.innerWidth > 940) {
                floatingCta.addClass("is-hide");
                hasScrolled = false;
            }
        });
    }
});

// フローティングCTA閉じるボタン
$(document).on("click", ".floating-cta .close, .floating-cta .close button", function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(".floating-cta").toggleClass("menu-active");
    $(".floating-cta .close").toggleClass("btn-active");
});

// お問い合わせ

jQuery(document).ready(function($) {
    $('.form_11 input[type="submit"]').prop('disabled', true);
    $('.form_10 input[type="checkbox"]').change(function() {
        if ($(this).is(':checked')) {
            $('.form_11 input[type="submit"]').prop('disabled', false);
        } else {
            $('.form_11 input[type="submit"]').prop('disabled', true);
        }
    });
});


// お問い合わせフォームモーダル
document.addEventListener('DOMContentLoaded', function() {
    const cf7Form = document.querySelector('.wpcf7-form');
    if (cf7Form && cf7Form.getAttribute('data-status') === 'sent') {
        const modal = document.getElementById('cf7-success-modal');
        if (modal) {
            modal.style.display = 'block';
        }
    }

    document.addEventListener('click', function(e) {
        const modal = document.getElementById('cf7-success-modal');
        if (modal && e.target === modal) {
            modal.style.display = 'none';
        }
    });

    const closeBtn = document.getElementById('cf7-modal-close');
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            window.location.href = 'https://tenshinjuku.com/';
        });
    }

    if (!cf7Form) return;

    const confirmationModal = document.getElementById("confirmation-modal");
    const thankYouModal = document.getElementById("cf7-success-modal");
    const editButton = document.getElementById("cf-edit");
    const submitButton = document.getElementById("cf-submit");


    const get = (name) => {
        const input = cf7Form.querySelector(`[name="${name}"]`);
        return input ? input.value.trim() : "";
    };

    // 選択されたラジオボタンの値を正しく取得
    const getSelectedRadioValue = (name) => {
        const radios = cf7Form.querySelectorAll(`input[name="${name}"]`);
        for (const radio of radios) {
            if (radio.checked) return radio.value.trim();
        }
        return "";
    };

    const validateForm = () => {
        let errors = [];
        if (!get("your-name")) errors.push("お名前を入力してください。");
        const email = get("your-email");
        if (!email || !email.includes("@")) errors.push("有効なメールアドレスを入力してください。");
        return errors;
    };

    const populateModal = (data) => {
        const cfName = document.getElementById("cf_name");
        const cfKana = document.getElementById("cf_kana");
        const cfTel = document.getElementById("cf_tel");
        const cfTelItem = document.getElementById("cf_tel_item");
        const cfEmail = document.getElementById("cf_email");
        const cfEmailConfirm = document.getElementById("cf_email_confirm");
        const cfText = document.getElementById("cf_text");
        const cfTextItem = document.getElementById("cf_text_item");
        const cfType = document.getElementById("cf_type");
        if (cfName) cfName.innerText = data["your-name"] || "-";
        if (cfTel) {
            const telValue = data["your-tel"] || "";
            cfTel.innerText = telValue;
            if (cfTelItem) {
                cfTelItem.style.display = telValue ? "block" : "none";
            }
        }
        if (cfEmail) cfEmail.innerText = data["your-email"] || "-";
        if (cfType) cfType.innerText = data["type"] || "-";
        if (cfText) {
            const textValue = data["your-text"] || "";
            cfText.innerText = textValue;
            if (cfTextItem) {
                cfTextItem.style.display = textValue ? "block" : "none";
            }
        }
        // if (cfText) cfText.innerText = data["your-text"] || "-";
        if (cfEmailConfirm) cfEmailConfirm.innerText = data["your-email-confirm"] || "-";
        if (cfKana) cfKana.innerText = data["your-kana"] || "-";
    };

    cf7Form.addEventListener("submit", function(e) {
        e.preventDefault();

        const errors = validateForm();
        if (errors.length > 0) {
            alert(errors.join("\n"));
            return;
        }

        const formData = {
            "your-name": get("your-name"),
            "your-kana": get("your-kana"),
            "your-tel": get("your-tel"),
            "your-email": get("your-email"),
            "your-email-confirm": get("your-email-confirm"),
            "type": getSelectedRadioValue("type"),
            "your-text": get("your-text"),
        };

        console.log("Inquiry type:", formData["type"]);

        populateModal(formData);
        if (confirmationModal) {
            confirmationModal.style.display = "flex";
        }
    });

    if (editButton) {
        editButton.addEventListener("click", () => {
            if (confirmationModal) {
                confirmationModal.style.display = "none";
            }
        });
    }

    if (submitButton) {
        submitButton.addEventListener("click", () => {
            const formData = new FormData(cf7Form);

            fetch(cf7Form.action, {
                    method: "POST",
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        window.location.href = "https://tenshinjuku.com/";
                    } else {
                        alert("送信に失敗しました。");
                    }
                })
                .catch(() => {
                    alert("送信中にエラーが発生しました。");
                });
        });
    }
});

// ロード画面
$(document).ready(function() {
    const loadingScreen = $('#loading-screen');
    const progressFill = $('#loading-progress-fill');
    const progressPercentage = $('#loading-progress-percentage');

    if (loadingScreen.length === 0) return;

    // Check if blog module is loaded
    const isBlogModuleLoaded = $('body').hasClass('blog-module-loaded');

    // Hide fixed_item elements when loading starts
    $('body').addClass('loading-active');

    let progress = 0;
    const targetProgress = 100;
    const duration = 2000;
    const interval = 16; // Update every 16ms (~60fps for smooth animation)
    const increment = (targetProgress / duration) * interval;

    // Simulate loading progress
    const progressInterval = setInterval(function() {
        progress += increment;

        if (progress >= targetProgress) {
            progress = targetProgress;
            clearInterval(progressInterval);

            // Wait a bit before hiding
            setTimeout(function() {
                loadingScreen.addClass('loading-screen-hidden');

                // Show fixed_item elements after loading screen starts hiding
                $('body').removeClass('loading-active');

                // Remove from DOM after transition
                setTimeout(function() {
                    loadingScreen.remove();
                    $('body').css('overflow', '');
                }, 500);
            }, 300);
        }

        // Update progress bar and percentage
        const percentage = Math.min(progress, 100);

        // If blog module is loaded, only update percentage, not the progress bar width
        if (isBlogModuleLoaded) {
            // Keep progress bar at 0% width, only update percentage text
            progressFill.css('width', '0%');
            progressPercentage.text(Math.round(percentage) + '%');
        } else {
            // Normal behavior: update both progress bar and percentage
            progressFill.css('width', percentage + '%');
            progressPercentage.text(Math.round(percentage) + '%');
        }
    }, interval);

    // Ensure body doesn't scroll during loading
    $('body').css('overflow', 'hidden');

    // Fallback: Hide loading screen after max time
    setTimeout(function() {
        if (loadingScreen.length > 0) {
            loadingScreen.addClass('loading-screen-hidden');
            $('body').removeClass('loading-active');
            setTimeout(function() {
                loadingScreen.remove();
                $('body').css('overflow', '');
            }, 500);
        }
    }, 5000);
});



// トップに戻るボタン
$(document).ready(function() {
    const $backToTop = $('#back-to-top');

    if ($backToTop.length) {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 300) {
                $backToTop.fadeIn();
            } else {
                $backToTop.fadeOut();
            }
        });

        $backToTop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 600);
        });
    }

    function initializeCoursePrice() {
        const $container = $('.course-price-container');
        if ($container.length === 0) return;

        const $grade1_3 = $container.find('.grade-section[data-grade-section="1-3"]');
        $container.find('.grade-btn[data-grade="1-3"]').addClass('active');
        $grade1_3.addClass('active').css('display', 'grid');

        // モバイルかどうかを確認する
        const isMobile = window.innerWidth <= 768;

        if (isMobile) {
            $grade1_3.find('.course-type-item:first-child .course-type-content').addClass('active').css('display', 'block');
            $grade1_3.find('.course-type-item:first-child .course-type-btn').addClass('active');
            $grade1_3.find('.course-type-item:not(:first-child) .course-type-content').removeClass('active').css('display', 'none');
            $grade1_3.find('.course-type-item:not(:first-child) .course-type-btn').removeClass('active');
        } else {
            $grade1_3.find('.course-type-content').addClass('active').css('display', 'block');
            $grade1_3.find('.course-type-btn').addClass('active');
        }

        $container.find('.grade-section').not($grade1_3).each(function() {
            if (isMobile) {
                $(this).find('.course-type-item:first-child .course-type-content').addClass('active').css('display', 'block');
                $(this).find('.course-type-item:first-child .course-type-btn').addClass('active');
                $(this).find('.course-type-item:not(:first-child) .course-type-content').removeClass('active').css('display', 'none');
                $(this).find('.course-type-item:not(:first-child) .course-type-btn').removeClass('active');
            } else {
                $(this).find('.course-type-content').addClass('active').css('display', 'block');
                $(this).find('.course-type-btn').addClass('active');
            }
        });
        $container.find('.grade-section').not($grade1_3).removeClass('active').css('display', 'none');
    }

    // ページロードを初期化する
    initializeCoursePrice();


    $('.course-price-container .grade-btn').on('click', function() {
        const grade = $(this).data('grade');
        const isMobile = window.innerWidth <= 768;
        const $container = $('.course-price-container');

        $container.find('.grade-btn').removeClass('active');
        $(this).addClass('active');
        $container.find('.grade-section').removeClass('active slide-in');
        $container.find('.grade-section').css('display', 'none');

        const $selectedSection = $container.find('.grade-section[data-grade-section="' + grade + '"]');
        $selectedSection.addClass('active');
        $selectedSection.css('display', 'grid');

        if (grade !== '1-3' && !isMobile) {
            setTimeout(function() {
                $selectedSection.addClass('slide-in');
            }, 10);
        }

        if (isMobile) {
            $selectedSection.find('.course-type-item:first-child .course-type-content').addClass('active').css('display', 'block');
            $selectedSection.find('.course-type-item:first-child .course-type-btn').addClass('active');
            $selectedSection.find('.course-type-item:not(:first-child) .course-type-content').removeClass('active').css('display', 'none');
            $selectedSection.find('.course-type-item:not(:first-child) .course-type-btn').removeClass('active');
        } else {

            $selectedSection.find('.course-type-content').addClass('active').css('display', 'block');
            $selectedSection.find('.course-type-btn').addClass('active');
        }
    });

    $('.course-price-container .course-type-btn').on('click', function(e) {
        // PC版では開閉しない
        if (window.innerWidth > 768) {
            e.preventDefault();
            return;
        }
        e.preventDefault();
        const $content = $(this).next('.course-type-content');
        const isActive = $(this).hasClass('active');
        if (isActive) {
            $(this).removeClass('active');
            $content.slideUp(500, function() {
                $(this).removeClass('active').css('display', 'none');
            });
        } else {
            $(this).addClass('active');
            $content.addClass('active').css('display', 'none').slideDown(500);
        }
    });

    function initializeMiddleSchoolCourse() {
        const $midContainer = $('.course-price-mid-container');
        if ($midContainer.length === 0) return;

        const $grade1 = $midContainer.find('.grade-section[data-grade-section="1"]');
        $midContainer.find('.grade-btn[data-grade="1"]').addClass('active');
        $grade1.addClass('active').css('display', 'grid');

        const isMobile = window.innerWidth <= 768;

        if (isMobile) {
            $grade1.find('.course-type-item-group .course-type-content').removeClass('active').css('display', 'none');
            $grade1.find('.course-type-item-group .course-type-btn').removeClass('active');

            const $firstCourseTypeItem = $grade1.children('.course-type-item').first();
            if ($firstCourseTypeItem.length > 0) {
                $firstCourseTypeItem.find('.course-type-content').addClass('active').css('display', 'block');
                $firstCourseTypeItem.find('.course-type-btn').addClass('active');
            }

            $grade1.children('.course-type-item').not(':first-child').each(function() {
                $(this).find('.course-type-content').removeClass('active').css('display', 'none');
                $(this).find('.course-type-btn').removeClass('active');
            });
        } else {

            $grade1.find('.course-type-content').addClass('active').css('display', 'block');
            $grade1.find('.course-type-btn').addClass('active');
        }

        $midContainer.find('.grade-section').not($grade1).each(function() {
            if (isMobile) {
                $(this).find('.course-type-item-group .course-type-content').removeClass('active').css('display', 'none');
                $(this).find('.course-type-item-group .course-type-btn').removeClass('active');

                const $firstCourseTypeItem = $(this).children('.course-type-item').first();
                if ($firstCourseTypeItem.length > 0) {
                    $firstCourseTypeItem.find('.course-type-content').addClass('active').css('display', 'block');
                    $firstCourseTypeItem.find('.course-type-btn').addClass('active');
                }
                $(this).children('.course-type-item').not(':first-child').each(function() {
                    $(this).find('.course-type-content').removeClass('active').css('display', 'none');
                    $(this).find('.course-type-btn').removeClass('active');
                });
            } else {

                $(this).find('.course-type-content').addClass('active').css('display', 'block');
                $(this).find('.course-type-btn').addClass('active');
            }
        });
        $midContainer.find('.grade-section').not($grade1).removeClass('active').css('display', 'none');
    }
    initializeMiddleSchoolCourse();
    $('.course-price-mid-container .grade-btn').on('click', function() {
        const grade = $(this).data('grade');
        const isMobile = window.innerWidth <= 768;
        const $midContainer = $('.course-price-mid-container');

        $midContainer.find('.grade-btn').removeClass('active');

        $(this).addClass('active');

        $midContainer.find('.grade-section').removeClass('active slide-in');
        $midContainer.find('.grade-section').css('display', 'none');

        const $selectedSection = $midContainer.find('.grade-section[data-grade-section="' + grade + '"]');
        $selectedSection.addClass('active');
        $selectedSection.css('display', 'grid');

        if (grade !== '1' && !isMobile) {
            setTimeout(function() {
                $selectedSection.addClass('slide-in');
            }, 10);
        }

        if (isMobile) {

            $selectedSection.find('.course-type-item-group .course-type-content').removeClass('active').css('display', 'none');
            $selectedSection.find('.course-type-item-group .course-type-btn').removeClass('active');

            const $firstCourseTypeItem = $selectedSection.children('.course-type-item').first();
            if ($firstCourseTypeItem.length > 0) {
                $firstCourseTypeItem.find('.course-type-content').addClass('active').css('display', 'block');
                $firstCourseTypeItem.find('.course-type-btn').addClass('active');
            }

            $selectedSection.children('.course-type-item').not(':first-child').each(function() {
                $(this).find('.course-type-content').removeClass('active').css('display', 'none');
                $(this).find('.course-type-btn').removeClass('active');
            });
        } else {

            $selectedSection.find('.course-type-content').addClass('active').css('display', 'block');
            $selectedSection.find('.course-type-btn').addClass('active');
        }
    });

    $('.course-price-mid-container .course-type-btn').on('click', function(e) {
        // PC版では開閉しない
        if (window.innerWidth > 768) {
            e.preventDefault();
            return;
        }
        e.preventDefault();
        const $content = $(this).next('.course-type-content');
        const isActive = $(this).hasClass('active');

        if (isActive) {
            $(this).removeClass('active');
            $content.slideUp(500, function() {
                $(this).removeClass('active').css('display', 'none');
            });
        } else {
            $(this).addClass('active');
            $content.addClass('active').css('display', 'none').slideDown(500);
        }
    });

    function initializeHighSchoolCourse() {
        const $highContainer = $('.course-price-high-container');
        if ($highContainer.length === 0) return;

        const $grade1 = $highContainer.find('.grade-section[data-grade-section="h1"]');
        $highContainer.find('.grade-btn[data-grade="h1"]').addClass('active');
        $grade1.addClass('active').css('display', 'grid');


        const isMobile = window.innerWidth <= 768;

        if (isMobile) {
            $grade1.find('.course-type-item-group .course-type-content').removeClass('active').css('display', 'none');
            $grade1.find('.course-type-item-group .course-type-btn').removeClass('active');

            const $firstCourseTypeItem = $grade1.children('.course-type-item').first();
            if ($firstCourseTypeItem.length > 0) {
                $firstCourseTypeItem.find('.course-type-content').addClass('active').css('display', 'block');
                $firstCourseTypeItem.find('.course-type-btn').addClass('active');
            }
            $grade1.children('.course-type-item').not(':first-child').each(function() {
                $(this).find('.course-type-content').removeClass('active').css('display', 'none');
                $(this).find('.course-type-btn').removeClass('active');
            });
        } else {
            $grade1.find('.course-type-content').addClass('active').css('display', 'block');
            $grade1.find('.course-type-btn').addClass('active');
        }

        $highContainer.find('.grade-section').not($grade1).each(function() {
            if (isMobile) {
                $(this).find('.course-type-item-group .course-type-content').removeClass('active').css('display', 'none');
                $(this).find('.course-type-item-group .course-type-btn').removeClass('active');


                const $firstCourseTypeItem = $(this).children('.course-type-item').first();
                if ($firstCourseTypeItem.length > 0) {
                    $firstCourseTypeItem.find('.course-type-content').addClass('active').css('display', 'block');
                    $firstCourseTypeItem.find('.course-type-btn').addClass('active');
                }


                $(this).children('.course-type-item').not(':first-child').each(function() {
                    $(this).find('.course-type-content').removeClass('active').css('display', 'none');
                    $(this).find('.course-type-btn').removeClass('active');
                });
            } else {

                $(this).find('.course-type-content').addClass('active').css('display', 'block');
                $(this).find('.course-type-btn').addClass('active');
            }
        });
        $highContainer.find('.grade-section').not($grade1).removeClass('active').css('display', 'none');
    }

    initializeHighSchoolCourse();


    $('.course-price-high-container .grade-btn').on('click', function() {
        const grade = $(this).data('grade');
        const isMobile = window.innerWidth <= 768;
        const $highContainer = $('.course-price-high-container');


        $highContainer.find('.grade-btn').removeClass('active');

        $(this).addClass('active');


        $highContainer.find('.grade-section').removeClass('active slide-in');
        $highContainer.find('.grade-section').css('display', 'none');


        const $selectedSection = $highContainer.find('.grade-section[data-grade-section="' + grade + '"]');
        $selectedSection.addClass('active');
        $selectedSection.css('display', 'grid');


        if (grade !== 'h1' && !isMobile) {
            setTimeout(function() {
                $selectedSection.addClass('slide-in');
            }, 10);
        }


        if (isMobile) {

            $selectedSection.find('.course-type-item-group .course-type-content').removeClass('active').css('display', 'none');
            $selectedSection.find('.course-type-item-group .course-type-btn').removeClass('active');

            const $firstCourseTypeItem = $selectedSection.children('.course-type-item').first();
            if ($firstCourseTypeItem.length > 0) {
                $firstCourseTypeItem.find('.course-type-content').addClass('active').css('display', 'block');
                $firstCourseTypeItem.find('.course-type-btn').addClass('active');
            }


            $selectedSection.children('.course-type-item').not(':first-child').each(function() {
                $(this).find('.course-type-content').removeClass('active').css('display', 'none');
                $(this).find('.course-type-btn').removeClass('active');
            });
        } else {

            $selectedSection.find('.course-type-content').addClass('active').css('display', 'block');
            $selectedSection.find('.course-type-btn').addClass('active');
        }
    });


    $('.course-price-high-container .course-type-btn').on('click', function(e) {
        // PC版では開閉しない
        if (window.innerWidth > 768) {
            e.preventDefault();
            return;
        }
        e.preventDefault();
        const $content = $(this).next('.course-type-content');
        const isActive = $(this).hasClass('active');

        if (isActive) {
            $(this).removeClass('active');
            $content.slideUp(500, function() {
                $(this).removeClass('active').css('display', 'none');
            });
        } else {
            $(this).addClass('active');
            $content.addClass('active').css('display', 'none').slideDown(500);
        }
    });


    $('.gakken-content-block').on('click', function(e) {
        e.preventDefault();
    });

    $('.calligraphy-content-block').on('click', function(e) {
        e.preventDefault();
    });
});