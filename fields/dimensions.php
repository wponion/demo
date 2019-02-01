<?php
$return = array();

$return[] = WPO\Field::create( 'dimensions', 'dimensions', __( 'Dimensions' ) );
$return[] = WPO\Field::create( 'dimensions', 'dimensions_1', __( 'Only Width ' ) )
	->set_height( false );
$return[] = WPO\Field::create( 'dimensions', 'dimensions_2', __( 'Without Unit' ) )
	->set_height( array( 'surfix' => 'px' ) )
	->set_width( array( 'surfix' => 'px' ) )
	->set_unit( false );

return $return;
