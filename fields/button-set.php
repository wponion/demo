<?php
$return = array();

$return[] = WPO\Field::create( 'button_set', 'button_set_1', __( 'Button Set' ) )
	->set_multiple( false )
	->set_desc_field( 'Any 1 button can be selected' )
	->set_options( array(
		'enabled'  => __( 'Enabled' ),
		'disabled' => __( 'Disabled' ),
	) );
$return[] = WPO\Field::create( 'button_set', 'button_set_2', __( 'Button Set' ) )
	->set_multiple( true )
	->set_desc_field( 'Works like a checkbox & any number of buttons can be active.' )
	->set_options( array(
		'option1'  => __( 'Option 1' ),
		'option2'  => __( 'Option 2' ),
		'option3'  => __( 'Option 3' ),
		'option4'  => __( 'Option 4' ),
		'option5'  => __( 'Option 5' ),
		'option6'  => __( 'Option 6' ),
		'option7'  => __( 'Option 7' ),
		'option8'  => __( 'Option 8' ),
		'option9'  => __( 'Option 9' ),
		'option10' => __( 'Option 10' ),
	) );
$return[] = WPO\Field::create( 'subheading', __( 'Button Set Sizes' ) );
$return[] = WPO\Field::create( 'button_set', 'button_set_3', __( 'Button Set (small)' ) )
	->set_multiple( false )
	->set_options( array(
		'enabled'  => __( 'Enabled' ),
		'disabled' => __( 'Disabled' ),
	) )
	->set_size( 'small' );
$return[] = WPO\Field::create( 'button_set', 'button_set_4', __( 'Button Set (large)' ) )
	->set_multiple( false )
	->set_options( array(
		'enabled'  => __( 'Enabled' ),
		'disabled' => __( 'Disabled' ),
	) )
	->set_size( 'large' );
$return[] = WPO\Field::create( 'subheading', __( 'Custom Styling' ) );
$return[] = WPO\Field::create( 'button_set', 'button_set_5', __( 'Custom Style 1' ) )
	->set_multiple( false )
	->set_desc_field( __( 'Active button will be highlited in <code>Green</code>' ) )
	->set_active( 'button-success' )
	->set_options( array(
		'enabled'  => __( 'Enabled' ),
		'disabled' => __( 'Disabled' ),
	) );
$return[] = WPO\Field::create( 'button_set', 'button_set_6', __( 'Custom Style 2' ) )
	->set_multiple( false )
	->set_desc_field( __( 'InActive button will be highlited in <code>dark</code>' ) )
	->set_inactive( 'button-dark' )
	->set_options( array(
		'enabled'  => __( 'Enabled' ),
		'disabled' => __( 'Disabled' ),
	) );

return $return;
