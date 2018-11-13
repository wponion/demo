<?php
/**
 *
 * Project : wponion
 * Date : 11-11-2018
 * Time : 05:40 PM
 * File : admin-page.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

wponion_admin_page( array(
	'menu_title' => __( 'Submenu Inside WP Menu' ),
	'page_title' => __( 'Custom Page By WPOnion' ),
	'menu_slug'  => 'custom-wponion-page',
	'render'     => 'wponion_render_callback_menu',
	'submenu'    => 'dashboard',
) );


wponion_admin_page( array(
	'menu_title' => __( 'Single Page' ),
	'page_title' => __( 'Custom Page By WPOnion' ),
	'menu_slug'  => 'custom-wponion-page-2',
	'render'     => 'wponion_render_callback_menu',
) );


wponion_admin_page( array(
	'menu_title' => __( 'With Submenus' ),
	'page_title' => __( 'Custom Page By WPOnion + Submenus' ),
	'menu_slug'  => 'custom-wponion-page-3',
	'render'     => 'wponion_render_callback_menu',
	'submenu'    => array(
		array(
			'menu_title' => __( 'Submenu 1' ),
			'page_title' => __( 'Submenu 1' ),
			'render'     => 'wponion_render_callback_menu',
		),
	),
) );


wponion_admin_page( array(
	'menu_title' => __( 'With Tabs' ),
	'page_title' => __( 'Custom Page By WPOnion' ),
	'menu_slug'  => 'custom-wponion-page-4',
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

wponion_admin_page( array(
	'menu_title' => __( 'With Submenus & Tabs' ),
	'page_title' => __( 'Custom Page By WPOnion + Submenus' ),
	'menu_slug'  => 'custom-wponion-page-5',
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
	'submenu'    => array(
		array(
			'menu_title' => __( 'Submenu 2' ),
			'page_title' => __( 'Submenu 2' ),
			'render'     => 'wponion_render_callback_menu',
			'tabs'       => array(
				array(
					'icon'   => 'dashicons dashicons-admin-generic',
					'title'  => __( 'Tab 3' ),
					'name'   => 'tab3',
					'render' => function () {
						echo '<h1>Tab 3 Content Here</h1>';
					},
				),
				array(
					'icon'    => 'dashicons dashicons-admin-generic',
					'title'   => __( 'Tab 4' ),
					'name'    => 'tab4',
					'render'  => 'wponion_render_callback_menu',
					'assets'  => '',
					'on_load' => '',
				),
			),
		),
	),
) );
