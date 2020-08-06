<?php
/**
 * Light World functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Light_World
 */

if ( ! function_exists( 'light_world_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function light_world_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Light World, use a find and replace
		 * to change 'light-world' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'light-world', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'light-world' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'light_world_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add WooCommerce support
		 */
		 add_theme_support( 'woocommerce' );
		 add_theme_support( 'wc-product-gallery-lightbox' );
		 add_theme_support( 'wc-product-gallery-zoom' );
		 add_theme_support( 'wc-product-gallery-slider' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'light_world_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function light_world_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'light_world_content_width', 640 );
}
add_action( 'after_setup_theme', 'light_world_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function light_world_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'light-world' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'light-world' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(
        array(
            'name'          => __( 'WooCommerce Sidebar', 'lightworld' ),
            'id'            => 'woocommerce-sidebar-1',
            'description'   => __( 'Add widgets here to display them on woocommerce shop pages', 'lightworld' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'light_world_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function enqueue_light_world_scripts() {
	wp_enqueue_style( 'light-world-style', get_template_directory_uri() . '/style.css', array(), '1.14.2' );

	//wp_enqueue_style( 'light-world-style-2', get_template_directory_uri() . '/css/theme.css', array(), '03192020', true );

	// wp_enqueue_script( 'light-world-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'light-world-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/* Search Bar JS */
	wp_enqueue_script( 'mobile-search-bar-js', get_template_directory_uri() . '/js/mobile_search_init.js', array(), '07292020', true);

	/* Color Swatch JS */
	wp_enqueue_script( 'woocommerce-product-swatches', get_template_directory_uri() . '/js/swatch_slider_1.0.js', array(), '07222020', true);

	/* Single Product JS */
	wp_enqueue_script( 'woocommerce-single-product-scripts', get_template_directory_uri() . '/js/woo_single_product.js', array(), '1.5.1', true );

	/* Slick Slider */
	wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/js/slick_init.min.js', array(), '02332020', true );

	/* Filter Overlay */
	wp_enqueue_script( 'filter-overlay', get_template_directory_uri() . '/js/filter_overlay.js', array(), '1.11.1', true );

    /* Lighting Ideas */
	wp_enqueue_script( 'lighting-ideas-js', get_template_directory_uri() . '/js/lighting_ideas.js', array(), '02072020', true );

	/* LW Showroom */
	wp_enqueue_script( 'lw-showroom-js', get_template_directory_uri() . '/js/lw-showroom.js', array(), '1242233', true );

	/* Product Remove JS (Cart Remove Ajax Fix) */
	wp_enqueue_script( 'cart-remove-fix', get_template_directory_uri() . '/js/tfs-product-remove.js', array(), '1242233', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action( 'wp_enqueue_scripts', 'enqueue_light_world_scripts' );


/**
 * Dequeue scripts and styles.
 */
function dequeue_light_world_scripts() {

	if ( class_exists( 'woocommerce' ) && is_checkout() ) {
			wp_dequeue_style( 'selectWoo' );
			wp_deregister_style( 'selectWoo' );

			wp_dequeue_script( 'selectWoo');
			wp_deregister_script('selectWoo');
	}

}
add_action( 'wp_enqueue_scripts', 'dequeue_light_world_scripts', 100 );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * WooCommerce Functions
 */
require get_template_directory() . '/inc/woocommerce/woocommerce-functions.php';

/**
 * WooCommerce remove_action Hooks
 */
require get_template_directory() . '/inc/custom-breadcrumbs.php';

/**
 * WooCommerce remove_action Hooks
 */
require get_template_directory() . '/inc/woocommerce/woocommerce-admin-functions.php';

/**
 * WooCommerce Single Product Shipping and Manufacturer Information
 */
require get_template_directory() . '/inc/woocommerce/shipping/single-product-shipping.php';

/**
 * WooCommerce Single Product Shipping and Manufacturer Information
 */
require get_template_directory() . '/inc/woocommerce/tool-tips/single-product-tool-tips-information.php';




//BEGIN REMOVE WP V#

/**
* Removes the WP version number from WP Head
*/
remove_action('wp_head', 'wp_generator');

/**
* Removes the WP version number from rss
*/
add_filter('the_generator', '__return_empty_string');

//END Remove WP V#

//BEGIN block WP enum scans
if (!is_admin()) {
	// default URL format
	if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
	add_filter('redirect_canonical', 'shapeSpace_check_enum', 10, 2);
}
function shapeSpace_check_enum($redirect, $request) {
	// permalink URL format
	if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
	else return $redirect;
}

//END Block WP Enum Scans

/**
* Disables Author Archives
*/
function disable_author_archives() {

	if (is_author()) {

		global $wp_query;
		$wp_query->set_404();
		status_header(404);

	} else {

		redirect_canonical();

	}

}
remove_filter('template_redirect', 'redirect_canonical');
add_action('template_redirect', 'disable_author_archives');

//END Disable Author Archives


/**
* All WooCommerce action hooks to remove functionality from WooCommerce
*/

/* REMOVES THE ON SALE BADGES FROM WOOCOMMERCE SHOP PAGE */
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );

//REMOVE CURRENT THUMBNAILS
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

/* REMOVES THE ANCHOR THAT WRAPS EACH PRODUCT ON THE SHOP PAGES */
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

/* Removes WooCommerce Default Product Titles */
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);

/* Removes WooCommerce Category description */
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );

/***************************************************************
 * ********* CATEGORY PAGE ACTIONS FOR SEO CONTENT ************
***************************************************************/

remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_taxonomy_archive_description', 100 );


/*****************************************************
* REMOVE WOOCOMMERCE ORDERBY DROPDOWN AND WPPP SELECT *
*******************************************************/
//REMOVE WOO BEFORE SHOP LOOP
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30 );

/*
 * Remove loop product per page
 */
remove_action( 'woocommerce_before_shop_loop', array( $GLOBALS['wppp']->front_end, 'products_per_page_dropdown' ), 25 );
remove_action( 'woocommerce_after_shop_loop', array( $GLOBALS['wppp']->front_end, 'products_per_page_dropdown' ), 25 );

add_action('market_woo_product_per_page',array( $GLOBALS['wppp']->front_end, 'products_per_page_dropdown' ), 30);

//Removes sale badge from single product pages
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

//REMOVES THE UNNEEDED WOOCOMMERCE ARCHIVE DESCRIPTION FROM AFTER SHOP LOOP
$woocommerce_after_shop_loop_arch_desc_priority = has_action('woocommerce_after_shop_loop', 'woocommerce_taxonomy_archive_description');
remove_action('woocommerce_after_shop_loop', 'woocommerce_taxonomy_archive_description', $woocommerce_after_shop_loop_arch_desc_priority );


/* SINGLE PRODUCT PAGE ADJUSTMENTS */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title',5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating',10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price',10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price',20);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing',50);

/*
* Remove page title from woocommerce pages
*/
add_filter('woocommerce_show_page_title', 'tfs_remove_woocommerce_content_page_title' );
function tfs_remove_woocommerce_content_page_title() {
	return false;
}


/* Blog post navigation */
if ( ! function_exists( 'tfs_post_nav' ) ) :

	function tfs_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>
				<nav class="container navigation post-navigation">
					<h2 class="sr-only"><?php _e( 'Post navigation', 'vslmd' ); ?></h2>
					<div class="row justify-content-between">
						<?php

							if ( get_previous_post_link() ) {
								previous_post_link( '<span class="blog-navigation-button">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'vslmd' ) );
							}
							if ( get_next_post_link() ) {
								next_post_link( '<span class="blog-navigation-button">%link</span>',     _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'vslmd' ) );
							}
						?>
					</div><!-- .nav-links -->
				</nav><!-- .navigation -->

		<?php
	}
