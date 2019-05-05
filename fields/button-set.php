<?php
$return = array();

$return[] = WPO\Field::create( 'button_set', 'button_set_1', __( 'Button Set' ) )
	->multiple( false )
	->desc_field( 'Any 1 button can be selected' )
	->options( array(
		'enabled'  => __( 'Enabled' ),
		'disabled' => __( 'Disabled' ),
	) );
$return[] = WPO\Field::create( 'button_set', 'button_set_2', __( 'Button Set' ) )
	->multiple( true )
	->desc_field( 'Works like a checkbox & any number of buttons can be active.' )
	->options( array(
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
	->multiple( false )
	->options( array(
		'enabled'  => __( 'Enabled' ),
		'disabled' => __( 'Disabled' ),
	) )
	->size( 'small' );
$return[] = WPO\Field::create( 'button_set', 'button_set_4', __( 'Button Set (large)' ) )
	->multiple( false )
	->options( array(
		'enabled'  => __( 'Enabled' ),
		'disabled' => __( 'Disabled' ),
	) )
	->size( 'large' );
$return[] = WPO\Field::create( 'subheading', __( 'Custom Styling' ) );
$return[] = WPO\Field::create( 'button_set', 'button_set_5', __( 'Custom Style 1' ) )
	->multiple( false )
	->desc_field( __( 'Active button will be highlited in <code>Green</code>' ) )
	->active( 'button-success' )
	->options( array(
		'enabled'  => __( 'Enabled' ),
		'disabled' => __( 'Disabled' ),
	) );
$return[] = WPO\Field::create( 'button_set', 'button_set_6', __( 'Custom Style 2' ) )
	->multiple( false )
	->desc_field( __( 'InActive button will be highlited in <code>dark</code>' ) )
	->inactive( 'button-dark' )
	->options( array(
		'enabled'  => __( 'Enabled' ),
		'disabled' => __( 'Disabled' ),
	) );

return $return;
