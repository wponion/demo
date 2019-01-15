<?php
/**
 *
 * Project : bullet-wp
 * Date : 30-07-2018
 * Time : 07:04 AM
 * File : fields.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package bullet-wp
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */
global $wpof, $wpof_page_fields_args;
$wpof                  = array();
$wpof_page_fields_args = array();

$wpof['basic_feature'] = wponion_field_files( 'basic_features.php' );
$wpof['text']          = wponion_field_files( 'text.php' );
$wpof['textarea']      = wponion_field_files( 'textarea.php' );
$wpof['checkbox']      = wponion_field_files( 'checkbox.php' );
$wpof['radio']         = wponion_field_files( 'radio.php' );
$wpof['select']        = wponion_field_files( 'select.php' );
$wpof['image_select']  = wponion_field_files( 'image_select.php' );
$wpof['color_palette'] = wponion_field_files( 'color_palette.php' );
$wpof['color_picker']  = wponion_field_files( 'color_picker.php' );
$wpof['switcher']      = wponion_field_files( 'switcher.php' );
$wpof['image']         = wponion_field_files( 'image.php' );
$wpof['background']    = wponion_field_files( 'background.php' );
$wpof['upload']        = wponion_field_files( 'upload.php' );
$wpof['key_value']     = wponion_field_files( 'key_value.php' );
$wpof['icon_picker']   = wponion_field_files( 'icon_picker.php' );
$wpof['wp_link']       = wponion_field_files( 'wp_link.php' );
$wpof['font_picker']   = wponion_field_files( 'font_picker.php' );
$wpof['gallery']       = wponion_field_files( 'gallery.php' );
$wpof['date_picker']   = wponion_field_files( 'date_picker.php' );
$wpof['wp_editor']     = wponion_field_files( 'wp_editor.php' );
$wpof['ui_fields']     = wponion_field_files( 'ui_fields.php' );
$wpof['ui_notices']    = wponion_field_files( 'ui_notices.php' );
$wpof['fieldset']      = wponion_field_files( 'fieldset.php' );
$wpof['accordion']     = wponion_field_files( 'accordion.php' );
$wpof['group']         = wponion_field_files( 'group.php' );
$wpof['tab']           = wponion_field_files( 'tab.php' );
$wpof['sorter']        = wponion_field_files( 'sorter.php' );
$wpof['clone']         = wponion_field_files( 'clone.php' );
$wpof['markdown']      = wponion_field_files( 'content_markdown.php' );
$wpof['validation-js'] = wponion_field_files( 'validation-js.php' );
$wpof['oembed']        = wponion_field_files( 'oembed.php' );
$wpof['wplisttable']   = wponion_field_files( 'wplisttable.php' );
$wpof['dependancy']    = wponion_field_files( 'dependancy.php' );
$wpof['query_args']    = wponion_field_files( 'query_args.php' );
$wpof['change_log']    = wponion_field_files( 'change_log.php' );
$wpof['button_set']    = wponion_field_files( 'button_set.php' );
$wpof['color_group']   = wponion_field_files( 'color_group.php' );
$wpof['link_color']    = wponion_field_files( 'link_color.php' );
$wpof['input_group']   = wponion_field_files( 'input_group.php' );
$wpof['spacing']       = wponion_field_files( 'spacing.php' );
$wpof['dimensions']    = wponion_field_files( 'dimensions.php' );

if ( wponion_is_debug() ) {
	$wpof['full_fieldset']  = array(
		array(
			'type'   => 'fieldset',
			'id'     => 'all_fields_fieldset',
			'title'  => __( 'ALL Fields fieldset' ),
			'fields' => wponion_demo_get_all_fields( 'fieldset' ),
		),
	);
	$wpof['full_tab']       = array(
		array(
			'type'   => 'tab',
			'id'     => 'all_fields_tab',
			'title'  => __( 'ALL Fields tab' ),
			'fields' => wponion_demo_get_all_fields( 'tab' ),
		),
	);
	$wpof['full_group']     = array(
		array(
			'type'   => 'group',
			'id'     => 'all_fields_group',
			'title'  => __( 'ALL Fields group' ),
			'fields' => wponion_demo_get_all_fields( 'group' ),
		),
	);
	$wpof['full_accordion'] = array(
		array(
			'type'   => 'accordion',
			'id'     => 'all_fields_accordion',
			'title'  => __( 'ALL Fields accordion' ),
			'fields' => wponion_demo_get_all_fields( 'accordion' ),
		),
	);
}


