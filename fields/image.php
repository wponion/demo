<?php

$return = array();

$return[] = \WPO\Field::create( 'image', 'image', __( 'WP Image Selector' ) );
$return[] = \WPO\Field::create( 'image', 'image_1', __( 'Custom Frame Title' ) )
	->frame_title( 'Select A Background Image' );

return $return;
