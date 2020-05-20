<?php
function wponion_demo_sidemetabox() {
	$wpo_side = wponion_builder();
	$wpo_side->content( __( 'This Metabox is shown in both Post & Page Post Types' ) );
	$wpo_side->image_select( 'image_select', 'Image Select', array(
		'options' => array(
			'image1' => 'https://s3.wponion.com/placeholder/75/1.jpg',
			'image2' => 'https://s3.wponion.com/placeholder/75/2.jpg',
			'image3' => 'https://s3.wponion.com/placeholder/75/3.jpg',
		),
	) );
	$wpo_side->textarea( 'textarea', 'Textarea' )->validate( 'wponion_is_required' );
	$wpo_side->switcher( 'switcher', 'Switcher' )->switch_size( 12 );
	return $wpo_side;
}

wponion_metabox( array(
	'option_name'   => '_wponion_metabox_posts_side',
	'metabox_title' => __( 'Custom Post Option' ),
	'metabox_id'    => 'custom-post-option-by-wponion-2',
	'screens'       => array( 'post', 'page' ),
	'context'       => 'side',
	'ajax'          => true,
), 'wponion_demo_sidemetabox' );