$wpof_page_fields_args = array(
	array(
		'title'  => __( 'Features' ),
		'name'   => 'features',
		'icon'   => 'dashicons dashicons-admin-generic',
		'fields' => $wpof['basic_feature'],
	),
	array(
		'title'    => __( 'User Inputs' ),
		'name'     => 'user-inputs',
		'icon'     => 'dashicons  dashicons-welcome-write-blog',
		'sections' => array(
			array(
				'title'  => __( 'Text' ),
				'icon'   => 'dashicons dashicons-editor-textcolor',
				'fields' => $wpof['text'],
			),
			array(
				'name'   => 'textarea',
				'title'  => __( 'Textarea' ),
				'icon'   => 'dashicons dashicons-editor-textcolor',
				'fields' => $wpof['textarea'],
			),
			array(
				'name'   => 'checkbox',
				'title'  => __( 'Checkbox' ),
				'icon'   => 'dashicons dashicons-editor-spellcheck',
				'fields' => $wpof['checkbox'],
			),
			array(
				'name'   => 'radio',
				'title'  => __( 'Radio' ),
				'icon'   => 'dashicons dashicons-editor-spellcheck',
				'fields' => $wpof['radio'],
			),
			array(
				'name'   => 'switcher',
				'title'  => __( 'Switcher' ),
				'icon'   => 'dashicons dashicons-yes',
				'fields' => $wpof['switcher'],
			),

			array(
				'name'   => 'button_set',
				'title'  => __( 'Button Set' ),
				'icon'   => 'dashicons dashicons-editor-kitchensink',
				'fields' => $wpof['button_set'],
			),
			array(
				'name'   => 'select',
				'title'  => __( 'Select' ),
				'icon'   => 'dashicons dashicons-admin-multisite',
				'fields' => $wpof['select'],
			),
			array(
				'name'   => 'image_select',
				'title'  => __( 'Image Select' ),
				'icon'   => 'dashicons dashicons-images-alt2',
				'fields' => $wpof['image_select'],
			),
			array(
				'name'   => 'color_palette',
				'title'  => __( 'Color Palette' ),
				'icon'   => 'dashicons dashicons-image-filter',
				'fields' => $wpof['color_palette'],
			),
			array(
				'name'   => 'background',
				'title'  => __( 'Background' ),
				'icon'   => 'dashicons dashicons-admin-appearance',
				'fields' => $wpof['background'],
			),
			array(
				'name'   => 'key_value',
				'title'  => __( 'Key Value Pair' ),
				'fields' => $wpof['key_value'],
				'icon'   => 'dashicons dashicons-admin-links',
			),
		),
	),
	array(
		'name'     => 'advanced-fields',
		'title'    => __( 'Advanced Fields' ),
		'icon'     => 'dashicons dashicons-admin-plugins',
		'sections' => array(
			array(
				'name'   => 'cloner',
				'title'  => __( 'Cloner' ),
				'fields' => $wpof['clone'],
			),
			array(
				'name'   => 'sorter',
				'title'  => __( 'Sorter' ),
				'fields' => $wpof['sorter'],
			),
			array(
				'name'   => 'input_group',
				'title'  => __( 'Input Group' ),
				'fields' => $wpof['input_group'],
			),
			array(
				'name'   => 'spacing',
				'title'  => __( 'Spacing' ),
				'fields' => $wpof['spacing'],
			),
			array(
				'name'   => 'dimensions',
				'title'  => __( 'Dimensions' ),
				'fields' => $wpof['dimensions'],
			),
			array(
				'name'   => 'fieldset',
				'title'  => __( 'Fieldset' ),
				'fields' => $wpof['fieldset'],
				'icon'   => 'dashicons-admin-settings dashicons',
			),
			array(
				'name'   => 'accordion',
				'title'  => __( 'Accordion' ),
				'fields' => $wpof['accordion'],
				'icon'   => 'dashicons-admin-settings dashicons',
			),
			array(
				'name'   => 'group',
				'title'  => __( 'Group' ),
				'fields' => $wpof['group'],
				'icon'   => 'dashicons-admin-settings dashicons',
			),
			/*array(
				'name'   => 'tab',
				'title'  => __( 'Tab' ),
				'fields' => $wpof['tab'],
				'icon'   => 'dashicons-admin-settings dashicons',
			),*/
		),
	),
	array(
		'title'    => __( 'Pickers' ),
		'name'     => 'pickers',
		'icon'     => 'dashicons dashicons-location',
		'sections' => array(

			array(
				'name'   => 'icon_picker',
				'title'  => __( 'Icon Picker' ),
				'icon'   => 'dashicons dashicons-admin-generic',
				'fields' => $wpof['icon_picker'],
			),
			array(
				'name'   => 'color_picker',
				'title'  => __( 'Color Picker' ),
				'icon'   => 'dashicons dashicons-admin-appearance',
				'fields' => $wpof['color_picker'],
			),
			array(
				'name'   => 'color_group',
				'title'  => __( 'Color Group' ),
				'icon'   => 'dashicons dashicons-admin-appearance',
				'fields' => $wpof['color_group'],
			),
			array(
				'name'   => 'link_color',
				'title'  => __( 'Link Color' ),
				'icon'   => 'dashicons dashicons-admin-appearance',
				'fields' => $wpof['link_color'],
			),
			array(
				'name'   => 'font_picker',
				'icon'   => 'dashicons dashicons-admin-generic',
				'title'  => __( 'Font Picker' ),
				'fields' => $wpof['font_picker'],
			),
			array(
				'name'   => 'date_picker',
				'title'  => __( 'Date Picker' ),
				'icon'   => 'dashicons dashicons-calendar-alt',
				'fields' => $wpof['date_picker'],
			),
		),
	),
	array(
		'title'    => __( 'WP Fields' ),
		'name'     => 'wp-fields',
		'icon'     => 'dashicons dashicons-wordpress',
		'sections' => array(
			array(
				'name'   => 'image',
				'title'  => __( 'Image' ),
				'icon'   => 'dashicons dashicons-format-image',
				'fields' => $wpof['image'],
			),
			array(
				'name'   => 'gallery',
				'title'  => __( 'Gallery' ),
				'icon'   => 'dashicons dashicons-images-alt',
				'fields' => $wpof['gallery'],
			),
			array(
				'name'   => 'upload',
				'title'  => __( 'Upload' ),
				'icon'   => 'dashicons dashicons-upload',
				'fields' => $wpof['upload'],
			),
			array(
				'name'   => 'wp_editor',
				'icon'   => 'dashicons dashicons-edit',
				'title'  => __( 'WP Editor' ),
				'fields' => $wpof['wp_editor'],
			),
			array(
				'name'   => 'wp_link',
				'icon'   => 'dashicons dashicons-admin-links',
				'title'  => __( 'WP Link' ),
				'fields' => $wpof['wp_link'],
			),
			array(
				'name'   => 'oembed',
				'icon'   => 'dashicons dashicons-welcome-view-site',
				'title'  => __( 'OEmbed' ),
				'fields' => $wpof['oembed'],
			),
			/*array(
				'name'   => 'wp-list-table',
				'icon'   => 'dashicons dashicons-welcome-view-site',
				'title'  => __( 'WP List Table' ),
				'fields' => $wpof['wplisttable'],
			),*/

		),
	),
	array(
		'name'     => 'ui-fields',
		'title'    => __( 'UI Fields' ),
		'sections' => array(
			array(
				'name'   => 'contents',
				'title'  => __( 'Heading & Content' ),
				'fields' => $wpof['ui_fields'],
			),
			array(
				'name'   => 'notices',
				'title'  => __( 'UI Notices' ),
				'fields' => $wpof['ui_notices'],
			),
			array(
				'name'   => 'markdown',
				'title'  => __( 'Markdown Contents' ),
				'fields' => $wpof['markdown'],
			),
		),
		'icon'     => 'dashicons dashicons-building',
	),
	array(
		'name'     => 'others',
		'title'    => __( 'Other Features' ),
		'sections' => array(
			array(
				'name'   => 'validation-js',
				'title'  => __( 'JS Validation' ),
				'fields' => $wpof['validation-js'],
			),

			array(
				'name'   => 'dependancy',
				'title'  => __( 'Input dependancy' ),
				'fields' => $wpof['dependancy'],
			),
			array(
				'name'   => 'query_args',
				'title'  => __( 'Query Args' ),
				'fields' => $wpof['query_args'],
			),
		),
	),
	array(
		'name'           => 'sysinfo',
		'title'          => __( 'Sysinfo' ),
		'callback'       => 'wponion_sysinfo',
		'reports'        => array(/*'Server Information' => false,*/ ),
		'custom_reports' => function () {
			return array(
				__( 'Custom Acc Title' ) => array(
					__( 'Loaded Path' ) => WPONION_PATH,
				),
			);
		},
	),
	array(
		'name'   => 'changelog',
		'title'  => __( 'Change Log' ),
		'fields' => $wpof['change_log'],
	),
	array(
		'name'     => 'custom-1',
		'title'    => __( 'Custom Page' ),
		'show_wp'  => true,
		'callback' => 'wponion_render_callback_menu',
	),
	array(
		'name'     => 'custom-2',
		'title'    => __( 'Custom Page 2' ),
		'sections' => array(
			array(
				'name'     => 'section1',
				'title'    => __( 'Section 1' ),
				'callback' => 'wponion_render_callback_menu',
			),
			array(
				'name'     => 'section2',
				'title'    => __( 'Section 2' ),
				'callback' => 'wponion_render_callback_menu',
			),
			array(
				'name'     => 'section3',
				'title'    => __( 'Section 3' ),
				'callback' => 'wponion_render_callback_menu',
			),
		),
	),
	array(
		'title' => __( 'Support' ),
		'icon'  => 'dashicons-info dashicons',
		'href'  => 'https://github.com/wponion/',
	),
);
