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
/*!
 * headroom.js v0.7.0 - Give your page some headroom. Hide your header until you need it
 * Copyright (c) 2014 Nick Williams - http://wicky.nillia.ms/headroom.js
 * License: MIT
 */

!function(a,b){"use strict";function c(a){this.callback=a,this.ticking=!1}function d(b){return b&&"undefined"!=typeof a&&(b===a||b.nodeType)}function e(a){if(arguments.length<=0)throw new Error("Missing arguments in extend function");var b,c,f=a||{};for(c=1;c<arguments.length;c++){var g=arguments[c]||{};for(b in g)f[b]="object"!=typeof f[b]||d(f[b])?f[b]||g[b]:e(f[b],g[b])}return f}function f(a){return a===Object(a)?a:{down:a,up:a}}function g(a,b){b=e(b,g.options),this.lastKnownScrollY=0,this.elem=a,this.debouncer=new c(this.update.bind(this)),this.tolerance=f(b.tolerance),this.classes=b.classes,this.offset=b.offset,this.scroller=b.scroller,this.initialised=!1,this.onPin=b.onPin,this.onUnpin=b.onUnpin,this.onTop=b.onTop,this.onNotTop=b.onNotTop}var h={bind:!!function(){}.bind,classList:"classList"in b.documentElement,rAF:!!(a.requestAnimationFrame||a.webkitRequestAnimationFrame||a.mozRequestAnimationFrame)};a.requestAnimationFrame=a.requestAnimationFrame||a.webkitRequestAnimationFrame||a.mozRequestAnimationFrame,c.prototype={constructor:c,update:function(){this.callback&&this.callback(),this.ticking=!1},requestTick:function(){this.ticking||(requestAnimationFrame(this.rafCallback||(this.rafCallback=this.update.bind(this))),this.ticking=!0)},handleEvent:function(){this.requestTick()}},g.prototype={constructor:g,init:function(){return g.cutsTheMustard?(this.elem.classList.add(this.classes.initial),setTimeout(this.attachEvent.bind(this),100),this):void 0},destroy:function(){var a=this.classes;this.initialised=!1,this.elem.classList.remove(a.unpinned,a.pinned,a.top,a.initial),this.scroller.removeEventListener("scroll",this.debouncer,!1)},attachEvent:function(){this.initialised||(this.lastKnownScrollY=this.getScrollY(),this.initialised=!0,this.scroller.addEventListener("scroll",this.debouncer,!1),this.debouncer.handleEvent())},unpin:function(){var a=this.elem.classList,b=this.classes;(a.contains(b.pinned)||!a.contains(b.unpinned))&&(a.add(b.unpinned),a.remove(b.pinned),this.onUnpin&&this.onUnpin.call(this))},pin:function(){var a=this.elem.classList,b=this.classes;a.contains(b.unpinned)&&(a.remove(b.unpinned),a.add(b.pinned),this.onPin&&this.onPin.call(this))},top:function(){var a=this.elem.classList,b=this.classes;a.contains(b.top)||(a.add(b.top),a.remove(b.notTop),this.onTop&&this.onTop.call(this))},notTop:function(){var a=this.elem.classList,b=this.classes;a.contains(b.notTop)||(a.add(b.notTop),a.remove(b.top),this.onNotTop&&this.onNotTop.call(this))},getScrollY:function(){return void 0!==this.scroller.pageYOffset?this.scroller.pageYOffset:void 0!==this.scroller.scrollTop?this.scroller.scrollTop:(b.documentElement||b.body.parentNode||b.body).scrollTop},getViewportHeight:function(){return a.innerHeight||b.documentElement.clientHeight||b.body.clientHeight},getDocumentHeight:function(){var a=b.body,c=b.documentElement;return Math.max(a.scrollHeight,c.scrollHeight,a.offsetHeight,c.offsetHeight,a.clientHeight,c.clientHeight)},getElementHeight:function(a){return Math.max(a.scrollHeight,a.offsetHeight,a.clientHeight)},getScrollerHeight:function(){return this.scroller===a||this.scroller===b.body?this.getDocumentHeight():this.getElementHeight(this.scroller)},isOutOfBounds:function(a){var b=0>a,c=a+this.getViewportHeight()>this.getScrollerHeight();return b||c},toleranceExceeded:function(a,b){return Math.abs(a-this.lastKnownScrollY)>=this.tolerance[b]},shouldUnpin:function(a,b){var c=a>this.lastKnownScrollY,d=a>=this.offset;return c&&d&&b},shouldPin:function(a,b){var c=a<this.lastKnownScrollY,d=a<=this.offset;return c&&b||d},update:function(){var a=this.getScrollY(),b=a>this.lastKnownScrollY?"down":"up",c=this.toleranceExceeded(a,b);this.isOutOfBounds(a)||(a<=this.offset?this.top():this.notTop(),this.shouldUnpin(a,c)?this.unpin():this.shouldPin(a,c)&&this.pin(),this.lastKnownScrollY=a)}},g.options={tolerance:{up:0,down:0},offset:250,scroller:a,classes:{pinned:"headroom--pinned",unpinned:"headroom--unpinned",top:"headroom--top",notTop:"headroom--not-top",initial:"headroom"}},g.cutsTheMustard="undefined"!=typeof h&&h.rAF&&h.bind&&h.classList,a.Headroom=g}(window,document);


