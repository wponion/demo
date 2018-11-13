<?php
/**
 *
 * Project : wponion
 * Date : 13-11-2018
 * Time : 02:54 PM
 * File : woocommerce.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

wponion_woocommerce( array(
	'option_name' => '_wponion_woocommerce',
), array(
	array(
		'title'  => __( 'Custom' ),
		'name'   => 'custom',
		'group'  => 'general',
		'fields' => array(
			array(
				'id'    => 'text_1',
				'title' => __( 'Simple Text Field' ),
				'type'  => 'text',
			),
		),
	),

	array(
		'title'          => __( 'Custom2' ),
		'name'           => 'custom2',
		'group'          => 'tax',
		'is_variation'   => true,
		'only_variation' => true,
		'fields'         => array(
			array(
				'id'    => 'image',
				'title' => __( 'Image Selector' ),
				'type'  => 'image',
			),
		),
	),
) );