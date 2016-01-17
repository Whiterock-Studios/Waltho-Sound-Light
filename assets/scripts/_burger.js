jQuery(document).ready(function($) {
	$('#burger').click(function(){
		$(this).toggleClass('burger-cooked');
		$('nav .menus').slideToggle(300);
	});

	
	$(window).resize(function() {
		if ($(this).width() <= 992) {
			$('#burger').removeClass('burger-cooked');
			$('nav .menus').hide();
		} else {
			$('#burger').removeClass('burger-cooked');
			$('nav .menus').show();
		}
	});
});