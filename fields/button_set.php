<?php
/**
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @since 1.0
 * @link
 * @copyright 2019 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'       => 'button_set_1',
		'title'    => __( 'Button Set (Radio)' ),
		'type'     => 'button_set',
		'multiple' => false,
		'options'  => array(
			'enabled'  => __( 'Enabled' ),
			'disabled' => __( 'Disabled' ),
		),
	),
	array(
		'id'       => 'button_set_2',
		'title'    => __( 'Button Set (Checkbox)' ),
		'type'     => 'button_set',
		'multiple' => true,
		'options'  => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),

	/**
	 * Custom Button Sizes.
	 */
	array(
		'content' => __( 'Button Set Sizes' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'button_set_small_size',
		'title'   => __( 'Small Size' ),
		'type'    => 'button_set',
		'size'    => 'small',
		'options' => array(
			'enabled'  => __( 'Enabled' ),
			'disabled' => __( 'Disabled' ),
		),
	),
	array(
		'id'      => 'button_set_normal_size',
		'title'   => __( 'Default Size' ),
		'type'    => 'button_set',
		'size'    => false,
		'options' => array(
			'enabled'  => __( 'Enabled' ),
			'disabled' => __( 'Disabled' ),
		),
	),
	array(
		'id'      => 'button_set_large_size',
		'title'   => __( 'Large Size' ),
		'type'    => 'button_set',
		'size'    => 'large',
		'options' => array(
			'enabled'  => __( 'Enabled' ),
			'disabled' => __( 'Disabled' ),
		),
	),

	/**
	 * Custom Button Styles.
	 */
	array(
		'id'         => 'button_set_custom_style1',
		'title'      => __( 'Custom Styling' ),
		'desc_field' => __( 'If A Button is clicked then it shows in <code>Green</code>.' ),
		'type'       => 'button_set',
		'multiple'   => false,
		'active'     => 'button-success',
		'options'    => array(
			'enabled'  => __( 'Enabled' ),
			'disabled' => __( 'Disabled' ),
		),
	),

	array(
		'id'         => 'button_set_custom_style2',
		'title'      => __( 'Custom Styling' ),
		'desc_field' => __( 'If A Button is not clicked then it shows in <code>Red</code>.' ),
		'type'       => 'button_set',
		'multiple'   => false,
		'inactive'   => 'button-danger',
		'active'     => 'button-secondary',
		'options'    => array(
			'enabled'  => __( 'Enabled' ),
			'disabled' => __( 'Disabled' ),
		),
	),
);
