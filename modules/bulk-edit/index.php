<?php
function wponion_demo_bulk_edit_1() {
	$builder = wponion_builder();
	$builder->text( 'text', __( 'TextField' ) );
	$builder->switcher( 'switcher', __( 'Switcher' ) );
	return $builder;
}

wponion_bulk_edit( array(
	'post_type'   => 'post',
	'column'      => 'custom-column-1', // Check admin-columns/index.php
	'option_name' => '_wponion_metabox_posts',
), 'wponion_demo_bulk_edit_1' );
