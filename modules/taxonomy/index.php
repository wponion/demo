<?php
$builder = wponion_builder();
$builder->image( 'featured_image', __( 'Featured Image' ) );
$builder->text( 'title', 'title' )
	->validate( 'wponion_is_required' );
wponion_taxonomy( array(
	'option_name' => '_wponion_taxonomy',
	'theme'       => 'wp_modern',
	'elementor'   => __( 'Custom Elementor Tax' ),
	'taxonomy'    => array( 'category', 'post_tag' ),
), $builder );

