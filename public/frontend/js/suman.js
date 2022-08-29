$(document).ready(function () {
    /*** Features Slide*/
    $('.pk-slick-features').slick({
        centerMode: false,
        centerPadding: '60px',
        slidesToShow: 4,
        dots: false,
        infinite: true,
        speed: 350,
        autoplay:true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                }
            }
        ]
    });
    /*** Features Slide*/
    $('.pk-slick-categories').slick({
        centerMode: false,
        centerPadding: '60px',
        slidesToShow: 4,
        dots: false,
        infinite: true,
        speed: 350,
        autoplay:true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                }
            }
        ]
    });
        /*** Testimonial home*/
        $('.pk-slick-testimony').slick({
            centerMode:false,
            centerPadding: '60px',
            slidesToShow: 1,
            dots: true,
            infinite: true,
            speed: 400,
            autoplay:true,
            //appendArrows:$(),
            //prevArrow: $('.rk-prev')
            //nextArrow: $('.rk-next')
            arrows:false,
            //mobileFirst:true,
            //variableWidth: true,
            //prevArrow: $indexBanner.find('.js-banner-prev'),
            //nextArrow: $indexBanner.find('.js-banner-next'),
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: '20px',
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
});
