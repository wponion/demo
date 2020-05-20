<?php
function wponion_demo_media_fields() {
	$builder = wponion_builder();
	$builder->subheading( __( 'Medial Fields' ) );
	$builder->textarea( 'somecontent', 'Content' )->validate( 'wponion_is_required' );
	$builder->switcher( 'show', __( 'Show ?' ) )->label( 'Custom Label' );
	return $builder;
}

wponion_media_fields( array(
	'option_name' => '_wponion_media_fields',
), 'wponion_demo_media_fields' );
