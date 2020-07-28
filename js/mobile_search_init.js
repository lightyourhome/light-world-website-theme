jQuery(function($) {

	if ( $('#header-mobile-search') ) {

		$('#header-mobile-search').toggle(function() {

			$('#mobile-search-bar').show();

		}, function() {

			$('#mobile-search-bar').hide();

		});
	
	}

	$(window).scroll( function() { addStickyNav() } );

	let navigation = document.getElementById('header-container')
	let offset = navigation.offsetTop;

	function addStickyNav() {

		if ( window.pageYOffset >= offset ) {

			navigation.classList.add('sticky-nav');
			$('#woocommerce-wrapper-shop').css({ 'margin-top' : '30px' });

		} else {

			navigation.classList.remove('sticky-nav');
			$('#woocommerce-wrapper-shop').css({ 'margin-top' : 'none' });


		}

	}

	$(document).ready(function() {

		if ( $('#accordion-read-more').length ) {

			$('#accordion-read-more').toggle(function() {

				$('#accordion-hidden-content').show();
				$(this).text('Read Less');
		
			}, function() {
		
				$('#accordion-hidden-content').hide();
				$(this).text('Read More');
		
			});		

		}

	});

});
