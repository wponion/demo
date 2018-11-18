<?php
/**
 *
 * Project : wponion
 * Date : 18-11-2018
 * Time : 01:47 PM
 * File : quick-edit.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

wponion_quick_edit( array(
	'option_name' => '_wponion_metabox_posts',
	'post_type'   => array( 'post' ),
	'column'      => 'custom-column-1',
), array(
	array(
		'type'    => 'subheading',
		'content' => __( 'Custom Post Option Metabox' ),
	),
	array(
		'type'  => 'text',
		'title' => __( 'Text Field' ),
		'id'    => 'textfield',
	),
) );