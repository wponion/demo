<?php
global $wpo;

$builder = new WPO\Builder();

foreach ( $wpo as $container ) {
	$builder->container( $container );
}

$args = array(
	'option_name'     => '_wponion_demo_settings',
	'framework_title' => __( 'WPOnion Demo Framework' ),
	'framework_desc'  => __( 'This demo plugin shows WPOnion\'s full capability' ),
	'theme'           => 'wp_modern',
	'is_single_page'  => false,
	'menu'            => array(
		'menu_title' => __( 'WPOnion Demo' ),
		'menu_slug'  => 'wponion-demo',
		'submenu'    => true,
	),
);

$instance = wponion_settings( $args, $builder );
