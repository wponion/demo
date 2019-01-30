<?php
global $wpof, $wpo;

$wpo  = array();
$wpof = array();

$wpof['basic_feature'] = wponion_field_file( 'basic-feature.php' );
$wpof['text']          = wponion_field_file( 'text.php' );


$wpo[] = WPO\Container::create( 'basic_feature', __( 'Basic Feature' ), 'dashicons dashicons-admin-generic' )
	->set_fields( $wpof['basic_feature'] );

$user_inputs = WPO\Container::create( 'user_inputs', __( 'User Inputs' ), 'dashicons  dashicons-welcome-write-blog' );

$text = $user_inputs->container( 'text', __( 'Text' ), 'dashicons dashicons-editor-textcolor' );
$text->set_fields( $wpof['text'] );

$wpo[] = $user_inputs;
