<?php
$wpo_mp = wponion_builder();
$wpo_mp->text( 'text', __( 'TextField' ) );
$wpo_mp->icon_picker( 'page_s1_icon_picker', __( 'Icon Picker' ) );

wponion_quick_edit( array(
	'post_type'   => 'page',
	'column'      => 'custom-column-1', // Check admin-columns/index.php
	'option_name' => '_wponion_metabox_main_metabox',
), $wpo_mp );
