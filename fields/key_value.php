<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 06:11 PM
 * File : key_value.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'key_value',
		'title' => __( 'Key Value Pair' ),
		'type'  => 'key_value',
	),
	array(
		'id'            => 'key_value_1',
		'title'         => __( 'Button Customized' ),
		'type'          => 'key_value',
		'add_button'    => __( '+' ),
		'remove_button' => __( 'DELETE' ),
	),
	array(
		'id'          => 'key_value_2',
		'title'       => __( 'Input Customized' ),
		'type'        => 'key_value',
		'key_input'   => array(
			'placeholder' => __( 'Enter Your Key' ),
			'prefix'      => '<i class="dashicons-text dashicons"></i>',
		),
		'value_input' => array(
			'placeholder' => __( 'Enter Your Value' ),
			'prefix'      => '$',
			'surfix'      => 'USD',
		),
	),
	array(
		'id'        => 'key_value_limited',
		'title'     => __( 'Key Value Pair With limit for 3' ),
		'type'      => 'key_value',
		'limit'     => 3,
		'error_msg' => __( 'Only 3 Sets of data are allowed' ),
	),
);
