<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 12:09 PM
 * File : group.php
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
		'content' => __( 'WPOnion Supports All The Fields Inside Group' ),
	),
	array(
		'id'      => 'group',
		'type'    => 'group',
		'heading' => 'Product : textarea ,  text_1 | #[count] ',
		'title'   => __( 'Group' ),
		'fields'  => array(
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
		'id'      => 'group_title',
		'type'    => 'group',
		'title'   => __( 'Group With Heading' ),
		'heading' => __( 'Custom Group Heading' ),
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
		'id'     => 'group_nested',
		'type'   => 'group',
		'title'  => __( 'Group Nested' ),
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
				'id'      => 'group_level1',
				'type'    => 'group',
				'title'   => __( 'Level1' ),
				'heading' => __( 'Nested Group' ),
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
	array(
		'id'     => 'group_with_limit',
		'type'   => 'group',
		'limit'  => 4,
		'title'  => __( 'Group Limited 4' ),
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
		'id'         => 'group_nested_limits',
		'type'       => 'group',
		'limit'      => 4,
		'title'      => __( 'Group Nested With Limits' ),
		'desc_field' => __( 'Parent Group is limited for 4 instance. and its each nested group are limited for 2 <br/>so total of 4 Main Group & 8 Sub Group can be created intotal.' ),
		'fields'     => array(
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
				'id'         => 'group_level1',
				'type'       => 'group',
				'title'      => __( 'Level1' ),
				'heading'    => __( 'Nested Group' ),
				'limit'      => 2,
				'desc_field' => __( 'This Group is limited for 2' ),
				'fields'     => array(
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
