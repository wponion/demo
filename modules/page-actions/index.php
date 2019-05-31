<?php
wponion_page_actions( 'post', '<a href="https://google.com" class="page-title-action">Go To Support</a>' );
wponion_page_actions( 'post', array(
	'label' => __( 'Settings' ),
	'class' => 'wpo-btn wpo-btn-dark wpo-btn-sm',
	'href'  => 'https://google.com',
	'tag'   => 'a',
) );

/**
 * Instead of passing just the post type you also pass like below
 * 1. array('taxonomy' => 'your-taxonomy')
 * 2. array('screen_id' => 'your-screen-id')
 */
wponion_page_actions( 'post', array(
	array(
		'label' => __( 'Add Products' ),
		'class' => 'page-title-action wpo-text-success',
		'href'  => 'https://google.com',
		'tag'   => 'a',
	),
	array(
		'label'   => __( 'Contact Support' ),
		'tooltip' => __( 'Sorry We Are Not Here Right Now' ),
	),
) );
