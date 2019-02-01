<?php
$return = array();

$return[] = WPO\Field::create( 'background', 'background', __( 'Background' ) );
$return[] = WPO\Field::create( 'background', 'background_1', __( 'Background Without Color & Image' ) )
	->set_background_image( false )
	->set_background_color( false );
return $return;
