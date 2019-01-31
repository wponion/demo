<?php
$return = array();

$group = \WPO\Field::create( 'input_group', 'input_group_1', __( 'Address Field (Input Group)' ) );
$group->text( 'first_name', __( 'First Name' ), array( 'wrap_class' => 'col-xs-12 col-sm-12 col-md-6' ) );
$group->text( 'last_name', __( 'Last Name' ), array( 'wrap_class' => 'col-xs-12 col-sm-12 col-md-6' ) );
$group->textarea( 'address', __( 'House Address' ), array( 'wrap_class' => 'col-xs-12 col-sm-12 col-md-6' ) )
	->set_horizontal( true );
$group->textarea( 'address_office', __( 'Office Address' ), array( 'wrap_class' => 'col-xs-12 col-sm-12 col-md-6' ) )
	->set_horizontal( true );
$return[] = $group;

$group2 = \WPO\Field::create( 'input_group', 'input_group_2', __( 'Address Field (Input Group)' ) );
$group2->text( 'textfield', __( 'Textfield' ) )
	->set_horizontal( true )
	->set_wrap_class( 'col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4' );
$group2->checkbox( 'checkbox', __( 'Checkbox' ) )
	->set_label( 'I Agree.' )
	->set_horizontal( true )
	->set_wrap_class( 'col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4' );
$group2->select( 'select', __( 'Select' ), array(
	'options' => array(
		'option1' => __( 'Option 1' ),
		'option2' => __( 'Option 2' ),
		'option3' => __( 'Option 3' ),
		'option4' => __( 'Option 4' ),
	),
) )
	->set_horizontal( true )
	->set_wrap_class( 'col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4' );
$return[] = $group2;

return $return;
