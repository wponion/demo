<?php
$return = array();

$return[] = WPO\Field::create( 'spinner', 'spinner_1', __( 'Spinner' ) );
$return[] = WPO\Field::create( 'spinner', 'spinner_2', __( 'Spinner With Prefix' ), array( 'prefix' => 'Width:' ) );
$return[] = WPO\Field::create( 'spinner', 'spinner_3', __( 'Spinner With Surfix' ), array( 'surfix' => 'px' ) );
$return[] = WPO\Field::create( 'spinner', 'spinner_4', __( 'Spinner With Prefix & Surfix' ), array(
	'prefix' => 'Width:',
	'surfix' => 'px',
) );

return $return;
