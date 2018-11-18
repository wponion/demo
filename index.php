<?php
/**
 * Plugin Name: WPOnion Demo
 * Plugin URI: https://github.com/wponion/demo/
 * Description: Simple Demo Plugin For WPOnion
 * Version: 161120180115
 * Author: WPOnion,VarunSridharan
 * Author URI: https://github.com/wponion/
 * Text Domain: wponion
 * Domain Path: /i18n/
 */
define( 'WPONION_FRONTEND', true );


add_action( 'wponion_loaded', function () {
	define( '_DIR_', __DIR__ . '/' );

	require_once _DIR_ . '/functions.php';
	require_once _DIR_ . '/fields.php';
	require_once _DIR_ . '/dashboard-widgets.php';
	require_once _DIR_ . '/admin-columns.php';
	require_once _DIR_ . '/quick-edit.php';
	require_once _DIR_ . '/bulk-edit.php';
	require_once _DIR_ . '/settings.php';
	require_once _DIR_ . '/admin-page.php';
	require_once __DIR__ . '/user_profile.php';
	require_once __DIR__ . '/metabox.php';
	require_once __DIR__ . '/taxonomy.php';
	require_once __DIR__ . '/help_tabs.php';
	require_once __DIR__ . '/woocommerce.php';
} );
add_action( 'widgets_init', function () {
	require_once __DIR__ . '/widgets.php';
}, 10 );
