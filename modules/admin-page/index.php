<?php

wponion_admin_page( array(
	'menu_title' => __( 'WPOnion Custom Submenu' ),
	'page_title' => __( 'Custom Page By WPOnion' ),
	'menu_slug'  => 'wpo-custom-menu-1',
	'render'     => 'wponion_render_callback_menu',
	'submenu'    => 'dashboard',
) );

require_once __DIR__ . '/wp-network.php';

require_once __DIR__ . '/with-submenus.php';

/**
 * Native WordPress Tab Options.
 */
wponion_admin_page( array(
	'menu_title' => __( 'With Tabs' ),
	'page_title' => __( 'Custom Page By WPOnion' ),
	'menu_slug'  => 'wpo-custom-menu-3',
	'render'     => 'wponion_render_callback_menu',
	'tabs'       => array(
		array(
			'icon'   => 'dashicons dashicons-admin-generic',
			'title'  => __( 'Tab 1' ),
			'name'   => 'tab1',
			'render' => function () {
				echo '<h1>Tab 1 Content Here</h1>';
			},
		),
		array(
			'icon'    => 'dashicons dashicons-admin-generic',
			'title'   => __( 'Tab 2' ),
			'name'    => 'tab2',
			'render'  => 'wponion_render_callback_menu',
			'assets'  => '',
			'on_load' => '',
		),
	),
) );
