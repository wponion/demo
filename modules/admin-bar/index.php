<?php
/**
 * Admin Bar Modules Accepts All the arguments that are passed to ` $wp_admin_bar->add_menu() ` function.
 * Argument List
 * array(
 *    'id' => null, # The ID of the node
 *    'title' => null, # The text that will be visible in the Toolbar. Including html tags is allowed.
 *    'parent' => null, # The ID of the parent node.
 *    'href' => null, # The 'href' attribute for the link. If 'href' is not set the node will be a text node
 *    'group' => null, # This will make the node a group (node) if set to 'true'. Group nodes are not visible in the Toolbar, but nodes added to it are. See add_group().
 *    'meta' => array(
 *        'html' => The html used for the node.
 *        'class' => The class attribute for the list item containing the link or text node.
 *        'rel' => The rel attribute.
 *        'onclick' => The onclick attribute for the link. This will only be set if the 'href' argument is present.
 *        'target' => The target attribute for the link. This will only be set if the 'href' argument is present.
 *        'title' => The title attribute. Will be set to the link or to a div containing a text node.
 *        'tabindex' => The tabindex attribute. Will be set to the link or to a div containing a text node.
 *    ),
 * )
 *
 * @see https://codex.wordpress.org/Class_Reference/WP_Admin_Bar/add_menu
 */

/**
 * Simple Menu.
 */
wponion_admin_bar( array(
	array(
		'title' => __( 'Menu 1' ),
		'meta'  => array( 'class' => 'wponion-demo-menu' ),
		'href'  => '#',
	),
) );

/**
 * Multiple Main Level Menu.
 */
wponion_admin_bar( array(
	array(
		'title' => __( 'Menu 2' ),
		'meta'  => array( 'class' => 'wponion-demo-menu' ),
		'href'  => '#',
	),
	array(
		'title' => __( 'Menu 3' ),
		'meta'  => array( 'class' => 'wponion-demo-menu' ),
		'href'  => '#',
	),
) );

/**
 * Simple Nested Menu.
 */
wponion_admin_bar( array(
	array(
		'title'    => __( 'Nested 1' ),
		'meta'     => array( 'class' => 'wponion-demo-menu' ),
		'href'     => '#',
		'submenus' => array(
			array(
				'id'    => 'nested1-menu1',
				'title' => __( 'Menu 1' ),
				'meta'  => array( 'class' => 'wponion-demo-menu' ),
				'href'  => '#',
			),
			array(
				'id'    => 'nested1-menu2',
				'title' => __( 'Menu 2' ),
				'meta'  => array( 'class' => 'wponion-demo-menu' ),
				'href'  => '#',
			),
		),
	),
) );

/**
 * Deep Nested Menus.
 */
wponion_admin_bar( array(
	array(
		'title'    => __( 'Deep Nested' ),
		'meta'     => array( 'class' => 'wponion-demo-menu' ),
		'href'     => '#',
		'submenus' => array(
			array(
				'id'       => 'level1',
				'title'    => __( 'Level 1' ),
				'meta'     => array( 'class' => 'wponion-demo-menu' ),
				'href'     => '#',
				'submenus' => array(
					array(
						'id'       => 'level1-level2',
						'title'    => __( 'Level 2' ),
						'meta'     => array( 'class' => 'wponion-demo-menu' ),
						'href'     => '#',
						'submenus' => array(
							array(
								'id'       => 'level1-level2-level3',
								'title'    => __( 'Level 3' ),
								'meta'     => array( 'class' => 'wponion-demo-menu' ),
								'href'     => '#',
								'submenus' => array(
									array(
										'id'       => 'level1-level2-level3-level4',
										'title'    => __( 'Level 4' ),
										'meta'     => array( 'class' => 'wponion-demo-menu' ),
										'href'     => '#',
										'submenus' => array(
											array(
												'id'       => 'level1-level2-level-3-level4-level5',
												'title'    => __( 'Level 5' ),
												'meta'     => array( 'class' => 'wponion-demo-menu' ),
												'href'     => '#',
												'submenus' => array(
													array(
														'id'    => 'level1-level2-level-3-level4-level5-level6',
														'title' => __( 'Level 6' ),
														'meta'  => array( 'class' => 'wponion-demo-menu' ),
														'href'  => '#',
													),
												),
											),
											array(
												'id'    => 'anothermenu4',
												'title' => __( 'Another Menu 4' ),
												'meta'  => array( 'class' => 'wponion-demo-menu' ),
												'href'  => '#',
											),
										),
									),
									array(
										'id'    => 'anothermenu3',
										'title' => __( 'Another Menu 3' ),
										'meta'  => array( 'class' => 'wponion-demo-menu' ),
										'href'  => '#',
									),
								),
							),
						),
					),
					array(
						'id'    => 'anothermenu2',
						'title' => __( 'Another Menu 2' ),
						'meta'  => array( 'class' => 'wponion-demo-menu' ),
						'href'  => '#',
					),
				),
			),
			array(
				'id'    => 'anothermenu1',
				'title' => __( 'Another Menu 1' ),
				'meta'  => array( 'class' => 'wponion-demo-menu' ),
				'href'  => '#',
			),
		),
	),
) );

/**
 * Long List of Admin Menus.
 */
wponion_admin_bar( array(
	array(
		'title'    => __( 'Long List Menu' ),
		'meta'     => array( 'class' => 'wponion-demo-menu' ),
		'href'     => '#',
		'submenus' => array(
			array(
				'title' => __( 'Long Menu 1' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 2' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 3' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 4' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 5' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 6' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 7' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 8' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 9' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 10' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 11' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 12' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 13' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 14' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 15' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 16' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 17' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 18' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 19' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
			array(
				'title' => __( 'Long Menu 20' ),
				'href'  => '#',
				'meta'  => array(
					'class' => 'wponion-demo-menu',
				),
			),
		),
	),
) );
