<?php
/**
 * Aerodoktor functions and defenitions
 *
 * @package Aerodoktor
*/

/**
 * Loads theme setup functions.
 */
//function aerodoktor_setup() {
	/**
 	* This theme styles the visual editor with editor-style.css to match the theme style.
 	*/
//	add_editor_style();

	/**
 	 * Default RSS feed links
	 */
//	add_theme_support('automatic-feed-links');

	/**
	 * Let WordPress manage the document title.
	 */
//	add_theme_support( 'title-tag' );

	/**
 	* Register Navigation
 	*/
//	register_nav_menu('main_navigation', __('Primary Menu', 'aerodoktor') );

	/**
 	* Support a variety of post formats.
 	*/
//	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'audio', 'gallery' ) );
//}

add_action( 'after_setup_theme', 'aerodoktor_setup' );

/**
 * Add scripts function
 */
function aerodoktor_add_script_function() {
    /**
     * Enqueue css
    */
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('tether', get_template_directory_uri() . '/css/tether.min.css');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('tether');
    wp_enqueue_style('aerodoktor-style', get_stylesheet_uri());
    /**
	 * Enqueue javascripts
	 */
    wp_register_script('jquery-dop', get_template_directory_uri() . '/js/jquery-1.9.1.min.js');
    wp_enqueue_script('jquery-dop');
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js');
    wp_enqueue_script('tether-js', get_template_directory_uri() . '/js/tether.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
}
add_action('wp_enqueue_scripts','aerodoktor_add_script_function');