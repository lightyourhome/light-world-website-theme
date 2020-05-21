<?php

/**
* WooCommerce Template and Theme Functions to Customize functionality of WooCommerce
*
* @package Light_World
*/



/* SINGLE PRODUCT GALLERY THUMBNAILS */
add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
return array(
'width' => 350,
'height' => 350,
'crop' => 0,
);
} );

/* SINGLE PRODUCT IMAGES */
add_filter( 'woocommerce_get_image_size_single', function( $size ) {
	return array(
		'width'  => 650,
		'height' => '',
		'crop'   => 0,
	);
} );

add_filter('loop_shop_columns', 'loop_columns', 999);
if ( ! function_exists('loop_columns') ) :
  /**
  *
  * Change the number of products per row in WooCommerce Shop Loop
  */
	function loop_columns() {
		return 3; // 3 products per row
	}
endif;


add_action('woocommerce_proceed_to_checkout', 'add_auth_seal');
add_action('woocommerce_review_order_before_payment', 'add_auth_seal');
if ( ! function_exists('add_auth_seal') ) :
/**
* Adds the AUTH.NET Seal to WooCommerce Checkout/Cart Collaterals
*/
  function add_auth_seal() { ?>

    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-md-3 col-4">
          <!-- (c) 2005, 2019. Authorize.Net is a registered trademark of CyberSource Corporation -->
          <div class="AuthorizeNetSeal">
  		  	<script type="text/javascript" language="javascript">var ANS_customer_id="8c440f92-ac68-4e99-9c8a-b78107472e0e";</script>
  			  <script type="text/javascript" language="javascript" src="//verify.authorize.net:443/anetseal/seal.js" ></script>
        </div>
      </div>
    </div>

  <?php }

endif;

/**
* Removes WooCommerce Add to Cart Button from Shop Loop
*/
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');


if ( ! function_exists('display_woo_cart') ) :

/**
* Displays the WooCommerce Cart in the Navigation (Used in header.php)
*/
function display_woo_cart() {
     if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

      $count = WC()->cart->cart_contents_count; ?>

  <a id="header-shopping-cart" class="cart-contents" href="<?php echo site_url('/cart') ?>" title="<?php _e( 'View your shopping cart' ); ?>">
  	<?php
      if ( $count > 0 ) {
          ?>
          <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
          <?php
      }
          ?></a>

  <?php }
  } //END CART

endif;

add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' ); //END CART COUNT
if ( ! function_exists('my_header_add_to_cart_fragment') ) :
/**
* Updates header cart count via AJAX when product is added to cart
*/
  function my_header_add_to_cart_fragment( $fragments ) {

      ob_start();
      $count = WC()->cart->cart_contents_count;

      ?><a class="cart-contents" href="<?php echo site_url('/cart'); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
      if ( $count > 0 ) {
          ?>
          <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
          <?php
      }
          ?></a><?php

      $fragments['a.cart-contents'] = ob_get_clean();

      return $fragments;
  }

endif;

if ( ! function_exists('create_slug') ) :
/**
* Returns an escaped slug from a string
*
*@param string
*@return string (the slug)
*/
  function create_slug($str) {

    $search = array('Ș', 'Ț', 'ş', 'ţ', 'Ş', 'Ţ', 'ș', 'ț', 'î', 'â', 'ă', 'Î', 'Â', 'Ă', 'ë', 'Ë');
    $replace = array('s', 't', 's', 't', 's', 't', 's', 't', 'i', 'a', 'a', 'i', 'a', 'a', 'e', 'E');
    $str = str_replace($search, $replace, strtolower(trim($str)));
    $str = preg_replace('/[^\w\d\-\ ]/', '', $str);
    $str = str_replace(' ', '-', $str);
    return preg_replace('/\-{2,}/', '-', $str);

  }

endif;

if ( ! function_exists('return_slug') ) :
/**
* Getter function that returns escaped slugs
*
* @param string
* @return string
*/
  function return_slug($prodFinish) {

    $slug = create_slug($prodFinish);

    return $slug;

  }

endif;

add_action( 'woocommerce_before_shop_loop_item_title', 'custom_loop_product_thumbnail', 10 );
if ( ! function_exists('custom_loop_product_thumbnail') ) :

/**
* Replaces WooCommerce Shop Loop Images. Returns variation images if a product is variable, and only one if a product is simple
*
*/

  function custom_loop_product_thumbnail() {
      global $product;
      $prodId = $product->get_id();
      $simpleProdImg = $product->get_image();

      if (!$product->is_type('variable') ) { ?>

        <div class="woo-simple-product"><a href="<?php echo get_the_permalink($prodId); ?>"><?php echo $simpleProdImg; ?></a></div>

        <?php }

        if ($product->is_type('variable') ) {

          $imageVariationFinishArr = array();
          $variationArr = array();

          foreach ($product->get_visible_children() as $variation_id) {
              // Get an instance of the WC_Product_Variation object
              $getVariation = wc_get_product($variation_id);

              $variationFinish = $getVariation->get_attribute('finish');

              $imageVariationFinishArr[$variationFinish][] = $variation_id;

            }

            $filteredVariableIds = array();

            foreach ( $imageVariationFinishArr as $variableFin => $var_id ) {

               array_push($filteredVariableIds, $var_id[0]);

            }

          //generate a unique id for each slider
          $id = uniqid();
          $quick_view_id = uniqid();

          $count = 0;

        foreach ( $filteredVariableIds as $variation_id ) {
           //Get an instance of the WC_Product_Variation object

           $variation = wc_get_product( $variation_id );

           $finish = $variation->get_attribute('finish');
           $prod_slug = $product->get_slug($prodId);

           $variation_link = site_url('product/') . $prod_slug . '/?attribute_pa_finish=' . return_slug($finish);

           $img_url = wp_get_attachment_image_src( $variation->get_image_id(),  array('350', '350') );
           $img_srcset = wp_get_attachment_image_srcset( $variation->get_image_id() );

           //image extensions
           $img_extensions = array('/.jpg/', '/.jpeg/', '/.png/');

           $img_webp_src = preg_replace($img_extensions, '.webp', $img_srcset);

           ?>


  <div class="swatch_slide <?php echo $id; ?>" data-id="<?php echo $id; ?>">
    <a href="<?php echo $variation_link; ?>">
      <picture>
        <source class="webp-src-set" srcset="<?php echo esc_attr($img_webp_src); ?>" type="image/webp">
        <source srcset="<?php echo esc_attr($img_srcset); ?>">
        <img height="350" width="350" src="<?php echo $img_url[0]; ?>" srcset="<?php echo esc_attr($img_srcset); ?>">
      </picture>
    </a>
  </div>

          <?php
          break;
      }
    }
  }

endif;

