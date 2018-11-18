<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 05:15 PM
 * File : wp_link.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'wp_link',
		'title' => __( 'WP Link Selector' ),
		'type'  => 'wp_link',
	),
	array(
		'id'     => 'wp_link_2',
		'title'  => __( 'WP Link Button Customized' ),
		'type'   => 'wp_link',
		'button' => array(
			'label' => __( 'Pick A URL' ),
			'class' => 'button button-secondary',
		),
	),
	array(
		'id'       => 'wp_link_3',
		'title'    => __( 'WP Link Selector' ),
		'desc'     => __( 'This Field Has Only URL Selector And Shows Actual Input' ),
		'type'     => 'wp_link',
		'settings' => array(
			'title'      => false,
			'target'     => false,
			'show_input' => true,
			'example'    => false,
		),
	),
);
