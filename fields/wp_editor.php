<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 07:49 AM
 * File : wp_editor.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'wp_editor',
		'title' => __( 'WP Editor' ),
		'type'  => 'wp_editor',
	),
	array(
		'id'       => 'wp_editor_no_media',
		'title'    => __( 'WP Editor (NO Media)' ),
		'type'     => 'wp_editor',
		'settings' => array(
			'media_buttons' => false,
		),
	),
);
