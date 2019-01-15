<?php

return array(
	array(
		'title'   => __( 'Color Group' ),
		'id'      => 'color_group',
		'type'    => 'color_group',
		'options' => array(
			'color-a' => __( 'Color A' ),
			'color-b' => __( 'Color B' ),
			'color-c' => __( 'Color C' ),
		),
	),
	array(
		'title'   => __( 'Color Group' ),
		'desc'    => __( 'All Fields Have RGBA Support Enabled' ),
		'id'      => 'color_group_1',
		'type'    => 'color_group',
		'rgba'    => true,
		'options' => array(
			'color-a' => __( 'Color A' ),
			'color-b' => __( 'Color B' ),
			'color-c' => __( 'Color C' ),
		),
	),
	array(
		'title'   => __( 'Color Group' ),
		'desc'    => __( 'Only Single Field Has RGBA Support' ),
		'id'      => 'color_group_2',
		'type'    => 'color_group',
		'rgba'    => false,
		'options' => array(
			'color-a' => __( 'Color A' ),
			'color-b' => __( 'Color B' ),
			'color-c' => array(
				'label'      => __( 'Color C <small>(RGBA)</small>' ),
				'desc_field' => __( 'With RGBA Support' ),
				'rgba'       => true,
			),
		),
	),
);
