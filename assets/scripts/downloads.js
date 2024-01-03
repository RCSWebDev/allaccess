$(document).ready(function() {
	var $browser = $(window).width();
	
	if($browser >= 768) {
		$('.download-btns').addClass('text-end');
	}
});