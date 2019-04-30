<?php
$builder = wponion_builder();
$builder->image( 'featured_image', __( 'Featured Image' ) );
$builder->text( 'title', 'title' );
wponion_taxonomy( array(
	'option_name' => '_wponion_taxonomy',
	'metabox'     => false,
	'theme'       => 'wp_modern',
	'elementor'   => __( 'Custom Elementor Tax' ),
	'taxonomy'    => array( 'category', 'post_tag' ),
), $builder );

