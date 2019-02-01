<?php
$return = array();
/* translators: Added Link */
$return[] = WPO\Field::create( 'content', sprintf( __( 'WPOnion uses %1$sjQuery Validation%2$s Plugin' ), '<a href="https://jqueryvalidation.org/">', '</a>' ) );
$return[] = WPO\Field::create( 'text', 'text', __( 'Required Textfield *' ) )
	->set_js_validate( 'required' );

$return[] = WPO\Field::create( 'textarea', 'textarea', __( 'Textarea' ) )
	->set_js_validate( 'required' );

return $return;
