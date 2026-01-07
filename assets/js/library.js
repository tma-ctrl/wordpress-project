$(function() {
    $("#fv-box-study").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1500,
        cssEase: 'ease-in-out',
        infinite: true,
        centerMode: true,
        centerPadding: '15%',
        responsive: [{
                breakpoint: 940,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '10%',
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '0',
                    autoplaySpeed: 5000,
                    speed: 1500,
                },
            },
        ],
    });
});
$(function() {
    if ($("#message-slide-photo").length) {
        $("#message-slide-photo").slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 1500,
            infinite: true,
            cssEase: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
            rtl: false,
            responsive: [{
                    breakpoint: 940,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '0',
                        autoplaySpeed: 5000,
                        speed: 1500,
                    },
                },
            ],
        });
    }
});
$(function() {
    $("#fv-boxe").slick({
        swipeToSlide: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        accessibility: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '15%',
        arrows: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 4000,
        infinite: true,
        responsive: [{
            breakpoint: 940,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '10%',
            },
        }, ],
    });
});

$(function() {
    $("#footer-slide-photo").slick({
        swipeToSlide: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        accessibility: false,
        rtl: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        centerMode: true,
        centerPadding: '10%',
        infinite: true,
        responsive: [{
                breakpoint: 1440,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    rtl: true,
                },
            },
            {
                breakpoint: 920,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    rtl: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    rtl: true,
                },
            },
        ],
    });
});
$(function() {
    $("#fv-slide-photo").slick({
        swipeToSlide: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        accessibility: false,
        rtl: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        centerMode: true,
        centerPadding: '10%',
        infinite: true,
        responsive: [{
                breakpoint: 1440,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    rtl: true,
                },
            },
            {
                breakpoint: 920,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    rtl: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    rtl: true,
                },
            },
        ],
    });
});
$(function() {
    $("#grand-slide-photo").slick({
        swipeToSlide: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        accessibility: false,
        rtl: true,
        slidesToShow: 5,
        slidesToScroll: 1.5,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true,

        responsive: [{
                breakpoint: 1440,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    rtl: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    rtl: true,
                },
            },
        ],
    });
});
$(function() {
    var $eventSlider = $("#event-slider");

    function updateStairsEffect() {
        var $centerSlide = $eventSlider.find('.slick-center');
        if ($centerSlide.length === 0) return;

        // Remove all stairs classes
        $eventSlider.find('.slick-slide').removeClass('stairs-left-1 stairs-left-2 stairs-right-1 stairs-right-2');

        // Get all visible slides in DOM order (as they appear visually)
        var $allSlides = $eventSlider.find('.slick-slide');
        var centerPosition = -1;

        // Find the center slide's position in the DOM order
        $allSlides.each(function(index) {
            if ($(this).hasClass('slick-center')) {
                centerPosition = index;
                return false; // break the loop
            }
        });

        if (centerPosition === -1) return;

        // Add classes to exactly 2 slides on the left side (before center in DOM)
        var leftCount = 0;
        for (var i = centerPosition - 1; i >= 0 && leftCount < 2; i--) {
            leftCount++;
            var $leftSlide = $allSlides.eq(i);
            if (leftCount === 1) {
                $leftSlide.addClass('stairs-left-1');
            } else if (leftCount === 2) {
                $leftSlide.addClass('stairs-left-2');
            }
        }

        // Add classes to exactly 2 slides on the right side (after center in DOM)
        var rightCount = 0;
        for (var i = centerPosition + 1; i < $allSlides.length && rightCount < 2; i++) {
            rightCount++;
            var $rightSlide = $allSlides.eq(i);
            if (rightCount === 1) {
                $rightSlide.addClass('stairs-right-1');
            } else if (rightCount === 2) {
                $rightSlide.addClass('stairs-right-2');
            }
        }
    }

    $eventSlider.slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1500,
        cssEase: 'ease-in-out',
        infinite: true,
        centerMode: true,
        centerPadding: '15%',
        responsive: [{
                breakpoint: 940,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '10%',
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '0',
                    autoplaySpeed: 5000,
                    speed: 1500,
                },
            },
        ],
    });

    // Update stairs effect on slider events
    $eventSlider.on('init reInit afterChange', function() {
        setTimeout(updateStairsEffect, 50);
    });

    // Initial call if already initialized
    if ($eventSlider.hasClass('slick-initialized')) {
        updateStairsEffect();
    }
});

