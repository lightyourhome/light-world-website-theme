<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Light_World
 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<!-- PRECONNECT -->
<link rel="preconnect" href="https://www.google.com" crossorigin>
<link rel="preconnect" href="https://www.google.com//ajax.googleapis.com" crossorigin>
<link rel="preconnect" href="https://www.google-analytics.com" crossorigin>
<link rel="preconnect" href="https://www.googleadservices.com" crossorigin>
<link rel="preconnect" href="https://googleads.g.doubleclick.net" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>


  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WN39QXZ');</script>
  <!-- End Google Tag Manager -->

  <!-- Custom CSS -->
  <?php if(!empty($custom_css)) echo '<style type="text/css">'. $custom_css .'</style>'; ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156132286-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156132286-1');
  </script>

  <!-- Facebook Pixel Code -->
  <script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '691745001356928');
	fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=691745001356928&ev=PageView&noscript=1"/></noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Share Content Scripts -->
  <?php if( $post_type_share_switch == '1' && isset($options['post_type_share']) ) {
  if(in_array(get_post_type(), $options['post_type_share'])) {
	  get_template_part('vslmd/share/share');
  }
} ?>

  <meta name="theme-color" content="#db5945">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
  <meta name="msvalidate.01" content="47EFC20FC09C82E590149CD34171410B" />
  <!-- PINTEREST -->
  <meta name="p:domain_verify" content="025a2cebeb36d76b9cf0297368218bf2" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="https://www.lightyourhome.com/wp-content/themes/nectar-child/slick-1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://www.lightyourhome.com/wp-content/themes/nectar-child/slick-1.8.1/slick/slick-theme.css" />


</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'light-world' ); ?></a>

	<header>

		<div id="header-container" class="container-fluid" style="border-bottom: 2px solid #f6f6f6;">

			<div id="header-store-info-row" class="row pt-1 pb-1" style="background-color: rgb(253, 156, 21);">
					
				<div class="col-sm-12">
					
					<div class="mt-1">
						
						<h5 style="color: white;">Free Shipping on All Orders - Handpicked Selection - Easy Returns</h5>
						
					</div>

				</div>
			</div>

			<div id="header-store-info-row-mobile" class="row" style="background-color: #f6f6f6; border-bottom: 2px solid #f6f6f6;">
				
				<div class="col-sm-12" style="display: inline-block;">

					<ul style="list-style: none;" class="ml-0 mt-1">
						<li style="font-size: 14px; float: left;"><a href="https://www.google.com/maps/place/Light+World/@40.1361691,-74.9831387,17z/data=!3m1!4b1!4m5!3m4!1s0x89c6b2a78b88497f:0xa019ba94f4c9b0ef!8m2!3d40.136165!4d-74.98095"><strong>4625 E Street Road</strong></a></li>
						<li style="font-size: 14px; float: right;"><a href="tel:215-883-8544"><strong>215-883-8544</strong></a></li>
					</ul>

				</div>
			</div>

			<div id="header-extra-links-row" class="row pt-2 pb-2" style="background-color: #f6f6f6;">
				
				<div class="col-sm-12">
					
					<nav>
						
						<ul id="header-showroom-info" class="mb-0">
							<li class="mr-3"><a href="tel:215-883-8544"><b>215-883-8544</b></li>
							<li class="mr-3"><a href="<?php echo site_url('/home/light-world-showroom'); ?>"><b>Visit Our Showroom</b></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="header-contact-and-account" class="mb-0">
							<li class="ml-3"><a href="<?php echo site_url('/contact'); ?>"><b>Showroom Hours</b></a></li>
							<li class="ml-3"><a id="header-open-live-chat" href="javascript:void(0)"><b>Chat With Us</b></a></li>
							<li><a href="<?php echo site_url('/contact'); ?>"><b>Contact Us</b></a></li>
						</ul>
					</nav>

				</div>

			</div>

			<div class="row justify-content-center">
				
				<div class="col-sm-2 col-2">
					
					<a href="<?php echo site_url('/home'); ?>">
							
						<div id="lyh-brand">
								
							<img src="<?php echo site_url('/wp-content/uploads/2020/03/lyh_logo_wide.jpg'); ?>">
							
						</div>
					
					</a>

					<nav id="mobile-menu" class="" style="display: none;">

						<?php

						 wp_nav_menu(
							
							array(

							'theme_location' =>  'header-new-menu',

								) );
						?>

					</nav>

				</div>

				<div id="navigation-col-desktop" class="col-sm-6">

					<nav id="desktop-menu">

						<?php

							wp_nav_menu(

							array(

							'theme_location' =>  'header-new-menu',

							) );
						
						?>

					</nav>

				</div>

				<div id="brand-container-mobile" class="col-sm-8 col-6">

					<a href="<?php echo site_url('/home'); ?>">
						
						<div id="lyh-mobile-brand">
							
							<img src="<?php echo site_url('/wp-content/uploads/2020/03/lyh_logo_mobile_large.jpg'); ?>" style="height: 40px;">
						
						</div>
					
					</a>

				</div>

				<div id="desktop-search-container" class="col-sm-3">
									
					<div id="desktop-search">
						
						<div class="mt-3">
							
							<?php echo do_shortcode('[wpdreams_ajaxsearchpro id=4]'); ?>
						
						</div>
					
					</div>
				
				</div>

				<div id="header-extra-nav-items" class="col-sm col-4" style="">

					<ul class="mb-0 ml-0" style="list-style: none; width: 100%;">
						<li id="header-mobile-search" style="float: left;"><a href="javascript:void(0)"><i class="fa fa-search ml-2"></i></a></li>
						<li id="header-cart" style="float: right;"><?php echo display_woo_cart(); ?></li>
					</ul>

				</div>

			</div>

			<div id="mobile-search-bar" class="row mb-2" style="display: none;">
				
				<div class="col-md-12">
					
					<div><?php echo do_shortcode('[wpdreams_ajaxsearchpro id=3]'); ?></div>
							
				
				</div>
			
			</div>

	</div>

</header>

<div id="dark-overlay"></div>

<?php if ( !is_shop() && !is_product_category() && !is_page() && !is_single() ) : ?>

    <div class="row">
    	<div class="col-md-12 col-12">
          <nav class="ml-2 desktop-only">
            <?php lyh_breadcrumbs(); ?>
          </nav>
        </div>
    </div>

<?php endif; ?>


<div id="content" class="site-content">
