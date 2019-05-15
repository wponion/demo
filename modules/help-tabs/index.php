<?php

function wponion_tab3_callback() {
	return 'Tab 3 Content Goes Here';
}

wponion_help_tabs( 'toplevel_page_wponion-demo', array(
	'Tab 1' => array(
		'content' => 'Tab 1 content here ...',
	),
	'Tab 2' => array(
		'content' => 'Tab 2 content here ...',
	),
	array(
		'id'       => 'tab-3',
		'title'    => 'Tab 3',
		'callback' => 'wponion_tab3_callback',
	),
), 'Sidebar Content Goes Here.' );

wponion_help_tabs( 'wponion-demo_page_wponion-ajax-demo', array(
	array(
		'id'     => 'tab-1',
		'title'  => 'Tab 1',
		'fields' => array(
			array(
				'type'    => 'heading',
				'content' => 'Your Heading',
			),
			array(
				'type'    => 'notice',
				'content' => 'Notice Content Here',
			),
		),
	),
	'Tab 2' => array(
		array(
			'type'            => 'accordion',
			'accordion_title' => 'Your Question 1',
			'fields'          => array(
				array(
					'type'    => 'content',
					'content' => 'Your accordion Content Goes Here.',
				),
			),
		),
		array(
			'type'            => 'accordion',
			'accordion_title' => 'Your Question 2',
			'fields'          => array(
				array(
					'type'    => 'content',
					'content' => 'Your accordion Content Goes Here.',
				),
			),
		),
		array(
			'type'            => 'accordion',
			'accordion_title' => 'Your Question 3',
			'fields'          => array(
				array(
					'type'    => 'content',
					'content' => 'Your accordion Content Goes Here.',
				),
			),
		),
	),
), '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, </p>' );
