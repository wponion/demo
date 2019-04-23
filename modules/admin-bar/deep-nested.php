<?php
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