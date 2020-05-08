<?php


wponion_admin_page( array(
	'menu_title' => __( 'Admin Notice' ),
	'page_title' => __( 'Admin Notice' ),
	'submenu'    => 'wponion-demo',
	'menu_slug'  => 'wpo-admin-notice-demo',
	'on_load'    => 'wponion_admin_notice_demo',
) );


function wponion_admin_notice_demo() {
	if ( ( defined( 'DOING_AJAX' ) && false === DOING_AJAX ) || ! defined( 'DOING_AJAX' ) ) {
		$content = '<pre style="margin: 0 auto;padding: 20px;background: #eaeaea;border: 1px solid #ccc;text-align: center;font-size: 17px;">';
		$content .= __( 'WPOnion Admin Notice Module Has A Lots Useful Arguments . please refer https://docs.wponion.com/modules/admin-notice for more information' );
		$content .= '</pre>';
		wponion_success_admin_notice( $content );

		wponion_success_admin_notice( 'Simple Success Notice', 'Notice With A Title' );
		wponion_success_admin_notice( 'Simple Success Notice' );
		wponion_success_admin_notice( 'Default Large Success Notice', null, array( 'large' => true ) );
		wponion_success_admin_notice( 'V2 Simple Success Notice', 'Notice With A Title', array( 'alt' => true ) );
		wponion_success_admin_notice( 'V2 Simple Success Notice', null, array( 'alt' => true ) );
		wponion_success_admin_notice( 'V2 Large Success Notice', null, array( 'alt' => true, 'large' => true ) );

		wponion_info_admin_notice( 'Simple Info Notice', 'Notice With A Title' );
		wponion_info_admin_notice( 'Simple Info Notice' );
		wponion_info_admin_notice( 'Default Large Info Notice', null, array( 'large' => true ) );
		wponion_info_admin_notice( 'V2 Simple Info Notice', 'Notice With A Title', array( 'alt' => true ) );
		wponion_info_admin_notice( 'V2 Simple Info Notice', null, array( 'alt' => true ) );
		wponion_info_admin_notice( 'V2 Large Info Notice', null, array( 'alt' => true, 'large' => true ) );

		wponion_warning_admin_notice( 'Simple Warning Notice', 'Notice With A Title' );
		wponion_warning_admin_notice( 'Simple Warning Notice' );
		wponion_warning_admin_notice( 'Default Large Warning Notice', null, array( 'large' => true ) );
		wponion_warning_admin_notice( 'V2 Simple Warning Notice', 'Notice With A Title', array( 'alt' => true ) );
		wponion_warning_admin_notice( 'V2 Simple Warning Notice', null, array( 'alt' => true ) );
		wponion_warning_admin_notice( 'V2 Large Warning Notice', null, array( 'alt' => true, 'large' => true ) );

		wponion_error_admin_notice( 'Simple Error Notice', 'Notice With A Title' );
		wponion_error_admin_notice( 'Simple Error Notice' );
		wponion_error_admin_notice( 'Default Large Error Notice', null, array( 'large' => true ) );
		wponion_error_admin_notice( 'V2 Simple Error Notice', 'Notice With A Title', array( 'alt' => true ) );
		wponion_error_admin_notice( 'V2 Simple Error Notice', null, array( 'alt' => true ) );
		wponion_error_admin_notice( 'V2 Large Error Notice', null, array( 'alt' => true, 'large' => true ) );

		wponion_upgrade_admin_notice( 'Simple Upgrade Notice' );
		wponion_upgrade_admin_notice( 'Simple Upgrade Notice', 'Upgrade With A Title' );

		$notice = wponion_admin_notice( 'success', 'Simple Sticky Notice <p><button class="button button-secondary wpo-stick-dismiss">Close & Remove Notice</button></p>', '' );
		$notice->set_sticky( true );
	}
}
