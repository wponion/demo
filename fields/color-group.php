<?php
$return = array();

$return[] = WPO\Field::create( 'color_group', 'color_group', __( 'Color Group' ) )
	->option( 'heading_1', 'Heading 1 Color:' )
	->option( 'heading_2', 'Heading 2 Color:' )
	->option( 'heading_3', 'Heading 3 Color:' );

$return[] = WPO\Field::create( 'color_group', 'color_group_1', __( 'Color Group With RGBA Support' ) )
	->option( 'heading_1', 'Heading 1 Color:' )
	->option( 'heading_2', 'Heading 2 Color:' )
	->option( 'heading_3', 'Heading 3 Color:' );


$return[] = WPO\Field::create( 'color_group', 'color_group_2', __( 'Single Field RGBA' ) )
	->option( 'heading_1', 'Heading 1 Color:' )
	->option( 'heading_2', 'Heading 2 Color:' )
	->option( 'heading_3', array(
		'label'        => 'Heading 3 Color:',
		'desc_field'   => __( 'This Field Has RGBA Support' ),
		'wrap_tooltip' => __( 'Tooltip Content' ),
	) );

return $return;
