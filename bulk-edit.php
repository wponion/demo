<?php
/**
 *
 * Project : wponion
 * Date : 18-11-2018
 * Time : 02:21 PM
 * File : bulk-edit.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

wponion_bulk_edit( array(
	'option_name' => '_wponion_metabox_posts',
	'post_type'   => array( 'post' ),
	'column'      => 'custom-column-1',
), array(
	array(
		'type'    => 'subheading',
		'content' => __( 'Custom Post Option Metabox' ),
	),
	array(
		'title'        => __( 'Style 3' ),
		'type'         => 'switcher',
		'id'           => 'switcher_3',
		'switch_style' => 'style-12',
	),
) );
