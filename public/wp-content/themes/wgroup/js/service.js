$(document).ready(function(){
    $(".service-slogan_btns").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });

    $('.service-slider.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        navText: [
            "<div class='service_slider left'></div>",
            "<div class='service_slider right'></div>"
        ],

        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
        }
    })
});