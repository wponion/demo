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
global $wpof, $wpof_page_fields_args;

$settings_fields = $wpof_page_fields_args;

if ( wponion_is_debug() ) {
	$settings_fields[] = array(
		'title'    => __( 'Development' ),
		'name'     => 'development',
		'sections' => array(
			array(
				'name'   => 'all_fieldset',
				'title'  => __( 'ALL fieldset' ),
				'fields' => $wpof['full_fieldset'],
			),
			array(
				'name'   => 'all_accordion',
				'title'  => __( 'ALL accordion' ),
				'fields' => $wpof['full_accordion'],
			),
			array(
				'name'   => 'all_group',
				'title'  => __( 'ALL group' ),
				'fields' => $wpof['full_group'],
			),
			array(
				'name'   => 'all_tab',
				'title'  => __( 'ALL tab' ),
				'fields' => $wpof['full_tab'],
			),
		),
	);
}

wponion_network_settings( array(
	'framework_title' => __( 'Fresh Theme Network' ),
	'option_name'     => '_wponion_network',
	'theme'           => 'fresh',
	'menu'            => array(
		'menu_title' => __( 'Network WPOnion' ),
		'menu_slug'  => 'network-wponion',
		'submenu'    => false,
	),
), array(
	array(
		'name'     => 'validation',
		'title'    => __( 'Input Validations' ),
		'sections' => array(
			array(
				'name'   => 'validation-js',
				'title'  => __( 'JS Validation' ),
				'fields' => $wpof['basic_feature'],
			),
		),
	),
) );

$instance = wponion_settings( array(
	'framework_title' => __( 'Fresh Theme Demo' ),
	'framework_desc'  => __( 'This is a demo of WPOnion Settings module with all field types & it stores values in DB as <code>_wponion_settings</code>' ),
	'option_name'     => '_wponion_settings',
	'plugin_id'       => 'wponion_demo_plugin',
	'theme'           => 'fresh',
	'is_single_page'  => false,
	'menu'            => array(
		'menu_title' => __( 'WPOnion' ),
		'menu_slug'  => 'wponion-fresh-theme',
		'submenu'    => false,
	),
	'extra_css'       => array(), // An Array of CSS To be loaded in settings page.
	'extra_js'        => array(), // An Array of JS To be loaded in settings page.
), $settings_fields );
