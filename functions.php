<?php
/**
* @author stresslimit
* @package
* @since 
*/

// Includes ! important
// include_once( 'inc/stresspress.php' );
// include_once( 'inc/types.php' );
// include_once( 'inc/ajax.php' );

// Main init function
add_action( 'init', 'sld_init' );
function sld_init() {

	if ( !is_admin() && !is_login_page() ) {
		// scripts
		wp_deregister_script( 'l10n' );
		wp_deregister_script( 'jquery');
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', false, '1.7.1');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'site', get_bloginfo('template_url').'/js/site.js', 'jquery' );

		// stylesheets
		wp_enqueue_style( 'style', get_bloginfo('stylesheet_url') );
	}
}
