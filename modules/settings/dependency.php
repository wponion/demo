<?php
global $wpof;
$builder = new WPO\Builder();
$builder->set_fields( $wpof['dependency'] );
$args = array(
	'option_name'     => '_wponion_demo_settings_dependency',
	'framework_title' => __( 'WPOnion dependency Demo' ),
	'framework_desc'  => __( 'This demo to show Dependency works' ),
	'theme'           => 'wp_modern',
	'is_single_page'  => false,
	'menu'            => array(
		'menu_title' => __( 'Dependency' ),
		'menu_slug'  => 'wponion-dependency',
		'submenu'    => 'wponion-demo',
	),
);

$instance = wponion_settings( $args, $builder );
