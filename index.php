<?php
/**
 * Plugin Name: WPOnion Demo
 * Plugin URI: https://github.com/wponion/demo/
 * Description: Simple Demo Plugin For WPOnion
 * Version: 161120180118
 * Author: WPOnion,VarunSridharan
 * Author URI: https://github.com/wponion/
 * Text Domain: wponion
 * Domain Path: /i18n/
 */
define( 'WPONION_FRONTEND', true );

add_action( 'wponion_loaded', 'wponion_load_demo' );
add_action( 'widgets_init', function () {
	require_once __DIR__ . '/widgets.php';
}, 10 );

if ( ! function_exists( 'wponion_load_demo' ) ) {
	function wponion_load_demo() {
		require_once __DIR__ . '/functions.php';
		require_once __DIR__ . '/fields.php';
		require_once __DIR__ . '/dashboard-widgets.php';
		require_once __DIR__ . '/admin-columns.php';
		require_once __DIR__ . '/quick-edit.php';
		require_once __DIR__ . '/bulk-edit.php';
		require_once __DIR__ . '/settings.php';
		require_once __DIR__ . '/admin-page.php';
		require_once __DIR__ . '/user_profile.php';
		require_once __DIR__ . '/metabox.php';
		require_once __DIR__ . '/taxonomy.php';
		require_once __DIR__ . '/help_tabs.php';
		require_once __DIR__ . '/woocommerce.php';
		require_once __DIR__ . '/admin-bar.php';
		require_once __DIR__ . '/nav_menu.php';
		require_once __DIR__ . '/admin-notice.php';
		require_once __DIR__ . '/media-fields.php';
	}
}
