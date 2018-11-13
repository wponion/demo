<?php
/**
 *
 * Project : wponion
 * Date : 13-11-2018
 * Time : 11:12 AM
 * File : help_tabs.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

function wponion_tab3_callback() {
	return 'Tab 3 Content Goes Here';
}

wponion_help_tabs( 'toplevel_page_custom-wponion-page-2', array(
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

wponion_help_tabs( 'toplevel_page_custom-wponion-page-3', array(
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
