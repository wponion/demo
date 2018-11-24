<?php
/**
 *
 * Project : bullet-wp
 * Date : 06-08-2018
 * Time : 11:19 AM
 * File : taxonomy.php
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

wponion_taxonomy( array(
	'option_name' => '_wponion_taxonomy_1',
	'metabox'     => __( 'WPOnion Taxonomy Metabox' ),
	'theme'       => 'fresh',
	'taxonomy'    => array( 'category', 'post_tag' ),
), array(
	array(
		'name'   => 'page1',
		'title'  => __( 'Page Config' ),
		'fields' => array(
			array(
				'title' => __( 'Show Heading' ),
				'id'    => 'show_heading',
				'type'  => 'switcher',
			),
			array(
				'id'         => 'heading_text',
				'title'      => __( 'Heading Text' ),
				'type'       => 'text',
				'dependency' => array( 'show_heading', '==', 'true' ),
			),
		),
	),
	array(
		'name'   => 'page2',
		'title'  => __( 'Layout Config' ),
		'fields' => array(
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

wponion_taxonomy( array(
	'option_name' => '_wponion_taxonomy_2',
	'metabox'     => false,
	'theme'       => 'wp',
	'taxonomy'    => array( 'category', 'post_tag' ),
), array(
	array(
		'id'    => 'featured_image',
		'type'  => 'image',
		'title' => __( 'Term Image' ),
	),
) );
