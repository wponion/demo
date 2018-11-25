<?php
/**
 *
 * Project : wponion
 * Date : 13-11-2018
 * Time : 01:12 PM
 * File : dashboard-widgets.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

/**
 * Below Widgets Shows only in Single site.
 */
wponion_dashboard_widgets( array(
	'widget_id'   => 'wponion_dashboard_widget',
	'widget_name' => __( 'Dashboard Widget' ),
	'option_name' => '_wponion_dashboard_widgets',
	'callback'    => function ( $dashboard ) {
		echo '<h2> Hello ' . $dashboard['your-name'] . ' !</h2>';
		echo '<p>You Have Selected Below Image</p>';
		echo wp_get_attachment_image( $dashboard['image'], 'medium' );
	},
), array(
	array(
		'title' => 'Your Name',
		'type'  => 'text',
		'id'    => 'your-name',
	),
	array(
		'id'    => 'image',
		'title' => __( 'Image Selector' ),
		'type'  => 'image',
	),
) );

/**
 * Belo Widgets Shows in both network & single site dashboard.
 */
wponion_dashboard_widgets( array(
	'widget_id'   => 'wponion_network_dashboard_widget',
	'widget_name' => __( 'WPOnion Network & Site Widget' ),
	'network'     => true,
	'option_name' => '_wponion_network_widget',
	'callback'    => function ( $dashboard ) {
		$dashboard = wp_parse_args( $dashboard, array( 'your-name' => '', 'image' => false ) );
		echo '<h2>' . sprintf( __( 'Hi ! There %s' ), $dashboard['your-name'] ) . '</h2>';
		echo wponion_add_element( array(
			'type'    => 'subheading',
			'content' => __( 'This widget will show in both single site & network dashboard.' ),
		) );
		echo wp_get_attachment_image( $dashboard['image'], 'medium' );
	},
), array(
	array(
		'title' => 'Your Name',
		'type'  => 'text',
		'id'    => 'your-name',
	),
	array(
		'id'    => 'image',
		'title' => __( 'Image Selector' ),
		'type'  => 'image',
	),
) );

/**
 * This widget shows only in network.
 */
wponion_dashboard_widgets( array(
	'widget_id'   => 'wponion_only_network_dashboard_widget',
	'widget_name' => __( 'WPOnion Only Network' ),
	'network'     => 'only',
	'option_name' => '_wponion_only_network_widget',
	'callback'    => function ( $dashboard ) {
		$dashboard = wp_parse_args( $dashboard, array( 'your-name' => '', 'image' => false ) );
		echo '<h2>' . sprintf( __( 'Hi ! There %s' ), $dashboard['your-name'] ) . '</h2>';
		echo wp_get_attachment_image( $dashboard['image'], 'medium' );
	},
), array(
	array(
		'title' => 'Your Name',
		'type'  => 'text',
		'id'    => 'your-name',
	),
	array(
		'id'    => 'image',
		'title' => __( 'Image Selector' ),
		'type'  => 'image',
	),
) );
