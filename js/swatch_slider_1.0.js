jQuery(function($) {

let swatchSlideIds = [];
let swatchStartIndexes = [];

document.addEventListener('DOMContentLoaded', initSwatchSliders, true);

function initSwatchSliders() {


  let unfilteredIds = [];
  swatchSlideIds = [];
  swatchStartIndexes = [];

  let $getSlidesByClass = $('.swatch_slide');
  let $getVariableTitleCountByClass = $('.product-title-link_variable');
  let $getVariablePriceCountByClass = $('.product-price-link_variable');

  unfilteredIds = [];

  for (let i = 0; i < $getSlidesByClass.length; i++) {
      unfilteredIds.push($getSlidesByClass[i].getAttribute('data-id'));
  }

  let filteredIds = unfilteredIds.filter( (x, y) => unfilteredIds.indexOf(x) == y);

  for (let x = 0; x < filteredIds.length; x++) {
      swatchSlideIds.push(filteredIds[x]);
  }

  for (let d = 0; d < $getVariableTitleCountByClass.length; d++) {
      $getVariableTitleCountByClass[d].id = swatchSlideIds[d];
  }

  for (let e = 0; e < $getVariablePriceCountByClass.length; e++) {
    $getVariablePriceCountByClass[e].id = swatchSlideIds[e] + "-" + e;
  }

  for (let j = 0; j < swatchSlideIds.length; j++) {
      swatchStartIndexes.push(0);
      changeProductTitleAndPriceLink(0, j);
  }

}

  function changeProductTitleAndPriceLink(index, sliderId) {

    swatchStartIndexes[sliderId] = index;

    let $currentSliderImageNodes = $('.' + swatchSlideIds[sliderId]);

    let $currentSlideLink = $($currentSliderImageNodes).eq(index).children().attr('href');

    $('#' + swatchSlideIds[sliderId] + "-" + sliderId).attr('href', $currentSlideLink);
    $('#' + swatchSlideIds[sliderId] + "-" + sliderId).closest('a').siblings('.product-title-link_variable').attr('href', $currentSlideLink);

  }

  function swatchClickHandler() {

    $('body').on('click', '.swatch_slide_dot', function() {

      let $slideIndex = $(this).attr('data-index');

      let $getSlideId = $(this).parent().parent().parent().children($(this)).attr('data-id');

      let $jpegSrcSet = $('.' + $getSlideId).find('source').eq(1).attr('srcset', $(this).attr('data-image-srcset-jpg'));

      //source webp srcset
      $('.' + $getSlideId)
      .find('source')
      .eq(0)
      .attr('srcset', $(this)
      .attr('data-img-srcset-webp'));

      //source jpeg srcset
      $('.' + $getSlideId)
      .find('source')
      .eq(1)
      .attr('srcset', $(this)
      .attr('data-image-srcset-jpg'));

      //img
      $('.' + $getSlideId + ' img')
      .attr('src', $(this).attr('data-image-url'))
      .attr('srcset', $(this).attr('data-image-srcset-jpg'));

      for (var i = 0; i < swatchSlideIds.length; i++) {

          if ($getSlideId == swatchSlideIds[i]) {

            let slideId = swatchSlideIds.indexOf($getSlideId);

              changeProductTitleAndPriceLink($slideIndex, slideId);

          }
      }

    });

  }

  swatchClickHandler();

  $(document).ajaxStop( () => {

    initSwatchSliders();
    swatchClickHandler();

  });

});
