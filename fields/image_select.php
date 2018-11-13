<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 04:31 PM
 * File : image_select.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'      => 'image_select_checkbox',
		'title'   => __( 'Image Select' ),
		'desc'    => __( 'You can select multiple images' ),
		'type'    => 'image_select',
		'options' => array(
			'image1' => 'https://s3.wponion.com/placeholder/75/1.jpg',
			'image2' => 'https://s3.wponion.com/placeholder/75/2.jpg',
			'image3' => 'https://s3.wponion.com/placeholder/75/3.jpg',
			'image4' => 'https://s3.wponion.com/placeholder/75/4.jpg',
			'image5' => 'https://s3.wponion.com/placeholder/75/5.jpg',
		),
	),
	array(
		'id'         => 'image_select_radio',
		'image_type' => 'radio',
		'title'      => __( 'Image Select' ),
		'desc'       => __( 'You can select Only 1 image' ),
		'type'       => 'image_select',
		'options'    => array(
			'image6'  => 'https://s3.wponion.com/placeholder/75/6.jpg',
			'image7'  => 'https://s3.wponion.com/placeholder/75/7.jpg',
			'image8'  => 'https://s3.wponion.com/placeholder/75/8.jpg',
			'image9'  => 'https://s3.wponion.com/placeholder/75/9.jpg',
			'image10' => 'https://s3.wponion.com/placeholder/75/10.jpg',
		),
	),
	array(
		'id'      => 'image_select_group',
		'title'   => __( 'Image Select' ),
		'desc'    => __( 'You can select Multiple images per group' ),
		'type'    => 'image_select',
		'options' => array(
			__( 'Group 1' ) => array(
				'image1' => 'https://s3.wponion.com/placeholder/100/1.jpg',
				'image2' => 'https://s3.wponion.com/placeholder/100/2.jpg',
				'image3' => 'https://s3.wponion.com/placeholder/100/3.jpg',
				'image4' => 'https://s3.wponion.com/placeholder/100/4.jpg',
				'image5' => 'https://s3.wponion.com/placeholder/100/5.jpg',
			),
			__( 'Group 2' ) => array(
				'image6'  => 'https://s3.wponion.com/placeholder/100/6.jpg',
				'image7'  => 'https://s3.wponion.com/placeholder/100/7.jpg',
				'image8'  => 'https://s3.wponion.com/placeholder/100/8.jpg',
				'image9'  => 'https://s3.wponion.com/placeholder/100/9.jpg',
				'image10' => 'https://s3.wponion.com/placeholder/100/10.jpg',
			),
		),
	),
	array(
		'id'         => 'image_select_group_radio',
		'image_type' => 'radio',
		'title'      => __( 'Image Select' ),
		'desc'       => __( 'You can select 1 image per group' ),
		'type'       => 'image_select',
		'options'    => array(
			__( 'Group 3' ) => array(
				'image11' => 'https://s3.wponion.com/placeholder/100/11.jpg',
				'image12' => 'https://s3.wponion.com/placeholder/100/12.jpg',
				'image13' => 'https://s3.wponion.com/placeholder/100/13.jpg',
				'image14' => 'https://s3.wponion.com/placeholder/100/14.jpg',
				'image15' => 'https://s3.wponion.com/placeholder/100/15.jpg',
			),
			__( 'Group 4' ) => array(
				'image16' => 'https://s3.wponion.com/placeholder/100/16.jpg',
				'image17' => 'https://s3.wponion.com/placeholder/100/17.jpg',
				'image18' => 'https://s3.wponion.com/placeholder/100/18.jpg',
				'image19' => 'https://s3.wponion.com/placeholder/100/19.jpg',
				'image20' => 'https://s3.wponion.com/placeholder/100/20.jpg',
			),
		),
	),

	array(
		'content' => __( 'Improved Options' ),
		'type'    => 'subheading',
	),

	array(
		'id'         => 'image_select_improve_options',
		'image_type' => 'radio',
		'title'      => __( 'Image Select' ),
		'type'       => 'image_select',
		'options'    => array(
			'image1' => array(
				'label'    => 'https://s3.wponion.com/placeholder/250/1.jpg',
				'disabled' => true,
			),
			'image2' => array(
				'label'   => 'https://s3.wponion.com/placeholder/250/2.jpg',
				'tooltip' => __( 'ToolTip Content Here...' ),
			),
			'image3' => array(
				'label'   => 'https://s3.wponion.com/placeholder/250/3.jpg',
				'tooltip' => 'https://s3.wponion.com/placeholder/500/1.gif',
			),
			'image4' => array(
				'label'   => 'https://s3.wponion.com/placeholder/250/4.jpg',
				'tooltip' => 'https://s3.wponion.com/placeholder/75/1.gif',
			),
		),
	),

);
