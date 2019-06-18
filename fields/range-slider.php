<?php
$return = array();

$return[] = WPO\Field::create( 'range_slider', 'range_slider_1', __( 'Range Slider' ) );
$return[] = WPO\Field::create( 'range_slider', 'range_slider_2', __( 'Custom Width Slider' ), array(
	'slider_width' => '25%',
) );

$return[] = WPO\Field::create( 'range_slider', 'range_slider_3', __( 'Slider With Prefix' ), array(
	'prefix'       => 'Height:',
	'slider_width' => '25%',
) );

$return[] = WPO\Field::create( 'range_slider', 'range_slider_4', __( 'Slider With Surfix' ), array(
	'surfix'       => 'px',
	'slider_width' => '25%',
) );
$return[] = WPO\Field::create( 'range_slider', 'range_slider_5', __( 'Slider With Surfix' ), array(
	'surfix'       => 'px',
	'prefix'       => 'Height:',
	'slider_width' => '25%',
) );

$return[] = WPO\Field::create( 'range_slider', 'range_slider_6', __( 'Slider orientation ' ), array(
	'slider_width' => '4px',
	'slider'       => array(
		'range'       => 'max',
		'orientation' => 'vertical',
	),
) );


return $return;
