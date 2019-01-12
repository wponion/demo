<?php
/**
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @since 1.0
 * @link
 * @copyright 2019 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

add_action( 'init', 'wponion_demo_visual_composer' );


function wponion_demo_visual_composer() {
	global $wpof;

	foreach ( $wpof as $key => $value ) {
		foreach ( $value as $k => $v ) {
			if ( isset( $v['id'] ) ) {
				$v['param_name'] = $v['id'];
			} else {
				$v['param_name'] = md5( json_encode( $v ) );
			}

			$v['type'] = 'wponion_' . $v['type'];
			unset( $v['id'] );
			$value[ $k ] = $v;
		}

		wponion_vc_map( array(
			'name'        => $key,
			'base'        => 'wponion_vc_demo_' . $key,
			'description' => sprintf( __( 'WPOnion %s Field Demo' ), $key ),
			'params'      => $value,
		) );
		add_shortcode( 'wponion_vc_demo_' . $key, 'wponion_handle_vc_shortcode' );
	}
}/*

add_action( 'init', function () {
	wponion_vc_map( array(
		'name'        => __( 'Text' ),
		'base'        => 'wponion_text',
		'description' => __( 'WPOnion Text Field Demo', 'text-domain' ),
		'params'      => array(

			array(
				'type'        => 'wponion_text',
				'holder'      => 'h3',
				'class'       => 'title-class',
				'heading'     => __( 'Title', 'text-domain' ),
				'param_name'  => 'title',
				'value'       => __( 'Default value', 'text-domain' ),
				'description' => __( 'Box Title', 'text-domain' ),
				'admin_label' => false,
				'weight'      => 0,
				'group'       => 'Custom Group',
			),
		),
	) );
} );*/
