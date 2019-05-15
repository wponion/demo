<?php

$builder = wponion_builder();
$builder->subheading( __( 'Medial Fields' ) );
$builder->switcher( 'show', __( 'Show ?' ) )
	->label( 'Custom Label' );

wponion_media_fields( array(
	'option_name' => '_wponion_media_fields',
), $builder );