// grab an element
var myElement = document.querySelector("header");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init(); 


jQuery(document).ready(function($) {
	$headerHeight = $('header').outerHeight();
	$('main').css('margin-top', $headerHeight + 'px');
});
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

    
var element =  document.querySelector('.slider');
if (typeof(element) != 'undefined' && element != null)
{
  
	var slide = document.querySelectorAll(".slide"),
		slidecounter = 0,
		counter = 1;

		Array.prototype.forEach.call(slide, function(el, i){
			slidecounter++;
		});

		var sliderwidth = slidecounter * 100;

	document.querySelector(".slider").style.width = sliderwidth + "%";

	var slidewidth = 100 / slidecounter,
		margin = slidewidth;


		Array.prototype.forEach.call(slide, function(el, i){
			el.style.width = slidewidth + "%";
		});

	document.querySelector(".slide:first-child").classList.add("first-slide");
	document.querySelector(".first-slide").setAttribute('data-left', 0 );

	function slideshow() {
		if (slidecounter > counter) {
			counter++;
			document.querySelector(".first-slide").style.marginLeft= "-" + margin + "%";
			document.querySelector(".first-slide").setAttribute('data-left', margin );
			margin = margin + slidewidth;
		} else {
			counter = 1;
			document.querySelector(".first-slide").style.marginLeft="0";
			document.querySelector(".first-slide").setAttribute('data-left', 0 );
			margin = slidewidth;
		}
	};

	var startslideshow = setInterval(function () {slideshow()}, 5000);

	document.getElementById("pauseSlider").onclick=function() {
		if (document.querySelector(".slider").classList.contains("paused")) {
			startslideshow = setInterval(function () {slideshow()}, 5000);
			document.querySelector(".slider").classList.remove("paused");
			this.innerHTML = "&#10073;&#10073;";
		} else {
			clearInterval(startslideshow);
			document.querySelector(".slider").classList.add("paused");
			this.innerHTML = "&#9658;";
		}
	}

	document.getElementById("slider-next").onclick = function() { // Next Button
		var firstSlide = document.querySelector(".first-slide"),
			x = 100 / slidecounter,
			oldMargin = firstSlide.getAttribute('data-left');

		if (slidecounter > counter) {
			newMargin = Number(oldMargin) + Number(x);
			counter ++;
		} else {
			newMargin = 0;
			counter = 1;
		};

		document.querySelector('.first-slide').style.marginLeft = '-' + newMargin + '%';
		firstSlide.setAttribute('data-left',newMargin);
		clearInterval(startslideshow);
		document.querySelector('.slider').classList.add("paused");
		document.getElementById('pauseSlider').innerHTML = "&#9658;";
	}

	document.getElementById("slider-prev").onclick = function() {  // Previous Button
		var firstSlide = document.querySelector(".first-slide"),
			x = 100 / slidecounter,
			oldMargin = firstSlide.getAttribute('data-left');

		if (counter > 1) {
			newMargin = Number(oldMargin) - Number(x);
			counter --;
		} else {
			newMargin = (100 / slidecounter) * (slidecounter - 1);
			counter = slidecounter;
		};

		document.querySelector('.first-slide').style.marginLeft = '-' + newMargin + '%';
		firstSlide.setAttribute('data-left',newMargin);

		clearInterval(startslideshow);
		document.querySelector('.slider').classList.add("paused");
		document.getElementById('pauseSlider').innerHTML = "&#9658;";
	}
}
