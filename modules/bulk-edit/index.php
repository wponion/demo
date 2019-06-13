<?php
$wpo_mp = wponion_builder();
$wpo_mp->text( 'text', __( 'TextField' ) );
$wpo_mp->switcher( 'switcher', __( 'Switcher' ) );

wponion_bulk_edit( array(
	'post_type'   => 'post',
	'column'      => 'custom-column-1', // Check admin-columns/index.php
	'option_name' => '_wponion_metabox_posts',
), $wpo_mp );
