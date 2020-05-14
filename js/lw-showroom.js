jQuery(function($) {

  $(document).ready(function() {

    $('.lw-showroom-nav-button').click(function() {

      $([document.documentElement, document.body]).animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 100
      }, 500);

    });

  });

});
