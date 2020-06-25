jQuery(function($) {

	if ( $('#header-mobile-search') ) {

		$('#header-mobile-search').toggle(function() {

			$('#mobile-search-bar').show();

		}, function() {

			$('#mobile-search-bar').hide();

		});
	
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

