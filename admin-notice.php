<?php
/**
 * Created by PhpStorm.
 * User: varun
 * Date: 28-11-2018
 * Time: 06:47 PM
 */

if ( isset( $_REQUEST['page'] ) && 'custom-wponion-page' === $_REQUEST['page'] ) {
	wponion_success_admin_notice( 'Success Notice', false, array( 'screens' => array( 'dashboard_page_custom-wponion-page' ) ) );
	wponion_info_admin_notice( 'Info Notice', false, array( 'screens' => array( 'dashboard_page_custom-wponion-page' ) ) );
	wponion_warning_admin_notice( 'Warning Notice', false, array( 'screens' => array( 'dashboard_page_custom-wponion-page' ) ) );
	wponion_error_admin_notice( 'error Notice', false, array( 'screens' => array( 'dashboard_page_custom-wponion-page' ) ) );
	wponion_error_admin_notice( 'error Notice', false, array(

		'alt'     => true,
		'screens' => array(
			'dashboard_page_custom-wponion-page',
		),
	) );
	wponion_upgrade_admin_notice( 'Upgrade Notice', false, array( 'screens' => array( 'dashboard_page_custom-wponion-page' ) ) );
}