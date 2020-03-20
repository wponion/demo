<?php
$return = array();

$return[] = \WPO\Field::create( 'text', 'cloner', __( 'Text Field Cloner' ) )
	->_clone( true );

$return[] = \WPO\Field::create( 'textarea', 'cloner_2', __( 'Textarea Field Cloner' ) )
	->desc( __( 'Allows You To Clone Textarea but limited to `3` instances' ) )
	->_clone( true )
	->clone_settings( array( 'limit' => 3 ) );

$return[] = \WPO\Field::create( 'number', 'cloner_3', __( 'Custom Error Message' ) )
	->desc( __( 'Limited to `2` instances with custom error message' ) )
	->_clone( true )
	->clone_settings( array(
		'limit'     => 2,
		'error_msg' => __( 'Limit Reached ! Stop' ),
	) );


return $return;
