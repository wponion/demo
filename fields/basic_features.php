<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 09:59 AM
 * File : basic_features.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'type'    => 'heading',
		'content' => __( 'Basic Features' ),
	),
	array(
		'id'    => 'basic_feature_1',
		'title' => __( 'Field Title Here' ),
		'type'  => 'text',
	),
	array(
		'id'    => 'basic_feature_2',
		'title' => __( 'Custom Class' ),
		'type'  => 'text',
		'class' => 'wponion-custom-class',
	),
	array(
		'id'         => 'basic_feature_3',
		'title'      => __( 'Custom Wrap Class.' ),
		'type'       => 'text',
		'wrap_class' => 'wponion-custom-wrap-class',
	),
	array(
		'id'         => 'basic_feature_4',
		'title'      => __( 'Custom Wrap Class. & Element Class' ),
		'type'       => 'text',
		'wrap_class' => 'wponion-custom-wrap-class',
		'class'      => 'wponion-custom-class',
	),
	array(
		'id'    => 'basic_feature_5',
		'title' => __( 'Custom Inline Styling' ),
		'type'  => 'text',
		'style' => 'border:1px solid red',
	),
	array(
		'id'         => 'basic_feature_6',
		'title'      => __( 'Horizontal Layout' ),
		'type'       => 'text',
		'horizontal' => true,
	),
	array(
		'id'      => 'basic_feature_7',
		'title'   => __( 'Field With Default Value' ),
		'type'    => 'text',
		'default' => 'here is the default text',
	),

	array(
		'type'    => 'subheading',
		'content' => __( 'Wrap & Field Attributes' ),
	),
	array(
		'id'         => 'basic_feature_attribute_1',
		'title'      => __( 'Custom Input Attribute.' ),
		'type'       => 'text',
		'attributes' => array(
			'data-custom-attr'        => 'hereisthe value',
			'data-custom-attribute-1' => 'your-value-here',
		),
	),
	array(
		'id'              => 'basic_feature_attribute_2',
		'title'           => __( 'Custom Wrap Attribute.' ),
		'type'            => 'text',
		'wrap_attributes' => array(
			'data-custom-attr'        => 'hereisthe value',
			'data-custom-attribute-1' => 'your-value-here',
		),
	),
	array(
		'id'              => 'basic_feature_attribute_3',
		'title'           => __( 'Custom Wrap & Input Attribute' ),
		'type'            => 'text',
		'wrap_attributes' => array(
			'data-custom-attr'        => 'hereisthe value',
			'data-custom-attribute-1' => 'your-value-here',
		),
		'attributes'      => array(
			'data-custom-attr'        => 'hereisthe value',
			'data-custom-attribute-1' => 'your-value-here',
		),
	),


	array(
		'type'    => 'subheading',
		'content' => __( 'Field Debug' ),
	),
	array(
		'id'    => 'basic_feature_8',
		'title' => __( 'Debug View Enabled.' ),
		'desc'  => __( 'Click the field title to view debug window' ),
		'type'  => 'text',
		'debug' => true,
	),

	array(
		'id'    => 'basic_feature_9',
		'title' => __( 'Debug View Disabled.' ),
		'type'  => 'text',
		'debug' => false,
	),

	array(
		'type'    => 'subheading',
		'content' => __( 'Description Placement' ),
	),
	array(
		'id'    => 'basic_feature_description_1',
		'title' => __( 'Description Below Title' ),
		'type'  => 'text',
		'desc'  => __( 'Simple Description Below Field Title.' ),
	),
	array(
		'id'         => 'basic_feature_description_2',
		'title'      => __( 'Description Below Field' ),
		'type'       => 'text',
		'desc_field' => __( 'Simple Description Below Field.' ),
	),
	array(
		'id'         => 'basic_feature_description_3',
		'title'      => __( 'Description In Both Places.' ),
		'type'       => 'text',
		'desc'       => __( 'Simple Description Below Field Title.' ),
		'desc_field' => __( 'Simple Description Below Field.' ),
	),

	array(
		'type'    => 'subheading',
		'content' => 'Before & After Contents',
	),
	array(
		'id'     => 'basic_feature_before_1',
		'title'  => __( 'Element Before Content.' ),
		'type'   => 'text',
		'before' => '<i>' . __( 'Custom Element Before Text With HTML Support.' ) . '</i>',
	),
	array(
		'id'    => 'basic_feature_after_1',
		'title' => __( 'Element After Content' ),
		'type'  => 'text',
		'after' => '<i>' . __( 'Custom Element After Text With HTML Support.' ) . '</i>',
	),
	array(
		'id'     => 'basic_feature_before_after_1',
		'title'  => __( 'Element Before & After Content.' ),
		'type'   => 'text',
		'before' => '<i>' . __( 'Custom Element Before Text With HTML Support.' ) . '</i>',
		'after'  => '<i>' . __( 'Custom Element After Text With HTML Support.' ) . '</i>',
	),

	array(
		'type'    => 'subheading',
		'content' => __( 'Tooltip Features' ),
	),
	array(
		'id'    => 'basic_feature_tooltip_1',
		'title' => __( 'ToolTip' ),
		'type'  => 'text',
		'help'  => __( 'Simple Tooltip Content' ),
	),
	array(
		'id'    => 'basic_feature_tooltip_2',
		'title' => __( 'ToolTip Custom Icon' ),
		'type'  => 'text',
		'help'  => array(
			'content' => __( 'Simple Tooltip Content' ),
			'icon'    => 'dashicons dashicons-format-status',
		),
	),
	array(
		'id'    => 'basic_feature_tooltip_3',
		'title' => __( 'ToolTip Custom Icon & Image' ),
		'type'  => 'text',
		'help'  => array(
			'image' => 'https://s3.wponion.com/placeholder/100/1.jpg',
			'icon'  => 'dashicons dashicons-format-status',
		),
	),
	array(
		'id'    => 'basic_feature_tooltip_4',
		'title' => __( 'ToolTip Light Theme' ),
		'type'  => 'text',
		'help'  => array(
			'content' => __( 'Simple Tooltip Content In Light' ),
			'theme'   => 'light',
		),
	),
	array(
		'id'    => 'basic_feature_tooltip_5',
		'title' => __( 'ToolTip Large' ),
		'type'  => 'text',
		'help'  => array(
			'content' => __( 'Simple Tooltip Content' ),
			'size'    => 'large',
			'onShow'  => 'function(a){ console.log(a);alert("Alert From PHP Triggered");}',
		),
	),
);
