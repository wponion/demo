<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 12:30 PM
 * File : tab.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'type'    => 'content',
		'content' => __( 'WPOnion Supports All The Fields Inside Accordion' ),
	),
	array(
		'id'       => 'tab',
		'type'     => 'tab',
		'title'    => __( 'Tab' ),
		'sections' => array(
			array(
				'title'  => __( 'Tab 1' ),
				'name'   => 'tab1',
				'fields' => array(
					array(
						'id'    => 'text_1',
						'title' => __( 'Simple Text Field' ),
						'type'  => 'text',
					),
					array(
						'id'    => 'textarea',
						'title' => __( 'Textarea' ),
						'type'  => 'textarea',
					),
				),
			),
			array(
				'title'  => __( 'Tab 2' ),
				'name'   => 'tab2',
				'fields' => array(
					array(
						'id'    => 'text_1',
						'title' => __( 'Simple Text Field' ),
						'type'  => 'text',
					),
					array(
						'id'    => 'textarea',
						'title' => __( 'Textarea' ),
						'type'  => 'textarea',
					),
				),
			),
			array(
				'title'  => __( 'Tab 3' ),
				'name'   => 'tab3',
				'fields' => array(
					array(
						'id'    => 'text_1',
						'title' => __( 'Simple Text Field' ),
						'type'  => 'text',
					),
					array(
						'id'    => 'textarea',
						'title' => __( 'Textarea' ),
						'type'  => 'textarea',
					),
				),
			),
		),
	),

	array(
		'id'        => 'tab2',
		'type'      => 'tab',
		'title'     => __( 'Tab Left' ),
		'tab_style' => 'left',
		'sections'  => array(
			array(
				'title'  => __( 'Tab 1' ),
				'name'   => 'tab1',
				'fields' => array(
					array(
						'id'    => 'text_1',
						'title' => __( 'Simple Text Field' ),
						'type'  => 'text',
					),
					array(
						'id'    => 'textarea',
						'title' => __( 'Textarea' ),
						'type'  => 'textarea',
					),
				),
			),
			array(
				'title'  => __( 'Tab 2' ),
				'name'   => 'tab2',
				'fields' => array(
					array(
						'id'    => 'text_1',
						'title' => __( 'Simple Text Field' ),
						'type'  => 'text',
					),
					array(
						'id'    => 'textarea',
						'title' => __( 'Textarea' ),
						'type'  => 'textarea',
					),
				),
			),
			array(
				'title'  => __( 'Tab 3' ),
				'name'   => 'tab3',
				'fields' => array(
					array(
						'id'    => 'text_1',
						'title' => __( 'Simple Text Field' ),
						'type'  => 'text',
					),
					array(
						'id'    => 'textarea',
						'title' => __( 'Textarea' ),
						'type'  => 'textarea',
					),
				),
			),
		),
	),
);
