<?php
$return = array();

/* translators: Added Link To the project*/
$return[]    = \WPO\Field::create( 'content', sprintf( __( 'WPOnion Uses %1$sflatpickr jQuery%2$s Plugin for date picker. kindly check %1$sonline documentation%2$s for more information' ), '<a href="https://flatpickr.js.org/">', '</a>' ) );
$return[]    = \WPO\Field::create( 'date_picker', 'date_picker', __( 'Date Picker' ) );
$return[]    = \WPO\Field::create( 'date_picker', 'date_picker_1', __( 'Date Range Picker' ) )
	->set_range( true );
$date_picker = \WPO\Field::create( 'date_picker', 'date_picker_2', __( 'Human-friendly Dates' ) )
	->set_settings( array(
		'altInput'   => true,
		'altFormat'  => 'F j, Y',
		'dateFormat' => 'Y-m-d',
	) );
$date_picker->set_desc_field( '<strong>JS Code</strong> : ' . wponion_highlight_string( '$(".selector").flatpickr({
altInput:true,
altFormat:"F j,Y",
dateFormat:"Y-m-d"
});' ) );
$return[]    = $date_picker;
$date_picker = \WPO\Field::create( 'date_picker', 'date_picker_3', __( 'minDate and maxDate' ) )
	->set_settings( array(
		'minDate' => date( 'Y-m-d', strtotime( ' -5 day' ) ),
		'maxDate' => date( 'Y-m-d', strtotime( ' +5 day' ) ),
	) );
$date_picker->set_desc_field( '<strong>JS Code</strong> : ' . wponion_highlight_string( '$(".selector").flatpickr({
minDate:"' . date( 'Y-m-d', strtotime( ' -5 day' ) ) . '",
maxDate:"' . date( 'Y-m-d', strtotime( ' +5 day' ) ) . '"
});' ) );
$return[] = $date_picker;
$return[] = WPO\Field::create( 'subheading', __( 'Themes' ) );
$return[] = WPO\Field::create( 'date_picker', 'date_picker_4', __( 'Date Picker : Default' ) );
$return[] = WPO\Field::create( 'date_picker', 'date_picker_5', __( 'Date Picker : light' ), array( 'theme' => 'light' ) );
$return[] = WPO\Field::create( 'date_picker', 'date_picker_6', __( 'Date Picker : Dark' ), array( 'theme' => 'dark' ) );
$return[] = WPO\Field::create( 'date_picker', 'date_picker_7', __( 'Date Picker : material_blue' ), array( 'theme' => 'material_blue' ) );
$return[] = WPO\Field::create( 'date_picker', 'date_picker_8', __( 'Date Picker : material_green' ), array( 'theme' => 'material_green' ) );
$return[] = WPO\Field::create( 'date_picker', 'date_picker_9', __( 'Date Picker : material_red' ), array( 'theme' => 'material_red' ) );
$return[] = WPO\Field::create( 'date_picker', 'date_picker_10', __( 'Date Picker : material_orange' ), array( 'theme' => 'material_orange' ) );
$return[] = WPO\Field::create( 'date_picker', 'date_picker_11', __( 'Date Picker : airbnb' ), array( 'theme' => 'airbnb' ) );
$return[] = WPO\Field::create( 'date_picker', 'date_picker_12', __( 'Date Picker : confetti' ), array( 'theme' => 'confetti' ) );


return $return;
