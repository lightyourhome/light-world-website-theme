<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Light_World
 */

?>

<footer id="colophon" class="site-footer footer-background-color" role="contentinfo">

	<div class="container">
	
		<div class="row">
		
			<div class="col">
			
			<div id="footer-navigation" class="container-fluid text-center footer-background-color">
	
				<div class="row justify-content-center pt-5">

					<div class="col-md-12">

						<div class="bottom-to-top">

							<span><i class="fa fa-angle-up mt-2 mb-2"></i></span>

						</div>

					</div>

					<div class="col-md-12"><hr></div>

				</div>

				<div id="mobile-footer-container">

					<div class="row justify-content-center">

						<div class="col-md-12">

							<!-- MOBILE MENU -->
							<div id="footer-mobile-nav" style="width: 100%">
								<div class="col">
									<?php wp_nav_menu( array( 'theme_location'  => 'mobile-footer-menu' ) ); ?>
								</div>
							</div>

						</div>

						<div class="col-md-4 mb-3 mt-3">

							<h3 id="open-chat-footer" class="footer-menu-heading">Chat With Us</h3>
							<h5 class="footer-menu-info">Mon - Fri 10 AM to 5 PM</h5>

						</div>

						<div class="col-md-4 mb-3 mt-3">

							<h3 class="footer-menu-heading">Call Us: </h3>
							<a class="footer-menu-info" href="tel:2158838544" onclick="gtag('event', 'clicks', { event_category: 'Phone Number', event_action: 'Clicked'});"><p>215-883-8544</p></a>

						</div>

						<div class="col-md-4 mb-3 mt-3">

							<h3 class="footer-menu-heading">Visit Us: </h3>
							<h3 class="footer-menu-info">4625 E Street Road Trevose, PA</h3>

						</div>

					</div>

				</div>

				<div id="desktop-footer-nav">

					<div class="row">


						<div class="col-md-3 mb-3 desktop-only">
							<h3 class="footer-menu-heading">LIGHTING</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-lighting') ); ?>
						</div>

						<div class="col-md-3 mb-3 desktop-only">

							<h3 class="footer-menu-heading">LAMPS</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-lamps') ); ?>

							<h3 class="footer-menu-heading">DECOR</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-decor') ); ?>

							<h3 class="footer-menu-heading">FANS</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-fans') ); ?>

						</div>

						<div class="col-md-3 mb-3 desktop-only">

							<h3 class="footer-menu-heading">TIPS, TRICKS & MORE</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-blog-posts') ); ?>

							<h3 class="footer-menu-heading">OTHER STUFF</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-policies') ); ?>

						</div>

						<div class="col-md-3 mb-3">
							<div class="desktop-only">
								<h3 class="footer-menu-heading">VISIT OUR SHOWROOM</h3>
								<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-showroom') ); ?>
							</div>
							<br>
							<h3 id="open-chat-footer" class="footer-menu-heading">Chat With Us</h3>
							<h5 class="footer-menu-info">Mon - Fri 10 AM to 5 PM</h5>
							<br>
							<h3 class="footer-menu-heading">Call Us: </h3>
							<a class="footer-menu-info" href="tel:2158838544" onclick="gtag('event', 'clicks', { event_category: 'Phone Number', event_action: 'Clicked'});"><p>215-883-8544</p></a>
							<br>
							<h3 class="footer-menu-heading">Visit Us: </h3>
							<h3 class="footer-menu-info">4625 E Street Road Trevose, PA</h3>
						</div>


					</div>

				</div>


				







				<div class="row justify-content-center">

					<div class="col-md-12"><hr></div>

						<div class="col-md-6 mt-3 mb-3"><a href="<?php echo site_url('/sitemap'); ?>" class="footer-bottom-links"><p>VIEW OUR SITEMAP</p></a></div>
						<div class="col-md-6 mt-3 mb-3"><a href="<?php echo esc_url('https://www.shoplightworld.com', 'light-world'); ?>" class="footer-bottom-links"><p>SHOP OUR FULL CATALOG</p></a></div>

					<div class="col-md-12"><hr></div>

				</div>

				<div class="row h-100 justify-content-center pb-3">

					<div class="col-md-3 col-12 copyright-footer-item">
						<p>© Light World 2020</p>
					</div>

					<div class="col-md-6 col-12 copyright-footer-item">
					
						<div class="row justify-content-center">
						
							<div class="col-sm-2 col-3 my-auto"><?php echo wp_image_add_srcset_and_sizes('<img src="/wp-content/uploads/2020/01/visa_64.png" title="We Accept Visa" alt="Visa">', wp_get_attachment_metadata(126408), 126408 ); ?></div>
							
						    <div class="col-sm-2 col-3 my-auto"><?php echo wp_image_add_srcset_and_sizes('<img src="/wp-content/uploads/2020/01/mastercard_64.png" title="We Accept Master Card" alt="Master Card">', wp_get_attachment_metadata(1126407), 126407 ); ?></div>
						    
						    <div class="col-sm-2 col-3 my-auto"><?php echo wp_image_add_srcset_and_sizes('<img src="/wp-content/uploads/2020/01/discover_64.png" title="We Accept Discover" alt="Discover">', wp_get_attachment_metadata(126406), 126406 ); ?></div>
						    
						    <div class="col-sm-2 col-3 my-auto"><?php echo wp_image_add_srcset_and_sizes('<img src="/wp-content/uploads/2020/01/amex_64.png" title="We Accept American Express" alt="American Express">', wp_get_attachment_metadata(126405), 126405 ); ?></div>
						
						</div>
					
					
					</div>

					<div class="col-md-3 col-6 copyright-footer-item">
							
						<ul id="footer-sm-icons-nav">
							<li class="social-widget-icon"><a href="<?php echo esc_url('https://www.facebook.com/shoplightworld', 'light-world'); ?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="social-widget-icon"><a href="<?php echo esc_url('https://www.instagram.com/shoplightworld', 'light-world'); ?>" title="Instagram"><i class="fa fa-instagram"></i></a></li>
							<li class="social-widget-icon"><a href="<?php echo esc_url('https://www.twitter.com/shoplightworld', 'light-world'); ?>" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						</ul>


					</div>


				</div>


			</div>
			
			</div>
		
		</div>
	
	</div>

</footer>

<script type="text/javascript" src="https://www.lightyourhome.com/wp-content/themes/nectar-child/slick-1.8.1/slick/slick.min.js"></script>

<?php wp_footer(); ?>

<?php do_action('tfs_add_email_modal_to_body'); ?>

<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

</body>

</html>
