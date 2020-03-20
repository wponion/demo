<?php
$return = array();

/* translators: Added Link To the project*/
$return[] = \WPO\Field::create( 'content', sprintf( __( 'WPOnion Uses %1$sflatpickr jQuery%2$s Plugin for time picker. kindly check %1$sonline documentation%2$s for more information' ), '<a href="https://flatpickr.js.org/">', '</a>' ) );
$return[] = \WPO\Field::create( 'time_picker', 'time_picker', __( 'Time Picker' ) )
	->settings( array(
		'enableTime' => true,
		'noCalendar' => true,
	) );
$return[] = \WPO\Field::create( 'time_picker', 'time_picker_1', __( '24Hrs Time' ) )
	->settings( array(
		'enableTime' => true,
		'noCalendar' => true,
		'dateFormat' => 'H:i',
		'time_24hr'  => true,
	) );

$time_picker = \WPO\Field::create( 'time_picker', 'time_picker_3', __( 'minTime and maxTime' ) )
	->desc( __( 'Time Picker Allows you to pick time from `16:00` till `22:30`' ) )
	->settings( array(
		'enableTime' => true,
		'noCalendar' => true,
		'dateFormat' => 'H:i',
		'minTime'    => '16:00',
		'maxTime'    => '22:30',
	) );
$return[]    = $time_picker;

return $return;
