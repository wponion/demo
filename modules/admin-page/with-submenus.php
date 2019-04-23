<?php
/**
 * With Submenus.
 */
wponion_admin_page( array(
	'menu_title' => __( 'With Submenus' ),
	'page_title' => __( 'Custom Page By WPOnion + Submenus' ),
	'menu_slug'  => 'wpo-custom-menu-2',
	'render'     => 'wponion_render_callback_menu',
	'submenu'    => array(
		array(
			'menu_title' => __( 'Submenu 1' ),
			'page_title' => __( 'Submenu 1' ),
			'render'     => 'wponion_render_callback_menu',
		),
		array(
			'menu_title' => __( 'Submenu 2' ),
			'page_title' => __( 'Submenu 2' ),
			'render'     => 'wponion_render_callback_menu',
		),
	),
) );