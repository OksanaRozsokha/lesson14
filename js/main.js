
$(document).ready(function () {


    $('.slider').slick({
        dots: true,
        initialSlide: 1,
        arrows: true
    });

    $('.design-list li').mouseover(function () {
       $(this).children('.jq-text').find('p').text('Redesigning width personality');
    });
    $('.design-list li').mouseout(function () {
        $(this).children('.jq-text').find('p').text('Lorem ipsum dolor sit amet,consectetur.');
    });

    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 200,
        fitWidth: true,
        responsive: [
            {
                breakpoint: 420,
                settings: {
                    fitWidth: false
                }
            }
        ]
    });
    $('.clients-list').slick({
        infinite: true,
        slidesToShow: 8,
        slidesToScroll: 2,
        arrows: true,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

});


