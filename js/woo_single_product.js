jQuery(function($) {

    /***********************************************
     **** PRODUCT THUMBNAIL GALLERY ****
     ***********************************************/

    let currentSlideIndexes = [];

    let $thumbnailGalleryImages = $('.flex-control-thumbs').children('li');

    function initializeProductThumbnailGallery() {

        if ($('.flex-control-thumbs')) {

            $(document).ready(function() {

                $thumbnailGalleryImages.each(function(index) {

                    $(this).attr('data-index', index);

                });

                $thumbnailGalleryImages.each(function(index) {

                    $(this).hide();

                    if ($(this).attr('data-index') < 4) {

                        currentSlideIndexes.push(Number($(this).attr('data-index')));

                        $(this).css('display', get_css_display());

                    } else {

                        $(this).hide();

                    }

                });

            });

        }

        $('.flex-control-nav').wrap('<div class="thumbnail-gallery-wrapper"></div>');

        if (is_large_screen()) {

            $('.flex-viewport').after('<div class="desktop-only sp-click-to-zoom"><p><strong>Click to Zoom</strong></p></div>');

        }

        if ($thumbnailGalleryImages.length > 4) {

            insertNextAndPrev();

        }

        $('.thumbnail-arrow-left').click(() => decrementGallery());
        $('.thumbnail-arrow-right').click(() => incrementGallery());

    }

    initializeProductThumbnailGallery();

    function hideGallery() {

        $thumbnailGalleryImages.each(function() {

            $('.flex-control-thumbs').children('li').remove();

            $(this).hide();

        });

    }

    function incrementGallery() {

        hideGallery();

        currentSlideIndexes = currentSlideIndexes.map(function(x, y) {

            if (x !== $thumbnailGalleryImages.length - 1) {

                $('.thumbnail-arrow-right').before($thumbnailGalleryImages.eq(x + 1).css('display', get_css_display()));

                return x + 1;

            } else {

                $('.thumbnail-arrow-right').before($thumbnailGalleryImages.eq(0).css('display', get_css_display()));

                return currentSlideIndexes[y] = 0;

            }

        });

    }

    function decrementGallery() {

        hideGallery();

        currentSlideIndexes = currentSlideIndexes.map(function(x, y) {

            if (x !== 0) {

                $('.thumbnail-arrow-right').before($thumbnailGalleryImages.eq(currentSlideIndexes[y] - 1).css('display', get_css_display()));

                return currentSlideIndexes[y] - 1;

            } else {

                $('.thumbnail-arrow-right').before($thumbnailGalleryImages.eq($thumbnailGalleryImages.length - 1).css('display', get_css_display()));

                return currentSlideIndexes[y] = $thumbnailGalleryImages.length - 1;

            }

        });

    }

    function get_css_display() {

        if (is_large_screen()) {

            return 'block';

        } else {

            return 'inline-block';

        }

    }

    function is_large_screen() {

        if (parseInt($(window).width()) > 1400) {

            return true;

        } else {

            return false;

        }

    }

    function insertNextAndPrev() {

        if (is_large_screen()) {

            $('.flex-control-thumbs').prepend('<span><i id="arrow-left" class="thumbnail-arrow-left fa fa-arrow-up"></i></span>');
            $('.flex-control-thumbs').append('<span><i id="arrow-right" class="thumbnail-arrow-right fa fa-arrow-down"></i></span>');

        } else {

            $('.flex-control-thumbs').prepend('<span><i id="arrow-left" class="thumbnail-arrow-left fa fa-arrow-left"></i></span>');
            $('.flex-control-thumbs').append('<span><i id="arrow-right" class="thumbnail-arrow-right fa fa-arrow-right"></i></span>');

        }

    }

    /***********************************************
     ********** VARIABLE PRODUCT SUMMARY ***********
     ***********************************************/

    function change_variation_product_finish() {

        if ($('variations_form')) {

            $(document).ready(function() {

                $('#sp-variation-finish').html($('#pa_finish option:selected').text());

                $('#pa_finish').on('change', function() {

                    $('#sp-variation-finish').html($('#pa_finish option:selected').text());

                });

            })

        }

    }

    change_variation_product_finish();

    /*****************************************************************
     ******************** SINGLE PRODUCT PRINT ************************
     *****************************************************************/

    function print_document_footer() {

      let footer = '<div id="sp-print-footer" class="mt-5"><h3>Thank You For Shopping With Us! We Hope To See You Soon.</h3><p class="mt-5"><strong>PHONE:</strong> 215-883-8544  <strong>ADDRESS:</strong> 4625 E Street Road Trevose, PA 19053</p><p class="mt-3">© Light World 2020</p></div>';

      $('.wc-tabs-wrapper').append(footer);

    }

    function print_simple_single_product() {

        $(document).ready(function() {

            if ($('body').hasClass('single-product') && $('div.product').hasClass('product-type-simple')) {

                let simpleProductPrintableTable = false;

                if ($('#woocommerce-simple-product-attributes-table').attr('data-printable_table')) {

                    simpleProductPrintableTable = JSON.parse(document.getElementById('woocommerce-simple-product-attributes-table').getAttribute('data-printable_table'));

                } else {

                    return;

                }

                let $currentTable = $('#woocommerce-simple-product-attributes-table').html();

                window.onbeforeprint = function(event) {

                    if ($('#woocommerce-simple-product-attributes-table')) {

                        $('.flex-active-slide').attr('id', 'sp-print-image');

                        $('#woocommerce-simple-product-attributes-table').empty();

                        $('.wc-tabs-wrapper').prepend('<h2 class="sp-print-specs-heading">SPECIFICATIONS</h2>');

                        if (simpleProductPrintableTable) {

                            $('#woocommerce-simple-product-attributes-table').append(simpleProductPrintableTable);

                        }

                        print_document_footer();

                    }

                };

                window.onafterprint = function(event) {

                    if ($('#woocommerce-simple-product-attributes-table')) {

                       $('.flex-active-slide').removeAttr('id');

                        $('.sp-print-specs-heading').remove();

                        $('#sp-print-footer').remove();

                        $('#woocommerce-simple-product-attributes-table').empty().append($currentTable);

                    }

                }

            }

        });

    }


    function print_variable_single_product() {

        if ($('body').hasClass('single-product') && $('div.product').hasClass('product-type-variable')) {

            $(document).ready(function() {

                let $tableRows = $('.variable-product-attribute-row');

                let tableData = [];

                let formattedPrintTable = [];

                $tableRows.each(function(e) {

                    tableData.push($(this).find('th'));
                    tableData.push($(this).find('td'));

                });

                let threeRowsCount = null;
                let dataLength = tableData.length;

                let numberOfColumns =  Math.floor( tableData.length / 4 );

                if (Math.abs(tableData.length % 2) == 1) {

                    threeRowsCount = tableData.length / numberOfColumns;

                } else {

                    dataLength = ((tableData.length / numberOfColumns) + 1) * numberOfColumns - 1;

                    threeRowsCount = 6;

                }

                for (colCount = 0; colCount < dataLength; colCount += threeRowsCount) {

                    let row = '<tr>';

                    for (count = colCount; count < colCount + threeRowsCount; count++) {

                        if (typeof tableData[count] === 'undefined') {

                            break;

                        } else {

                            row += tableData[count].prop('outerHTML');

                        }

                    }

                    row += '</tr>';

                    formattedPrintTable.push(row);

                }

                let $currentVariableTable = $('#woocommerce-variable-product-attributes-table').html();

                window.onbeforeprint = function(event) {

                    if ($('#woocommerce-variable-product-attributes-table')) {

                        $('.flex-active-slide').attr('id', 'sp-print-image');

                        $('#woocommerce-variable-product-attributes-table').empty();
                        $('#woocommerce-variable-product-attributes-table').append(formattedPrintTable.join(','));

                        print_document_footer();

                    }

                };

                let $currentTable = $('#woocommerce-variable-product-attributes-table').html();

                window.onafterprint = function(event) {

                    if ($('#woocommerce-variable-product-attributes-table')) {

                        $('.flex-active-slide').removeAttr('id');

                        $('.sp-print-specs-heading').remove();

                        $('#woocommerce-variable-product-attributes-table').empty().append($currentVariableTable);

                        $('#sp-print-footer').remove();

                    }

                };

            });

        }

    }


    function print_product_page() {

        $(document).ready(function() {

            if ($('#sp-print')) {

                print_simple_single_product();

                $('#sp-print').click(function() {

                  $('.flex-active-slide').attr('id', 'sp-print-image');

                    if ($('form.variations_form')) {

                      print_variable_single_product();

                    }

                    $('.spec-tool-tip').hide();

                    window.print();

                });

            }

        });

    }

    print_product_page();

    /*****************************************************************
     ***************** CHAT WITH US BUTTON ****************************
     *****************************************************************/

    //open chat for single product PAGES
    $('#single-product-page_contact_us').click(function() {

        $('#wp-live-chat-header').addClass('active');
        $('#wplc_hovercard').show();

    });


    /*****************************************************************
     VARIABLE PRODUCTS CHANGE HANDLERS FOR TABLES, SUMMARY AND LINKS
    *****************************************************************/

    function change_variation_single_product_data() {

        if ($('form.variations_form').length && $('body').hasClass('single-product')) {

            $(document).ready(function() {

                let $currentProductId = $('.woocommerce-variation-add-to-cart').find('input[name="variation_id"]').val();

                let tableRows = $.parseJSON($('#woocommerce-variable-product-attributes-table').attr('data-table-json'));
                let specSheets = $.parseJSON($('#sp-spec-sheet').attr('data-spec-sheet-urls'));
                let installSheets = $.parseJSON($('#sp-installation-sheet').attr('data-installation-sheet-urls'));

                if (specSheets !== null && specSheets !== undefined) {

                    $('#sp-spec-sheet').show();
                    $('#sp-spec-sheet').attr('href', specSheets[0].url);

                } else {

                    $('#sp-spec-sheet').hide();

                }

                if (installSheets !== null && installSheets !== undefined) {

                    $('#sp-installation-sheet').attr('href', installSheets[0].url);
                    $('#sp-installation-sheet').show();

                } else {

                    $('#sp-installation-sheet').hide();

                }

                if ($currentProductId == 0 || $currentProductId) {

                    $('#woocommerce-variable-product-attributes-table').html(tableRows[0].rows);

                } else {

                    for (let i = 0; i < tableRows.length; i++) {

                        if (tableRows[i].variation_id == $currentProductId) {

                            $('#woocommerce-variable-product-attributes-table').html(tableRows[i].rows);

                            break;

                        }

                    }

                }

                $('.woocommerce-variation-add-to-cart').find('input[name="variation_id"]').on('change', function() {


                    for (let i = 0; i < tableRows.length; i++) {

                        if (tableRows[i].variation_id == $(this).val()) {

                            $('#woocommerce-variable-product-attributes-table').html(tableRows[i].rows);

                            break;

                        }

                    }

                    if ($('input[name="variation_id"]').val() == 0 || $('input[name="variation_id"]').val() == null) {

                        if (specSheets !== null && specSheets !== undefined) {

                            $('#sp-spec-sheet').show();
                            $('#sp-spec-sheet').attr('href', specSheets[0].url);

                        }

                        if (installSheets !== null && installSheets !== undefined) {

                            $('#sp-installation-sheet').show();
                            $('#sp-installation-sheet').attr('href', installSheets[0].url);

                        }

                    } else {

                        $('#sp-spec-sheet').hide();

                        if (specSheets !== null && specSheets !== undefined) {

                            for (let j = 0; j < specSheets.length; j++) {

                                if (specSheets[j].variation_id == $(this).val()) {

                                    $('#sp-spec-sheet').show();
                                    $('#sp-spec-sheet').attr('href', specSheets[j].url);

                                }

                            }

                        }

                        $('#sp-installation-sheet').hide();

                        if (installSheets !== null && installSheets !== undefined) {

                            for (let k = 0; k < installSheets.length; k++) {

                                if (installSheets[k].variation_id == $(this).val()) {

                                    $('#sp-installation-sheet').show();
                                    $('#sp-installation-sheet').attr('href', installSheets[k].url);

                                }

                            }

                        }

                    }

                });

            });

        }

    }

    change_variation_single_product_data();


    /*****************************************************************
    ***************** PRODUCT SPECIFICATION TOOLTIPS ****************
    *****************************************************************/

    $(document).ready(function() {

       if ( $('.spec-tool-tip-info-icon') ) {

        let $weight = $('.woocommerce-product-attributes-item--weight').find('td').text();
        let $dimensions = $('.woocommerce-product-attributes-item--dimensions').find('td').text();

        $('.woocommerce-product-attributes-item--weight').find('td').text('');
        $('.woocommerce-product-attributes-item--weight').find('td').append('<p><strong>' + $weight + '</strong></p>');

        $('.woocommerce-product-attributes-item--dimensions').find('td').text('');
        $('.woocommerce-product-attributes-item--dimensions').find('td').append('<p><strong>' + $dimensions + '</strong></p>');

            $(document).click(function(event) {

                if ( $(event.target).hasClass('spec-tool-tip-info-icon') ) {

                    $('.spec-tool-tip').hide();

                    let $currentId = $(event.target).parent().data('attribute');

                    let $positionLeft = $(event.target).position();

                    let $positionTop = $('#tool-tip--' + $currentId).parent().position();

                    let $elementHeight = $('#tool-tip--' + $currentId).parent().height();

                    let additionalHeight = ( is_large_screen() ) ? 10 : 20;

                    $('#tool-tip--' + $currentId).children('span').height( $elementHeight / 2 + additionalHeight );

                    $('#tool-tip--' + $currentId).show().css({ 'top' : $positionTop.top - $elementHeight , 'left' : $positionLeft.left });

                } else {

                    $('.spec-tool-tip').hide();

                }
           });

        }

    });

});
