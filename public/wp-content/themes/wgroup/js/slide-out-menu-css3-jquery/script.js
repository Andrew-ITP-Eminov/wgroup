

$(document).ready(function() {

	var $toggleButton = $('.toggle-button'),
    	$menuWrap = $('.menu-wrap'),
    	$sidebarArrow = $('.sidebar-menu-arrow'),
		$body = $('body'),
		$image = $('.companies_image'),
		$sliderMobile = $('.slider-mobile'),
		$menuItem = $('.menu-sidebar .menu-item');

	// Hamburger button

	$toggleButton.on('click', function() {
		$(this).toggleClass('button-open');
		$menuWrap.toggleClass('menu-show');
		$body.toggleClass('body-disabled');
		$image.toggleClass('hide');
		$sliderMobile.toggleClass('hide');
		$('.header').toggleClass('disabled')
		$('.content').toggleClass('disabled')
		$('.footer').toggleClass('disabled')
	});

	// Sidebar navigation arrows

	$menuItem.click(function (event) {
		$('.menu-sidebar .menu-item a').css({'border': 'none'});
	});

	$sidebarArrow.click(function() {
		$(this).next().slideToggle(300);
	});

});
