<?php

$builder = wponion_builder();
$builder->subheading( __( 'Medial Fields' ) );
$builder->textarea( 'somecontent', 'Content' )
	->validate( 'wponion_is_required' );
$builder->switcher( 'show', __( 'Show ?' ) )
	->label( 'Custom Label' );

wponion_media_fields( array(
	'option_name' => '_wponion_media_fields',
), $builder );
