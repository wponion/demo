<?php
/**
 *
 * Project : wponion
 * Date : 12-11-2018
 * Time : 06:13 AM
 * File : functions.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

if ( ! function_exists( 'wponion_field_files' ) ) {
	function wponion_field_files( $file ) {
		return include plugin_dir_path( __FILE__ ) . 'fields/' . $file;
	}
}

if ( ! function_exists( 'wponion_demo_get_all_fields' ) ) {
	/**
	 * @param string $without
	 *
	 * @return array
	 */
	function wponion_demo_get_all_fields( $without = array() ) {
		global $wpof;
		$exclude = array( 'full_tab', 'full_fieldset', 'full_accordion', 'full_group', 'wplisttable' );
		$without = is_array( $without ) ? $without : array( $without );
		if ( is_string( $without ) && 'all' === $without ) {
			$without = $exclude;
		}
		$return = array();
		foreach ( $wpof as $key => $val ) {
			if ( ! in_array( $key, $without ) && ! in_array( $key, $exclude ) ) {
				$return = array_merge( $return, $val );
			}
		}
		return $return;
	}
}

if ( ! function_exists( 'wponion_render_callback_menu' ) ) {
	/**
	 * Renders A Simple Callback.
	 */
	function wponion_render_callback_menu() {
		echo '<h2>' . __( 'Content From A Callback Function' ) . '</h2>';
	}
}

if ( ! function_exists( 'wponion_vc_map' ) ) {
	/**
	 * @param $args
	 */
	function wponion_vc_map( $args ) {
		vc_map( wp_parse_args( $args, array(
			'category' => __( 'WPOnion Demo', 'wponion-demo' ),
			'icon'     => plugin_dir_url( __FILE__ ) . 'icon-256x256.jpg',
		) ) );
	}
}

if ( ! function_exists( 'wponion_handle_vc_shortcode' ) ) {
	/**
	 * Visual Composer Shortcode Display Handler.
	 *
	 * @param $args
	 * @param $content
	 * @param $tag
	 *
	 * @return string
	 */
	function wponion_handle_vc_shortcode( $args, $content, $tag ) {
		$html   = '<h4 style="margin-bottom: 0;line-height: 0;">' . $tag . '</h4>';
		$args_o = var_export( $args, true );
		$code   = <<<PHPCODE
<?php
$args_o
?>
PHPCODE;
		$html   = $html . highlight_string( $code, true ) . '';
		return '<pre>' . str_replace( array( '<code>', '</code>' ), '', $html ) . '</pre>';
	}
}
