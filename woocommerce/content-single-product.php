<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">

	  <h1 class="single-product-title">
	  	<?php echo esc_html( $product->get_name() ); ?>
	  </h1>

		<div class="mt-3 mb-3 sp-finish">
			<span><b>Finish: </b></span>

			<?php if ( $product->is_type('simple') ) : ?>

			<span><?php echo esc_html( $product->get_attribute('pa_finish') );  ?></span>

		<?php else : ?>

			<span id="sp-variation-finish"></span>

		<?php endif; ?>

		</div>

		<?php woocommerce_get_template( 'single-product/meta.php' ); ?>

		<div class="mb-3 sp-categories">
			<span><b>Categories: </b></span>
			<span><?php echo $product->get_categories(); ?></span>
		</div>

		<div class="mb-3 sp-categories">
			<span><b>Tags: </b></span>
			<span><?php echo $product->get_tags(); ?></span>
		</div>


		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>

		<?php //echo free_bulbs(); ?>

        <!-- DISPLAYS SHIPPING DURATION ON SINGLE PRODUCT PAGES -->
        <div class="shipping-duration">
	       <?php

				  $shipping_duration = single_product_manufacturer_shipping_and_info( $product->get_categories() );

				  echo $shipping_duration['shipping'];

					?>
        </div>

		<?php //echo single_product_icons(); ?>

		<div id="single-product-page_contact_us" class="mt-3">
				<p>Have a question? Chat with us!</p>
		</div>

	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );

	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>