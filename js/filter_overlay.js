jQuery(function($) {

  document.addEventListener('click', function(event) {

    if ( event.target.classList.contains('close-filter-overlay') || event.target.classList.contains('berocket_aapf_widget_update_button') || event.target.classList.contains('berocket_aapf_reset_button') ) {

      $('#filter-overlay').css( { 'height' : '0%'} );

    }

    if ( event.target.id == 'open-filter-overlay' ) {

      $('#filter-overlay').css( { 'height' : '100%' } );

    }

  });

  if ( $( '.berocket_aapf_widget_update_button' ) ) {

    $('.berocket_aapf_widget_update_button').addClass('button');

  }

  $(document).ajaxStop(function() {

    if ( $( '.berocket_aapf_widget_update_button' ) ) {

      $('.berocket_aapf_widget_update_button').addClass('button');
  
    }  

  }); 
    
});