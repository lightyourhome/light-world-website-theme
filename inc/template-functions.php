<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Light_World
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function light_world_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'light_world_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function light_world_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'light_world_pingback_header' );


/******************************************
 * ****REGISTERS NEW FOOTER MENUS**********
 * ****************************************/
function custom_menus() {
  register_nav_menus(
    array(
    'mobile-footer-menu'     => __( 'Mobile Footer Menu' ),
    'footer-menu-lighting'   => __( 'Footer Menu Lighting' ),
    'footer-menu-lamps'      => __( 'Footer Menu Lamps' ),
    'footer-menu-decor'      => __( 'Footer Menu Decor' ),
    'footer-menu-fans'       => __( 'Footer Menu Fans' ),
    'footer-menu-blog-posts' => __( 'Footer Menu Blogs' ),
    'footer-menu-policies'   => __( 'Footer Menu Policies' ),
    'footer-menu-showroom'   => __( 'Footer Menu Showroom' ),
    'header-mobile-menu'     => __( 'Header Mobile Menu' ),
	'header-new-menu'        => __( 'Header New Menu' )
));
}
add_action( 'after_setup_theme', 'custom_menus' );
