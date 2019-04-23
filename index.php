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
add_action( 'widgets_init', 'wponion_demo_widgets', 10 );

if ( ! function_exists( 'wponion_demo_widgets' ) ) {
	function wponion_demo_widgets() {
		require_once __DIR__ . '/modules/widgets/widget1.php';
		require_once __DIR__ . '/modules/widgets/widget2.php';
	}
}

if ( ! function_exists( 'wponion_demo_init' ) ) {
	/**
	 * Inits Demo Plugin.
	 */
	function wponion_demo_init() {
		add_action( 'admin_enqueue_scripts', 'wponion_demo_assets' );

		require_once __DIR__ . '/functions.php';
		require_once __DIR__ . '/fields.php';

		# Main Demo Page.
		wponion_admin_page( array(
			'menu_title' => __( 'WPOnion Demo' ),
			'page_title' => __( 'Sample Page ' ),
			'menu_slug'  => 'wponion-demo',
			'render'     => function () {
			},
		) );

		# Custom Admin Page.
		require_once __DIR__ . '/modules/admin-page/index.php';

		# Settings Module.
		require_once __DIR__ . '/modules/settings/index.php';

		# Ajax Module.
		require_once __DIR__ . '/modules/ajax-demo/index.php';

		# WP Admin Bar
		require_once __DIR__ . '/modules/admin-bar/index.php';

		# WP Admin Notice.
		require_once __DIR__ . '/modules/admin-notice/index.php';

	}
}
