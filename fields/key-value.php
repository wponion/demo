<?php
$return = array();

$return[] = WPO\Field::create( 'key_value', 'key_value', __( 'Key Value Pair' ) );
$return[] = WPO\Field::create( 'key_value', 'key_value_1', __( 'Button Customized' ) )
	->set_add_button( '+' )
	->set_remove_button( 'DELETE' );

$return[] = WPO\Field::create( 'key_value', 'key_value_2', __( 'Input Customized' ) )
	->set_key_input( array(
		'placeholder' => __( 'Enter Your Key' ),
		'prefix'      => '<i class="dashicons-text dashicons"></i>',
	) )
	->set_value_input( array(
		'placeholder' => __( 'Enter Your Value' ),
		'prefix'      => '$',
		'surfix'      => 'USD',
	) );

$return[] = WPO\Field::create( 'key_value', 'key_value_3', __( 'Limited Creation' ) )
	->set_limit( '3' )
	->set_error_msg( 'You Can Add Only 3' );

return $return;
