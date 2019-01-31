<?php
global $wpof, $wpo;

$wpo  = array();
$wpof = array();

/**
 * Basic Feature.
 */
$wpof['basic_feature'] = wponion_field_file( 'basic-feature.php' );

/**
 * User Inputs.
 */
$wpof['text']       = wponion_field_file( 'text.php' );
$wpof['textarea']   = wponion_field_file( 'textarea.php' );
$wpof['checkbox']   = wponion_field_file( 'checkbox.php' );
$wpof['radio']      = wponion_field_file( 'radio.php' );
$wpof['select']     = wponion_field_file( 'select.php' );
$wpof['switcher']   = wponion_field_file( 'switcher.php' );
$wpof['button_set'] = wponion_field_file( 'button-set.php' );

/**
 * Advanced Fields.
 */
$wpof['sorter']      = wponion_field_file( 'sorter.php' );
$wpof['input_group'] = wponion_field_file( 'input-group.php' );
$wpof['fieldset']    = wponion_field_file( 'fieldset.php' );
$wpof['accordion']   = wponion_field_file( 'accordion.php' );
$wpof['group']       = wponion_field_file( 'group.php' );

/**
 * Picker Fields.
 */
$wpof['color_picker'] = wponion_field_file( 'color-picker.php' );
$wpof['icon_picker']  = wponion_field_file( 'icon-picker.php' );
$wpof['font_picker']  = wponion_field_file( 'font-picker.php' );
$wpof['date_picker']  = wponion_field_file( 'date-picker.php' );
$wpof['image_select'] = wponion_field_file( 'image-select.php' );


$wpo[] = WPO\Container::create( 'basic_feature', __( 'Basic Feature' ), 'dashicons dashicons-admin-generic' )
	->set_fields( $wpof['basic_feature'] );

/**
 * User Input Container.
 */
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
$user_inputs->container( 'switcher', __( 'Switcher' ), 'dashicons dashicons-yes' )
	->set_fields( $wpof['switcher'] );
$user_inputs->container( 'button_set', __( 'Button Set' ), 'dashicons dashicons-editor-kitchensink' )
	->set_fields( $wpof['button_set'] );

$wpo[] = $user_inputs;

/**
 * Advanced Fields.
 */
//@todo create cloner demo.
//@todo create tab demo.
$advanced = WPO\Container::create( 'Advanced_fields', __( 'Advanced Fields' ), 'dashicons dashicons-admin-plugins' );
$advanced->container( 'sorter', __( 'Sorter' ) )
	->set_fields( $wpof['sorter'] );
$advanced->container( 'input_group', __( 'Input Group' ) )
	->set_fields( $wpof['input_group'] );
$advanced->container( 'fieldseet', __( 'Fieldset' ), 'dashicons dashicons-admin-settings' )
	->set_fields( $wpof['fieldset'] );
$advanced->container( 'accordion', __( 'Accordion' ), 'dashicons dashicons-admin-settings' )
	->set_fields( $wpof['accordion'] );
$advanced->container( 'group', __( 'Group' ), 'dashicons dashicons-admin-settings' )
	->set_fields( $wpof['group'] );

$wpo[] = $advanced;

/**
 * Picker Fields.
 */
$pickers = \WPO\Container::create( 'pickers', __( 'Pickers' ), 'dashicons dashicons-location' );
$pickers->container( 'color_picker', __( 'Color Picker' ), 'dashicons dashicons-admin-appearance' )
	->set_fields( $wpof['color_picker'] );
$pickers->container( 'icon_picker', __( 'Icon Picker' ), 'dashicons dashicons-heart' )
	->set_fields( $wpof['icon_picker'] );
$pickers->container( 'font_picker', __( 'Font Picker' ), 'dashicons dashicons-editor-textcolor' )
	->set_fields( $wpof['font_picker'] );
$pickers->container( 'date_picker', __( 'Date Picker' ), 'dashicons dashicons-calendar-alt' )
	->set_fields( $wpof['date_picker'] );
$pickers->container( 'image_select', __( 'Image Select' ), 'dashicons dashicons-format-image' )
	->set_fields( $wpof['image_select'] );

$wpo[] = $pickers;
