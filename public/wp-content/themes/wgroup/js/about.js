// $(window).on('load resize', function () {
//     if ($(this).width() < 768) {
//     }
// })

$(document).ready(function(){
    $('.bullet_title-wrapper').on('click', function () {
        $(this).siblings().slideToggle("slow");
        if (+$(this).siblings().css('height')[0]) {
            $(this).children(".bullet_image").css({'transform': 'rotate(0deg)'});
        } else {
            $(this).children(".bullet_image").css({'transform': 'rotate(90deg)'});
        }
    });


    $(window).on('load resize', function () {
        if ($(this).width() > 1440) {
            $(".companies_images-wrapper.owl-carousel").trigger('destroy.owl.carousel');
        } else {
            $('.companies_images-wrapper.owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                dots: false,
                navText: [
                    "<div class='companies_slider  left'></div>",
                    "<div class='companies_slider  right'></div>"
                ],
                responsive: {
                    0:{
                        items: 2,
                    },
                    660:{
                        items: 3,
                    },
                    768:{
                        items: 4,
                    },
                    1200:{
                        items: 5,
                    }
                }
            })
        }
    })

});