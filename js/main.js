
$(document).ready(function () {

    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 200,
        fitWidth: true
    });
    // $(".owl-carousel").owlCarousel();


    // jQuery(window).load(function(){
    //     $('.slider').fractionSlider({
    //         backgroundAnimation: true,
    //         backgroundY: 100,
    //         backgroundX: 250
    //     });
    // });

    $('.slider').slick({
        // dots: true,
        // infinite: true,
        // speed: 500,
        // fade: true,
        // cssEase: 'linear'
    });
});


