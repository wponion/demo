<?php
$builder = wponion_builder();
$builder->text( 'your-name', __( 'Your Name' ) );
$builder->image( 'image', __( 'Image Select' ) );

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
), $builder );