$(function() {
    var $eventSliderSp = $("#event-slider-sp");

    function initEventSliderSp() {
        var windowWidth = $(window).width();

        // Only initialize on mobile (768px and below)
        if (windowWidth <= 768) {
            if (!$eventSliderSp.hasClass('slick-initialized')) {
                $eventSliderSp.slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: false,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    speed: 1500,
                    cssEase: 'ease-in-out',
                    infinite: true,
                    centerMode: true,
                    centerPadding: '0',
                });
            }
        } else {
            // Destroy slider if it exists on desktop
            if ($eventSliderSp.hasClass('slick-initialized')) {
                $eventSliderSp.slick('unslick');
            }
        }
    }

    // Initialize on page load
    initEventSliderSp();

    // Re-initialize on window resize
    $(window).on('resize', function() {
        clearTimeout(window.eventSliderSpResizeTimer);
        window.eventSliderSpResizeTimer = setTimeout(initEventSliderSp, 100);
    });
});
/**
 * ブログスライダーの初期化とドット幅の制御
 * - スライド数に応じてドット（li）の数を自動設定
 * - 各ドットの幅をスライド数に基づいて自動計算（合計幅を均等分割）
 * - デスクトップ: 合計800px、モバイル: コンテナ幅100%
 */
$(function() {
    var $blogSlider = $("#fv-blog");
    $blogSlider.slick({
        infinite: true,
        slidesToShow: 2.5,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        customPaging: function(slider, i) {
            return '<span class="slick-progress-dot"><span class="progress-bar"></span></span>';
        },
        infinite: true,
        rtl: true,
        responsive: [{
            breakpoint: 940,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                rtl: true,
            },
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                rtl: true,
            },
        }, ],
    });

    // ドットの幅をスライド数に応じて設定する関数
    function setDotsWidth() {
        if (!$blogSlider.hasClass('slick-initialized')) {
            return;
        }

        var slideCount = $blogSlider.slick('getSlick').slideCount;
        var $dots = $('#fv-blog .slick-dots li');
        var liCount = $dots.length;

        // 実際のliの数を取得（スライド数と一致するはず）
        var actualCount = liCount > 0 ? liCount : slideCount;

        // 画面幅に応じて合計幅を設定
        var totalWidth;
        var windowWidth = $(window).width();
        if (windowWidth <= 768) {
            // モバイル: 100%幅を使用
            var containerWidth = $('#fv-blog .slick-dots').width();
            totalWidth = containerWidth;
        } else if (windowWidth > 768 && windowWidth <= 940) {
            // 768px-940px範囲: コンテナ幅を使用
            var containerWidth = $('#fv-blog .slick-dots').width();
            totalWidth = containerWidth;
        } else {
            // デスクトップ（940px以上）: 固定幅
            totalWidth = 850;
        }

        // 各liの幅を計算
        var dotWidth = totalWidth / actualCount;

        // すべてのliに幅を設定
        $dots.css('width', dotWidth + 'px');

        // span.slick-progress-dotにも同じ幅を設定
        $dots.find('.slick-progress-dot').css('width', dotWidth + 'px');
    }

    $blogSlider.on('init', function() {
        setDotsWidth();
    });

    // ウィンドウリサイズ時に幅を再計算
    $(window).on('resize', function() {
        setTimeout(setDotsWidth, 100);
    });

    // 既に初期化されている場合は即座に設定
    if ($blogSlider.hasClass('slick-initialized')) {
        setDotsWidth();
    }

    // スライダーが再初期化された場合にも設定（レスポンシブ変更時など）
    $blogSlider.on('reInit', function() {
        setDotsWidth();
    });

    $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $('.progress-bar').css('width', '0%');
    });

    $('.slider').on('afterChange', function(event, slick, currentSlide) {
        $('.slick-dots li').eq(currentSlide).find('.progress-bar').css('width', '100%');
    });
});

$(function() {
    var $voiceSlider = $("#voice-slider");

    function applyBlurEffect() {
        let windowWidth = $(window).width();
        if (windowWidth <= 940) {
            $voiceSlider.find('.slick-slide').removeClass('blur-effect');
            return;
        }

        let slides = $voiceSlider.find('.slick-slide.slick-active');
        slides.removeClass('blur-effect');
        slides.first().addClass('blur-effect');
        slides.last().addClass('blur-effect');
    }

    $voiceSlider.on('init reInit', applyBlurEffect);
    $voiceSlider.on('afterChange', function() {
        requestAnimationFrame(applyBlurEffect);
    });

    $(window).on('resize', function() {
        clearTimeout(window.voiceSliderResizeTimer);
        window.voiceSliderResizeTimer = setTimeout(applyBlurEffect, 100);
    });

    $voiceSlider.slick({
        swipeToSlide: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        accessibility: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: false,
        centerMode: false,
        responsive: [{
                breakpoint: 1440,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 940,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,

                },
            }
        ],
    });

    setTimeout(applyBlurEffect, 100);
});