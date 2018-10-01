<?php
/**
 *
 * Project : bullet-wp
 * Date : 06-08-2018
 * Time : 11:58 AM
 * File : metabox.php
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

$instance = wponion_metabox( array(
	'metabox_title' => __( 'WPOnion : Only Fields' ),
	'metabox_id'    => 'wponion_only_fields',
	'screens'       => 'post',
	'context'       => 'normal',
	'theme_color'   => false,
	'ajax'          => true,
	'option_name'   => '_wponion_metabox_only_fields',
), $wpof['features'] );

$instance = wponion_metabox( array(
	'metabox_title' => __( 'WPOnion : Fields' ),
	'metabox_id'    => 'wponion_group_fields',
	'screens'       => 'post',
	'context'       => 'normal',
	'ajax'          => true,
	'option_name'   => '_wponion_metabox_group_fields',
), array(
	array(
		'title'  => __( 'Features' ),
		'name'   => 'features',
		'fields' => $wpof['features'],
	),

	array(
		'title'    => __( 'User Inputs' ),
		'name'     => 'userinputs',
		'sections' => array(
			array(
				'title'  => __( 'Text' ),
				'name'   => 'text',
				'fields' => $wpof['text'],
			),
			array(
				'title'  => __( 'Textarea' ),
				'name'   => 'textarea',
				'fields' => $wpof['textarea'],
			),
			array(
				'title'  => __( 'Checkbox' ),
				'name'   => 'checkbox',
				'fields' => $wpof['checkbox'],
			),
			array(
				'title'  => __( 'Radio' ),
				'name'   => 'radio',
				'fields' => $wpof['radio'],
			),
			array(
				'title'  => __( 'Select' ),
				'name'   => 'select',
				'fields' => $wpof['select'],
			),
			array(
				'title'  => __( 'Background' ),
				'name'   => 'background',
				'fields' => $wpof['background'],
			),
			array(
				'title'  => __( 'Upload' ),
				'name'   => 'upload',
				'fields' => $wpof['upload'],
			),
			array(
				'title'  => __( 'Icon Picker' ),
				'name'   => 'icon_picker',
				'fields' => $wpof['icon_picker'],
			),
			array(
				'title'  => __( 'Font Picker' ),
				'name'   => 'font_picker',
				'fields' => $wpof['font_picker'],
			),
			array(
				'title'  => __( 'Image Select' ),
				'name'   => 'image_select',
				'fields' => $wpof['image_select'],
			),
			array(
				'title'  => __( 'WP Links' ),
				'name'   => 'wp_links',
				'fields' => $wpof['wp_links'],
			),
			array(
				'title'  => __( 'Switcher' ),
				'name'   => 'switcher',
				'fields' => $wpof['switcher'],
			),
			array(
				'title'  => __( 'Key Value' ),
				'name'   => 'key_value',
				'fields' => $wpof['key_value'],
			),
			array(
				'title'  => __( 'Color Picker & Palette' ),
				'name'   => 'color_picker_palette',
				'fields' => $wpof['color_picker_palette'],
			),
			array(
				'title'  => __( 'Image & Gallery' ),
				'name'   => 'image_picker',
				'fields' => $wpof['image_picker'],
			),
			array(
				'title'  => __( 'Date Picker' ),
				'name'   => 'date_picker',
				'fields' => $wpof['date_picker'],
			),
			array(
				'title'  => __( 'WP Editor' ),
				'name'   => 'wp_editor',
				'fields' => $wpof['wp_editor'],
			),
		),
	),
) );

foreach ( $wpof as $_key => $_fields ) {
	$instance = wponion_metabox( array(
		'metabox_title' => __( 'WPOnion : ' ) . $_key,
		'metabox_id'    => 'wponion_only_fields_' . $_key,
		'screens'       => 'post',
		'context'       => 'side',
		'theme_color'   => false,
		'ajax'          => true,
		'option_name'   => '_wponion_metabox_only_fields_' . $_key,
	), $_fields );
}