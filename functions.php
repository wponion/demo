<?php
if ( ! function_exists( 'wponion_demo_dev' ) ) {
	/**
	 * Checks if Demo Dev mode enabled.
	 *
	 * @return bool
	 */
	function wponion_demo_dev() {
		return ( defined( 'WPONION_DEMO_DEV' ) && true === WPONION_DEV_MODE );
	}
}

if ( ! function_exists( 'wponion_field_file' ) ) {
	/**
	 * Loads Fields File.
	 *
	 * @param $file
	 *
	 * @return mixed
	 */
	function wponion_field_file( $file ) {
		return include plugin_dir_path( __FILE__ ) . 'fields/' . $file;
	}
}
