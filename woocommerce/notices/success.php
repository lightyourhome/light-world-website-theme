<?php
/**
 * Show messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/success.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $notices ) {
	return;
}

$productTitle = get_the_title();
$successMessage = 'Sweet! ' . $productTitle . " was successfully added to your cart!";

?>

<?php if ( is_product() || is_shop() ) : ?>

	<?php foreach ( $notices as $notice ) : ?>

		<div class="woocommerce-message" role="alert">

			<?php	//echo wc_kses_notice( $message ); ?>
			 <div class="desktop-only">
				 <?php echo $successMessage; ?>
				 <a class="button" href="<?php echo site_url('/cart'); ?>">View Cart</a>
			 </div>

	     <div class="mobile-only">
				 <?php echo $successMessage; ?>
				 <div class="container">
	        <div class="row mt-3">
					<div class="col"></div>
	         <div class="col-auto">
						 <a class="button" href="<?php echo site_url('/cart'); ?>">View Cart</a>
					 </div>
			  	 <div class="col"></div>
					</div>
				 </div>
			 </div>

		</div>

	<?php endforeach; ?>

<?php endif; ?>
