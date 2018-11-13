<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 11:21 AM
 * File : checkbox.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'checkbox',
		'title' => __( 'Checkbox' ),
		'type'  => 'checkbox',
	),
	array(
		'id'    => 'checkbox_1',
		'title' => __( 'Checkbox With Label' ),
		'label' => __( 'Are you sure ?' ),
		'type'  => 'checkbox',
	),

	/**
	 * Multiple Checkboxes
	 */
	array(
		'content' => __( 'Multiple Checkbox' ),
		'type'    => 'subheading',
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
	array(
		'id'      => 'checkbox_multiple_2',
		'title'   => __( 'Checkbox Group Options' ),
		'type'    => 'checkbox',
		'options' => array(
			__( 'Group 1' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
			__( 'Group 2' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
			__( 'Group 3' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
		),
	),

	/**
	 * Improved Checkbox Options.
	 */
	array(
		'content' => __( 'Checkbox Improved Options' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'checkbox_improved_options_1',
		'title'   => __( 'Checkbox' ),
		'type'    => 'checkbox',
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

	/**
	 * Dyanmic Option Data.
	 */
	array(
		'content' => __( 'Dynamic Options' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'checkbox_dynamic_options_pages',
		'title'   => __( 'WP Pages As Options' ),
		'type'    => 'checkbox',
		'options' => 'pages',
	),
	array(
		'id'      => 'checkbox_dynamic_options_posts',
		'title'   => __( 'WP Post As Options' ),
		'type'    => 'checkbox',
		'options' => 'posts',
	),
	array(
		'id'      => 'checkbox_dynamic_options_categories',
		'title'   => __( 'WP Categories As Options' ),
		'type'    => 'checkbox',
		'options' => 'categories',
	),
	array(
		'id'         => 'checkbox_dynamic_options_cpt',
		'title'      => __( 'WP Custom Post Type As Options' ),
		'type'       => 'checkbox',
		'query_args' => array(
			'post_type' => 'your_post_type_name',
		),
		'desc_field' => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
	),
	array(
		'id'         => 'checkbox_dynamic_options_categories_custom',
		'title'      => __( 'WP Categories As Options' ),
		'type'       => 'checkbox',
		'options'    => 'categories',
		'query_args' => array(
			'option_key'   => 'slug',
			'option_value' => 'term_id',
		),
		'desc_field' => __( 'Each Option Label Mapped To Category Term ID And its value Mapped as Term Slug' ),
	),

	/**
	 * PrettyCheckbox.
	 */
	array(
		'content' => 'Pretty Checkbox',
		'type'    => 'subheading',
	),
	array(
		/* translators: Add Custom HTML Link.*/
		'content' => sprintf( __( 'WPOnion Uses %1$sPrettyCheckbox%2$s Plugin By Lokesh | Please do refer %3$sonline documentation%2$s on how to use it.' ), '<a href="https://lokesh-coder.github.io/pretty-checkbox/">', '</a>', '<a href="https://github.com/lokesh-coder/pretty-checkbox">' ),
		'type'    => 'content',
	),
	array(
		'id'      => 'checkbox_pretty_checkbox_default',
		'title'   => __( 'Pretty Checkbox Default' ),
		'type'    => 'checkbox',
		'options' => array(
			'option1' => array(
				'label'  => __( 'Option 1' ),
				'pretty' => 'p-default',
			),
			'option2' => array(
				'label'  => __( 'Option 2' ),
				'pretty' => 'p-default p-fill',
			),
			'option3' => array(
				'label'  => __( 'Option 3' ),
				'pretty' => 'p-default p-thick',
			),
		),
	),
	array(
		'id'      => 'checkbox_pretty_checkbox_curve',
		'title'   => __( 'Pretty Checkbox Curve' ),
		'type'    => 'checkbox',
		'options' => array(
			'option1' => array(
				'label'  => __( 'Option 1' ),
				'pretty' => 'p-default p-curve',
			),
			'option2' => array(
				'label'  => __( 'Option 2' ),
				'pretty' => 'p-default p-curve p-fill',
			),
			'option3' => array(
				'label'  => __( 'Option 3' ),
				'pretty' => 'p-default p-curve p-thick',
			),
		),
	),
	array(
		'id'      => 'checkbox_pretty_checkbox_round',
		'title'   => __( 'Pretty Checkbox Round' ),
		'type'    => 'checkbox',
		'options' => array(
			'option1' => array(
				'label'  => __( 'Option 1' ),
				'pretty' => 'p-default p-round',
			),
			'option2' => array(
				'label'  => __( 'Option 2' ),
				'pretty' => 'p-default p-round p-fill',
			),
			'option3' => array(
				'label'  => __( 'Option 3' ),
				'pretty' => 'p-default p-round p-thick',
			),
		),
	),
	array(
		'id'      => 'checkbox_pretty_checkbox_switch',
		'title'   => __( 'Pretty Checkbox Switch' ),
		'type'    => 'checkbox',
		'options' => array(
			'option1' => array(
				'label'  => __( 'Option 1' ),
				'pretty' => 'p-switch',
			),
			'option2' => array(
				'label'  => __( 'Option 2' ),
				'pretty' => 'p-switch p-fill',
			),
			'option3' => array(
				'label'  => __( 'Option 3' ),
				'pretty' => 'p-switch p-slim',
			),
		),
	),
	array(
		'content' => 'Pretty Checkbox Colors',
		'type'    => 'subheading',
	),
	array(
		'id'      => 'checkbox_pretty_checkbox_default_color',
		'title'   => __( 'Default' ),
		'type'    => 'checkbox',
		'pretty'  => 'p-default',
		'options' => array(
			__( 'Default' ) => array(
				'option1' => array(
					'label' => __( 'Default' ),
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-thick',
				),
			),
			__( 'Curve' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-curve',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-curve p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-curve p-thick',
				),
			),
			__( 'Round' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-round',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-round p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-round p-thick',
				),
			),
			__( 'Switch' )  => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-switch',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-switch p-fill',
				),
				'option3' => array(
					'label'  => __( 'Slim' ),
					'pretty' => 'p-switch p-slim',
				),
			),
		),
	),
	array(
		'id'      => 'checkbox_pretty_checkbox_primary_color',
		'title'   => __( 'Primary' ),
		'type'    => 'checkbox',
		'pretty'  => 'p-default p-primary',
		'options' => array(
			__( 'Default' ) => array(
				'option1' => array(
					'label' => __( 'Default' ),
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-thick',
				),
			),
			__( 'Curve' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-curve',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-curve p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-curve p-thick',
				),
			),
			__( 'Round' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-round',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-round p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-round p-thick',
				),
			),
			__( 'Switch' )  => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-switch',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-switch p-fill',
				),
				'option3' => array(
					'label'  => __( 'Slim' ),
					'pretty' => 'p-switch p-slim',
				),
			),
		),
	),
	array(
		'id'      => 'checkbox_pretty_checkbox_success_color',
		'title'   => __( 'Success' ),
		'type'    => 'checkbox',
		'pretty'  => 'p-default p-success',
		'options' => array(
			__( 'Default' ) => array(
				'option1' => array(
					'label' => __( 'Default' ),
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-thick',
				),
			),
			__( 'Curve' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-curve',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-curve p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-curve p-thick',
				),
			),
			__( 'Round' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-round',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-round p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-round p-thick',
				),
			),
			__( 'Switch' )  => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-switch',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-switch p-fill',
				),
				'option3' => array(
					'label'  => __( 'Slim' ),
					'pretty' => 'p-switch p-slim',
				),
			),
		),
	),
	array(
		'id'      => 'checkbox_pretty_checkbox_info_color',
		'title'   => __( 'Info' ),
		'type'    => 'checkbox',
		'pretty'  => 'p-default p-info',
		'options' => array(
			__( 'Default' ) => array(
				'option1' => array(
					'label' => __( 'Default' ),
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-thick',
				),
			),
			__( 'Curve' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-curve',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-curve p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-curve p-thick',
				),
			),
			__( 'Round' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-round',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-round p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-round p-thick',
				),
			),
			__( 'Switch' )  => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-switch',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-switch p-fill',
				),
				'option3' => array(
					'label'  => __( 'Slim' ),
					'pretty' => 'p-switch p-slim',
				),
			),
		),
	),
	array(
		'id'      => 'checkbox_pretty_checkbox_warning_color',
		'title'   => __( 'Warning' ),
		'type'    => 'checkbox',
		'pretty'  => 'p-default p-warning',
		'options' => array(
			__( 'Default' ) => array(
				'option1' => array(
					'label' => __( 'Default' ),
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-thick',
				),
			),
			__( 'Curve' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-curve',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-curve p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-curve p-thick',
				),
			),
			__( 'Round' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-round',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-round p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-round p-thick',
				),
			),
			__( 'Switch' )  => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-switch',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-switch p-fill',
				),
				'option3' => array(
					'label'  => __( 'Slim' ),
					'pretty' => 'p-switch p-slim',
				),
			),
		),
	),
	array(
		'id'      => 'checkbox_pretty_checkbox_danger_color',
		'title'   => __( 'Danger' ),
		'type'    => 'checkbox',
		'pretty'  => 'p-default p-danger',
		'options' => array(
			__( 'Default' ) => array(
				'option1' => array(
					'label' => __( 'Default' ),
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-thick',
				),
			),
			__( 'Curve' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-curve',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-curve p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-curve p-thick',
				),
			),
			__( 'Round' )   => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-round',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-round p-fill',
				),
				'option3' => array(
					'label'  => __( 'Thick' ),
					'pretty' => 'p-round p-thick',
				),
			),
			__( 'Switch' )  => array(
				'option1' => array(
					'label'  => __( 'Default' ),
					'pretty' => 'p-switch',
				),
				'option2' => array(
					'label'  => __( 'Fill' ),
					'pretty' => 'p-switch p-fill',
				),
				'option3' => array(
					'label'  => __( 'Slim' ),
					'pretty' => 'p-switch p-slim',
				),
			),
		),
	),
);
