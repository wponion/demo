<?php
$wpo_mp = wponion_builder();
$wpo_mp->text( 'text', __( 'TextField' ) );
$wpo_mp->textarea( 'textarea', __( 'Textarea' ) );
$wpo_mp->switcher( 'switcher', __( 'Switcher' ) );

wponion_metabox( array(
	'option_name'   => '_wponion_metabox_posts',
	'metabox_title' => __( 'Custom Post Option' ),
	'metabox_id'    => 'custom-post-option-by-wponion',
	'screens'       => array( 'post' ),
	'context'       => 'normal',
	'ajax'          => true,
	'theme'         => 'wp_modern',
), $wpo_mp );
