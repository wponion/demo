<?php
global $wpo;

$builder = wponion_builder();

foreach ( $wpo as $container ) {
	$builder->container( $container );
}

$builder->container( 'system-info', __( 'System Tool/Info' ), 'dashicons dashicons-info' )
	->set_callback( 'wponion_sysinfo' );


$builder->separator( 'separator', 'Custom Seperator', 'dashicons dashicons-admin-generic' );

$builder->container( 'custom_page', __( 'Custom Page' ) )
	->set_callback( function () {
		echo '<div class="col-xs-12"><h1>Hello World. This is a custom page with custom content rendered</h1></div>';
	} );

$builder->separator( 'separator2' );

$subpages = $builder->container( 'custom_subpages', __( 'Custom Subpages' ) );
$subpages->container( 'page1', __( 'Page 1' ) )
	->set_callback( function () {
		echo '<div class="col-xs-12"><h1>Hello World. This is a custom page with custom content rendered</h1></div>';
	} );
$subpages->container( 'page2', __( 'Page 2' ) )
	->set_callback( function () {
		echo '<div class="col-xs-12"><h1>Hello World. This is a custom page with custom content rendered</h1></div>';
	} );


$builder->container( 'support', __( 'Support' ), 'dashicons-info dashicons' )
	->set_href( 'https://github.com/wponion/' );
$args = array(
	'option_name'     => '_wponion_demo_settings',
	'framework_title' => __( 'WPOnion Demo Framework' ),
	'framework_desc'  => __( 'This demo plugin shows WPOnion\'s full capability' ),
	'theme'           => 'wp_modern',
	'is_single_page'  => false,
	'menu'            => array(
		'menu_title' => __( 'WPOnion Settings Demo' ),
		'menu_slug'  => 'wponion-settings-demo',
		'submenu'    => true,
	),
);

$instance = wponion_settings( $args, $builder );
