$(function () {

//    Vars


//    Variables
    let speedSlider = 2000;

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
            }
        };
    };

//    Search in header
    $('#search_button').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('open');
    });

//    Forecast slider
    $('#forecast_slider').slick(configSlick(1));

//    Bonuses slider
    $('#bonuses_slider').slick(configSlick(2));

//    News slider
    $('#news_slider').slick(configSlick(2));

//    Company slider
    let $company_slider = $('#company_slider'),
        company_slider_show = parseInt($company_slider.attr('data-show'));
    $company_slider.slick({
        dots: false,
        arrows: true,
        infinite: false,
        slidesToShow: company_slider_show,
        slidesToScroll: 1,
        nextArrow: '<div class="slick-next button-grey"><svg><use xlink:href="/assets/image/svg-symbols.svg#arrow_right"></use></svg></div>',
        prevArrow: '<div class="slick-prev button-grey"><svg><use xlink:href="/assets/image/svg-symbols.svg#arrow_left"></use></svg></div>'
    });

//    Preload remove
    $('.preload').removeClass('preload');

//    Accordion
    $('.accordion').find('button').on('click', function () {
        $(this).parents('.accordion').toggleClass('view');
    });

//    Login function
    let $login_button_bubble = $('#login_bubble'),
        $login_button = $('#login_button');
    let $login_profile_bubble = $('#login_profile_bubble'),
        $login_profile = $('#login_profile');
    $login_button.on('click', function (e) {
        if (!$login_button_bubble.hasClass('view')) {
            $login_button_bubble.addClass('view');
        }
    });
    $login_profile.on('click', function (e) {
        if (!$login_profile_bubble.hasClass('view')) {
            $login_profile_bubble.addClass('view');
        }
    });

//    Click out block
    $(document).mouseup(function (e) {
        if (!$login_button_bubble.is(e.target) && $login_button_bubble.has(e.target).length === 0) {
            $login_button_bubble.removeClass('view');
        }
        if (!$login_profile_bubble.is(e.target) && $login_profile_bubble.has(e.target).length === 0) {
            $login_profile_bubble.removeClass('view');
        }
    });

});
