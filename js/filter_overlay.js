"use strict";

function openFilterOverlay() {

   document.getElementById('filter-overlay').style.width = "100%";
   document.getElementById('filter-overlay').style.height = "100%";
   document.getElementById('filter-overlay').style.padding = "60px 20px 20px 20px";

}

function closeFilterOverlay() {

   document.getElementById('filter-overlay').style.width = "0%";
   document.getElementById('filter-overlay').style.height = "0%";
   document.getElementById('filter-overlay').style.padding = "0px";

}

document.addEventListener('DOMContentLoaded', initOpenFilterButton, false);

function initOpenFilterButton() {

  let openFilterButton = document.getElementById('open-filter-overlay');
  let closeFilterButton = document.getElementById('close-filter-overlay');
  let updateFilterButton = Array.from(document.getElementsByClassName('berocket_aapf_widget_update_button'));

  if (openFilterButton) {

      openFilterButton.addEventListener('click', openFilterOverlay, false);

  }

  if (closeFilterButton) {

    closeFilterButton.addEventListener('click', closeFilterOverlay, false);
	  
	if (updateFilterButton[0]) {
		updateFilterButton[0].addEventListener('click', closeFilterOverlay, false);
	}

  }

}

jQuery(document).ajaxStop(function() {

  document.addEventListener('DOMContentLoaded', initOpenFilterButton, false);
  initOpenFilterButton();

  function openFilterOverlay() {

     document.getElementById('filter-overlay').style.width = "100%";
     document.getElementById('filter-overlay').style.height = "100%";
     document.getElementById('filter-overlay').style.padding = "60px 20px 20px 20px";

  }

  function closeFilterOverlay() {

     document.getElementById('filter-overlay').style.width = "0%";
     document.getElementById('filter-overlay').style.height = "0%";
     document.getElementById('filter-overlay').style.padding = "0px";

  }

  function initOpenFilterButton() {

    let openFilterButton = document.getElementById('open-filter-overlay');
    let closeFilterButton = document.getElementById('close-filter-overlay');
    let updateFilterButton = Array.from(document.getElementsByClassName('berocket_aapf_widget_update_button'));

    if (openFilterButton) {

        openFilterButton.addEventListener('click', openFilterOverlay, false);

    }

    if (closeFilterButton) {

      closeFilterButton.addEventListener('click', closeFilterOverlay, false);
		
	  if (updateFilterButton[0]) {
		  updateFilterButton[0].addEventListener('click', closeFilterOverlay, false);
	  }

    }

  }


});
