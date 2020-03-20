<?php
global $wpo, $wpof;

$builder = wponion_builder();

foreach ( $wpo as $container ) {
	$builder->container( $container );
}

$builder->container( 'import-export', __( 'Import / Export' ), 'dashicons dashicons-upload' )
	->field( 'import_export' );

$builder->container( 'system-info', __( 'System Info' ), 'dashicons dashicons-info' )
	->set_var( 'developer', 'your-emailemail.com' )
	->callback( 'wponion_sysinfo' );


$builder->separator( 'separator', 'Custom Seperator', 'dashicons dashicons-admin-generic' );

$builder->container( 'custom_page', __( 'Custom Page' ), 'dashicons dashicons-text-page' )
	->callback( function () {
		echo '<div class="col-xs-12"><h1>Hello World. This is a custom page with custom content rendered</h1></div>';
	} );

$builder->separator( 'separator2' );

$subpages = $builder->container( 'custom_subpages', __( 'Custom Subpages' ), 'dashicons dashicons-admin-page' );
$subpages->container( 'page1', __( 'Page 1' ) )
	->callback( function () {
		echo '<div class="col-xs-12"><h1>Hello World. This is a custom page with custom content rendered</h1></div>';
	} );
$subpages->container( 'page2', __( 'Page 2' ) )
	->callback( function () {
		echo '<div class="col-xs-12"><h1>Hello World. This is a custom page with custom content rendered</h1></div>';
	} );


$builder->container( 'field_badge', __( 'Field Badge' ), 'dashicons dashicons-tag' )
	->set_fields( $wpof['field_badge'] );
$builder->container( 'support', __( 'Support' ), 'dashicons-info dashicons' )
	->href( 'https://github.com/wponion/' );

$colors = array(
	'light',
	'blue',
	'coffee',
	'ectoplasm',
	'midnight',
	'ocean',
	'sunrise',
	'#e14d43',
	'#e16443',
	'#43afe1',
	'#436ce1',
	'#8443e1',
	'#e14397',
);
$colors = $colors[ ( rand( 1, 13 ) - 1 ) ];
$args   = array(
	'option_name'     => '_wponion_demo_settings',
	'framework_title' => __( 'WPOnion Demo Framework' ),
	'framework_desc'  => __( 'This demo plugin shows WPOnion\'s full capability' ),
	'theme'           => 'wp',
	'ajax'            => true,
	'search'          => true,
	//'color_scheme'    => $colors,
	'is_single_page'  => false,
	'menu'            => array(
		'menu_title' => __( 'WPOnion Settings Demo' ),
		'menu_slug'  => 'wponion-settings-demo',
		'submenu'    => true,
	),
);

$instance = wponion_settings( $args, $builder );