add_action('woocommerce_shop_loop_item_title','woo_custom_product_titles',10);
if ( ! function_exists('woo_custom_product_titles') ) :

 /**
 * Creates custom titles/anchors for the shop loop
 *
 */
  function woo_custom_product_titles() {

  global $product;

  $name = $product->get_name();
  $id = $product->get_id();
  $simpleProductLink = get_the_permalink($id);

  if ($product->is_type('variable')) {

    echo '<a class="product-title-link_variable"><h3 class="product-titles">' . $name . '</h3></a>';

  } else {

    echo '<a href="' . $simpleProductLink . '" class="product-title-link_simple"><h3 class="product-titles">' . $name . '</h3></a>';

    }

  }


endif;

if ( ! function_exists('woocommerce_loop_swatches') ) :

  /**
  * Returns Color Swatches to be used in the WooCommerce Shop Loop
  *
  */
  function woocommerce_loop_swatches() {
  global $product;

  $prodId = $product->get_id();

  $color_swatch_links = array(

   /*****************************************************************************************************************
   ************************************ BEGIN MIXED METALS **********************************************************
   ****************************************************************************************************************/

   //GOLD WITH BLACK
   'Satin Brass w/ Black'          => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',
   'Aged Brass with Black'         => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',
   'Black W/Gold'                  => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',
   'Vintage Black w/ Warm Brass'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',
   'Vintage Black with Warm Brass' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',
   'satin brass with black'        => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',
   'Antique Brass with Matte Black Accents' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',
   'Satin Brass with Matte Black Accents'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',

   //GOLD WITH Bronze
   'Bronze w/ Brass Accents'       => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/gold_bronze_swatch.jpg',
   'English Bronze & Warm Brass'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/gold_bronze_swatch.jpg',
   'English Bronze and Warm Brass' => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/gold_bronze_swatch.jpg',
   'English Bronze w/ Gold'        => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/gold_bronze_swatch.jpg',
   'Warm Brass w/ Bronze accents'  => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/gold_bronze_swatch.jpg',

   //GOLD WITH WHITE
   'Satin Brass w/ White'         => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/gold_white_swatch.jpg',
   'GL/WH'                        => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/gold_white_swatch.jpg',
   'Satin Brass with Satin White' => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/gold_white_swatch.jpg',
   'Satin Brass w/ White'         => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/gold_white_swatch.jpg',
   'Aged Brass with White'        => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/gold_white_swatch.jpg',

   //GOLD WITH BLUE (Needs to be added)
   //'Satin Brass w/ Navy' htttps://www.lightyourhome.comhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',

   //SILVER WITH BLACK
   'Pewter with Black'                        => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_black_swatch.jpg',
   'Pewter With Black'                        => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_black_swatch.jpg',
   'Polished Nickel with Matte Black Accents' => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_black_swatch.jpg',
   'Polished Nickel with Black'               => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_black_swatch.jpg',
   'Matte Black w/ Polished Chrome Accents'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_black_swatch.jpg',
   'Matte Black with Polished Chrome Accents' => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_black_swatch.jpg',
   'Black Nickel'                             => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_black_swatch.jpg',
   'Chrome with Black'                        => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_black_swatch.jpg',
   'Pewter with black'                        => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_black_swatch.jpg',
   'Black with Brushed Nickel Accents'        => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_black_swatch.jpg',

   //SILVER WITH BLUE (needs to be added)
   //'Pewter with Navy'  => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',

   //SILVER WITH WHITE
   'Pewter with White'                 => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_white_swatch.jpg',
   'Polished Nickel with White'        => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_white_swatch.jpg',
   'White with Brushed Nickel Accents' => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_white_swatch.jpg',

   //SILVER WITH Bronze
   'Polished Nickel Old Bronze'      => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_bronze_swatch.jpg',

   //Silver with wood
   'Polished Nickel w/ Wood accents' => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/silver_with_wood_swatch.jpg',

   //COPPER WITH Black
   'Polished Copper with Black'      => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/mixed_metals_swatch.jpg',
    /*********************************************************************************************************
     **********************    END MIXED METALS, BEGIN SINGLE FINISHES  **************************************
    ***********************************************************************************************************/

    /* BLACK AND GREY SWATCH FINISHES */
    'Black'      => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/black_swatch.jpg',
    'Iron'       => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/black_swatch.jpg',
    'Zinc'       => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/black_swatch.jpg',
    'Grey'       => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/black_swatch.jpg',
    'Gray'       => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/black_swatch.jpg',
    'Aged Metal' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/black_swatch.jpg',
    'Dark'       => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/black_swatch.jpg',
    'Ebony'      => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/black_swatch.jpg',
    'Londonderry'=> 'https://www.lightyourhome.com/wp-content/uploads/2019/06/black_swatch.jpg',
    'Smith Steel' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/black_swatch.jpg',

  /* SILVER SWATCHES */
  'Nickel'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',
  'Chrome'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',
  'Platinum' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',
  'Pewter'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',
  'Steel'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',
  'Titanium' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',
  'Silver'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',
  'Aluminum' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',
  //'Satin Nickel' => 'http://localhost/lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',
  'Argentum' => 'https://lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',
  'Millenia' => 'https://lightyourhome.com/wp-content/uploads/2019/06/chrome_swatch.jpg',

  /* BRONZE SWATCH FINISHES */
  'Bronze'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/bronze_swatch.jpg',
  'Brown'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/bronze_swatch.jpg',
  'Espresso' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/bronze_swatch.jpg',
  'Malaga'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/bronze_swatch.jpg',
  'Cocoa'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/bronze_swatch.jpg',
  'Walnut'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/bronze_swatch.jpg',
  'Tortoise' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/bronze_swatch.jpg',
  'Brick'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/bronze_swatch.jpg',

  /* BRASS AND GOLD SWATCH FINISHES */
  'Brass'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/gold_swatch.jpg',
  'Gold'     => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/gold_swatch.jpg',
  'Heirloom' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/gold_swatch.jpg',
  'Antique Gild' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/gold_swatch.jpg',

  /* BLUE SWATCH FINISHES */
  'Blue'      => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/blue_swatch.jpg',
  'Navy'      => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/blue_swatch.jpg',
  'Turquoise' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/blue_swatch.jpg',

  /* WHITE SWATCH FINISHES */
  'White'  => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/white_swatch.jpg',
  'Fresco' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/white_swatch.jpg',
  'Cream'  => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/white_swatch.jpg',

  /* WOOD SWATCH FINISHES */
  'Wood'  => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/wood_swatch.jpg',
  'Sea'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/wood_swatch.jpg',
  'Ivory' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/wood_swatch.jpg',
  'Oak'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/wood_swatch.jpg',
  'Auburn Stained' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/wood_swatch.jpg',

  /* COPPER SWATCH FINISHES  */
  'Copper' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/copper_swatch.jpg',

  /* VERDI GRIS FINISH SWATCH */
  'Verdi Gris' => 'https://www.lightyourhome.com/wp-content/uploads/2019/06/green_swatch.jpg',

  );

  //OUTPUTS DATA INDEX FOR SWATCH SLIDERS, INCREMENTS WITH EVERY SWATCH OUTPUTTED
  $count = 0;

  $getFinishes = $product->get_attribute('pa_finish');

  $productFinishesArr = explode(",", $getFinishes);

  $productFinishesCount = sizeOf($productFinishesArr);

  $productChildrenCount = sizeOf($product->get_visible_children());

  if ($product->is_type('variable')) {

      if ($productFinishesCount <= 3) {

        $finishArr = array();
        $image_urls = array();
        $image_srcset = array();

        $image_extensions = array('/.jpg/', '/.jpeg/', '/.png/');

        foreach ($product->get_visible_children() as $variation_id) {
            // Get an instance of the WC_Product_Variation object
            $variation = wc_get_product($variation_id);

            $finish = $variation->get_attribute('finish');

            array_push($finishArr, $finish);
            array_push($image_urls, wp_get_attachment_image_src( $variation->get_image_id() ) );
            array_push($image_srcset, wp_get_attachment_image_srcset( $variation->get_image_id() ) );

          }

          $finishArrUnique = array_unique($finishArr);

          foreach ($finishArrUnique as $uniqueFinish) {

              foreach ($color_swatch_links as $swatches => $swatch_link) {

                  if (strpos($uniqueFinish, $swatches) !== FALSE) { ?>

           <a href="javascript:void(0)" class="swatch-border swatch_slide_dot" data-index="<?php echo $count; ?>" data-image-url="<?php echo $image_urls[$count][0]; ?>" data-image-srcset-jpg="<?php echo $image_srcset[$count]; ?>" data-img-srcset-webp="<?php echo preg_replace($image_extensions, '.webp', $image_srcset[$count]); ?>">
             <img class="swatch-image img-circle" src="<?php echo $swatch_link; ?>">
           </a>

              <?php $count++; ?>

              <?php break; ?>

              <?php

                  }
              }
          }
      } else if ($productFinishesCount > 3) {

        $finishArr = array();
        $image_urls = array();
        $image_srcset = array();

        foreach ($product->get_visible_children() as $variation_id) {
            // Get an instance of the WC_Product_Variation object
            $variation = wc_get_product($variation_id);

            $finish = $variation->get_attribute('finish');

            array_push($finishArr, $finish);

            array_push( $image_urls, wp_get_attachment_image_src( $variation->get_image_id() ) );

            array_push( $image_srcset, wp_get_attachment_image_srcset( $variation->get_image_id() ) );

          }

          $finishArrUnique = array_unique($finishArr);

          foreach ($finishArrUnique as $uniqueFinish) {

              foreach ($color_swatch_links as $swatches => $swatch_link) {

                  if (strpos($uniqueFinish, $swatches) !== FALSE) {

                    if ($count < 3) {

                      ?>

                      <a href="javascript:void(0)" class="swatch-border swatch_slide_dot" data-index="<?php echo $count; ?>" data-image-url="<?php echo $image_urls[$count][0]; ?>" data-image-srcset-jpg="<?php echo $image_srcset[$count]; ?>" data-img-srcset-webp="<?php echo preg_replace($image_extensions, '.webp', $image_srcset[$count]); ?>">
                        <img class="swatch-image img-circle" src="<?php echo $swatch_link; ?>">
                      </a>

                         <?php $count++; ?>

                    <?php if ($count == 3 ) :

                      $remainingFinishes = $productFinishesCount - $count;

                      ?>

                      <div class="swatch-border"><div class="swatch-image img-circle"><?php echo '+' . $remainingFinishes; ?></div></div>

                    <?php endif; ?>

                  <?php  }

                   }
               }
           }
       }
    }
  } /* END WOOCOMMERCE SWATCHES FUNCTION */

