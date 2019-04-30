<?php
/**
 * @todo fix upload field
 * @todo fix wp_editor field
 * @todo fix fieldset css
 * @todo fix wplink css
 * @todo fix spacing unit bug fix.
 */

$builder  = wponion_builder();
$overview = $builder->container( 'wponion-overview', __( 'WPO - Overview' ) );
$overview->text( 'textfield', __( 'Textfield' ) );
$overview->textarea( 'textarea', __( 'Textarea' ) );
$overview->upload( 'upload', __( 'Upload' ) );
$overview->switcher( 'switcher', __( 'switcher' ) );
$overview->color_picker( 'color_picker', __( 'Color Picker' ) );
$overview->checkbox( 'checkbox', __( 'Checkbox' ) )
	->set_label( 'The label text of the checkbox' );
$overview->radio( 'radio', 'Radio', array(
	'options' => array(
		'Yes Please.'  => 'Yes Please.',
		'No Thank You' => 'No Thank You',
	),
) );
$overview->select( 'select', 'Select', array(
	'options' => array(
		'option1' => __( 'Option 1' ),
		'option2' => __( 'Option 2' ),
		'option3' => __( 'Option 3' ),
	),
) );

$nested  = $builder->container( 'wponion-nested', __( 'WPO - Nested Panels' ) );
$nested1 = $nested->container( 'nested1', __( 'Nested Panel 1' ) );
$nested1->text( 'text', __( 'Text Field' ) );
$nested1->textarea( 'textarea', __( 'TextArea Field' ) );

$nested2 = $nested->container( 'nested2', __( 'Nested Panel 2' ) );
$nested2->link_color( 'link_color', __( 'Link Color' ) );

$nestedo = $nested->container( 'nested3-outer', __( 'Nested 3 Outer' ) );
$nestedo->set_var( 'outer', true );
$nestedo->spacing( 'dimensions', __( 'dimensions' ) );

/**
 * Outer Panel.
 */
$outer = $builder->container( 'wponion-outer', __( 'WPO - Outer' ) );
$outer->set_var( 'outer', true );
$outer->image( 'image', __( 'Image' ) );


wponion_customizer( array(
	'option_name' => '_wponion_customizer_demo',
), $builder );

require_once __DIR__ . '/full-customizer.php';