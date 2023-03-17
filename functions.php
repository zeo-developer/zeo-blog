<?php 

if ( ! defined( 'THEME_VERSION' ) ) {
	define( 'THEME_VERSION', '0.1.0' );
}
function theme_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts');
