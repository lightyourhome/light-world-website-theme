<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */


 if ( ! defined( 'ABSPATH' ) ) {
         exit;
 }
 ?>

 <div class="woocommerce-order">

         <?php if ( $order ) : ?>

                 <?php if ( $order->has_status( 'failed' ) ) : ?>

                         <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

                         <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
                                 <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
                                 <?php if ( is_user_logged_in() ) : ?>
                                         <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My account', 'woocommerce' ); ?></a>
                                 <?php endif; ?>
                         </p>

                 <?php else : ?>

									 <div class="container mb-3">

										 <div class="row">

											 <div class="col-md-12 col-12 mt-3 woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received" style="background-color: #f4f4f4;">

											 	<div class="row">
												 
													<div class="col-md-7">
													
														<h3 class="checkout-thank-you-heading mt-3">Sweet, Your Order is On The Way!</h3>
												 		<br>
												 		<p class="checkout-thank-you-p">Congratulations <?php echo $order->get_billing_first_name() ?> - you're on the way to making your home a better and brighter place! We've received your order and emailed you a receipt with your order details.</p>
												 		<p class="checkout-thank-you-p">While you're waiting for your order, should you have any questions or concerns, please do not hesitate to <a href="<?php echo site_url('/contact'); ?>" style="text-decoration: underline;">contact us here.</a></p>
												 		<p class="checkout-thank-you-p">Thank you for your order! We hope to see you again soon! :)</p>

													</div> 
												 
												</div>

											 </div>

										 </div>

												 <br>

												 <section>

													 <div class="row justify-content-center">

														 <div class="col-md-12 col-12" style="background-color: #f4f4f4;">

															 <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
															 	<tbody>
															 	 <tr>
															 		 <td class="woocommerce-order-overview__order order">
															 						 <?php _e( 'Transaction ID:', 'woocommerce' ); ?>
															 						 <br>
															 						 <strong><?php echo $order->get_order_number(); ?></strong>
															 		 </td>
															 	 </tr>
															 	 <tr>
															 		 <td class="woocommerce-order-overview__date date">
															 						 <?php _e( 'Date:', 'woocommerce' ); ?>
															 						 <br>
															 						 <strong><?php echo date_i18n( get_option( 'date_format' ), $order->get_date_created() ); ?></strong>
															 		 </td>
															 	 </tr>
															 	 <tr>
															 		 <td  class="woocommerce-order-overview__total total">
															 						 <?php _e( 'Total:', 'woocommerce' ); ?>
															 						 <br>
															 						 <strong><?php echo $order->get_formatted_order_total(); ?></strong>
															 		 </td>
															 	 </tr>
															 	</tbody>

															 </table>

														 </div>

													 </div>

												 </div>

											 </section>



                 <?php endif; ?>

                 <?php //do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
                 <?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

         <?php else : ?>

                 <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

         <?php endif; ?>

 </div>
<div class="container">
	<div class="row">
	 <div class="col-md-12 mt-5" style="border-bottom: 2px solid #d3d3d3;"></div>
	</div>
</div>