endif;

add_filter( 'woocommerce_get_availability', 'woo_custom_get_availability', 1, 2);
if ( ! function_exists('woo_custom_get_availability') ) :

  /**
  * Adds out of stock and availability messages based off inventory feed
  *
  */
  function woo_custom_get_availability( $availability, $_product ) {
  	//GET CUSTOM FIELD
      $stock_date = get_field('_back_in_stock_date');
      // Change In Stock Text
      if ( $_product->is_in_stock() ) {
          $availability['availability'] = __('In stock!', 'woocommerce');
      }
      // Change Out of Stock Text, If a back in stock date is provided, show it and if not, say "More Available Soon"
      // Removes (estimate) from livex inv sheet
      if ( ! $_product->is_in_stock() && strpos($stock_date, '(estimate)') !== FALSE ) {

  		$replace_est = str_replace("(estimate)", " ", $stock_date);
  		$availability['availability'] = __('Sorry, We\'re All Out! Estimated Availability Date: ' . $replace_est,'woocommerce');

  	//Removes (actual) from Livex inv sheet
  	} else if ( ! $_product->is_in_stock() && strpos($stock_date, '(actual)') !== FALSE ) {

  		$replace_act = str_replace("(actual)", " ", $stock_date);
  		$availability['availability'] = __('Sorry, We\'re All Out! Estimated Availability Date: ' . $replace_act,'woocommerce');

  	//Removes AVAIL: from Uttermost Inv sheet
  	} else if ( ! $_product->is_in_stock() && strpos($stock_date, 'AVAIL:') !== FALSE ) {

  		$replace_utt = str_replace("AVAIL:", " ", $stock_date);
  		$availability['availability'] = __('Sorry, We\'re All Out! Estimated Availability Date: ' . $replace_utt,'woocommerce');

  	//Removes EST: from Uttermost Inv sheet
  	} else if ( ! $_product->is_in_stock() && strpos($stock_date, 'EST:') !== FALSE ) {

  		$replace_est = str_replace("EST:", " ", $stock_date);
  		$availability['availability'] = __('Sorry, We\'re All Out! Estimated Availability Date: ' . $replace_est,'woocommerce');

  	} else if ( ! $_product->is_in_stock() && strpos($stock_date, '/') !== FALSE) {

          $availability['availability'] = __('Sorry, We\'re All Out! Estimated Availability Date: ' . $stock_date, 'woocommerce');

      } else if ( ! $_product->is_in_stock() ) {

  		$availability['availability'] = __('Sorry, We\'re All Out! More Available Soon. ', 'woocommerce');

  	}
      return $availability;
  } /* END WOOCOMMERCE CUSTOM IN STOCK AND OUT OF STOCK */

