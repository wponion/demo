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

/**
 * Sample Admin Page in Dashboard Menu.
 */
wponion_admin_page( array(
	'menu_title' => __( 'Custom Submenu' ),
	'page_title' => __( 'Custom Page By WPOnion' ),
	'menu_slug'  => 'custom-wponion-page',
	'render'     => 'wponion_render_callback_menu',
	'submenu'    => 'dashboard',
) );

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


/**
 * Common Features.
 */
wponion_admin_page( array(
	'menu_title' => __( 'WP List Table' ),
	'page_title' => __( 'WP List Table Demo' ),
	'menu_slug'  => 'custom-wponion-page-2',
	'render'     => function () {
		echo wponion_add_element( array(
			'type'     => 'wp_list_table',
			'settings' => array(
				'total_items'  => function () {
					return 25;
				},
				'sortable'     => array(
					'title' => array( 'orderby', true ),
				),
				'bulk_actions' => array(
					'delete'  => __( 'Delete' ),
					'include' => __( 'Include' ),
				),
				'filter_menus' => array(
					'showpost'  => 'Show Posts',
					'showpost2' => 'Show Posts2',
				),
				'columns'      => array(
					'title' => __( 'Title' ),
					'col_1' => __( 'Columns 1' ),
					'col_2' => __( 'Columns 2' ),
				),
			),
			'data'     => function ( $page, $instance ) {
				$return = array();
				$i      = 1;
				$i      = ( 2 === $page ) ? 10 : $i;
				$i      = ( 3 === $page ) ? 20 : $i;

				$limit = 10;
				$limit = ( 2 === $page ) ? 20 : $limit;
				$limit = ( 3 === $page ) ? 25 : $limit;

				while ( $i <= $limit ) {
					$return[] = array(
						'title' => "Title : " . $i,
						'col_1' => "Col 1 : " . $i,
						'col_2' => "Col 2 : " . $i,
					);
					$i++;
				}
				return $return;
			}, // is a custom callback function
		), false, false );
	},
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
	'menu_title' => 'AjaxPlugin',
	'page_title' => 'AjaxPlugin',
	'menu_slug'  => 'ajaxer',
	'render'     => function () {
		echo '<br/>';
		echo '<br/>';
		echo '<button type="button" data-ajax-action="wponion-ajax&wponion-ajax=ajax-testing" data-processing-text="Ajaxing..."  data-complete-text="Completed..." class="button button-primary wponion-inline-ajax">Ajax Button</button>';
	},
	'assets'     => 'wponion_load_core_assets',
) );


/**
 * Native WordPress Tab Options.
 */
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
