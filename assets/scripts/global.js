$(document).ready(function() {
	var $browser = $(window).width();
	
	if($browser < 992) {
		$('.nav-primary').addClass('offcanvas offcanvas-start');
		$('.nav-primary #navigation-primary').addClass('flex-column');
		
		$('.site-footer .container').addClass('text-center');
		$('.site-footer .nav').addClass('justify-content-center');
	}
	
	if($browser >= 992) {
		$('.nav-primary').addClass('d-flex justify-content-end');
		$('.nav-primary #navigation-primary').addClass('justify-content-end');
		$('.nav-primary #navigation-social').addClass('justify-content-end');
		
		$('.site-footer .nav').addClass('justify-content-end');
	} 
});