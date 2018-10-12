<?php
/**
 *
 * Project : bullet-wp
 * Date : 28-07-2018
 * Time : 07:15 AM
 * File : settings.php
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


$instance = wponion_settings( array(
	'option_name'     => '_wponion_settings',
	'theme'           => 'modern',
	'is_single_page'  => false,
	'framework_title' => __( 'WPOnion Settings Demo' ),
	'framework_desc'  => __( 'This is a demo of WPOnion Settings module with all field types & it stores values in DB as <code>_wponion_settings</code>' ),
	'menu'            => array(
		'title'    => __( 'WPOnion' ),
		'slug'     => 'wponion',
		'submenus' => true,
	),
), array(
	array(
		'title'  => __( 'Features' ),
		'name'   => 'features',
		'icon'   => 'dashicons dashicons-admin-generic',
		'fields' => $wpof['features'],
	),

	array(
		'title'    => __( 'User Inputs' ),
		'name'     => 'userinputs',
		'icon'     => 'dashicons dashicons-admin-generic',
		'sections' => array(
			array(
				'title'  => __( 'Text' ),
				'name'   => 'text',
				'icon'   => 'dashicons dashicons-admin-generic',
				'fields' => $wpof['text'],
			),
			array(
				'title'  => __( 'Textarea' ),
				'name'   => 'textarea',
				'icon'   => 'dashicons dashicons-admin-generic',
				'fields' => $wpof['textarea'],
			),
			array(
				'title'  => __( 'Checkbox' ),
				'name'   => 'checkbox',
				'icon'   => 'dashicons dashicons-admin-generic',
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

	array(
		'title'    => __( 'Advanced UI' ),
		'name'     => 'advanced_ui',
		'sections' => array(
			array(
				'title'  => __( 'FieldSet' ),
				'name'   => 'fieldset',
				'fields' => $wpof['fieldset'],
			),

			array(
				'title'  => __( 'Accordion' ),
				'name'   => 'accordion',
				'fields' => $wpof['accordion'],
			),

			array(
				'title'  => __( 'Tab' ),
				'name'   => 'tab',
				'fields' => $wpof['tab'],
			),

			array(
				'title'  => __( 'Group' ),
				'name'   => 'group',
				'fields' => $wpof['group'],
			),
			array(
				'title'  => __( 'Cloner' ),
				'name'   => 'clone',
				'fields' => array(
					array(
						'title'      => __( 'Available Sender ID\'s' ),
						'type'       => 'text',
						'clone'      => array( 'sort' => false, ),
						'id'         => 'senderids',
						'desc_field' => __( 'You Can enter multiple sender ids and will allow you to set sender for each and every order message.' ),
					),
				),
			),
			array(
				'title'  => __( 'Group WPEditor' ),
				'name'   => 'clone-wpeditor',
				'fields' => array(
					array(
						'title'  => 'WP Editor Group',
						'id'     => 'group-wp-editor',
						'type'   => 'group',
						'fields' => array(
							array(
								'title'    => __( 'Admin SMS Template' ),
								'id'       => 'sms_admin_template',
								'desc'     => __( 'Write your custom message. When an order is create then you get this type of format message.' ),
								'type'     => 'wp_editor',
								'settings' => array(
									'editor_class' => 'wc_isms_sms_templates',
									'quicktags'   => false,
								),
							),
						),
					),
				),
			),
		),
	),

	array(
		'title'  => __( 'UI Fields' ),
		'name'   => 'uifields',
		'fields' => $wpof['uifields'],
	),
) );


