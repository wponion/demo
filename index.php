<?php
/**
 * Plugin Name: WPOnion Demo
 * Plugin URI: https://github.com/wponion/demo/
 * Description: Simple Demo Plugin For WPOnion
 * Version: 0.0.2
 * Author: WPOnion,VarunSridharan
 * Author URI: https://github.com/wponion/
 * Text Domain: wponion
 * Domain Path: /i18n/
 */
define( 'WPONION_FRONTEND', true );


add_action( 'wponion_loaded', function () {
	define( '_DIR_', __DIR__ . '/' );
	global $wpof;
	require_once _DIR_ . '/functions.php';
	require_once _DIR_ . '/fields.php';
	require_once _DIR_ . '/admin-page.php';
	require_once _DIR_ . '/settings.php';
	require_once __DIR__ . '/metabox.php';
	require_once __DIR__ . '/user_profile.php';
	require_once __DIR__ . '/taxonomy.php';
	require_once __DIR__ . '/help_tabs.php';

} );

