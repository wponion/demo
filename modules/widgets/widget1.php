<?php

if ( class_exists( '\WPOnion\WP\Widget' ) && ! class_exists( 'WPOnion_Widget_Example_1' ) ) {
	/**
	 * Class WPOnion_Widget_Example_1
	 *
	 * @author Varun Sridharan <varunsridharan23@gmail.com>
	 * @since 1.0
	 */
	class WPOnion_Widget_Example_1 extends \WPOnion\WP\Widget {
		/**
		 * WPOnion_Widget_Example_1 constructor.
		 */
		public function __construct() {
			parent::__construct( 'wponion-widget-1', __( 'WPOnion Widget Example 1' ), array(
				'description' => __( ' A description for widget example 1 ' ),
			) );
		}

		/**
		 * @return array|\WPO\Builder|\WPO\Container|\WPO\Field
		 */
		public function fields() {
			$builder = wponion_builder();
			$builder->text( 'textfield', __( 'Text' ) )
				->style( 'width:100%;' );
			$builder->text( 'textfield2', __( 'Text' ) )
				->style( 'width:100%;' );
			$builder->color_picker( 'colorpicker', __( 'Color Picker' ) );
			$builder->textarea( 'textarea', __( 'Textarea' ) )
				->style( 'width:100%;' )
				->help( __( 'Help Content in Tooltip' ) );
			return $builder;
		}
	}

	register_widget( 'WPOnion_Widget_Example_1' );
}
