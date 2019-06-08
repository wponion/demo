<?php

$builder   = wponion_builder();
$container = $builder->container( 'wpo-simple', 'WPO Simple' );
$container->text( 'textfield', __( 'Simple Text' ) )
	->validate( 'wponion_is_required' );
$container->textarea( 'textarea', __( 'Simple Textarea' ) );
$container->checkbox( 'checkbox', __( 'Simple Checkbox' ) );
wponion_wc_settings( array( 'option_name' => 'wponion_demo_wc_simple_settings' ), $builder );


$builder   = wponion_builder();
$container = $builder->container( 'wpo', 'WPOnion' );

$sub = $container->container( 'section1', __( 'Section1' ) );
$sub->icon_picker( 'icon_picker', __( 'Icon Picker' ) );
$sub->color_picker( 'color_picker', __( 'Color Picker' ) );

$container2 = $container->container( 'section2', __( 'Section 2' ) );
$container2->image( 'image_picker', __( 'Image Picker' ) );
$container2->wp_editor( 'wpeditor' );

wponion_wc_settings( array( 'option_name' => 'wponion_demo_wc_simple_settings' ), $builder );
