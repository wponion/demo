<?php
$return = array();

$return[] = WPO\Field::create( 'oembed', 'oembed', __( 'OEmbed' ) );
$return[] = WPO\Field::create( 'oembed', 'oembed_1', __( 'OEmbed' ) )
	->prefix( 'Video' );

$return[] = WPO\Field::create( 'oembed', 'oembed_2', __( 'OEmbed' ) )
	->surfix( 'Video' );

return $return;
