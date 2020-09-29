jQuery(function($) {

	if ( $('#header-mobile-search').length ) {

		$('#header-mobile-search').click(function() {

			$('#mobile-search-bar').toggle();

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

			$('#accordion-read-more').click(function() {

				$('#accordion-hidden-content').toggle();

				let text = $('#accordion-read-more').text();
				$('#accordion-read-more').text(
					text == "Read More" ? "Read Less" : "Read More"
				);

			});

		}

	});

});
