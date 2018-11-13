<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 12:07 PM
 * File : accordion.php
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
		'id'     => 'accordion',
		'type'   => 'accordion',
		'title'  => __( 'Accordion' ),
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
		'id'      => 'accordion_title',
		'type'    => 'accordion',
		'title'   => __( 'Accordion With Heading' ),
		'heading' => __( 'Custom Accordion Heading' ),
		'fields'  => array(
			array(
				'id'      => 'radio_multiple_1',
				'title'   => __( 'Radio' ),
				'type'    => 'radio',
				'options' => array(
					'option1' => __( 'Option 1' ),
					'option2' => __( 'Option 2' ),
					'option3' => __( 'Option 3' ),
					'option4' => __( 'Option 4' ),
				),
			),
			array(
				'id'    => 'checkbox_1',
				'title' => __( 'Checkbox With Label' ),
				'label' => __( 'Are you sure ?' ),
				'type'  => 'checkbox',
			),
			array(
				'id'      => 'checkbox_multiple_1',
				'title'   => __( 'Checkbox' ),
				'type'    => 'checkbox',
				'options' => array(
					'option1' => __( 'Option 1' ),
					'option2' => __( 'Option 2' ),
					'option3' => __( 'Option 3' ),
					'option4' => __( 'Option 4' ),
				),
			),
		),
	),
	array(
		'id'     => 'accordion_nested',
		'type'   => 'accordion',
		'title'  => __( 'Accordion Nested' ),
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

			array(
				'id'      => 'accordion_level1',
				'type'    => 'accordion',
				'title'   => __( 'Level1' ),
				'heading' => __( 'Nested Accordion' ),
				'fields'  => array(
					array(
						'id'      => 'radio_multiple_1',
						'title'   => __( 'Radio' ),
						'type'    => 'radio',
						'options' => array(
							'option1' => __( 'Option 1' ),
							'option2' => __( 'Option 2' ),
							'option3' => __( 'Option 3' ),
							'option4' => __( 'Option 4' ),
						),
					),
					array(
						'id'    => 'checkbox_1',
						'title' => __( 'Checkbox With Label' ),
						'label' => __( 'Are you sure ?' ),
						'type'  => 'checkbox',
					),
					array(
						'id'      => 'checkbox_multiple_1',
						'title'   => __( 'Checkbox' ),
						'type'    => 'checkbox',
						'options' => array(
							'option1' => __( 'Option 1' ),
							'option2' => __( 'Option 2' ),
							'option3' => __( 'Option 3' ),
							'option4' => __( 'Option 4' ),
						),
					),
				),
			),
		),
	),
);
