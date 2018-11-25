<?php
/**
 *
 * Project : wponion
 * Date : 13-11-2018
 * Time : 06:38 PM
 * File : widgets.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

if ( class_exists( '\WPOnion\WP_Widget' ) ) {
	/**
	 * Class WPOnion_Demo_Widget
	 *
	 * @author Varun Sridharan <varunsridharan23@gmail.com>
	 * @since 1.0
	 */
	class WPOnion_Demo_Widget extends \WPOnion\WP_Widget {
		/**
		 * WPOnion_Demo_Widget constructor.
		 */
		public function __construct() {
			parent::__construct( 'wponion-demo-widget', __( 'WPOnion Demo Widget' ) );
		}

		/**
		 * @return array
		 */
		public function fields() {
			return array(
				array(
					'title'    => __( 'Text Field' ),
					'type'     => 'text',
					'id'       => 'text',
					'validate' => 'wponion_is_url',
				),
				array(
					'title' => __( 'Icon Picker' ),
					'type'  => 'icon_picker',
					'id'    => 'icon',
				),
			);
		}
	}

	register_widget( 'WPOnion_Demo_Widget' );
}
