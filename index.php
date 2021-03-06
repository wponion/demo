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

/*
add_action( 'wp', function () {
	if ( ! is_admin() ) {
		require_once __DIR__ . '/../wp-conditional-logic/src/functions.php';
		require_once __DIR__ . '/../wp-conditional-logic/src/WP_Conditional_Logic.php';
		$builder = wp_conditional_logic_builder( 'and' );
		$builder->user_meta( 'freshs', '=', 'admin_color' );
		wp_conditional_logic( $builder );
		var_dump( $builder );
		exit;
	}
} );*/


add_action( 'wponion/loaded', 'wponion_demo_init' );
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
				echo '<div class="wponion-framework">';
				$con = 'You can style the subtitle with the below css class<br>Global <code class="red">product-subtitle</code><br>Product Specific  <code class="red">subtitle-{product-id}</code><br><br><strong>Example CSS </strong><br>Below Applies for all product subtitles<br><pre>.product-subtitle{color:green;}</pre>';
				echo wponion_tooltip_faq( $con, array(), '<h2 style="display: inline-block; width:500px; text-align: center;">How Do I Style Subtitles ?</h2>' );

				echo wponion_tooltip_faq( $con, array(), '<h2 style="display: inline-block; width:500px; text-align: center;">How Do I Style Subtitles 2 ?</h2>' );
				echo wponion_tooltip_faq( $con, array(), '<h2 style="display: inline-block; width:500px; text-align: center;">How Do I Style Subtitles 3 ?</h2>' );
				echo wponion_tooltip_faq( $con, array(), '<h2 style="display: inline-block; width:500px; text-align: center;">How Do I Style Subtitles 4 ?</h2>' );
				echo '</div>';
			},
		) );

		# Custom Admin Page.
		require_once __DIR__ . '/modules/cpt/index.php';

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

		# Customizer Demo.
		require_once __DIR__ . '/modules/customizer/index.php';

		# Metabox Demo.
		require_once __DIR__ . '/modules/metabox/index.php';

		# Taxonomy Demo.
		require_once __DIR__ . '/modules/taxonomy/index.php';

		# User Profile Demo.
		require_once __DIR__ . '/modules/user-profile/index.php';

		# Dashboard Widgets
		require_once __DIR__ . '/modules/dashboard-widgets/index.php';

		# Nav Menu
		require_once __DIR__ . '/modules/nav_menu/index.php';

		# Admin Columns
		require_once __DIR__ . '/modules/admin-columns/index.php';

		# Media Fields.
		require_once __DIR__ . '/modules/media-fields/index.php';

		# Help Tabs
		require_once __DIR__ . '/modules/help-tabs/index.php';

		# WooCommerce
		require_once __DIR__ . '/modules/woocommerce/index.php';

		# Bulk Edit.
		require_once __DIR__ . '/modules/bulk-edit/index.php';

		# Page Actions.
		require_once __DIR__ . '/modules/page-actions/index.php';

		# Page Actions.
		require_once __DIR__ . '/modules/quick-edit/index.php';

		# WP Pointer Demo.
		//require_once __DIR__ . '/modules/wp_pointer/index.php';

		# WP List Table.
		require_once __DIR__ . '/modules/wp-list-table/index.php';

	}
}
