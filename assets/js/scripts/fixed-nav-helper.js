/**
 * adding "smaller" class for the top fixed nav
 */


jQuery(document).ready( function($) {

	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$('header.site-header').addClass('stick');
		} else {
			$('header.site-header').removeClass('stick');
		}
	});

});