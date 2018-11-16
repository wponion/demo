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

global $wpof_page_fields_args;

wponion_metabox( array(
	'option_name'   => '_wponion_metabox_posts',
	'metabox_title' => __( 'Custom Post Option' ),
	'metabox_id'    => 'custom-post-option-by-wponion',
	'screens'       => array( 'post' ),
	'context'       => 'normal',
	'ajax'          => true,
), array(
	array(
		'name'   => 'page1',
		'fields' => array(
			array(
				'type'  => 'text',
				'title' => __( 'Text Field' ),
				'id'    => 'textfield',
			),
			array(
				'type'  => 'textarea',
				'title' => __( 'Textarea Field' ),
				'id'    => 'textarea',
			),
			array(
				'title'        => __( 'Style 3' ),
				'type'         => 'switcher',
				'id'           => 'switcher_3',
				'switch_style' => 'style-12',
			),
		),
	),
) );


wponion_metabox( array(
	'option_name'   => '_wponion_metabox_posts_side',
	'metabox_title' => __( 'Custom Post Option' ),
	'metabox_id'    => 'custom-post-option-by-wponion-2',
	'screens'       => array( 'post', 'page' ),
	'context'       => 'side',
	'ajax'          => true,
), array(
	array(
		'title'  => __( 'Some Title' ),
		'name'   => 'omg',
		'fields' => array(
			array(
				'type'    => 'content',
				'content' => __( 'This Metabox is shown in both Post & Page Post Types' ),
			),
			array(
				'type'    => 'image_select',
				'id'      => 'image_select',
				'options' => array(
					'image1' => 'http://s3.wponion.com/placeholder/75/1.jpg',
					'image2' => 'http://s3.wponion.com/placeholder/75/2.jpg',
					'image3' => 'http://s3.wponion.com/placeholder/75/3.jpg',
				),
			),
			array(
				'type'  => 'textarea',
				'title' => __( 'Textarea Field' ),
				'id'    => 'textarea',
			),
			array(
				'title'        => __( 'Style 3' ),
				'type'         => 'switcher',
				'id'           => 'switcher_3',
				'switch_style' => 'style-12',
			),
		),
	),
) );
wponion_metabox( array(
	'option_name'   => '_wponion_metabox_main_metabox',
	'metabox_title' => __( 'Custom Post/Page Option' ),
	'metabox_id'    => 'custom-post-option-by-wponion-3',
	'screens'       => array( 'post', 'page' ),
	'ajax'          => true,
), array(
	array(
		'title'  => __( 'Section 1' ),
		'name'   => 'section1',
		'icon'   => 'dashicons  dashicons-admin-generic',
		'fields' => array(
			array(
				'type'  => 'text',
				'title' => __( 'Text Field' ),
				'id'    => 'textfield',
			),
			array(
				'type'  => 'textarea',
				'title' => __( 'Textarea Field' ),
				'id'    => 'textarea',
			),
			array(
				'title'        => __( 'Style 3' ),
				'type'         => 'switcher',
				'id'           => 'switcher_3',
				'switch_style' => 'style-12',
			),
		),
	),
	array(
		'title'  => __( 'Section 2' ),
		'name'   => 'section2',
		'icon'   => 'dashicons  dashicons-admin-generic',
		'fields' => array(
			array(
				'type'  => 'color_picker',
				'title' => __( 'Color Picker' ),
				'id'    => 'color_picker',
			),
		),
	),
	array(
		'title'    => __( 'Page' ),
		'name'     => 'page',
		'icon'     => 'dashicons  dashicons-admin-generic',
		'sections' => array(
			array(
				'title'  => __( 'Section 1' ),
				'name'   => 'section1',
				'icon'   => 'dashicons  dashicons-admin-generic',
				'fields' => array(
					array(
						'type'  => 'text',
						'title' => __( 'Text Field' ),
						'id'    => 'page_section_textfield',
					),
					array(
						'type'  => 'textarea',
						'title' => __( 'Textarea Field' ),
						'id'    => 'page_section_textarea',
					),
					array(
						'title'        => __( 'Style 3' ),
						'type'         => 'switcher',
						'id'           => 'page_section_switcher_3',
						'switch_style' => 'style-12',
					),
				),
			),

			array(
				'title'  => __( 'Section 2' ),
				'name'   => 'section2',
				'icon'   => 'dashicons  dashicons-admin-generic',
				'fields' => array(
					array(
						'type'  => 'color_picker',
						'title' => __( 'Color Picker' ),
						'id'    => 'page_section_color_picker',
					),
					array(
						'type'  => 'icon_picker',
						'title' => __( 'Icon Picker' ),
						'id'    => 'page_section_icon_picker',
					),
				),
			),
		),
	),
) );


