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


$instance = wponion_taxonomy( array(
	'option_name' => '_wponion_taxonomy',
	'taxonomy'    => array( 'category', 'post_tag' ),
), array(
	array(
		'title' => 'Taxonomy Field',
		'type'  => 'text',
		'id'    => 'taxonomy',
	),
	array(
		'title' => 'Taxonomy Field 2',
		'type'  => 'textarea',
		'id'    => 'taxonomy2',
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

if ( wponion_is_debug() ) {
	wponion_taxonomy( array(
		'option_name' => '_wponion_taxonomy_dev',
		'taxonomy'    => array( 'category', 'post_tag' ),
	), wponion_demo_get_all_fields( 'all' ) );
}
