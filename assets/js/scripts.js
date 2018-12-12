$(function () {

//    Variables
    let speedSlider = 2000;

//    Search in header
    $('#search_button').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('open');
    });

//    Forecast slider
    $('#forecast_slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: speedSlider,
        dotsClass: 'slick-dots progress-dots',
        customPaging: function (slider, pageIndex) {
            return '<span class="current"></span><span class="item"></span>';
        }
    });

//    Bonuses slider
    $('#bonuses_slider').on('init', function(event, slick){
        setTimeout(function () {
            $('#bonuses_slider').removeClass('invisible');
        }, 200)
    }).slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: speedSlider,
        dotsClass: 'slick-dots progress-dots',
        customPaging: function (slider, pageIndex) {
            return '<span class="current"></span><span class="item"></span>';
        },
    });

//    Company slider
    $('#company_slider').slick({
        dots: false,
        arrows: true,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        nextArrow: '<div class="slick-next button-grey"><svg><use xlink:href="/assets/image/svg-symbols.svg#arrow_right"></use></svg></div>',
        prevArrow: '<div class="slick-prev button-grey"><svg><use xlink:href="/assets/image/svg-symbols.svg#arrow_left"></use></svg></div>'
    });

//    Preload remove
    $('.preload').removeClass('preload');



});