endif;


if ( ! function_exists('woocommerce_thumbnail_slider') ) :

  /**
  * Returns a customized woocommerce thumbnail gallery
  *
  */
  function woocommerce_thumbnail_slider() {

  global $product;

  $imageIds = $product->get_gallery_image_ids();

  if ( sizeof($imageIds) < 5 ) {
    $index = 1;
    foreach ( $imageIds as $imageId ) { ?>

      <img id="woo_thumbnails" class="gallery_images woo_thumbnails woocommerce-product-gallery__image" onclick="openModal();currentSlide(<?php echo $index; ?>)" src="<?php echo wp_get_attachment_url($imageId); ?>">

  <?php
  $index++;
     }

    echo modal();

     } else { ?>

      <!-- LEFT/DECREMENT ARROW  -->
      <span><i id="arrow-left" class="thumbnail-arrow-left fa fa-chevron-left" onclick="addOne(-1)"></i></span>

      <?php $index = 1;
        foreach ( $imageIds as $imageId ) { ?>

          <!-- THUMBNAIL IMAGES  -->
          <img id="woo_thumbnails" class="gallery_images woo_thumbnails woocommerce-product-gallery__image" onclick="openModal();currentSlide(<?php echo $index; ?>)" src="<?php echo wp_get_attachment_url($imageId); ?>">

          <?php $index++; ?>

        <?php } ?>

       <!-- DISPLAYS THE FIRST FOUR IMAGES -->
       <script></script>

      <!-- RIGHT/INCREMENT ARROW -->
      <span><i id="arrow-right" class="thumbnail-arrow-right fa fa-chevron-right" onclick="addOne(1)"></i></span>

      <?php echo modal();
    }
  }

endif;

if ( ! function_exists('single_product_icons') ) :

  /**
  * Returns "why shop with us" icons on WooCommerce Single Product Pages
  */
  function single_product_icons() {

    if ( wp_is_mobile() ) { ?>

  	  <div class="box-border">
      <div class="row justify-content-center">
        <div class="col-6">
         <div class="box">
           <i class="fa fa-users"></i>
           <h6 class="single-product__icon_text">Trusted Since 1989</h6>
         </div>
       </div>
       <div class="col-6">
         <div class="box">
           <i class="fa fa-usd"></i>
           <h6 class="single-product__icon_text">Lowest Price Gauranteed</h6>
         </div>
       </div>
     </div>
     <div class="row justify-content-center">
       <div class="col-6">
         <div class="box">
           <i class="fa fa-truck"></i>
           <h6 class="single-product__icon_text">Free Shipping</h6>
         </div>
       </div>
       <div class="col-6">
         <div class="box">
           <i class="fa fa-shopping-cart"></i>
           <h6 class="single-product__icon_text">First Return Free</h6>
         </div>
       </div>
      </div>
    </div>

   <?php } else { ?>

      <div class="row box-border">
        <div class="col-sm">
         <div class="box">
           <i class="fa fa-users"></i>
           <h6 class="single-product__icon_text">Trusted Since 1989</h6>
         </div>
       </div>
       <div class="col-sm">
         <div class="box">
           <i class="fa fa-usd"></i>
           <h6 class="single-product__icon_text">Lowest Price Gauranteed</h6>
         </div>
       </div>
       <div class="col-sm">
         <div class="box">
           <i class="fa fa-truck"></i>
           <h6 class="single-product__icon_text">Free Shipping</h6>
         </div>
       </div>
       <div class="col-sm">
         <div class="box">
           <i class="fa fa-shopping-cart"></i>
           <h6 class="single-product__icon_text">First Return Free</h6>
         </div>
       </div>
      </div>

  <?php }
  }

endif;

if ( ! function_exists('getCategorySlug') ) :

  /**
  * Returns the current category page slug
  *
  * @return string
  */
  function getCategorySlug() {
    global $wp_query;
      $cat_slug = $wp_query->query_vars['product_cat'];
      return $cat_slug;
  }

endif;

//RETURNS THE CURRENT CATEGORY PAGE ID BASED ON CATEGORY SLUG
if ( ! function_exists('getCategoryId') ) :

  /**
  * Returns the current category page ID
  *
  * @return int
  */
  function getCategoryId() {
    $category = get_term_by( 'slug', getCategorySlug(), 'product_cat' );
    return $cat_id = $category->term_id;
  }

endif;


if ( ! function_exists('is_designer_collection') ) :

  /**
  * Returns whether or the current page is a designer collection page
  *
  * @return bool
  */
  function is_designer_collection() {

    $designer_collection_cat_ids = array(16157, 15467, 16362, 15885);

    if ( in_array( getCategoryId(), $designer_collection_cat_ids ) !== FALSE ) {

      return true;

    }
    else
    {

      return false;

    }

  }

endif;

if ( ! function_exists('is_parent_category') ) :

	/**
	* Check if the current page is a parent category or not
	*
	* @return bool
	*/
	function is_parent_category() {

	  $category = get_term_by( 'slug', getCategorySlug(), 'product_cat' );

	  if ( $category->parent > 0) {

	    return false;

	  } else {

	    return true;

	  }

	}

endif;



