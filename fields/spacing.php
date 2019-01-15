<?php

return array(
	array(
		'id'    => 'spacing',
		'type'  => 'spacing',
		'title' => __( 'Spacing' ),
	),
	array(
		'id'    => 'spacing_1',
		'type'  => 'spacing',
		'desc'  => __( 'Provides Option Only To Configure Top & Bottom | Rest Are Disabled' ),
		'title' => __( 'Spacing with only top and bottom' ),
		'left'  => false,
		'right' => false,
	),
	array(
		'id'     => 'spacing_2',
		'type'   => 'spacing',
		'desc'   => __( 'Provides Option Only To Configure Left & Right | Rest Are Disabled' ),
		'title'  => __( 'Spacing with only left and right' ),
		'top'    => false,
		'bottom' => false,
	),
	array(
		'id'    => 'spacing_3',
		'type'  => 'spacing',
		'title' => __( 'Spacing with all directions' ),
		'all'   => true,
	),
);
