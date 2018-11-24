<?php
/**
 *
 * Project : wponion
 * Date : 24-11-2018
 * Time : 01:20 PM
 * File : nav_menu.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

wponion_nav_menu( array( 'option_name' => '_wponion_nav_menu' ), array(
	array(
		'title'       => __( 'Menu Hover Name' ),
		'type'        => 'text',
		'js_validate' => 'required',
		'id'          => 'hover_text',
	),
	array(
		'title' => __( 'Icon' ),
		'type'  => 'icon_picker',
		'id'    => 'icon',
	),
) );
