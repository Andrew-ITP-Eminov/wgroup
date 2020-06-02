
const slide = $('.companies_images-wrapper .companies_image');
//const slideCount = slide.length();
const slideWidth = slide.width();
const slideHeight = slide.height();

//let sliderUlWidth = slideCount * slideWidth;

//$('.companies_images-wrapper').css({ width: slideWidth, height: slideHeight });

//$('.companies_images-wrapper').css({ width: sliderUlWidth, marginLeft: - slideWidth });

$('.companies_images-wrapper .companies_image:last-child').prependTo('.companies_images-wrapper');

const handledLeft = (event) => {

    $('.companies_images-wrapper').animate({
        left: + slideWidth
    }, 200, function () {
        $('.companies_images-wrapper .companies_image:last-child').prependTo('.companies_images-wrapper');
        $('.companies_images-wrapper').css('left', '');
    });

    console.log(event);
}

const handledRight = (event) => {
    $('.companies_images-wrapper').animate({
        left: - slideWidth
    }, 200, function () {
        $('.companies_images-wrapper .companies_image:first-child').appendTo('.companies_images-wrapper');
        $('.companies_images-wrapper').css('left', '');
    });

    console.log(event);
}
$('.companies_slider.left').on('click', handledLeft);
$('.companies_slider.right').on('click', handledRight);

/*--------*/


$('.nightmare-info .title-wrapper').on('click',  function()
{
    $(this).siblings().slideToggle( "slow" );

    if (+$(this).siblings().css('height')[0]){
        $(this).children(".nightmare-info_icon").css({'transform': 'rotate(0deg)'});
    }else{
        $(this).children(".nightmare-info_icon").css({'transform': 'rotate(90deg)'});
    }

});

