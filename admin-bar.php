<?php
/**
 *
 * Project : wponion
 * Date : 21-11-2018
 * Time : 07:16 PM
 * File : admin-bar.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

wponion_admin_bar( array(
	array( 'title' => __( 'Menu 1' ) ),
	array(
		'title'    => __( 'Menu 2' ),
		'submenus' => array(
			array(
				'id'       => 'menu1-level1',
				'title'    => __( 'Menu 1 Level 1' ),
				'submenus' => array(
					array(
						'id'       => 'menu1-level2',
						'title'    => __( 'Menu 1 Level 2' ),
						'group'    => false,
						'submenus' => array(
							array(
								'id'       => 'menu1-level3',
								'title'    => __( 'Menu 1 Level 3' ),
								'submenus' => array(
									array(
										'id'       => 'menu1-level4',
										'title'    => __( 'Menu 1 Level 4' ),
										'submenus' => array(
											array( 'title' => __( 'Menu 1 Level 5' ) ),
											array( 'title' => __( 'Menu 2 Level 5' ) ),
										),
									),
								),
							),
							array( 'title' => __( 'Menu 2 Level 3' ) ),
						),
					),
					array( 'title' => __( 'Menu 2 Level 2' ) ),
					array( 'title' => __( 'Menu 3 Level 2' ) ),
				),
			),
			array( 'title' => __( 'Menu 2 Level 1' ) ),
			array( 'title' => __( 'Menu 3 Level 1' ) ),
		),
	),
) );
