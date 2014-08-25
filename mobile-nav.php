<?php
/**
 * @package Hyperarts - Genesis 2.1.2 Mobile Nav
 * @version 1.0.0
 */
/*
Plugin Name: Hyperarts - Genesis 2.1.2 Mobile Nav
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Putting OZZY RODRIGUEZ awesome code into a simple to install plugin.  Based on Genesis 2.1.2 and 800px break point.
Author: OZZY RODRIGUEZ & Adam LaBarge of Hyperarts
Version: 1.0.0
Author URI: http://ozzyrodriguez.com/ & https://github.com/adamplabarge &http://hyperarts.com

*	From here: http://wpbacon.com/tutorials/genesis-responsive-menu-2-0/
*/

defined('ABSPATH') or die("No direct access");


/**
 *
 *	ha_genesis_mobile_nav_register_scripts()
 *
 *	Register CSS stylesheets and JS scripts
 */
add_action( 'init', 'ha_genesis_mobile_nav_register_scripts' );
function ha_genesis_mobile_nav_register_scripts() {

	wp_register_style( 'ha-mobile-nav', plugins_url() . '/' . basename(__DIR__) . '/mobile-nav.css', array(), '1.0.0' );
	wp_register_script( 'ha-mobile-nav', plugins_url() . '/' . basename(__DIR__) . '/mobile-nav.js', array( 'jquery' ), '1.0.0', true);
}

/**
 *
 *	ha_genesis_mobile_nav_enqueue_scripts()
 *
 *	Enqueue CSS stylesheets and JS scripts
 */
add_action( 'wp_enqueue_scripts', 'ha_genesis_mobile_nav_enqueue_scripts' );
function ha_genesis_mobile_nav_enqueue_scripts() {

	wp_enqueue_style( 'ha-mobile-nav' );
	wp_enqueue_script( 'ha-mobile-nav' );
}