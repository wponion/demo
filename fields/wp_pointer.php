<?php

return array(
	/*array(
		'type'       => 'text',
		'title'      => 'Pointer',
		'desc_field' => __( 'WPOnion Field With WP Pointer Demo.' ) . '<br/><br/>' . wponion_highlight_string( '"wp_pointer" => array(
		"WP Pointer In Field", // Title
		"This is a simple demo on how to add WP Pointer To A Field", // Content
),' ),
		'wp_pointer' => array( 'WP Pointer In Field', 'This is a simple demo on how to add WP Pointer To A Field' ),
	),
	array(
		'type'       => 'text',
		'title'      => 'Pointer With Exisitng Instance',
		'desc_field' => __( 'This Pointer Is Attached With A Existing Pointer Instance.' ) . '<br/><br/>' . wponion_highlight_string( '"wp_pointer" => array(
		"vs" // Pointer Instance ID
		"WP Pointer In Field", // Title
		"This is a simple demo on how to add WP Pointer To A Field", // Content
),' ) . '<br/><br/>' . __( 'If No Instance ID Provided Then it WPOnion itself creates a new instance' ),
		'wp_pointer' => array(
			'vs',
			'WP Pointer In Field',
			'Pointer Attached With Existing instance . ',
		),
	),
	array(
		'type'       => 'text',
		'title'      => 'Pointer Options',
		'desc_field' => __( 'Pointer With Custom Element & Custom Width' ) . '<br/><br/>' . wponion_highlight_string( '"wp_pointer" => array(
		\'title\'    => "Field Pointer 1",
		\'text\'     => "Field Pointer Text",
		\'width\'    => 450,
		\'selector\' => "#wponion-demo-wppointer-view2",
		),' ),
		'before'     => '<div id="wponion-demo-wppointer-view2" style="width:100px;  border:1px solid; padding:5px; margin-bottom: 5px;">Pointer Will Point Here</div>',
		'wp_pointer' => array(
			'title'    => __( 'Field Pointer 1' ),
			'text'     => __( 'Field Pointer Text' ),
			'width'    => 450,
			'selector' => '#wponion-demo-wppointer-view2',
		),
	),*/

	array(
		'type'       => 'text',
		'title'      => 'Step By Step Pointers',
		'wp_pointer' => array(
			'title' => __( 'Step 1' ),
			'text'  => __( 'Step 1 Content' ),
			'next'  => array(
				'title' => __( 'Step 2' ),
				'text'  => __( 'Step 2 Content' ),
				'next'  => array(
					'title' => __( 'Step 3' ),
					'text'  => __( 'Step 3 Content Goes Here' ),
				),
			),
		),
	),
);