if ( ! function_exists('categoryPageImages') ) :

  /**
  * Returns the WooCommerce Product Category Header Image based on the Category ID
  *
  * @param int (the category ID)
  */
  function categoryPageImages($categoryId) {

    $categoryImageLinks = array(
    //ART AND ACCESSORIES
    '443'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/art_category_picture-e1576271344838.jpg',
    //CHANDELIERS
    '59'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/chandelier_category_picture.jpg',
    //BATH AND VANITY
    '82'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/bath_and_vanity_category_picture-1.jpg',
    //CEILING FANS
    '81'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/fans_category_picture.jpg',
    //TABLE LAMPS
    '3226'  => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/table_and_floor_lamps_category_picture_5-e1569944729170.jpg',
    //FLOOR LAMPS
    '3225'  => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/table_and_floor_lamps_category_picture_5-e1569944729170.jpg',
    //LAMPS
    '165'   => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/table_and_floor_lamps_category_picture_5.jpg',
    //SEMI-FLUSH MOUNTS
    '3228'  => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/semi_flush_mounts_category_pictures.jpg',
    //FLUSH MOUNTS
    '3227'  => 'https://www.lightyourhome.com/wp-content/uploads/2019/12/flush_mounts_heading_img-1.jpg',
    //MIRRORS
    '1860'  => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/mirrors_category_picture.jpg',
    //OUTDOOR
    '80'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/outdoor_category_picture-e1570205505925.jpg',
    //PENDANTS
    '78'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/pendants_category_picture.jpg',
    //SCONCES
    '79'    => 'https://www.lightyourhome.com/wp-content/uploads/2019/07/sconces_category_image-e1569504785541.jpg',
    //QUOIZEL lighting
    '10612' => 'https://www.lightyourhome.com/wp-content/uploads/2019/08/quoizel_summer_sale.jpg',
    //LABOR DAY SALE
    '10632' => 'https://www.lightyourhome.com/wp-content/uploads/2019/08/labor_day_sale.jpg',
    //INNOVATIONS
    '10634' => 'https://www.lightyourhome.com/wp-content/uploads/2019/08/innovations_labor_day_sale-e1573765649189.jpg',
    //KICHLER LIGHTING
    '10646' => 'https://www.lightyourhome.com/wp-content/uploads/2019/08/kichler_labor_day_sale-e1576271274593.jpg',
    //GOLDEN LIGHTING
    '10657' => 'https://www.lightyourhome.com/wp-content/uploads/2019/08/golden_lighting_labor_day_sale-1-e1570045110231.jpg',
    //hudson valley
    '14189' => 'https://www.lightyourhome.com/wp-content/uploads/2019/11/hudson_valley_cat_image_2-e1574348700630.jpg',
    //mitzi
    '14190' => 'https://www.lightyourhome.com/wp-content/uploads/2019/11/hudson_valley_lighting_cat_image-e1574349384964.jpg',
    //savoy house
    '14197' => 'https://www.lightyourhome.com/wp-content/uploads/2019/11/savoy_house-scaled-e1574455820277.jpg',
    //Millennium Lighting
    '14200' => 'https://www.lightyourhome.com/wp-content/uploads/2019/11/RDBS10-SB-Island-scaled-e1574456657498.jpg',
    //livex lighting
    '14229' => 'https://www.lightyourhome.com/wp-content/uploads/2019/11/43204-91_B2-1.jpg',
    //z lite lighting
    '14235' => 'https://www.lightyourhome.com/wp-content/uploads/2019/11/z_lite_category_img.jpg',
    //uttermost
    '14244' => 'https://www.lightyourhome.com/wp-content/uploads/2019/12/uttermost_brand_header_img-1.jpg',
    //elk home
    '14247' => 'https://www.lightyourhome.com/wp-content/uploads/2019/12/elk_home_brand_header_img.jpg',
    //elan lighting
    '14265' => 'https://www.lightyourhome.com/wp-content/uploads/2020/01/elan_lighting_brand_img.jpg',
    //generation Lighting
    '15466' => 'https://www.lightyourhome.com/wp-content/uploads/2020/01/generation_lighting_brand_page.jpg',
    //ellen degeneres Collection
    '15467' => 'https://www.lightyourhome.com/wp-content/uploads/2020/01/ED_EllenDeGeneres.jpg',
    //chapman and Myers
    '16157' => 'https://www.lightyourhome.com/wp-content/uploads/2020/01/cm_designer-page_images.jpg',
    //kelly
    '16362' => 'https://www.lightyourhome.com/wp-content/uploads/2020/01/Kelly_KW.jpg',
    //thomas o'Brien
    '15885' => 'https://www.lightyourhome.com/wp-content/uploads/2020/01/TOB_Portrait_credit-to-Michelle-Arcila.jpg',
    //artcraft
    '21718' => 'https://www.lightyourhome.com/wp-content/uploads/2020/03/artcraft_lighting.jpg',
    //maxim
    '23085' => 'https://www.lightyourhome.com/wp-content/uploads/2020/04/maxim_lighting.jpg',
    //et2
    '24446' => 'https://www.lightyourhome.com/wp-content/uploads/2020/04/et2_lighting.jpg',
    //elk lighting
    '25105' => 'https://www.lightyourhome.com/wp-content/uploads/2020/05/elk_lighting_brand_image.jpg'
    
    ); ?>
    
    <div class="prod_cat_img">
      <img src="<?php echo $categoryImageLinks[$categoryId]; ?>" style="width: 100%; height: auto;">
    </div>
    
    <?php }

endif;



add_action( 'woocommerce_thankyou', 'google_conversion_tracking_checkout_thank_you_page' );
if ( ! function_exists('google_conversion_tracking_checkout_thank_you_page') ) :
	/**
	* Adds google conversion code to checkout thank you page
	*/
	function google_conversion_tracking_checkout_thank_you_page() {
	?>
	   <!-- Event snippet for Purchase conversion page -->
	<script>
	  gtag('event', 'conversion', {
	      'send_to': 'AW-877014085/OtoqCJPAlKYBEMXYmKID',
	      'value': 1.0,
	      'currency': 'USD',
	      'transaction_id': ''
	  });
	</script>
	<?php
	}

endif;


add_action( 'woocommerce_before_shop_loop', 'remove_shop_coupon_form', 9 );
if ( ! function_exists('remove_shop_coupon_form') ) :
	/**
	* Removes shop coupon form
	*/
	function remove_shop_coupon_form(){
	    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_cart_notice', 10 );
	}
	add_filter( 'woocommerce_checkout_coupon_message', 'have_coupon_message');

endif;

if ( ! function_exists('have_coupon_message') ) :

	/**
	* Returns the have coupon message only if it is the cart or checkout page
	* @return string
	*/
	function have_coupon_message() {

	if ( is_product_category() || is_shop() ) {

		return;

	} else {

	  return '<i class="fa fa-ticket" aria-hidden="true"></i><strong> Have a coupon? <a href="#" class="showcoupon">Click here to enter your coupon code</strong></a>';

	}
}

endif;


add_filter( 'woocommerce_coupon_error', 'change_coupon_error', 30, 3 );
if ( ! function_exists('change_coupon_error') ) :
	/**
	* Change coupon error message
	* @return string
	*/
	function change_coupon_error( $err, $err_code, $coupon ) {

	  if ( is_checkout() ) {
	    //$err =  ' <a class="showcoupon">' . __( 'Click here to enter a valid coupon code', 'woocommerce' ) . '</a>';
		}
		else
		{

	    $err  =  'Coupon code not valid. Please call or contact us for assistance!'; //Error message for cart page

		}

		return $err;

	}

endif;


if ( ! function_exists('free_bulbs') ) :

	/**
	* Check if a product qualifies for free bulbs or not
	*/
	function free_bulbs() {

	global $product;

	$bulbtype = $product->get_attribute('pa_bulb type:');
	$bulbsincluded = $product->get_attribute('pa_bulbs included:');

	$notincluded = array("N", "No", "no", "n");

	if ( in_array($bulbsincluded, $notincluded) || empty($bulbsincluded) ) {

	  if (strpos($bulbtype, "LED") == FALSE && !empty($bulbtype)) : ?>

	    <div>
	      <p class="bulb-offer"><strong>FREE</strong> Light Bulbs included with your order!</p>
	    </div>

	  <?php  endif;

	   }
	}

