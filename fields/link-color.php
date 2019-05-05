<?php
$return = array();

$return[] = WPO\Field::create( 'link_color', 'link_color', __( 'Link Color (Full)' ) );
$return[] = WPO\Field::create( 'link_color', 'link_color_1', __( 'Link Color' ) )
	->hover( false )
	->visited( false )
	->desc( __( 'Link Color With Limited Options' ) );

return $return;
