<?php

use \WPO\Field as Field;

$return = array();

/**
 * Basic Features.
 */
$return[] = new WPO\Fields\Subheading( 'Basic Features' );
$return[] = wpo_field( 'text', 'basic_feature_1', __( 'Field Title Here' ) );
$return[] = Field::create( 'text', 'basic_feature_2', __( 'Custom Class' ), array(
	'class' => 'wponion-custom-class',
) );
$return[] = Field::create( 'text', 'basic_feature_3', __( 'Custom Wrap Class' ), array(
	'wrap_class' => 'wponion-custom-wrap-class',
) );
$return[] = Field::create( 'text', 'basic_feature_4', __( 'Custom Wrap Class & Element Class' ), array(
	'wrap_class' => 'wponion-custom-wrap-class',
	'class'      => 'wponion-custom-class',
) );
$return[] = Field::create( 'text', 'basic_feature_5', __( 'Custom Wrap ID' ), array(
	'wrap_id' => 'customwrapid',
) );

$return[] = Field::create( 'text', 'basic_feature_6', __( 'Custom Inline Styling' ) )
	->style( 'border:1px solid red;' )
	->style( array(
		'width'  => '400px',
		'height' => '35px',
	) );

$return[] = Field::create( 'text', 'basic_feature_7', __( 'Horizontal Layout' ) )
	->horizontal( true );

$text = new \WPO\Fields\Text( 'basic_feature_8', __( 'Field With Default Value' ) );
$text->field_default( __( 'Default Value Here..' ) );
$return[] = $text;

/**
 * Element & Wrap Attributes.
 */
$return[] = new \WPO\Fields\Subheading( __( 'Wrap & Field Attributes' ) );

$return[] = Field::create( 'text', 'basic_feature_attribute_1', __( 'Custom Input Attribute' ) )
	->attributes( array(
		'data-element-attr-1' => 'attribute-value-1',
		'data-element-attr-2' => 'attribute-value-2',
	) )
	->attribute( 'data-element-attr-3', 'attribute-value-3' );

$return[] = Field::create( 'text', 'basic_feature_attribute_2', __( 'Custom Wrap Attribute' ) )
	->wrap_attributes( array(
		'data-wrap-attr-1' => 'attribute-1',
		'data-wrap-attr-2' => 'attribute-2',
	) )
	->wrap_attribute( 'data-wrap-attr-3', 'attribute-3' );

$return[] = Field::create( 'text', 'basic_feature_attribute_3', __( 'Custom Input & Wrap Attribute' ) )
	->attributes( array(
		'data-element-attr-1' => 'attribute-value-1',
		'data-element-attr-2' => 'attribute-value-2',
	) )
	->attribute( 'data-element-attr-3', 'attribute-value-3' )
	->wrap_attributes( array(
		'data-wrap-attr-1' => 'attribute-1',
		'data-wrap-attr-2' => 'attribute-2',
	) )
	->wrap_attribute( 'data-wrap-attr-3', 'attribute-3' );


/**
 * Field Description.
 */
$return[] = Field::create( 'subheading', __( 'Description Placement' ) );
$return[] = new \WPO\Fields\Text( 'basic_feature_description_1', __( 'Description Below Title' ), array( 'desc' => __( 'Simple Description Below Field Title.' ) ) );
$return[] = new \WPO\Fields\Text( 'basic_feature_description_2', __( 'Description Below Field' ), array( 'desc_field' => __( 'Simple `Description` Below Field.' ) ) );
$return[] = new \WPO\Fields\Text( 'basic_feature_description_3', __( 'Description In Both Places' ), array(
	'desc'       => __( 'Simple Description Below Field Title.' ),
	'desc_field' => __( 'Simple Description Below Field.' ),
) );


/**
 * Field Debug Options.
 */
$return[] = Field::create( 'subheading', __( 'Field Debug' ) );

$return[] = Field::create( 'text', 'basic_feature_8', __( 'Debug View Enabled.' ) )
	->debug( true )
	->desc( __( 'Click the field title to view debug window' ) );

