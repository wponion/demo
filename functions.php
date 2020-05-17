<?php
if ( ! function_exists( 'wponion_demo_rand_theme' ) ) {
	/**
	 * @return mixed
	 */
	function wponion_demo_rand_theme() {
		$themes = array( 'wp', 'wp_modern', 'wp_lite', 'wc' );
		$rand   = rand( 1, count( $themes ) ) - 1;
		return ( isset( $themes[ $rand ] ) ) ? $themes[ $rand ] : $themes[0];
	}
}

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

if ( ! function_exists( 'wponion_demo_assets' ) ) {
	/**
	 * Registers WPOnion Demo Assets.
	 */
	function wponion_demo_assets() {
		wp_register_script( 'wponion-ajax-demo', plugin_dir_url( __FILE__ ) . '/assets/js/ajax-demo.js', array( 'wponion-core' ) );
		wp_enqueue_script( 'wponion-adminbar-demo', plugin_dir_url( __FILE__ ) . '/assets/js/admin-bar.js', array() );
		wp_enqueue_style( 'wponion-demo', plugin_dir_url( __FILE__ ) . '/assets/css/style.css', array( 'wponion-core' ) );
	}
}

if ( ! function_exists( 'wponion_highlight_string' ) ) {
	/**
	 * Highlights A Code.
	 *
	 * @param      $sting
	 * @param bool $append_pre
	 *
	 * @return bool|string|string
	 * @uses \highlight_string()
	 *
	 */
	function wponion_highlight_string( $sting, $append_pre = true ) {
		$sting = ( is_array( $sting ) ) ? var_export( $sting, true ) : $sting;
		$text  = highlight_string( '<?php ' . trim( $sting ), true );  // highlight_string() requires opening PHP tag or otherwise it will not colorize the text
		$text  = preg_replace( '|^\\<code\\>\\<span style\\="color\\: #[a-fA-F0-9]{0,6}"\\>|', '', trim( $text ), 1 );  // remove prefix
		$text  = preg_replace( '|\\</code\\>$|', '', $text, 1 );  // remove suffix 1
		$text  = preg_replace( '|\\</span\\>$|', '', trim( $text ), 1 );  // remove suffix 2
		$text  = preg_replace( '|^(\\<span style\\="color\\: #[a-fA-F0-9]{0,6}"\\>)(&lt;\\?php&nbsp;)(.*?)(\\</span\\>)|', '$1$3$4', trim( $text ) );  // remove custom added "<?php "
		return ( true === $append_pre ) ? '<pre class="wponion-debug-pre">' . $text . '</pre>' : $text;
	}
}