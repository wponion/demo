<?php
$builder = wponion_builder();
$builder->text( 'your-name', __( 'Your Name' ) );
$builder->image( 'image', __( 'Image Select' ) );

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
), $builder );
