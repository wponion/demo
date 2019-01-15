<?php
return array(
	array(
		'id'    => 'dimensions',
		'type'  => 'dimensions',
		'title' => __( 'Dimensions' ),
	),

	array(
		'id'     => 'dimensions_1',
		'type'   => 'dimensions',
		'unit'   => false,
		'title'  => __( 'Dimensions Without Unit' ),
		'width'  => array( 'surfix' => 'px' ),
		'height' => array( 'surfix' => 'px' ),
	),
	array(
		'id'     => 'dimensions_2',
		'type'   => 'dimensions',
		'unit'   => false,
		'title'  => __( 'Dimensions Only Width' ),
		'width'  => array( 'surfix' => 'px' ),
		'height' => false,
	),
);