endif;


/*************************************************************
************* RETURN POLICY TAB FOR SINGLE PRODUCTS***********
*************************************************************/

add_filter( 'woocommerce_product_tabs', 'woo_return_policy_tab' );

if ( ! function_exists('woo_return_policy_tab') ) :
	/**
	 * Adds return policy tab
	 * @param array
	 * @return array
	 */
	function woo_return_policy_tab( $tabs ) {

		// Adds the new tab

		$tabs['return_policy_tab'] = array(
			'title' 	=> __( 'Return Policy', 'woocommerce' ),
			'priority' 	=> 50,
			'callback' 	=> 'woo_return_policy_tab_content'
		);

		return $tabs;

	}

endif;

if ( ! function_exists('woo_return_policy_tab_content') ) :

	/**
	* Callback function for woo_return_policy_tab
	*/
	function woo_return_policy_tab_content() { ?>

	<table style="<?php if (wp_is_mobile() ) : echo "width: auto; margin-right: auto; margin-left: auto;"; else : echo "width: 50%; margin-right: auto; margin-left: auto;"; endif; ?>">
	   <tbody>
	         <tr>
	           <th>First Return:</th>
	           <td>Your first return is free! No questions asked.</td>
	         </tr>
	         <tr>
	           <th>Subsequent Returns:</th>
	           <td>All subsequent returns may be subject to a restocking fee. This restocking fee is applied by the manufacturer of the item and is generally 15% to 25% of the price of the item.</td>
	         </tr>
	         <tr>
	           <th>Restocking Fees:</th>
	           <td>We will pay the restocking fee of the item(s) you are returning if you place another order of equal or higher value!</td>
	         </tr>
	         <tr>
	           <th>Full Return Policy:</th>
				 <td><a href="<?php echo site_url('/home/return-policy'); ?>"><u>See Our Full Return Policy Here</u>.</a></td>
	         </tr>
	         <tr>
	           <th>Shipping Policy:</th>
	           <td><a href="<?php echo site_url('/home/shipping-policy'); ?>"><u>See Our Full Shipping Policy Here</u>.</a></td>
	         </tr>
	   </tbody>
	</table>

	<?php }

endif;



add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );

if ( ! function_exists('woo_rename_tabs') ) :

	/**
	* Renames Additional Information Tab on Single Product Pages
	*/
	function woo_rename_tabs( $tabs ) {

		$tabs['additional_information']['title'] = __( 'Specifications' );	// Rename the additional information tab

		return $tabs;

	}

endif;



if ( ! function_exists('tfs_do_products_shortcode') ) :

  /**
  * Calls a shortcode directly rather than using do_shortcode()
  *
  * @param string $shortcode_args - the shortcode arguments
  */
  function tfs_do_products_shortcode( $shortcode_args ) {

    global $shortcode_tags;

    $func = $shortcode_tags['products'];

    echo call_user_func( $func, $shortcode_args );

  }

endif;

add_shortcode( 'wppp', 'custom_wppp_shortcode' );
if ( ! function_exists('custom_wppp_shortcode') ) :

 /**
 * Create a shortcode to use the woocommerce products per page dropdown
 */
	function custom_wppp_shortcode() {
		if ( function_exists( 'Woocommerce_Products_Per_Page' ) ) {
			Woocommerce_Products_Per_Page()->front_end->products_per_page_dropdown();
		}
	}

endif;



add_action('wp_ajax_remove_item_from_cart', 'remove_item_from_cart');
add_action('wp_ajax_nopriv_remove_item_from_cart', 'remove_item_from_cart');
if ( ! function_exists('remove_item_from_cart') ) :

	function remove_item_from_cart() {
	    global $woocommerce;

	    $cart = WC()->instance()->cart;
	    $id = $_POST['product_id'];
	    $cart_id = $cart->generate_cart_id($id);
	    $cart_item_id = $cart->find_product_in_cart($cart_id);

	    if($cart_item_id){
	       $cart->set_quantity($cart_item_id, 0);
	       return true;
	    }
	    return false;
	    }

endif;


add_filter('woocommerce_single_product_zoom_options', 'single_product_zoom_options');
if ( ! function_exists('single_product_zoom_options') ) :

	/**
	* Change single product zoom to only work on click
	*/
	function single_product_zoom_options( $options ) {

		$options['on'] = 'click';

		return $options;

	}

endif;


if ( ! wp_is_mobile() ) {

  add_filter ( 'woocommerce_single_product_image_gallery', 'tfs_change_gallery_columns', 99 ); //where woocommerce_single_product_image_gallery is the selector

}

if ( ! function_exists('tfs_change_gallery_columns') ) :

	/**
	* Return the number of gallery columns on single product pages
	* @return int - The number of cols
	*/
	function tfs_change_gallery_columns() {
	     return 1;
	}

endif;



add_action( 'woocommerce_thankyou', 'adding_customers_details_to_thankyou', 99, 1 );
if ( ! function_exists('adding_customers_details_to_thankyou') ) :

	/**
	* Display the Checkout thank you page when not logged in
	*/
	function adding_customers_details_to_thankyou( $order_id ) {

	    $order = wc_get_order($order_id); // Get an instance of the WC_Order object

	    wc_get_template( 'order/order-details-customer.php', array('order' => $order ));
	}

endif;


if ( ! function_exists('tfs_generate_woocommerce_checkout_coupon') ) :

  /**
  * Generates a coupon for the checkout thank you page
  */
  function tfs_generate_woocommerce_checkout_coupon( $order_id ) {

      $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

      $coupon_code = '';

      for ( $i = 0; $i < 10; $i++ ) {

        $coupon_code .= $chars[mt_rand(0, strlen($chars)-1)];

      }

      $amount = '5'; // Amount
      $discount_type = 'percent'; // Type: fixed_cart, percent, fixed_product, percent_product

      $coupon = array(
        'post_title'   => $coupon_code,
        'post_content' => '',
        'post_excerpt' => 'Thank you page generated #' . $order_id,
        'post_status'  => 'publish',
        'post_author'  => 1,
        'post_type'		 => 'shop_coupon'
      );

      $new_coupon_id = wp_insert_post( $coupon );

      // Add meta
      update_post_meta( $new_coupon_id, 'discount_type', $discount_type );
      update_post_meta( $new_coupon_id, 'coupon_amount', $amount );
      update_post_meta( $new_coupon_id, 'individual_use', 'no' );
      update_post_meta( $new_coupon_id, 'product_ids', '' );
      update_post_meta( $new_coupon_id, 'exclude_product_ids', '' );
      update_post_meta( $new_coupon_id, 'usage_limit', '1' );
      update_post_meta( $new_coupon_id, 'expiry_date', '' );
      update_post_meta( $new_coupon_id, 'apply_before_tax', 'yes' );
      update_post_meta( $new_coupon_id, 'free_shipping', '' );

      return $coupon_code;

  }

