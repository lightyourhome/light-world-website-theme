document.addEventListener('DOMContentLoaded', () => {

    let searchIcon = document.getElementById('header-mobile-search');

    if (searchIcon) {

      searchIcon.addEventListener('click', showSearch, true);

    }

});

function showSearch() {

  let searchBar = document.getElementById('mobile-search-bar');
  let wooContent = document.getElementById('woocommerce-wrapper-shop');
  let wooCategoryHeader = document.getElementById('prod_cat_heading');
  let pageContent = document.querySelector('#content');
  
  if (wooContent) {
	  
	  if (searchBar.style.display === "block") {
		  
		  searchBar.style.display = "none";
		  wooContent.style.marginTop = "0px";
		  
		  if (wooCategoryHeader) {
			  wooCategoryHeader.style.marginTop = "0px";
		  }
		  
	  } else {
		  
		  searchBar.style.display = "block";
		  wooContent.style.marginTop = "36px";
		  
		  if (wooCategoryHeader) {
			  wooCategoryHeader.style.marginTop = "36px";
		  }
		  
	  }
  }
	  
	  if (pageContent) {
		  
		  if (searchBar.style.display === "block") {
			  
		  searchBar.style.display = "none";
		  pageContent.style.marginTop = "0px";
			  
		  } else {
			  
		  searchBar.style.display = "block";
		  pageContent.style.marginTop = "36px";
			  
		  }
	  
     }
	
 }
  
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

