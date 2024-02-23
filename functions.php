<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function load_child_scripts()
{
    wp_enqueue_script('astra-child-the-js', get_stylesheet_directory_uri() . '/main.js', array(), false, true);//array optionnel
}

add_action('wp_enqueue_scripts', 'load_child_scripts');

