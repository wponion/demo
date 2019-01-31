<?php
$return = array();

$return[] = WPO\Field::create( 'font_picker', 'font_picker', __( 'Font Picker' ) );
$return[] = WPO\Field::create( 'font_picker', 'font_picker_1', __( 'Only Websafe' ) )
	->set_websafe_fonts( true )
	->set_google_fonts( false );
$return[] = WPO\Field::create( 'font_picker', 'font_picker_2', __( 'Only Google Fonts' ) )
	->set_websafe_fonts( false )
	->set_google_fonts( true );
$return[] = WPO\Field::create( 'font_picker', 'font_picker_3', __( 'No Grouping' ) )
	->set_group( false );
return $return;
