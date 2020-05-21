<?php
$theme = wponion_demo_rand_theme();

function wponion_demo_userprofile_1() {
	$builder   = wponion_builder();
	$container = $builder->container( 'page1', 'Page 1' );
	$container->text( 'profile', __( 'Profile Field' ) )->validate( 'wponion_is_required' );
	$container->textarea( 'profilefield2', __( 'Profile Field 2' ) )->field_default( 'OOOO' );
	$container->image_select( 'image_select', __( 'Image Select Options' ) )
		->options( wponion_layouts( 'header', '75' ) );
	return $builder;
}

wponion_user_profile( array(
	'heading'     => __( 'Custom Profile Fields As Metabox' ),
	'option_name' => '_wponion_user_profile_1',
	'theme'       => $theme,
	'metabox'     => __( 'WPOnion User Profile Demo' ),
), 'wponion_demo_userprofile_1' );

wponion_user_profile( array(
	'heading'     => __( 'Custom Profile Fields' ),
	'theme'       => wponion_demo_rand_theme(),
	'option_name' => '_wponion_user_profile',
), function () {
	return wponion_builder()->set_fields( wponion_demo_userprofile_1()->fields() );
} );
