<?php
function wponion_demo_taxonomy() {
	$builder = wponion_builder();
	$builder->image( 'featured_image', __( 'Featured Image' ) );
	$builder->text( 'title', 'title' )->validate( 'wponion_is_required' );
	$builder->icon_picker( 'icon', __( 'Icon' ) );
	return $builder;
}

$taxonomy = wponion_taxonomy( array(
	'option_name' => '_wponion_taxonomy',
	'theme'       => 'wp_modern',
	'elementor'   => __( 'WPOnion Taxonomy Integration' ),
	'taxonomy'    => array( 'category', 'post_tag' ),
), 'wponion_demo_taxonomy' );