wponion_metabox( array(
	'option_name'   => '_wponion_metabox_custom_theme',
	'metabox_title' => __( 'Metabox in custom color' ),
	'metabox_id'    => 'custom-post-option-by-wponion-4',
	'screens'       => array( 'post', 'page' ),
	'theme_color'   => '#4393e1',
	'ajax'          => true,
), array(
	array(
		'title'  => __( 'Section 1' ),
		'name'   => 'section1',
		'icon'   => 'dashicons  dashicons-admin-generic',
		'fields' => array(
			array(
				'type'  => 'text',
				'title' => __( 'Text Field' ),
				'id'    => 'textfield',
			),
			array(
				'type'  => 'textarea',
				'title' => __( 'Textarea Field' ),
				'id'    => 'textarea',
			),
			array(
				'title'        => __( 'Style 3' ),
				'type'         => 'switcher',
				'id'           => 'switcher_3',
				'switch_style' => 'style-12',
			),
		),
	),
	array(
		'title'  => __( 'Section 2' ),
		'name'   => 'section2',
		'icon'   => 'dashicons  dashicons-admin-generic',
		'fields' => array(
			array(
				'type'  => 'color_picker',
				'title' => __( 'Color Picker' ),
				'id'    => 'color_picker',
			),
		),
	),
	array(
		'title'    => __( 'Page' ),
		'name'     => 'page',
		'icon'     => 'dashicons  dashicons-admin-generic',
		'sections' => array(
			array(
				'title'  => __( 'Section 1' ),
				'name'   => 'section1',
				'icon'   => 'dashicons  dashicons-admin-generic',
				'fields' => array(
					array(
						'type'  => 'text',
						'title' => __( 'Text Field' ),
						'id'    => 'page_section_textfield',
					),
					array(
						'type'  => 'textarea',
						'title' => __( 'Textarea Field' ),
						'id'    => 'page_section_textarea',
					),
					array(
						'title'        => __( 'Style 3' ),
						'type'         => 'switcher',
						'id'           => 'page_section_switcher_3',
						'switch_style' => 'style-12',
					),
				),
			),

			array(
				'title'  => __( 'Section 2' ),
				'name'   => 'section2',
				'icon'   => 'dashicons  dashicons-admin-generic',
				'fields' => array(
					array(
						'type'  => 'color_picker',
						'title' => __( 'Color Picker' ),
						'id'    => 'page_section_color_picker',
					),
					array(
						'type'  => 'icon_picker',
						'title' => __( 'Icon Picker' ),
						'id'    => 'page_section_icon_picker',
					),
				),
			),
		),
	),
) );

if ( wponion_is_debug() ) {
	wponion_metabox( array(
		'option_name'   => 'wponion_development_metabox_all_fields',
		'metabox_id'    => 'metabox_all_fields',
		'metabox_title' => __( 'WPOnion Metabox With All Options' ),
		'screens'       => array( 'post', 'page' ),
		'ajax'          => false,
	), $wpof_page_fields_args );

	foreach ( $wpof_page_fields_args as $data ) {
		if ( isset( $data['sections'] ) ) {
			foreach ( $data['sections'] as $sec ) {
				if ( isset( $sec['fields'] ) ) {
					$name = ( isset( $sec['name'] ) ) ? $sec['name'] : sanitize_title( $sec['title'] );
					wponion_metabox( array(
						'option_name'   => 'wponion_single_field_' . $name . '_side',
						'metabox_id'    => 'wponion_single_field_' . $name . '_side',
						'metabox_title' => 'WPOnion Field : ' . $sec['title'] . ' Side',
						'screens'       => array( 'posts' ),
						'context'       => 'side',
					), $sec['fields'] );

					wponion_metabox( array(
						'option_name'   => 'wponion_single_field_' .$name,
						'metabox_id'    => 'wponion_single_field_' . $name,
						'metabox_title' => 'WPOnion Field : ' . $sec['title'],
						'screens'       => array( 'posts' ),
					), $sec['fields'] );
				}
			}
		} elseif ( isset( $data['fields'] ) ) {
			wponion_metabox( array(
				'option_name'   => 'wponion_single_field_' . $data['name'] . '_side',
				'metabox_id'    => 'wponion_single_field_' . $data['name'] . '_side',
				'metabox_title' => 'WPOnion Field : ' . $data['title'] . ' Side',
				'screens'       => array( 'posts' ),
				'context'       => 'side',
			), $data['fields'] );
			wponion_metabox( array(
				'option_name'   => 'wponion_single_field_' . $data['name'],
				'metabox_id'    => 'wponion_single_field_' . $data['name'],
				'metabox_title' => 'WPOnion Field : ' . $data['title'],
				'screens'       => array( 'posts' ),
			), $data['fields'] );
		}
	}
}
