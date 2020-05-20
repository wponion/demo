<?php
function wponion_demo_nav_menus() {
	$builder = wponion_builder();
	$builder->text( 'hover_text', __( 'Menu Hover Name' ) )->validate( 'wponion_is_required' );
	$builder->icon_picker( 'icon', __( 'Icon' ) )->validate( 'wponion_is_required' );
	return $builder;
}

wponion_nav_menu( array( 'option_name' => '_wponion_nav_menu' ), 'wponion_demo_nav_menus' );
