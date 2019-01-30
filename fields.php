<?php
global $wpof, $wpo;

$wpo  = array();
$wpof = array();

$wpof['basic_feature'] = wponion_field_file( 'basic-feature.php' );
$wpof['text']          = wponion_field_file( 'text.php' );
$wpof['textarea']      = wponion_field_file( 'textarea.php' );


$wpo[] = WPO\Container::create( 'basic_feature', __( 'Basic Feature' ), 'dashicons dashicons-admin-generic' )
	->set_fields( $wpof['basic_feature'] );

$user_inputs = WPO\Container::create( 'user_inputs', __( 'User Inputs' ), 'dashicons  dashicons-welcome-write-blog' );

$user_inputs->container( 'text', __( 'Text' ), 'dashicons dashicons-editor-textcolor' )
	->set_fields( $wpof['text'] );

$user_inputs->container( 'textarea', __( 'Textarea' ), 'dashicons dashicons-editor-textcolor' )
	->set_fields( $wpof['textarea'] );

$wpo[] = $user_inputs;
