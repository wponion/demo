<?php
$return = array();

$return[] = WPO\Field::create( 'font_picker', 'font_picker', __( 'Font Picker' ) );
$return[] = WPO\Field::create( 'font_picker', 'font_picker_1', __( 'Only Websafe' ) )
	->websafe_fonts( true )
	->google_fonts( false );
$return[] = WPO\Field::create( 'font_picker', 'font_picker_2', __( 'Only Google Fonts' ) )
	->websafe_fonts( false )
	->google_fonts( true );
$return[] = WPO\Field::create( 'font_picker', 'font_picker_3', __( 'No Grouping' ) )
	->group( false );
return $return;
