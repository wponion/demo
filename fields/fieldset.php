<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 11:04 AM
 * File : fieldset.php
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
		'content' => __( 'WPOnion Supports All The Fields Inside Fieldset' ),
	),
	array(
		'id'     => 'fieldset',
		'type'   => 'fieldset',
		'title'  => __( 'Fieldset' ),
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
		'id'      => 'fieldset_title',
		'type'    => 'fieldset',
		'title'   => __( 'Fieldset With Heading' ),
		'heading' => __( 'Custom Fieldset Heading' ),
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
		'id'     => 'fieldset_nested',
		'type'   => 'fieldset',
		'title'  => __( 'Fieldset Nested' ),
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
				'id'      => 'fieldset_level1',
				'type'    => 'fieldset',
				'title'   => __( 'Level1' ),
				'heading' => __( 'Nested Fieldset' ),
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
