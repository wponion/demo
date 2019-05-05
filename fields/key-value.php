<?php
$return = array();

$return[] = WPO\Field::create( 'key_value', 'key_value', __( 'Key Value Pair' ) );
$return[] = WPO\Field::create( 'key_value', 'key_value_1', __( 'Button Customized' ) )
	->add_button( '+' )
	->remove_button( 'DELETE' );

$return[] = WPO\Field::create( 'key_value', 'key_value_2', __( 'Input Customized' ) )
	->key_input( array(
		'placeholder' => __( 'Enter Your Key' ),
		'prefix'      => '<i class="dashicons-text dashicons"></i>',
	) )
	->value_input( array(
		'placeholder' => __( 'Enter Your Value' ),
		'prefix'      => '$',
		'surfix'      => 'USD',
	) );

$return[] = WPO\Field::create( 'key_value', 'key_value_3', __( 'Limited Creation' ) )
	->limit( '3' )
	->error_msg( 'You Can Add Only 3' );

return $return;
