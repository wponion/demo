<?php
/**
 * Network Related Pages.
 */
wponion_admin_page( array(
	'menu_title' => __( 'Shows In Network Only' ),
	'page_title' => __( 'Custom Page By WPOnion' ),
	'menu_slug'  => 'wponion-network-only',
	'render'     => 'wponion_render_callback_menu',
	'submenu'    => 'dashboard',
	'network'    => 'only',
) );

wponion_admin_page( array(
	'menu_title' => __( 'Shows In Network & Site' ),
	'page_title' => __( 'Custom Page By WPOnion' ),
	'menu_slug'  => 'wponion-network-site-page',
	'render'     => 'wponion_render_callback_menu',
	'submenu'    => 'dashboard',
	'network'    => true,
) );
