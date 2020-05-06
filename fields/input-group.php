<?php
$return = array();

$group = \WPO\Field::create( 'input_group', 'input_group_1', __( 'Address Field (Input Group)' ) );
$group->text( 'first_name', __( 'First Name' ), array( 'wrap_class' => 'wpo-col-xs-12 wpo-col-sm-12 wpo-col-md-6' ) );
$group->text( 'last_name', __( 'Last Name' ), array( 'wrap_class' => 'wpo-col-xs-12 wpo-col-sm-12 wpo-col-md-6' ) );
$group->textarea( 'address', __( 'House Address' ), array( 'wrap_class' => 'wpo-col-xs-12 wpo-col-sm-12 wpo-col-md-6' ) )
	->horizontal( true );
$group->textarea( 'address_office', __( 'Office Address' ), array( 'wrap_class' => 'wpo-col-xs-12 wpo-col-sm-12 wpo-col-md-6' ) )
	->horizontal( true );
$return[] = $group;

$group2 = \WPO\Field::create( 'input_group', 'input_group_2', __( 'Address Field (Input Group)' ) );
$group2->text( 'textfield', __( 'Textfield' ) )
	->horizontal( true )
	->wrap_class( 'wpo-col-xs-12 wpo-col-sm-12 wpo-col-md-6 wpo-col-lg-6 wpo-col-xl-4' );
$group2->checkbox( 'checkbox', __( 'Checkbox' ) )
	->label( 'I Agree.' )
	->horizontal( true )
	->wrap_class( 'wpo-col-xs-12 wpo-col-sm-12 wpo-col-md-6 wpo-col-lg-6 wpo-col-xl-4' );
$group2->select( 'select', __( 'Select' ), array(
	'options' => array(
		'option1' => __( 'Option 1' ),
		'option2' => __( 'Option 2' ),
		'option3' => __( 'Option 3' ),
		'option4' => __( 'Option 4' ),
	),
) )
	->horizontal( true )
	->wrap_class( 'wpo-col-xs-12 wpo-col-sm-12 wpo-col-md-6 wpo-col-lg-6 wpo-col-xl-4' );
$return[] = $group2;

return $return;
