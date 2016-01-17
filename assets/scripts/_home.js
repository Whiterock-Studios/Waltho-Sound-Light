jQuery(document).ready(function($) {

	function paraSize() {
		$('#home-cta').each(function() {
			$counter = 0;
			$height = Array();

			$(this).find('.cta').each(function() {
				$height[$counter] = $(this).innerHeight();
				$counter++;
			});

			$biggest = Math.max.apply(Math, $height);
			
			$(this).find('.cta').each(function() {
				if ($(this).innerHeight() < $biggest){
					$newSpacer = ($biggest - $(this).innerHeight()) + 40;
					$halfNewSpacer = $newSpacer / 2;
					$(this).find('p').css('margin-bottom',  $halfNewSpacer + 'px');
					$(this).find('p').css('margin-top',  $halfNewSpacer + 'px');
				}
			});
		});
	}

	paraSize();
});