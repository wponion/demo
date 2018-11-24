<?php
/**
 *
 * Project : bullet-wp
 * Date : 06-08-2018
 * Time : 11:51 AM
 * File : user_profile.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package bullet-wp
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

wponion_user_profile( array(
	'heading'     => __( 'Custom Profile Fields As Metabox' ),
	'option_name' => '_wponion_user_profile_1',
	'metabox'     => __( 'WPOnion User Profile Demo' ),
), array(
	array(
		'title'  => 'Page 1',
		'name'   => 'page1',
		'fields' => array(
			array(
				'title' => 'Profile Field',
				'type'  => 'text',
				'id'    => 'profile',
			),
			array(
				'title' => 'Profile Field 2',
				'type'  => 'textarea',
				'id'    => 'profile2',
			),
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
		),
	),
) );

wponion_user_profile( array(
	'heading'     => __( 'Custom Profile Fields' ),
	'option_name' => '_wponion_user_profile',
), array(
	array(
		'title' => 'Profile Field',
		'type'  => 'text',
		'id'    => 'profile',
	),
	array(
		'title' => 'Profile Field 2',
		'type'  => 'textarea',
		'id'    => 'profile2',
	),
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
) );
