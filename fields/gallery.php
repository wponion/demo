<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 06:24 AM
 * File : gallery.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */
return array(
	array(
		'id'         => 'gallery',
		'type'       => 'gallery',
		'title'      => __( 'Gallery' ),
		'desc_field' => '1. Click on the image to view full image.<br/> 2. Click & Drag Image to sort the listing',
	),
	array(
		'id'    => 'gallery_no_sort',
		'type'  => 'gallery',
		'title' => __( 'No Sort' ),
		'sort'  => false,
	),
	array(
		'id'    => 'gallery_no_custom_size_1',
		'type'  => 'gallery',
		'title' => __( 'Custom Listing Size' ),
		'size'  => 40,
	),
);
