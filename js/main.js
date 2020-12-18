$('.user-form').hide();
$(function () {
    //user
    $('.user__title').click(function (e) {
        e.preventDefault();
        var clicks = $(this).data('clicks');
        if (!clicks) {
            $('.user-form').slideDown();
            $('.cart-content').slideUp();
        } else {
            $('.user-form').slideUp();
        }
        $(this).data("clicks", !clicks);
    });

    //slider
    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        arrows: true,
        appendArrows: $('.arrows'),
        dots: false,
        prevArrow: $('.arrows__prev'),
        nextArrow: $('.arrows__next'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});