$return[] = Field::create( 'text', 'basic_feature_9', __( 'Debug View Enabled.' ) )
	->debug( false );


/**
 * Element Before & After.
 */
$return[] = Field::create( 'subheading', __( 'Before & After Contents' ) );

$return[] = Field::create( 'text', 'basic_feature_before_1', __( 'Element Before Content.' ) )
	->before( '<i>' . __( 'Custom Element Before Text With `HTML` Support.' ) . '</i>' );

$return[] = Field::create( 'text', 'basic_feature_after_1', __( 'Element After Content.' ) )
	->after( '<i>' . __( 'Custom Element After Text With HTML Support.' ) . '</i>' );

$return[] = Field::create( 'text', 'basic_feature_before_after_1', __( 'Element After Content.' ) )
	->after( '<i>' . __( 'Custom Element After Text With HTML Support.' ) . '</i>' )
	->before( '<i>' . __( 'Custom Element Before Text With HTML Support.' ) . '</i>' );

/**
 * ToolTip Features.
 */
$return[] = Field::create( 'subheading', __( 'ToolTip Features' ) );
$return[] = Field::create( 'text', 'basic_feature_tooltip_1', __( 'ToolTip Features' ), array( 'help' => 'Simple Tooltip Content' ) );
$return[] = Field::create( 'text', 'basic_feature_tooltip_2', __( 'ToolTip Custom Icon' ), array(
	'help' => array(
		'content' => __( 'Simple Tooltip Content' ),
		'icon'    => 'dashicons dashicons-format-status',
	),
) );
$return[] = Field::create( 'text', 'basic_feature_tooltip_3', __( 'ToolTip Custom Icon & Image' ), array(
	'help' => array(
		'image' => 'https://s3.wponion.com/placeholder/100/1.jpg',
		'icon'  => 'dashicons dashicons-format-status',
	),
) );
$return[] = Field::create( 'text', 'basic_feature_tooltip_4', __( 'ToolTip Light Theme' ), array(
	'help' => array(
		'content' => __( 'Simple Tooltip Content In Light' ),
		'theme'   => 'light',
	),
) );

$return[] = Field::create( 'text', 'basic_feature_tooltip_5', __( 'ToolTip Large' ) )
	->help( array(
		'content' => __( 'Simple Tooltip Content' ),
		'size'    => 'large',
	) );

$return[] = Field::create( 'text', 'basic_feature_tooltip_6', __( 'ToolTip Events' ) )
	->help( array(
		'content' => __( 'Simple Tooltip Content' ),
		'size'    => 'large',
		'onShow'  => 'function(a){ console.log(a);alert("Alert From PHP Triggered");}',
	) )
	->desc( 'Javascript alert will be trigged when tooltip is shown' );

$return[] = Field::create( 'text', 'basic_feature_tooltip_wrap_1', __( 'Field Wrap ToolTip' ) )
	->wrap_tooltip( 'Tooltip shown for entire field div' );

$return[] = Field::create( 'text', 'basic_feature_tooltip_wrap_2', __( 'Field Wrap Tooltip 2' ) )
	->desc_field( 'Tooltip Follows Mouse Movements.' )
	->wrap_tooltip( array(
		'content'      => __( 'ToolTip Content' ),
		'followCursor' => true,
	) );

/**
 * Column / Grid Layout.
 */
$return[] = Field::create( 'subheading', __( 'Column / Grid Layout' ) );

$return[] = new \WPO\Fields\Content( __( '<code>col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-4</code> Gird class has been used. for more details please refer <a href="https://evgenyrodionov.github.io/flexboxgrid2/">flexboxgrid2</a>' ) );

$return[] = Field::create( 'text', 'basic_feature_grid_1', __( 'Simple Field' ) )
	->wrap_class( 'col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-4' )
	->horizontal( true );

$return[] = Field::create( 'text', 'basic_feature_grid_2', __( 'Simple Field' ) )
	->wrap_class( 'col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-4' )
	->horizontal( true );

$return[] = Field::create( 'text', 'basic_feature_grid_3', __( 'Simple Field' ) )
	->wrap_class( 'col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-4' )
	->horizontal( true );

return $return;
