
$(document).ready(function () {


    $('.slider').slick({
        dots: true,
        initialSlide: 1,
        arrows: true
    });

    $('.designs-list li').mouseover(function () {
       $(this).children('.jq-text').find('p').text('Redesigning width personality');
       // $(this).children().find('.hover-block').fadeOut(50);
    });
    $('.designs-list li').mouseout(function () {
        $(this).children('.jq-text').find('p').text('Lorem ipsum dolor sit amet,consectetur.');
        // $(this).children().find('.hover-block').fadeIn(50);
    });

    $('.grid').masonry ({
        // options
        itemSelector: '.grid-item',
        columnWidth: 200,
        fitWidth: true
    });
    $('.grid').on( 'click', '.grid-item', function() {
        // remove clicked element
        $('.grid').masonry( 'remove', this )
        // layout remaining item elements
            .masonry('layout');
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
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

});


