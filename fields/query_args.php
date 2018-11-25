<?php
/**
 *
 * Project : wponion
 * Date : 25-11-2018
 * Time : 06:33 AM
 * File : query_args.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'type'    => 'notice_success',
		'content' => '<code>query_args</code> Argument Will Work Along With Most Field Types such as (select,radio,checkbox)',
	),

	array(
		'type'    => 'subheading',
		'content' => __( 'Post Types , Taxonomies & Users From DB' ),
	),
	array(
		'type'    => 'select',
		'title'   => __( 'Pages' ),
		'options' => 'page',
	),
	array(
		'type'    => 'checkbox',
		'title'   => __( 'Posts' ),
		'options' => 'posts',
	),
	array(
		'type'    => 'radio',
		'title'   => __( 'Categories' ),
		'options' => 'category',
	),
	array(
		'type'    => 'select',
		'title'   => __( 'Tags' ),
		'options' => 'tags',
	),
	array(
		'type'    => 'select',
		'title'   => __( 'WP Users' ),
		'options' => 'users',
	),
	array(
		'type'    => 'subheading',
		'content' => __( 'WP Elements' ),
	),
	array(
		'type'    => 'select',
		'title'   => __( 'WP Menus.' ),
		'options' => 'menus',
	),
	array(
		'type'    => 'select',
		'title'   => __( 'Sidebars.' ),
		'options' => 'sidebars',
	),
	array(
		'type'    => 'select',
		'title'   => __( 'Menu Locations' ),
		'options' => 'menu_location',
	),


	array(
		'type'    => 'subheading',
		'content' => __( 'General Data' ),
	),
	array(
		'type'    => 'select',
		'title'   => __( 'Currency.' ),
		'options' => 'currency',
	),
	array(
		'type'    => 'select',
		'title'   => __( 'Currency Symbol' ),
		'options' => 'currency_symbol',
	),

	array(
		'type'    => 'subheading',
		'content' => __( 'Customizable Options' ),
	),
	array(
		'type'       => 'select',
		'options'    => 'pages',
		'title'      => __( 'Lists All Pages With IDS.' ),
		'desc_field' => __( 'This Field is customized to show output as <code>#PAGE_ID : PAGE_TITLE</code>' ),
		'query_args' => array(
			'option_label' => '#[ID] : [post_title]',
		),
	),
);
