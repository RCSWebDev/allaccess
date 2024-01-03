$(document).ready(function() {
	var $browser = $(window).width();
	
	if($browser < 768) {
		$('.site-footer p').addClass('text-center');
		$('.site-footer .menu-socials').addClass('justify-content-center');
	}
	
	if($browser >= 768) {
		$('.site-footer .row').addClass('align-items-center');
		$('.site-footer .menu-socials').addClass('justify-content-end');
	}
	
	if($browser >= 992) {
		$('.site-header .col-12').addClass('justify-content-between');
		$('.site-header .nav-header').addClass('d-flex justify-content-end');
	}
});