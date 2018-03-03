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
function aerodoktor_add_script_function() {
    /**
     * Enqueue css
    */
    wp_enqueue_style('aerodoktor-style', get_stylesheet_url());
    wp_enqueue_style('bootstrap', get_template_directory_url() . '/css/bootstrap.min.css');
    wp_enqueue_style('tether', get_template_directory_url() . '/css/tether.min.css');

    wp_enqueue_script('jquery', get_template_directory_url() . '/js/jquery-1.9.1.min.js', array( 'jquery' ), '', true);
    wp_enqueue_script('main', get_template_directory_url() . '/js/main.js', array( 'jquery' ), '', true);
    wp_enqueue_script('modernizr', get_template_directory_url() . '/js/modernizr-2.6.2.min.js', array( 'jquery' ), '', true);

add_action('wp_enqueue_scripts','aerodoktor_add_script_function');