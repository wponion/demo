<?php
$return = array();

$return[] = WPO\Field::create( 'link_color', 'link_color', __( 'Link Color (Full)' ) );
$return[] = WPO\Field::create( 'link_color', 'link_color_1', __( 'Link Color' ) )
	->set_hover( false )
	->set_visited( false )
	->set_desc( __( 'Link Color With Limited Options' ) );

return $return;
