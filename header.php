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

  <!-- call tracking -->
  <script>
	gtag('config', 'AW-877014085/WARyCJaKjcIBEMXYmKID', {
	'phone_conversion_number': '215-883-8544'
	});
  </script>

  <!-- Hotjar Tracking Code for https://lightyourhome.com -->
	<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:1868662,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
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

		<div class="container">

			<div id="header-extra-links-row" class="row pt-1 pb-1">
				
				<div class="col-sm-12">
					
					<nav>
						<ul id="header-contact-and-account" class="mb-0">
							<li class="mr-3"><a href="tel:215-883-8544">215-883-8544</li>
							<li class="mr-3"><a href="<?php echo site_url('/home/light-world-showroom'); ?>">Visit Our Showroom</a></li>
							<li class="ml-3 mr-3"><a href="<?php echo site_url('/contact'); ?>">Showroom Hours</a></li>
							<li class="ml-3"><a id="header-open-live-chat" href="javascript:void(0)">Chat With Us</a></li>
							<li><a href="<?php echo site_url('/contact'); ?>">Contact Us</a></li>
						</ul>
					</nav>

				</div>

			</div>

		</div>

		<div id="header-container" class="container-fluid">

			<div class="row justify-content-center h-100 no-gutters">
					
					<div class="col-md-2 col-1 my-auto mx-auto d-none d-lg-block">
						
						<a href="<?php echo site_url('/home'); ?>">
								
							<div id="lyh-brand" class="">
									
								<img src="https://www.lightyourhome.com/wp-content/uploads/2020/07/lyh_logo_pr.png">
								
							</div>
						
						</a>

					</div>

					<div id="mobile-menu" class="col-md-1 col-1 my-auto mx-auto d-none">

						<nav>

							<?php

								wp_nav_menu(
	
									array(

										'theme_location' =>  'header-new-menu',

								) 	);
							?>

						</nav>

					</div>

					<div class="col-1 col-sm-1 d-none d-md-none d-lg-none d-xl-none d-block my-auto mx-auto">

						<ul>

							<li id="header-mobile-search" style=""><a href="javascript:void(0)"><i class="fa fa-search"></i></a></li>

						</ul>

					</div>

					<div id="navigation-col-desktop" class="col-sm-6 col-lg-6">

						<nav id="desktop-menu">

							<?php

								wp_nav_menu(

								array(

									'theme_location' =>  'header-new-menu',

								) );
							
							?>

						</nav>

					</div>

					<div id="brand-container-mobile" class="col-sm-6 col-6 col-md-8">


						<a href="<?php echo site_url('/home'); ?>">
							
							<div id="lyh-mobile-brand">
								
								<img src="https://www.lightyourhome.com/wp-content/uploads/2020/07/lyh_logo_1.png" style="height: 36px;">
							
							</div>
						
						</a>

					</div>

					<div id="desktop-search-container" class="col-md-3 col-sm-4 my-auto mx-auto">
										
						<div id="desktop-search">
															
								<?php echo do_shortcode('[wpdreams_ajaxsearchpro id=4]'); ?>
													
						</div>
					
					</div>

					<div id="header-extra-nav-items" class="col-xs-3 col-sm-1 col-2 my-auto mx-auto justify-content-center">

						<ul class="mb-0 ml-0 d-flex justify-content-center" style="list-style: none; width: 100%;">
							<li id="header-cart" class="mt-1 d-flex"><?php echo display_woo_cart(); ?></li>
						</ul>

					</div>

				</div>

				<div id="mobile-search-bar" class="row mb-2" style="display: none; padding-left: 15px; padding-right: 15px;">
					
					<div class="col-md-12">
						
						<div><?php echo do_shortcode('[wpdreams_ajaxsearchpro id=3]'); ?></div>
								
					</div>
				
				</div>
				
			</div>
				
		</div>
				
	</div>

	<!-- <hr class="orange-hr"> -->

	<?php do_action('store-notice-header'); ?>

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
