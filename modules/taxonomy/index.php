<?php
$builder = wponion_builder();
$builder->image( 'featured_image', __( 'Featured Image' ) );
$builder->text( 'title', 'title' );
wponion_taxonomy( array(
	'option_name' => '_wponion_taxonomy',
	'theme'       => 'wp_modern',
	'elementor'   => __( 'Custom Elementor Tax' ),
	'taxonomy'    => array( 'category', 'post_tag' ),
), $builder );


$builder   = wponion_builder();
$container = $builder->container( 'page1', __( 'Page 1' ) );
$container->select( 'select', __( 'Select' ) )
	->option( 'option1', __( 'Option 1' ) )
	->option( 'option2', __( 'Option 2' ) )
	->option( 'option3', __( 'Option 3' ) )
	->option( 'option4', __( 'Option 4' ) )
	->select_framework( 'select2' );