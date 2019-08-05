<?php

$return = array();

$return[] = \WPO\Field::create( 'checkbox', 'checkbox', 'Checkbox' );
$return[] = \WPO\Field::create( 'checkbox', 'checkbox_1', 'Checkbox' )
	->label( __( 'Are You Sure ?' ) );

/**
 * Multiple Checkbox.
 */
$return[] = \WPO\Field::create( 'subheading', __( 'Multiple Checkbox' ) );
$return[] = \WPO\Field::create( 'checkbox', 'checkbox_2', __( 'Checkbox List' ) )
	->options( array(
		'option1' => __( 'Option 1' ),
		'option2' => __( 'Option 2' ),
		'option3' => __( 'Option 3' ),
		'option4' => __( 'Option 4' ),
	) );
$return[] = \WPO\Field::create( 'checkbox', 'checkbox_3', __( 'Checkbox Group List' ) )
	->option_group( __( 'Group 1' ) )
	->options( array(
		'group1_option1' => __( 'GP 1 - Option 1' ),
		'group1_option2' => __( 'GP 1 - Option 2' ),
		'group1_option3' => __( 'GP 1 - Option 3' ),
		'group1_option4' => __( 'GP 1 - Option 4' ),
	) )
	->option_group( __( 'Group 2' ) )
	->options( array(
		'group2_option1' => __( 'GP 2 - Option 1' ),
		'group2_option2' => __( 'GP 2 - Option 2' ),
		'group2_option3' => __( 'GP 2 - Option 3' ),
		'group2_option4' => __( 'GP 2 - Option 4' ),
	) )
	->option_group( __( 'Group 3' ) )
	->options( array(
		'group3_option1' => __( 'GP 3 - Option 1' ),
		'group3_option2' => __( 'GP 3 - Option 2' ),
		'group3_option3' => __( 'GP 3 - Option 3' ),
		'group3_option4' => __( 'GP 3 - Option 4' ),
	) );

$return[] = \WPO\Field::create( 'subheading', __( 'Improved Options' ) );


$return[] = \WPO\Field::create( 'checkbox', 'checkbox_4', __( 'Long List of Checkbox' ) )
	->option( 'option1', 'Option 1' )
	->option( 'option2', 'Option 2' )
	->option( 'option3', 'Option 3' )
	->option( 'option4', 'Option 4' )
	->option( 'option5', 'Option 5' )
	->option( 'option6', 'Option 6' )
	->option( 'option7', 'Option 7' )
	->option( 'option8', 'Option 8' )
	->option( 'option9', 'Option 9' )
	->option( 'option10', 'Option 10' )
	->option( 'option11', 'Option 11' )
	->option( 'option12', 'Option 12' )
	->option( 'option13', 'Option 13' )
	->option( 'option14', 'Option 14' )
	->option( 'option15', 'Option 15' )
	->option( 'option16', 'Option 16' )
	->option( 'option17', 'Option 17' )
	->option( 'option18', 'Option 18' )
	->option( 'option19', 'Option 19' )
	->option( 'option20', 'Option 20' );


$improved_options = \WPO\Field::create( 'checkbox', 'checkbox_5', __( 'Checkbox with Improved Options' ) )
	->option( 'option1', array(
		'label'      => __( 'Custom Styled Input' ),
		'attributes' => array( 'style' => 'border:1px solid red;' ),
	) )
	->option( 'option2', array(
		'label'    => __( 'Disabled Option' ),
		'disabled' => true,
	) )
	->option( 'option3', array(
		'label'   => __( 'Option With Tooltip' ),
		'tooltip' => __( 'Tooltip Content Here' ),
	) )
	->option( 'option4', array(
		'label'   => __( 'Option With Tooltip Image' ),
		'tooltip' => 'https://s3.wponion.com/placeholder/250/1.gif',
	) );
$output           = wponion_highlight_string( var_export( $improved_options['options'], true ) );
$improved_options->desc_field( 'All The above features will work with both list checkbox & group list checkbox <br/><strong>Code :</strong>' . $output );
$return[] = $improved_options;

$with_custom_input = \WPO\Field::create( 'checkbox', 'checkbox_6', __( 'Checkbox With Custom Input' ) );
$with_custom_input->option( 'option1', 'Option 1' )
	->option( 'option2', array(
		'custom_input' => array( 'placeholder' => __( 'Custom Input Box' ) ),
	) )
	->option( 'option3', 'Option 3' )
	->option( 'option4', array(
		'custom_input' => array(
			'type'        => 'select',
			'options'     => array(
				'select_option1' => __( 'Select Option1' ),
				'select_option2' => __( 'Select Option2' ),
			),
			'placeholder' => __( 'Custom Input Box.' ),
		),
	) );

$code = wponion_highlight_string( var_export( $with_custom_input['options'], true ) );
$with_custom_input->desc_field( 'Checkbox With Custom Input Fields <br/><strong>Code : </strong>' . $code );
$return[] = $with_custom_input;


$return[] = WPO\Field::create( 'subheading', __( 'Dynamic Options' ) );
$return[] = WPO\Field::create( 'checkbox', 'checkbox_7', __( 'WP Pages As Options' ) )
	->options( 'pages' );
$return[] = WPO\Field::create( 'checkbox', 'checkbox_8', __( 'WP Post As Options' ) )
	->options( 'posts' );
$return[] = WPO\Field::create( 'checkbox', 'checkbox_9', __( 'WP Categories As Options' ) )
	->options( 'categories' );

$return[] = WPO\Field::create( 'checkbox', 'checkbox_10', __( 'WP Custom Post Type As Options' ) )
	->query_args( array( 'post_type' => 'your_post_type_name' ) )
	->desc_field( wponion_highlight_string( var_export( array(
		'post_type' => 'your_post_type_name',
	), true ) ) );
$return[] = WPO\Field::create( 'checkbox', 'checkbox_11', __( 'WP Categories As Options' ) )
	->options( 'categories' )
	->query_args( array(
		'option_key'   => 'slug',
		'option_value' => 'term_id',
	) )
	->desc_field( 'Each Option Label Mapped To Category Term ID And its value Mapped as Term Slug' . wponion_highlight_string( var_export( array(
			'option_key'   => 'slug',
			'option_value' => 'term_id',
		), true ) ) );

return $return;
