<?php
/**
 *
 * Project : wponion
 * Date : 11-11-2018
 * Time : 05:08 PM
 * File : clone.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'clone_text',
		'title' => __( 'Cloneable Text Field' ),
		'type'  => 'text',
		'clone' => true,
	),
	array(
		'id'    => 'clone_wp_editor',
		'title' => __( 'Cloneable WP Editor' ),
		'type'  => 'wp_editor',
		'clone' => true,
	),
	array(
		'id'    => 'clone_textarea',
		'title' => __( 'Cloneable Textarea' ),
		'desc'  => __( 'Configured With Custom Animation' ),

		'type'  => 'textarea',
		'clone' => array(
			'animations' => array(
				'show' => 'bounceIn animated faster',
				'hide' => 'bounceOut animated faster',
			),
		),
	),

	array(
		'id'    => 'clone_icon_picker',
		'title' => __( 'Cloneable Icon Picker' ),
		'type'  => 'icon_picker',
		'desc'  => __( 'This clone able field dose not have sort option' ),
		'clone' => array(
			'sort' => false,
		),
	),

	array(
		'id'    => 'clone_color_picker',
		'title' => __( 'Cloneable Color Picker' ),
		'type'  => 'color_picker',
		'desc'  => __( 'Limited to 3 clones and custom add button text' ),
		'clone' => array(
			'limit'      => 3,
			'error_msg'  => __( 'You Are Limited Only 3 Options' ),
			'add_button' => __( 'Create Color' ),
		),
	),
);
