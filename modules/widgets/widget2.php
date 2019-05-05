<?php

if ( class_exists( '\WPOnion\WP\Widget' ) && ! class_exists( 'WPOnion_Widget_Example_2' ) ) {
	/**
	 * Class WPOnion_Widget_Example_2
	 *
	 * @author Varun Sridharan <varunsridharan23@gmail.com>
	 * @since 1.0
	 */
	class WPOnion_Widget_Example_2 extends \WPOnion\WP\Widget {
		/**
		 * WPOnion_Widget_Example_2 constructor.
		 */
		public function __construct() {
			parent::__construct( 'wponion-widget-2', __( 'WPOnion Widget Example 2' ), array(
				'description' => __( ' A description for widget example 2 ' ),
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
			$builder->switcher( 'switcher', __( 'Switcher' ) );

			$builder->select( 'select', __( 'Select Field' ) )
				->option( 'option1', __( 'Option 1' ) )
				->option( 'option2', __( 'Option 2' ) )
				->option( 'option3', __( 'Option 3' ) )
				->option( 'option4', __( 'Option 4' ) );

			$builder->notice( 'A <strong>notice</strong> field with <strong>success</strong> style.' )
				->notice_type( 'success' );

			$builder->textarea( 'textarea', __( 'Textarea' ) )
				->style( 'width:100%;' )
				->help( __( 'Help Content in Tooltip' ) );
			return $builder;
		}
	}

	register_widget( 'WPOnion_Widget_Example_2' );
}
