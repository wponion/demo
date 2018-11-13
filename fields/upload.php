<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 03:39 PM
 * File : upload.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'upload',
		'title' => __( 'Upload' ),
		'type'  => 'upload',
	),
	array(
		'id'         => 'upload_1',
		'title'      => __( 'Upload Images' ),
		'desc_field' => __( 'This field is customized to have custom label for button and primary class for upload button' ),
		'type'       => 'upload',
		'button'     => array(
			'label' => __( 'Upload Images' ),
			'class' => 'button button-primary',
		),
	),
	array(
		'id'         => 'upload_2',
		'title'      => __( 'Upload Frame Settings' ),
		'desc_field' => __( 'Click Upload button and see the frame content changes.' ),
		'type'       => 'upload',
		'settings'   => array(
			'upload_type'  => 'image',
			'frame_title'  => __( 'Upload Background Image' ),
			'insert_title' => __( 'Insert' ),
		),
	),
);
