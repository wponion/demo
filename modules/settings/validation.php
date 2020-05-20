<?php
function wponion_demo_validation() {
	global $wpof;
	$builder = new WPO\Builder();
	$builder->container( 'jsvalidation', __( 'JS Validation' ), 'dashicons-admin-generic dashicons' )
		->set_fields( $wpof['js-validation'] );
	$builder->container( 'phpvalidation', __( 'PHP Validation' ), 'dashicons-admin-generic dashicons' )
		->set_fields( $wpof['php-validation'] );
	return $builder;
}

$args = array(
	'option_name'     => '_wponion_demo_settings_validation',
	'framework_title' => __( 'WPOnion Validation Demo' ),
	'framework_desc'  => __( 'This demo to show validation works' ),
	'theme'           => 'wp_modern',
	'is_single_page'  => false,
	'menu'            => array(
		'menu_title' => __( 'Validation' ),
		'menu_slug'  => 'wponion-validation',
		'submenu'    => 'wponion-settings-demo',
	),
);

$instance = wponion_settings( $args, 'wponion_demo_validation' );
