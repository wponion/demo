<?php
$builder = wponion_builder();
$builder->text( 'hover_text', __( 'Menu Hover Name' ) );
$builder->icon_picker( 'icon', __( 'Icon' ) );

wponion_nav_menu( array(
	'option_name' => '_wponion_nav_menu',
), $builder );
