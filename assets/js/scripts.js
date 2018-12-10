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
        customPaging: function (slider, pageIndex) {
            return '<span class="progress"></span><span class="item"></span>';
        }
    });

//    Company slider
    $('#company_slider').slick({
        dots: false,
        arrows: true,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        nextArrow: '<div class="slick-next button-grey"></div>',
        prevArrow: '<div class="slick-prev button-grey"></div>'
    });

//    Preload remove
    $('.preload').removeClass('preload');



});
