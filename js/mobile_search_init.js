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

});

 document.addEventListener("DOMContentLoaded", initAccordion, true);
 function initAccordion() {
	 function toggleAccordion() {
	 
	 let accordionHiddenText = document.getElementById('accordion-hidden-content');
		 
	 if(accordionHiddenText.style.display=="block"){
         
		 document.getElementById('accordion-read-more').innerHTML="Read More";
         accordionHiddenText.style.display="none";
		 
     } else {
         
		 document.getElementById('accordion-read-more').innerHTML="Read Less";
          accordionHiddenText.style.display="block";
        }
   }
	 
	let readMore = document.getElementById('accordion-read-more');
	if (readMore) {
		readMore.addEventListener('click', toggleAccordion, true);
	}
	 
 }

