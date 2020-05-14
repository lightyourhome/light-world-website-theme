<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
$productId = $product->get_id();


if ($product->is_type('variable') ) { ?>

	<div class="swatch-div" >
	  <div class="spacer"><?php	echo woocommerce_loop_swatches(); ?></div>
  </div>

<?php }

if ( $price_html = $product->get_price_html() ) :
	if ($product->is_type('variable')) : ?>
    <a class="product-price-link_variable">
	    <span class="price"><?php echo $price_html; ?></span>
    </a>
	  <?php
else: ?>
		<a href="<?php echo get_the_permalink($productId); ?>" class="product-price-link_simple">
			<span class="price"><?php echo $price_html; ?></span>
		</a>
  <?php endif; ?>
<?php endif; ?>
