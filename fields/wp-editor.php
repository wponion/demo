<?php
$return = array();

$return[] = WPO\Field::create( 'wp_editor', 'wp_editor', __( 'WP Editor' ) );
$return[] = WPO\Field::create( 'wp_editor', 'wp_editor_1', __( 'WP Editor (No Media)' ) )
	->settings( array(
		'media_buttons' => false,
	) );

return $return;
