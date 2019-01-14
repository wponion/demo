<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 12:53 PM
 * File : radio.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */
return array(
	/**
	 * Multiple Radioes
	 */
	array(
		'content' => __( 'Multiple Radio' ),
		'type'    => 'subheading',
	),
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
		'id'      => 'radio_multiple_2',
		'title'   => __( 'Radio Group Options' ),
		'type'    => 'radio',
		'options' => array(
			__( 'Group 1' ) => array(
				'group1_option1' => __( 'GP 1 - Option 1' ),
				'group1_option2' => __( 'GP 1 - Option 2' ),
				'group1_option3' => __( 'GP 1 - Option 3' ),
				'group1_option4' => __( 'GP 1 - Option 4' ),
			),
			__( 'Group 2' ) => array(
				'group2_option1' => __( 'GP 2 - Option 1' ),
				'group2_option2' => __( 'GP 2 - Option 2' ),
				'group2_option3' => __( 'GP 2 - Option 3' ),
				'group2_option4' => __( 'GP 2 - Option 4' ),
			),
			__( 'Group 3' ) => array(
				'group3_option1' => __( 'GP 3 - Option 1' ),
				'group3_option2' => __( 'GP 3 - Option 2' ),
				'group3_option3' => __( 'GP 3 - Option 3' ),
				'group3_option4' => __( 'GP 3 - Option 4' ),
			),
		),
	),

	/**
	 * Improved Radio Options.
	 */
	array(
		'content' => __( 'Radio Improved Options' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'radio_improved_options_1',
		'title'   => __( 'Radio' ),
		'type'    => 'radio',
		'options' => array(
			'option1' => array(
				'label'      => __( 'Custom Styled Input' ),
				'attributes' => array( 'style' => 'border: 1px solid red;' ),
			),
			'option2' => array(
				'label'    => __( 'Disabled Option 2' ),
				'disabled' => true,
			),
			'option3' => array(
				'label'   => __( 'Option 3 With ToolTip' ),
				'tooltip' => __( 'Some ToolTip Content' ),
			),
			'option4' => array(
				'label'   => __( 'Option 4 With Image in ToolTip' ),
				'tooltip' => 'https://s3.wponion.com/placeholder/250/1.gif',
			),
		),
	),
	array(
		'id'         => 'radio_improved_options_2',
		'title'      => __( 'radio' ),
		'desc_field' => 'Vertical scroll showing automatically after add many items',
		'type'       => 'radio',
		'options'    => array(
			'option1'  => 'Option 1',
			'option2'  => 'Option 2',
			'option3'  => 'Option 3',
			'option4'  => 'Option 4',
			'option5'  => 'Option 5',
			'option6'  => 'Option 6',
			'option7'  => 'Option 7',
			'option8'  => 'Option 8',
			'option9'  => 'Option 9',
			'option10' => 'Option 10',
			'option11' => 'Option 11',
			'option12' => 'Option 12',
			'option13' => 'Option 13',
			'option14' => 'Option 14',
			'option15' => 'Option 15',
			'option16' => 'Option 16',
			'option17' => 'Option 17',
			'option18' => 'Option 18',
			'option19' => 'Option 19',
			'option20' => 'Option 20',
		),
	),
	array(
		'id'         => 'radio_improved_options_3',
		'title'      => __( 'Radio With Input Fields.' ),
		'desc_field' => 'Radio With Custom Input Fields.',
		'type'       => 'radio',
		'options'    => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => array(
				'custom_input' => array(
					'placeholder' => __( 'Custom Input Box.' ),
				),
			),
			'option4' => array(
				'custom_input' => array(
					'type'        => 'select',
					'options'     => array(
						'select_option1' => __( 'Select Option1' ),
						'select_option2' => __( 'Select Option2' ),
					),
					'placeholder' => __( 'Custom Input Box.' ),
				),
			),
		),
	),

	array(
		'content' => __( 'Dynamic Options' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'radio_dynamic_options_pages',
		'title'   => __( 'WP Pages As Options' ),
		'type'    => 'radio',
		'options' => 'pages',
	),
	array(
		'id'      => 'radio_dynamic_options_posts',
		'title'   => __( 'WP Post As Options' ),
		'type'    => 'radio',
		'options' => 'posts',
	),
	array(
		'id'      => 'radio_dynamic_options_categories',
		'title'   => __( 'WP Categories As Options' ),
		'type'    => 'radio',
		'options' => 'categories',
	),
	array(
		'id'         => 'radio_dynamic_options_cpt',
		'title'      => __( 'WP Custom Post Type As Options' ),
		'type'       => 'radio',
		'query_args' => array(
			'post_type' => 'your_post_type_name',
		),
		'desc_field' => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
	),

	array(
		'id'         => 'radio_dynamic_options_categories_custom',
		'title'      => __( 'WP Categories As Options' ),
		'type'       => 'radio',
		'options'    => 'categories',
		'query_args' => array(
			'option_key'   => 'slug',
			'option_value' => 'term_id',
		),
		'desc_field' => __( 'Each Option Label Mapped To Category Term ID And its value Mapped as Term Slug' ),
	),
);
