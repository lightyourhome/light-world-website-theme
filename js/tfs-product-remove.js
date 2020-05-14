jQuery(function($) {

  var tfs_update_wc_div = function( html_str, preserve_notices ) {
    var $html       = $.parseHTML( html_str );
    var $new_form   = $( '.woocommerce-cart-form', $html );
    var $new_totals = $( '.cart_totals', $html );
    var $notices    = $( '.woocommerce-error, .woocommerce-message, .woocommerce-info', $html );

    // No form, cannot do this.
    if ( $( '.woocommerce-cart-form' ).length === 0 ) {
      window.location.reload();
      return;
    }

    // Remove errors
    if ( ! preserve_notices ) {
      $( '.woocommerce-error, .woocommerce-message, .woocommerce-info' ).remove();
    }

    if ( $new_form.length === 0 ) {
      // If the checkout is also displayed on this page, trigger reload instead.
      if ( $( '.woocommerce-checkout' ).length ) {
        window.location.reload();
        return;
      }

      // No items to display now! Replace all cart content.
      var $cart_html = $( '.cart-empty', $html ).closest( '.woocommerce' );
      $( '.woocommerce-cart-form__contents' ).closest( '.woocommerce' ).replaceWith( $cart_html );

      // Display errors
      if ( $notices.length > 0 ) {
        tfs_show_notice( $notices );
      }

      // Notify plugins that the cart was emptied.
      $( document.body ).trigger( 'wc_cart_emptied' );
    } else {
      // If the checkout is also displayed on this page, trigger update event.
      if ( $( '.woocommerce-checkout' ).length ) {
        $( document.body ).trigger( 'update_checkout' );
      }

      $( '.woocommerce-cart-form' ).replaceWith( $new_form );
      $( '.woocommerce-cart-form' ).find( ':input[name="update_cart"]' ).prop( 'disabled', true );

      if ( $notices.length > 0 ) {
        tfs_show_notice( $notices );
      }

      tfs_update_cart_totals_div( $new_totals );
    }

    $( document.body ).trigger( 'updated_wc_div' );
  };

  var tfs_show_notice = function( html_element, $target ) {
		if ( ! $target ) {
			$target = $( '.woocommerce-notices-wrapper:first' ) || $( '.cart-empty' ).closest( '.woocommerce' ) || $( '.woocommerce-cart-form' );
		}
		$target.prepend( html_element );
	};

  var tfs_update_cart_totals_div = function( html_str ) {
    $( '.cart_totals' ).replaceWith( html_str );
    $( document.body ).trigger( 'updated_cart_totals' );
  };

  var tfs_is_blocked = function( $node ) {
    return $node.is( '.processing' ) || $node.parents( '.processing' ).length;
  };

  var tfs_block = function( $node ) {
    if ( ! tfs_is_blocked( $node ) ) {
      $node.addClass( 'processing' ).block( {
        message: null,
        overlayCSS: {
          background: '#fff',
          opacity: 0.6
        }
      } );
    }
  };

  var tfs_unblock = function( $node ) {
    $node.removeClass( 'processing' ).unblock();
  };

  $('body').on('click', '.tfs-remove' ,function(e) {
    e.preventDefault();

    var $a = $( e.currentTarget );
    var $form = $a.parents( 'form' );

    tfs_block( $form );
    tfs_block( $( 'div.cart_totals' ) );

    $.ajax({
           type: "POST",
           url: $(this).attr('href'),
           dataType: 'html',
           success: function (res) {},
           complete: function() {
             get_new_cart_page();
           }
       });

    });

    var get_new_cart_page = function() {

      $.ajax({
         type: "POST",
         url: 'https://www.lightyourhome.com/cart/?remove_item=1',
         dataType: 'html',
         success: function (res) {
           tfs_update_wc_div(res);
         },
         complete: function() {
          tfs_unblock( $form );
          tfs_unblock( $( 'div.cart_totals' ) );
        }
      });

    }

});
