<?php

function wponion_demo_wc_settings_1() {
	$builder   = wponion_builder();
	$container = $builder->container( 'wpo-simple', 'WPO Simple' );
	$container->text( 'textfield', __( 'Simple Text' ) )->validate( 'wponion_is_required' );
	$container->textarea( 'textarea', __( 'Simple Textarea' ) );
	$container->checkbox( 'checkbox', __( 'Simple Checkbox' ) );
	return $builder;
}

function wponion_demo_wc_settings_2() {
	$builder = wponion_builder();
	$page    = $builder->container( 'wpo', 'WPOnion' );
	$sub1    = $page->container( 'section1', __( 'Section 1' ) );
	$sub2    = $page->container( 'section2', __( 'Section 2' ) );
	$sub1->icon_picker( 'icon_picker', __( 'Icon Picker' ) );
	$sub1->color_picker( 'color_picker', __( 'Color Picker' ) );
	$sub2->image( 'image_picker', __( 'Image Picker' ) );
	$sub2->wp_editor( 'wpeditor' );
	return $builder;
}

wponion_wc_settings( array( 'option_name' => 'wponion_demo_wc_simple_settings' ), 'wponion_demo_wc_settings_1' );
wponion_wc_settings( array( 'option_name' => 'wponion_demo_wc_simple_settings' ), 'wponion_demo_wc_settings_2' );