endif;


add_filter( 'woocommerce_show_page_title', 'hide_cat_page_title' );
if ( ! function_exists('hide_cat_page_title') ) :

	/**
	* Hides the product category titles
	*/
	function hide_cat_page_title( $title ) {
	   if ( is_product_category() ) $title = false;
	   return $title;
	}

endif;


add_filter( 'woocommerce_dropdown_variation_attribute_options_html', 'tfs_hide_select', 10,2);
if ( ! function_exists('tfs_hide_select') ) :

  function tfs_hide_select( $html, $args ) {

    // Get selected value.
    if ( false === $args['selected'] && $args['attribute'] && $args['product'] instanceof WC_Product ) {
      $selected_key     = 'attribute_' . sanitize_title( $args['attribute'] );
      $args['selected'] = isset( $_REQUEST[ $selected_key ] ) ? wc_clean( wp_unslash( $_REQUEST[ $selected_key ] ) ) : $args['product']->get_variation_default_attribute( $args['attribute'] ); // WPCS: input var ok, CSRF ok, sanitization ok.
    }
  
    $options               = $args['options'];
    $product               = $args['product'];
    $attribute             = $args['attribute'];
    $name                  = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title( $attribute );
    $id                    = $args['id'] ? $args['id'] : sanitize_title( $attribute );
    $class                 = $args['class'];
    $show_option_none      = (bool) $args['show_option_none'];
    $show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : __( 'Choose an option', 'woocommerce' ); // We'll do our best to hide the placeholder, but we'll need to show something when resetting options.
  
    if ( empty( $options ) && ! empty( $product ) && ! empty( $attribute ) ) {
      $attributes = $product->get_variation_attributes();
      $options    = $attributes[ $attribute ];
    }
  
    //variation attributes to not display a select dropdown for
    if ( $attribute == 'pa_blade-finish' || $attribute == 'pa_reversible-blades' ) {
  
      return;
  
    } else {
  
      $html  = '<select id="' . esc_attr( $id ) . '" class="' . esc_attr( $class ) . '" name="' . esc_attr( $name ) . '" data-attribute_name="attribute_' . esc_attr( sanitize_title( $attribute ) ) . '" data-show_option_none="' . ( $show_option_none ? 'yes' : 'no' ) . '">';
  
    }
  
    $html .= '<option value="">' . esc_html( $show_option_none_text ) . '</option>';
  
    if ( ! empty( $options ) ) {
      if ( $product && taxonomy_exists( $attribute ) ) {
        // Get terms if this is a taxonomy - ordered. We need the names too.
        $terms = wc_get_product_terms(
          $product->get_id(),
          $attribute,
          array(
            'fields' => 'all',
          )
        );
  
        foreach ( $terms as $term ) {
          if ( in_array( $term->slug, $options, true ) ) {
            $html .= '<option value="' . esc_attr( $term->slug ) . '" ' . selected( sanitize_title( $args['selected'] ), $term->slug, false ) . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $term->name, $term, $attribute, $product ) ) . '</option>';
          }
        }
      } else {
        foreach ( $options as $option ) {
          // This handles < 2.4.0 bw compatibility where text attributes were not sanitized.
          $selected = sanitize_title( $args['selected'] ) === $args['selected'] ? selected( $args['selected'], sanitize_title( $option ), false ) : selected( $args['selected'], $option, false );
          $html    .= '<option value="' . esc_attr( $option ) . '" ' . $selected . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option, null, $attribute, $product ) ) . '</option>';
        }
      }
    }
  
    $html .= '</select>';
  
    return $html;
  
  }

endif;


add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );
if ( ! function_exists('woocommerce_template_product_description') ) :

  /**
  * Add the product description to the single product summary
  */
  function woocommerce_template_product_description() {

    global $product;

    if ( strlen( $product->get_description() ) > 40 ) : ?>

    <div class="sp-description">
      <?php woocommerce_get_template( 'single-product/tabs/description.php' ); ?>
    </div>

  <?php endif; ?>

  <div id="sp-print" class="desktop-only">
    <span title="Print This Product"><i class="fa fa-print" aria-hidden="true"></i></span>
  </div>

  <?php

  if ( $product->is_type('variable') ) : ?>

    <div class="sp-available-options mb-3">
      <h3>Available Options: </h3>
    </div>

  <?php else : ?>

    <div class="sp-available-options mb-3"></div>

  <?php endif;
  }

endif;


add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
if ( ! function_exists('woo_remove_product_tabs') ) :

  /**
   * Remove product data tabs
   */
  function woo_remove_product_tabs( $tabs ) {

      unset( $tabs['description'] );      	// Remove the description tab

      return $tabs;
  }

endif;



add_filter( 'woocommerce_product_tabs', 'woo_overview_tab' );
if ( ! function_exists('woo_overview_tab') ) :

  /**
   * Adds Overview
   */
  function woo_overview_tab( $tabs ) {

	  // Adds the new tab

	  $tabs['overview'] = array(
		'title' 	=> __( 'Overview', 'woocommerce' ),
		'priority' 	=> 1,
		'callback' 	=> 'woo_overview_tab_content'
	  );

	  return $tabs;

  }

endif;


if ( ! function_exists('get_spec_and_installation_sheet_url_json') ) :

  /**
   * 
   */
  function get_spec_and_installation_sheet_url_json( $type ) {

    global $product;
  
    $sheet_urls = array();
  
    $sheet_url = null;
  
    foreach ( $product->get_visible_children() as $variation_id ) :
  
      if ( $type == 'spec' ) {
  
        $sheet_url = get_post_meta( $variation_id, '_text_field_spec', true );
  
      } else if ( $type == 'installation' ) {
  
        $sheet_url = get_post_meta( $variation_id, '_text_field_installation', true );
  
      } else {
  
        return;
  
      }
  
      if (filter_var( $sheet_url, FILTER_VALIDATE_URL ) !== FALSE && $sheet_url !== null ) {
  
        array_push( $sheet_urls, array(
  
          'variation_id' => $variation_id,
          'url' => $sheet_url
  
          )
  
        );
  
      }
  
    endforeach;
  
    if ( ! empty( $sheet_urls ) ) {
  
      $urls_json = wp_json_encode( $sheet_urls );
  
      $data = array(
  
        'default' => $sheet_urls[0]['url'],
        'json'    => $urls_json
  
      );
  
      return $data;
  
    }
  
  }

endif;


