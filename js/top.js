jQuery(function ($) {
var slickParams = {
        infinite: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true,
        pauseOnHover: false,
        autoplay: true,
        variableWidth: false,
        pauseOnFocus: false,
        centerMode: false,
        fade: true,
        speed: 1500
    };

    $('#topVisual').slick(slickParams);
    
    $('#topVisualSp').slick(slickParams);
});
