$(document).ready(function(){


	$('.menuBurger').on('click',function(){
		if ($(this).hasClass('open')) {
			$(this).removeClass('open');
			$('.navbar').removeClass('activ');
			$('.menuHover').remove();
		}
		else {
			$(this).addClass('open');
			$('.navbar').addClass('activ');
			$('body').append('<div class="menuHover"></div>');
		}
	});

	/****** <--ANIMATION HEADER--> ******/
    var cbpAnimatedHeader = (function() {

		var docElem = document.documentElement,
			header = document.querySelector( 'header' ),
			didScroll = false,
			changeHeaderOn = 500;

		function init() {
			window.addEventListener( 'scroll', function( event ) {
				if( !didScroll ) {
					didScroll = true;
					setTimeout( scrollPage, 250 );
				}
			}, false );
		}

		function scrollPage() {
			var sy = scrollY();
			if ( sy >= changeHeaderOn ) {
				classie.add( header, 'smaller' );
			}
			else {
				classie.remove( header, 'smaller' );
			}
			didScroll = false;
		}

		function scrollY() {
			return window.pageYOffset || docElem.scrollTop;
		}

		init();

	})();
	/****** </--ANIMATION HEADER--> ******/

});
