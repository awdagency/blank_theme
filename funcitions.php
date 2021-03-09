<?php
/**
 * Awd Agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Awd_Agency
 */

/**
 * Enqueue scripts and styles.
 */

function b2b_template_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'b2b_template_setup' );

function b2b_template_scripts() { 
	
	wp_enqueue_style( 'b2b-style', get_template_directory_uri() . '/dist/css/style.css' );
    wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/dist/plugins/swiper.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'b2b-transitions', get_template_directory_uri() . '/dist/js/app.js', array(), false, true );

}
add_action( 'wp_enqueue_scripts', 'b2b_template_scripts' );


show_admin_bar(false);

require get_template_directory() . '/include/custom_functions.php';
require get_template_directory() . '/include/mails.php';
require get_template_directory() . '/include/admin_functions.php';
// require get_template_directory() . '/include/walker_menu.php';

add_image_size( 'b2b-image-10', 10 );
add_image_size( 'b2b-image-20', 20 );
add_image_size( 'b2b-image-300', 300 );
add_image_size( 'b2b-image-600', 600 );
add_image_size( 'b2b-image-800', 800 );
add_image_size( 'b2b-image-960', 960 ); 
add_image_size( 'b2b-image-1280', 1280 );
add_image_size( 'b2b-image-1440', 1440 );
add_image_size( 'b2b-image-1920', 1920 );