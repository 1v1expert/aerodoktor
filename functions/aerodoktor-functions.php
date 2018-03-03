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
function enqueue_styles() {
    /**
     * Enqueue css
    */
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('tether', get_template_directory_uri() . '/css/tether.min.css');

    wp_enqueue_style('aerodoktor-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('tether');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.9.1.min.js');
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js');
}
add_action('wp_enqueue_scripts','enqueue_scripts');