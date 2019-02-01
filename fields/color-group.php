<?php
$return = array();

$return[] = WPO\Field::create( 'color_group', 'color_group', __( 'Color Group' ) )
	->set_option( 'heading_1', 'Heading 1 Color:' )
	->set_option( 'heading_2', 'Heading 2 Color:' )
	->set_option( 'heading_3', 'Heading 3 Color:' );

$return[] = WPO\Field::create( 'color_group', 'color_group_1', __( 'Color Group With RGBA Support' ) )
	->set_rgba( true )
	->set_option( 'heading_1', 'Heading 1 Color:' )
	->set_option( 'heading_2', 'Heading 2 Color:' )
	->set_option( 'heading_3', 'Heading 3 Color:' );


$return[] = WPO\Field::create( 'color_group', 'color_group_2', __( 'Single Field RGBA' ) )
	->set_rgba( false )
	->set_option( 'heading_1', 'Heading 1 Color:' )
	->set_option( 'heading_2', 'Heading 2 Color:' )
	->set_option( 'heading_3', array(
		'label'        => 'Heading 3 Color:',
		'desc_field'   => __( 'This Field Has RGBA Support' ),
		'wrap_tooltip' => __( 'Tooltip Content' ),
		'rgba'         => true,
	) );

return $return;
