<?php
return array(
	array(
		'id'     => 'input_group',
		'title'  => __( 'Input Group' ),
		'type'   => 'input_group',
		'fields' => array(
			'field-a' => __( 'Field A' ),
			'field-b' => __( 'Field B' ),
			'field-c' => __( 'Field C' ),
		),
	),
	array(
		'id'         => 'input_group_1',
		'title'      => __( 'Input Group' ),
		'desc_field' => __( 'This Field Type (input_group) Supports All Fields.' ),
		'type'       => 'input_group',
		'fields'     => array(
			'field-a'    => __( 'Field A' ),
			'field-b'    => __( 'Field B' ),
			'is_checked' => array(
				'type'  => 'checkbox',
				'title' => __( 'Enable ?' ),
				'label' => __( 'Are you Sure ?' ),
			),
		),
	),
);
