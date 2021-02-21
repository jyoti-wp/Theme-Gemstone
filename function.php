<?php

<?php
/**
 * Functions.
 *
 * @package Gemstone
 */

// Constants
if ( ! defined( 'GEMSTONE_BUILD_URI' ) ) {
	define( 'GEMSTONE_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}


function gemstone_files() {
    wp_enqueue_style('gemstone_main_style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'gemstone_files');

                        // google font 

function wpb_add_google_fonts() {

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo&display=swap', false );
}


add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
   