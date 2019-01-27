$(function () {

    if ($(window).width() < 1220) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 1) {
                $('header').addClass("sticky");
            } else {
                $('header').removeClass("sticky");
            }
        });
    }


//    Variables
    let speedSlider = 2000,
        $menu_header = $('#menu_header'),
        $menu_mob = $('#menu_mob'),
        $backdrop = $('#backdrop');

//    Mobile menu
    $menu_mob.on('click', function (e) {
        e.preventDefault();
        $menu_header.slideToggle(200);
        $(this).toggleClass('open');
        $backdrop.toggleClass('on');
        $('header').toggleClass('white');
    });
    $backdrop.on('click', function (e) {
        e.preventDefault();
        $menu_header.slideUp(200);
        $menu_mob.removeClass('open');
        $backdrop.removeClass('on');
        $('header').removeClass('white');
    });
    $menu_header.find('.arrow').on('click', function (e) {
        e.preventDefault();
        let parent = $(this).parent();
        if ($(window).width() < '1220') {
            if ($(this).hasClass('view')) {
                parent.find('.sub-menu').slideUp(200);
            } else {
                parent.find('.sub-menu').slideDown(200);
            }
            $(this).toggleClass('view')
        }
    });

//    Filter company
    let $open_filter = $('#open_filter');
    $open_filter.on('click', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('open').find('form').slideToggle(200);
    });
    $open_filter.parent().find('.arrow').on('click', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('open').find('form').slideToggle(200);
    });

//    Search in header
    $('#search_button').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('open');
    });

//    Config slider
    let configSlick = function (show) {
        return {
            dots: true,
            arrows: false,
            infinite: true,
            slidesToShow: show,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: speedSlider,
            dotsClass: 'slick-dots progress-dots',
            customPaging: function (slider, pageIndex) {
                return '<span class="current"></span><span class="item"></span>';
            },
            responsive: [
                {
                    breakpoint: 1220,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        };
    };

//    Forecast slider
    $('#forecast_slider').slick(configSlick(1));

//    News slider
    $('#news_slider').slick(configSlick(2));

//    Bonuses slider
    $('#bonuses_slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: speedSlider,
        dotsClass: 'slick-dots progress-dots',
        customPaging: function (slider, pageIndex) {
            return '<span class="current"></span><span class="item"></span>';
        },
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                }
            }
        ]
    });

//    Horizontal scroll with mobile
    $('.horizontal-scroll').slick({
        dots: false,
        arrows: false,
        infinite: false,
        slidesToShow: 1,
        variableWidth: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 1220,
                settings: "unslick"
            }
        ]
    });
    $('.horizontal-scroll-sm').slick({
        dots: false,
        arrows: false,
        infinite: false,
        slidesToShow: 1,
        variableWidth: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 991,
                settings: "unslick"
            },
            {
                breakpoint: 767,
                settings: "slick"
            },
            {
                breakpoint: 319,
                settings: "unslick"
            }
        ]
    });

//    Forecast tabs
    $('.forecast-sport').slick({
        dots: false,
        arrows: false,
        infinite: false,
        slidesToShow: 1,
        variableWidth: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 767,
                settings: "unslick"
            }
        ]
    })

//    Company slider
    let $company_slider = $('#company_slider');
    if ($company_slider.length > 0) {
        let company_slider_show = parseInt($company_slider.attr('data-show'));
        $company_slider.slick({
            dots: false,
            arrows: true,
            infinite: false,
            slidesToShow: company_slider_show,
            slidesToScroll: 1,
            nextArrow: '<div class="slick-next button-grey"><svg><use xlink:href="/assets/image/svg-symbols.svg#arrow_right"></use></svg></div>',
            prevArrow: '<div class="slick-prev button-grey"><svg><use xlink:href="/assets/image/svg-symbols.svg#arrow_left"></use></svg></div>',
            responsive: [
                {
                    breakpoint: 1219,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        variableWidth: true,
                    }
                }
            ]
        });
    }

//    Preload remove
    $('.preload').removeClass('preload');

//    Accordion
    $('.accordion').find('button').on('click', function () {
        $(this).parents('.accordion').toggleClass('view');
    });

//    Accordion-jq
    $('.accordion-jq').find('.subtitle').on('click', function () {
        let parent = $(this).parent(),
            wrap = parent.find('.wrapper');

        if (parent.hasClass('hide')) {
            wrap.slideDown(400);
            parent.removeClass('hide');
        } else {
            wrap.slideUp(400);
            parent.addClass('hide');
        }
    })

});
