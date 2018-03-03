<?php
/**
 * Aerodoktor functions and defenitions
 *
 * @package Aerodoktor
*/

/**
 * Loads theme setup functions.
 */
function modality_setup() {

	/**
 	* Sets up the content width.
 	*/
	global $content_width;
	if ( ! isset( $content_width ) ) { $content_width = 1200; }

	/**
	 * Makes theme available for translation
	 *
	 */
	load_theme_textdomain( 'modality', get_template_directory() . '/languages' );

	/**
 	* This theme styles the visual editor with editor-style.css to match the theme style.
 	*/
	add_editor_style();

	/**
 	 * Default RSS feed links
	 */
	add_theme_support('automatic-feed-links');

	/**
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/**
 	* Register Navigation
 	*/
	register_nav_menu('main_navigation', __('Primary Menu', 'modality') );

	/**
 	* Support a variety of post formats.
 	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'audio', 'gallery' ) );

	/**
 	* Custom image size for featured images, displayed on "standard" posts.
 	*/
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 2500, 9999 ); // Unlimited height, soft crop.

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/**
 	* Sets up theme custom background.
 	*/
	add_theme_support( 'custom-background', apply_filters( 'modality_custom_background_args', array(
		'default-color' => 'fcfcfc',
		'default-image' => '',
	) ) );

	/**
	* Sets up theme custom header image.
	*/
	add_theme_support( 'custom-header', apply_filters( 'modality_custom_header_args', array(
		'width'                  => 1920,
		'height'                 => 200,
		'flex-height'            => true,
		'header-text'            => false,
	) ) );

	/*
	* Enable support for custom logo.
	*/
	add_image_size( 'modality-logo', 300, 80 );
	add_theme_support( 'custom-logo', array( 'size' => 'modality-logo' ) );
}

add_action( 'after_setup_theme', 'modality_setup' );

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