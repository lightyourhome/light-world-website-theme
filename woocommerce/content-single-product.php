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

	  	<?php if ( ! empty( $product->get_attribute( 'pa_finish' ) ) ) : ?>

			<div class="mt-3 mb-3 sp-finish">

				<span><b>Finish: </b></span>

				<?php if ( $product->is_type('simple') ) : ?>

					<span><?php echo esc_html( $product->get_attribute('pa_finish') );  ?></span>

				<?php else : ?>

					<span id="sp-variation-finish"></span>

				<?php endif; ?>

			</div>

		<?php endif; ?>
		
		<?php woocommerce_get_template( 'single-product/meta.php' ); ?>

		<?php if ( $product->has_dimensions() ) : ?>

			<div class="mt-3 mb-3 sp-dimensions">

				<span><b>Dimensions: </b></span>

				<span><?php echo esc_html( $product->get_dimensions() ); ?><span>

			</div>

		<?php else : ?>

			<?php if ( ! empty( $product->get_attribute('pa_depth') ) ) : ?>

				<div class="mt-3 mb-3 sp-dimensions">
				
					<span><b>Depth/Length: </b></span>

					<span><?php echo esc_html( $product->get_attribute('pa_depth') ); ?><span>

				</div>

			<?php endif; ?>

			<?php if ( ! empty( $product->get_attribute('pa_width') ) ) : ?>

				<div class="mt-3 mb-3 sp-dimensions">

					<span><b>Width: </b></span>

					<span><?php echo esc_html( $product->get_attribute('pa_width') ); ?><span>

				</div>

			<?php endif; ?>

			<?php if ( ! empty( $product->get_attribute('pa_height') ) ) : ?>

				<div class="mt-3 mb-3 sp-dimensions">

					<span><b>Height: </b></span>

					<span><?php echo esc_html( $product->get_attribute('pa_height') ); ?><span>

				</div>

			<?php endif; ?>


		<?php endif; ?> <!-- end dimensions -->

		<?php if ( ! empty( $product->get_attribute('pa_diameter') ) ) : ?>

			<div class="mt-3 mb-3 sp-dimensions">

				<span><b>Diameter: </b></span>

				<span><?php echo esc_html( $product->get_attribute('pa_diameter') ); ?><span>

			</div>

		<?php endif; ?>

		<div class="mb-3 sp-categories">
			<span><b>Categories: </b></span>
			<span><?php echo $product->get_categories(); ?></span>
		</div>

		<?php if ( ! empty( $product->get_tags() ) ) : ?>

			<div class="mb-3 sp-categories">
				<span><b>Tags: </b></span>
				<span><?php echo $product->get_tags(); ?></span>
			</div>

		<?php endif;

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

		<?php $shipping_duration = single_product_manufacturer_shipping_and_info( $product->get_categories() ); ?>

		<div class="sp-coupon-code mb-4 mt-4">
			<strong>
				<?php 

					if ( isset( $shipping_duration['coupon'] ) || isset( $shipping_duration['coupon-elk-lighting'] ) && $product->get_stock_status() == 'instock' ) {

						if ( strpos( $product->get_categories(), 'Elk Lighting' ) ) {

							echo $shipping_duration['coupon-elk-lighting'];

						} else {

							echo $shipping_duration['coupon'];

						}

					}
				
				?>
			</strong>
		</div>

		<div class="sp-free-shipping">

			<i class="fa fa-truck" aria-hidden="true"></i>

			<span>
				<strong>Free Shipping!</strong>
			</span>
			
		</div>

		<!-- <p style="text-align: center; color: rgb(253, 156, 21);"><strong>c</strong></p> -->

        <!-- DISPLAYS SHIPPING DURATION ON SINGLE PRODUCT PAGES -->
        <div class="shipping-duration mb-5 mt-4">
	       <?php

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
