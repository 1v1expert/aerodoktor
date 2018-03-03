<?php
/**
 * Aerodoktor functions and defenitions
 *
 * @package Aerodoktor
*/

/**
 * Loads theme setup functions.
 */


/**
 * Add scripts function
 */
function aerodoktor_add_script_function()() {
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
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts','aerodoktor_add_script_function');