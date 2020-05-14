jQuery(function($) {

  function lightingIdeasCategorySelectInit() {

    $(document).on('change', '.lighting-ideas-category-select', function() {

     $('.lighting-ideas-product-slider').find('div.slick-track').empty();

      let $children = $('#' + $(this).val() ).prop('innerHTML');

      $('.lighting-ideas-product-slider').slick('slickAdd', $children, false);

      $('#' + $(this).val() ).empty();

      $('#' + $(this).val() ).append($children);

      let $slickObj = $('.lighting-ideas-product-slider').slick('getSlick');

      if ( $slickObj.slideCount == 1 ) {

        $('.next-lighting-ideas-product-slider,.prev-lighting-ideas-product-slider').hide();

      }
      else {

        $('.next-lighting-ideas-product-slider,.prev-lighting-ideas-product-slider').show();

      }

    });

  }

  lightingIdeasCategorySelectInit();

});
