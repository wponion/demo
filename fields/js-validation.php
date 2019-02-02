<?php
$return = array();
/* translators: Added Link */
$return[] = WPO\Field::create( 'content', sprintf( __( 'WPOnion uses %1$sjQuery Validation%2$s Plugin' ), '<a href="https://jqueryvalidation.org/">', '</a>' ) );
$return[] = WPO\Field::create( 'text', 'text', __( 'Required Textfield *' ) )
	->set_js_validate( 'required' );

$return[] = WPO\Field::create( 'textarea', 'textarea', __( 'Textarea' ) )
	->set_js_validate( array(
		'minlength' => 10,
		'maxlength' => 300,
	) )
	->set_desc_field( 'Minium Length : 10 & Max Length : 300' );
$return[] = WPO\Field::create( 'checkbox', 'checkbox', __( 'Required Checkbox *' ) )
	->set_js_validate( 'required' );
$return[] = WPO\Field::create( 'switcher', 'switcher', __( 'Required Switcher *' ) )
	->set_js_validate( 'required' );

$return[] = WPO\Field::create( 'key_value', 'key_value', __( 'Required Key Value *' ) )
	->set_js_validate( 'required' );

return $return;
