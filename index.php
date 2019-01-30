<?php
/**
 * Plugin Name: WPOnion Demo
 * Plugin URI: https://github.com/wponion/demo/
 * Description: Simple Demo Plugin For WPOnion
 * Version: 161120180120
 * Author: WPOnion,VarunSridharan
 * Author URI: https://github.com/wponion/
 * Text Domain: wponion
 * Domain Path: /i18n/
 */

add_action( 'wponion_loaded', 'wponion_demo_init' );

if ( ! function_exists( 'wponion_demo_init' ) ) {
	/**
	 * Inits Demo Plugin.
	 */
	function wponion_demo_init() {
		require_once __DIR__ . '/functions.php';
		require_once __DIR__ . '/fields.php';
		require_once __DIR__ . '/modules/settings/index.php';
	}
}
