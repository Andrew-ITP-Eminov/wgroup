

$(document).ready(function() {

	var $toggleButton = $('.toggle-button'),
    	$menuWrap = $('.menu-wrap'),
    	$sidebarArrow = $('.sidebar-menu-arrow'),
		$body = $('body'),
		$image = $('.companies_image'),
		$sliderMobile = $('.slider-mobile');

	// Hamburger button

	$toggleButton.on('click', function() {
		$(this).toggleClass('button-open');
		$menuWrap.toggleClass('menu-show');
		$body.toggleClass('body-disabled');
		$image.toggleClass('hide');
		$sliderMobile.toggleClass('hide');
	});

	// Sidebar navigation arrows

	$sidebarArrow.click(function() {
		$(this).next().slideToggle(300);
	});

});