if ( ! function_exists('woo_overview_tab_content') )  :

  /**
   * Outputs the overview tab's content on single product page. Included general overview, product warranty, spec sheets, and installation sheets if available.
   */
  function woo_overview_tab_content() {

    global $product;
    
    $manufacturer_id = substr( $product->get_sku(), 0, 3 );
    
    $manufacturer_warranty_link = single_product_manufacturer_shipping_and_info( $product->get_categories(), true );
    
    $manufacturer_warranty_link_exists = ( is_array( $manufacturer_warranty_link ) && $manufacturer_warranty_link['nolink'] == 1 ? false : true );
    
    $manufacturer_warranty_and_sheets_missing = false;
    
    if ( $product->is_type('simple') && empty( $manufacturer_warranty_link ) && empty( get_field('product_spec_sheet') ) && empty( get_field('product_installation_sheet') ) ) {
    
      $manufacturer_warranty_and_sheets_missing = true;
    
    }
    
    ?>
    
    <div class="container-fluid">
    
      <div class="row mt-3 <?php if ( $manufacturer_warranty_and_sheets_missing == true ) : ?>justify-content-center<?php endif; ?>">
    
        <div class="<?php if ( $manufacturer_warranty_and_sheets_missing !== true ) : ?>col-md-6 col-12<?php else : ?>col-md-8 col-12<?php endif; ?>">
    
          <table class="woocommerce-product-attributes sp-overview-table">
            <tbody>
              <?php if ( ! empty( $product->get_dimensions() ) ) : ?>
              <tr class="woocommerce-product-attributes-item">
                <th class="woocommerce-product-attributes-item__label">Dimensions:</th>
                <td class="woocommerce-product-attributes-item__value"><?php echo wp_kses_post( $product->get_dimensions() ); ?></td>
              </tr>
              <?php endif; ?>
              <?php if ( ! empty( $product->get_attribute('pa_bulb-type') ) ) : ?>
              <tr class="woocommerce-product-attributes-item">
                <th class="woocommerce-product-attributes-item__label">Bulb Type:</th>
                <td class="woocommerce-product-attributes-item__value"><?php echo wp_kses_post( $product->get_attribute('pa_bulb-type') ); ?></td>
              </tr>
             <?php endif; ?>
             <?php if ( ! empty( $product->get_weight() ) ) : ?>
              <tr class="woocommerce-product-attributes-item">
                <th class="woocommerce-product-attributes-item__label">Weight:</th>
                <td class="woocommerce-product-attributes-item__value"><?php echo wp_kses_post( $product->get_weight() ) . ' lbs'; ?></td>
              </tr>
             <?php endif; ?>
            </tbody>
          </table>
    
        </div>
    
        <div class="col-md-6 col-12" style="<?php if ( $manufacturer_warranty_and_sheets_missing == true ) : ?>display: none;<?php endif; ?>">
    
          <div class="sp-download-area">
    
            <ul>
    
              <?php if ( ! empty( $manufacturer_warranty_link ) && $manufacturer_warranty_link_exists == true ) : ?>
    
                <li><a class="sp-download-button" target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( $manufacturer_warranty_link ); ?>"><span>Product Warranty</span><i class="fa fa-download" aria-hidden="true"></i></a></li>
    
              <?php else : ?>
    
                <li><p><?php echo esc_html( $manufacturer_warranty_link['text'] ); ?></p></li>
    
              <?php endif; ?>
    
              <?php if ( ! empty( get_field('product_spec_sheet') ) && $product->is_type('simple') && $manufacturer_id !== '083' ) : ?>
    
              <li><a id="sp-spec-sheet" class="sp-download-button" target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( get_field('product_spec_sheet') ); ?>"><span>Product Specification Sheet</span><i class="fa fa-download" aria-hidden="true"></i></a></li>
    
              <?php
    
              elseif ( $product->is_type('variable') && $manufacturer_id !== '083' ) :
    
                $variation_spec_urls_and_json = get_spec_and_installation_sheet_url_json('spec');
    
              ?>
    
              <li><a id="sp-spec-sheet" class="sp-download-button" target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( $variation_spec_urls_and_json['default'] ); ?>" <?php if ( ! empty($variation_spec_urls_and_json['json']) ) : echo 'data-spec-sheet-urls=' . $variation_spec_urls_and_json['json']; endif; ?>><span>Product Specification Sheet</span><i class="fa fa-download" aria-hidden="true" ></i></a></li>
    
              <?php endif; ?>
    
              <?php if ( ! empty( get_field('product_installation_sheet') ) && $product->is_type('simple') ) : ?>
    
              <li><a id="sp-installation-sheet" class="sp-download-button" target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( get_field('product_installation_sheet') ); ?>"><span>Product Installation Guide</span><i class="fa fa-download" aria-hidden="true"></i></a></li>
    
              <?php elseif ( $product->is_type('variable') ) :
    
                $variation_installation_urls_and_json = get_spec_and_installation_sheet_url_json('installation');
    
              ?>
    
              <li><a id="sp-installation-sheet" class="sp-download-button" target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( $variation_installation_urls_and_json['default'] ); ?>" <?php if ( ! empty($variation_installation_urls_and_json['json']) ) : echo 'data-installation-sheet-urls=' . $variation_installation_urls_and_json['json']; endif; ?>><span>Product Installation Guide</span><i class="fa fa-download" aria-hidden="true"></i></a></li>
    
              <?php endif; ?>
            </ul>
    
          </div>
    
        </div>
    
      </div>
    
    </div>
    
    
  <?php }

endif;


if ( ! function_exists('get_recent_post_data') ) :

  /**
  * Output the most recent posts
  */
  function get_recent_post_data() {

    $count = 0;

    $posts = get_posts( array( 'numberposts' => 3, 'orderby' => 'date', 'order' => 'DESC' ) );

    foreach ( $posts as $post ) :

     ?>

      <div class="col-md-4 col-12">
        <div class="block-container">
          <a href="<?php echo get_the_permalink( $post->ID ); ?>">
            <div class="block-picture">
              <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="' . wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) . '">', wp_get_attachment_metadata( get_post_thumbnail_id( $post->ID ) ), get_post_thumbnail_id( $post->ID ) ); ?>
            </div>
            <div class="block-caption-wrapper">
              <div class="block-caption-container">
                <h3 class="block-heading"><?php echo $post->post_title; ?></h3>
                  <a style="text-align: center;" href="<?php echo get_the_permalink( $post->ID ); ?>" class="block-shop-link">
                    Start Reading
                  </a>
              </div>
            </div>
          </a>
        </div>
      </div>

    <?php endforeach;

  }

endif;

add_filter( 'woocommerce_product_additional_information_heading', 'remove_single_product_specification_tab_heading', 10, 1 );
if ( ! function_exists('remove_single_product_specification_tab_heading') ) :

  function remove_single_product_specification_tab_heading( $heading ) {
  return false;
  }

endif;

