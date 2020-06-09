$(document).ready(function() {

    const slide = $('.companies_images-wrapper .companies_image');
    const slideWidth = slide.width();

    $('.companies_images-wrapper .companies_image:last-child').prependTo('.companies_images-wrapper');
    const handledLeft = (event) => {
        $('.companies_images-wrapper').animate({
            left: +slideWidth
        }, 200, function () {
            $('.companies_images-wrapper .companies_image:last-child').prependTo('.companies_images-wrapper');
            $('.companies_images-wrapper').css('left', '');
        });
    }

    const handledRight = (event) => {
        $('.companies_images-wrapper').animate({
            left: -slideWidth
        }, 200, function () {
            $('.companies_images-wrapper .companies_image:first-child').appendTo('.companies_images-wrapper');
            $('.companies_images-wrapper').css('left', '');
        });
    }
    $('.companies_slider.left').on('click', handledLeft);
    $('.companies_slider.right').on('click', handledRight);

    /*--------*/


    $('.nightmare-info .title-wrapper').on('click', function () {
        $(this).siblings().slideToggle("slow");
        if (+$(this).siblings().css('height')[0]) {
            $(this).children(".nightmare-info_icon").css({'transform': 'rotate(0deg)'});
        } else {
            $(this).children(".nightmare-info_icon").css({'transform': 'rotate(90deg)'});
        }
    });

    $('.companies_images-wrapper_carousel.owl-carousel').owlCarousel({
        loop: true,
        margin: 50,
        nav: true,
        navText: [
            "<div class='companies_slider left'></div>",
            "<div class='companies_slider right'></div>"
        ],
        dots: false,
        responsive: {
            0: {
                items: 2,
                margin: 50,
            },
            400: {
                items: 3,
                margin: 50,
            },
            600: {
                items: 4,
                margin: 50,
            },
            1000: {
                items: 5
            }
        }
    })

    $('.companies_images-wrapper_carousel .owl-stage').css({
        'display': 'flex',
        'align-items': 'center',
    });

    $('.service-wrapper-responsive.owl-carousel').owlCarousel({
        loop: true,
        margin: 35,
        nav: true,
        navText: [
            "<div class='services_slider left'></div>",
            "<div class='services_slider right'></div>"
        ],
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            425: {
                items: 2,
            },
            660: {
                items: 3,
            },
        }
    })

    $('.slider-wrapper.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        navText: [
            "<div class='main_slider left'></div>",
            "<div class='main_slider right'></div>"
        ],
        responsive: {
            0: {
                items: 1,
            },
        }
    })

    const owl = $('.owl-carousel');
    owl.on('changed.owl.carousel', function() {
        const changeColor = $('.slider .owl-dots .owl-dot:nth-child(2)').hasClass('active')
        // const changeColorMobile = $('.slider-mobile .owl-dots .owl-dot:nth-child(1)').hasClass('active')

        if (changeColor){
            $('.slider .owl-dot:nth-child(2) span').css({'background-color' : '#0014C2'});
            $('.main_slider.right').removeClass('arrow-white').addClass('arrow-blue');
            $('.main_slider.left').removeClass('arrow-white').addClass('arrow-blue');
        }else{
            $('.slider .owl-dot:nth-child(2)  span').css({'background-color' : 'rgba(255,255,255,0.3)'});
            $('.main_slider.right').removeClass('arrow-blue').addClass('arrow-white');
            $('.main_slider.left').removeClass('arrow-blue').addClass('arrow-white');
        }
    });

    $('.slider-mobile.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        // navText: [
        //     "<div class='main_slider left'></div>",
        //     "<div class='main_slider right'></div>"
        // ],

        responsive: {
            0: {
                items: 1,
            },
        }
    })

});

