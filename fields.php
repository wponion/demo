<?php
global $wpof, $wpo;

$wpo  = array();
$wpof = array();

$wpof['basic_feature'] = wponion_field_file( 'basic-feature.php' );
$wpof['text']          = wponion_field_file( 'text.php' );
$wpof['textarea']      = wponion_field_file( 'textarea.php' );
$wpof['checkbox']      = wponion_field_file( 'checkbox.php' );
$wpof['radio']         = wponion_field_file( 'radio.php' );
$wpof['select']        = wponion_field_file( 'select.php' );


$wpo[] = WPO\Container::create( 'basic_feature', __( 'Basic Feature' ), 'dashicons dashicons-admin-generic' )
	->set_fields( $wpof['basic_feature'] );

$user_inputs = WPO\Container::create( 'user_inputs', __( 'User Inputs' ), 'dashicons  dashicons-welcome-write-blog' );
$user_inputs->container( 'text', __( 'Text' ), 'dashicons dashicons-editor-textcolor' )
	->set_fields( $wpof['text'] );
$user_inputs->container( 'textarea', __( 'Textarea' ), 'dashicons dashicons-editor-textcolor' )
	->set_fields( $wpof['textarea'] );
$user_inputs->container( 'checkbox', __( 'Checkbox' ), 'dashicons dashicons-editor-spellcheck' )
	->set_fields( $wpof['checkbox'] );
$user_inputs->container( 'radio', __( 'Radio' ), 'dashicons dashicons-editor-spellcheck' )
	->set_fields( $wpof['radio'] );
$user_inputs->container( 'select', __( 'Select' ), 'dashicons dashicons-admin-multisite' )
	->set_fields( $wpof['select'] );

$wpo[] = $user_inputs;
