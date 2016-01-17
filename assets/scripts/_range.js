jQuery(document).ready(function($) {
	if( $('#range-item-container').length )         // check item exists
	{
		var pageTitleHeight 		= $('.page-title').innerHeight(),
			headerHeight 			= $('header').innerHeight(),
			scrollContainerHeight 	= $('#range-item-container').innerHeight() - 40,
			combinedHeight 			= headerHeight + pageTitleHeight,
			initialOffset 			= $('.range-image').offset().top, 
			imageHeight 			= $('.range-image').innerHeight(),
			x 						= initialOffset - headerHeight;
 
		function imageMover(){
			if ($(window).width() > 993) {

				var	scrollTop = $(window).scrollTop(),
					marginTopFig = (scrollTop - initialOffset) + headerHeight,
					marginScroll = marginTopFig + imageHeight;
				
				if (scrollTop >= x){
					if (marginScroll < scrollContainerHeight){
						$('.range-image').css('margin-top', marginTopFig);
					} else {
						return false;
					}
				} else {
					$('.range-image').css('margin-top', '0');
				}
			}
		}

		imageMover();

		$(window).scroll(function() {
			imageMover();
		});

		// $('.range').click(function(){
		// 	$(this).toggleClass('lightbox-open');
		// });
	}
});

    