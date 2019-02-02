<?php
$return[] = WPO\Field::create( 'text', 'field1', 'Field 1', array( 'text_type' => 'file' ) )
	->set_desc_field( 'Type <code>Hello</code> in the field above.' );
$return[] = WPO\Field::create( 'notice_success', __( 'Awesome You Found The Hidden Field !!' ) )
	->set_dependency( array( 'field1', '=', 'Hello' ) );

$return[] = WPO\Field::create( 'divider', '(Any) Condition' );

$return[] = WPO\Field::create( 'text', 'field2', 'Field 2' )
	->set_desc_field( 'Type <code>Bumble</code>  OR <code>Jack</code> in the field above.' );
$return[] = WPO\Field::create( 'notice_success', __( 'Awesome You have enterd correct word (Bumble or Jack)' ) )
	->set_dependency( array( 'field2', 'any', 'Bumble,Jack' ) );


$return[] = WPO\Field::create( 'divider', '(OR) Condition' );
$return[] = WPO\Field::create( 'checkbox', 'checkbox_1', 'Checkbox 1' );
$return[] = WPO\Field::create( 'checkbox', 'checkbox_2', 'Checkbox 2' );

$return[] = WPO\Field::create( 'notice_success', __( 'You Either Checked (checkbox1) or (checkbox2)' ) )
	->set_dependency( array( 'checkbox_1|checkbox_2', 'OR|OR', '1|1' ) );
return $return;
