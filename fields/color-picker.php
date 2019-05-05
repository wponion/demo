<?php
$mc     = \WPOnion\Helper::get_material_design_colors();
$mc2    = \WPOnion\Helper::get_material_design_colors( 50 );
$all    = array_merge( $mc, $mc2 );
$return = array();

$return[] = WPO\Field::create( 'subheading', __( 'Color Picker' ) );
$return[] = WPO\Field::create( 'color_picker', 'color_picker', __( 'Color Picker' ) );
$return[] = WPO\Field::create( 'color_picker', 'color_picker_1', __( 'Color Picker <small>(RGBA)</small>' ) )
	->rgba( true );

$return[] = WPO\Field::create( 'subheading', __( 'Color Picker As Palette' ) );
$return[] = WPO\Field::create( 'color_picker', 'color_picker_2', __( 'Multiple' ) )
	->options( $mc )
	->desc_field( 'Works As Checkbox. you can select multiple colors.' )
	->multiple( true );
$return[] = WPO\Field::create( 'color_picker', 'color_picker_3', __( 'Single' ) )
	->options( $mc )
	->desc_field( 'Works As Radio. you can select only 1 color.' )
	->multiple( false );
$return[] = WPO\Field::create( 'color_picker', 'color_picker_4', __( 'Custom Size' ) )
	->options( $mc )
	->size( 35 );
$return[] = WPO\Field::create( 'color_picker', 'color_picker_10', __( 'Large Colors' ) )
	->options( $all );

$return[] = WPO\Field::create( 'subheading', __( 'Color Picker As Palette' ) );
$return[] = WPO\Field::create( 'color_picker', 'color_picker_5', __( 'Rounded With Shadow' ) )
	->options( $mc2 )
	->layout( true, false, true );
$return[] = WPO\Field::create( 'color_picker', 'color_picker_6', __( 'Rounded With Margin' ) )
	->options( $mc2 )
	->layout( true, true );

$return[] = WPO\Field::create( 'color_picker', 'color_picker_7', __( 'Square' ) )
	->options( $mc2 )
	->layout( false, false, false );
$return[] = WPO\Field::create( 'color_picker', 'color_picker_8', __( 'Square With Shadow' ) )
	->options( $mc2 )
	->layout( false, false, true );
$return[] = WPO\Field::create( 'color_picker', 'color_picker_9', __( 'Square With Margin' ) )
	->options( $mc2 )
	->layout( false, true );

return $return;