endif;

if ( ! function_exists( 'create_picture_block' ) ) :

	/**
	 * Returns a picture block according to the parameters specificied
	 * 
	 * @param string - $classes - columns to be used for the picture block
	 * @param string - $href - URL for the picture block
	 * @param string - $img_src - the img source
	 * @param string - $hidden_link_text - The next for the pop up link e.g "shop now"
	 * @param int - $attachment_id - the passed images attachment id if available
	 * @param int - the number of headings for the picture box
	 * @param string $heading_1_text - The first heading text
	 * @param string $heading_2_text - The second heading text
	 * @param string $heading_3_text - The third heading text
	 * 
	 */
	function create_picture_block( $classes, $href, $img_src, $hidden_link_text, $attachment_id = NULL, $number_of_headings, $heading_1_text = NULL, $heading_2_text = NULL, $heading_3_text = NULL ) {  ?>

		<div class="<?php echo $classes; ?>">

			<div class="block-container">
				<a href="<?php echo $href; ?>">
				<div class="block-picture">
					<?php
					
						if ( $attachment_id !== NULL ) {

							echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="' . $img_src . '">', wp_get_attachment_metadata( $attachment_id ), get_post_thumbnail_id( $attachment_id ) );

						} else {
							
							?>

								<img style="height: auto; width: 100%;" src="<?php echo $img_src; ?>">

							<?php

						}
					
					?>
				</div>
				<div class="block-caption-wrapper">
					<div class="block-caption-container">
						<?php

							if ( $number_of_headings == 3 ) :
							
								?>

									<h4 class="block-heading"><?php echo $heading_1_text; ?></h4>
									<h3 class="block-heading"><?php echo $heading_2_text; ?></h3>
									<h4 class="block-heading"><?php echo $heading_3_text; ?></h4>
									<a style="text-align: center;" href="<?php echo $href; ?>" class="block-shop-link"><?php echo $hidden_link_text; ?></a>

								<?php

							elseif ( $number_of_headings == 2 ) :

								?>

									<h4 class="block-heading"><?php echo $heading_1_text; ?></h4>
									<h3 class="block-heading"><?php echo $heading_2_text; ?></h3>
									<a style="text-align: center;" href="<?php echo $href; ?>" class="block-shop-link"><?php echo $hidden_link_text; ?></a>

								<?php

							elseif ( $number_of_headings == 1 ) :

								?>

									<h4 class="block-heading"><?php echo $heading_1_text; ?></h4>
									<a style="text-align: center;" href="<?php echo $href; ?>" class="block-shop-link"><?php echo $hidden_link_text; ?></a>

								<?php

							endif;
							
						?>
					</div>
					
				</div>
				
				</a>
				
			</div>
		
		</div>

	<?php

	}
	
endif;




