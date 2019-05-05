<?php
$return = array();

$return[] = WPO\Field::create( 'dimensions', 'dimensions', __( 'Dimensions' ) );
$return[] = WPO\Field::create( 'dimensions', 'dimensions_1', __( 'Only Width ' ) )
	->height( false );
$return[] = WPO\Field::create( 'dimensions', 'dimensions_2', __( 'Without Unit' ) )
	->height( array( 'surfix' => 'px' ) )
	->width( array( 'surfix' => 'px' ) )
	->unit( false );

return $return;
