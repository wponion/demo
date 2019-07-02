<?php
$mc  = array(
	'#FFFFFF',
	'#000000',
	'#F44336',
	'#E91E63',
	'#9C27B0',
	'#673AB7',
	'#3F51B5',
	'#2196F3',
	'#03A9F4',
	'#00BCD4',
	'#009688',
	'#4CAF50',
	'#8BC34A',
	'#CDDC39',
	'#FFEB3B',
	'#FFC107',
	'#FF9800',
	'#FF5722',
	'#795548',
	'#9E9E9E',
	'#607D8B',
);
$mc2 = array(
	'#FFEBEE',
	'#FCE4EC',
	'#F3E5F5',
	'#EDE7F6',
	'#E8EAF6',
	'#E3F2FD',
	'#E1F5FE',
	'#E0F7FA',
	'#E0F2F1',
	'#E8F5E9',
	'#F1F8E9',
	'#F9FBE7',
	'#FFFDE7',
	'#FFF8E1',
	'#FFF3E0',
	'#FBE9A7',
	'#EFEBE9',
	'#FAFAFA',
	'#ECEFF1',
);

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
