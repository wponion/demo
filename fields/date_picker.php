<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 07:13 AM
 * File : date_picker.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'type'    => 'content',
		/*translators: Added Link To the project*/
		'content' => sprintf( __( 'WPOnion Uses %1$sflatpickr jQuery%2$s Plugin for date picker. kindly check %1$sonline documentation%2$s for more information' ), '<a href="https://flatpickr.js.org/">', '</a>' ),
	),
	array(
		'id'    => 'date_picker',
		'title' => __( 'Date Picker' ),
		'type'  => 'date_picker',
	),
	array(
		'id'    => 'date_picker_range',
		'title' => __( 'Date Picker Range' ),
		'type'  => 'date_picker',
		'range' => true,
	),

	array(
		'id'         => 'date_picker_human_friendly_dates',
		'title'      => __( 'Human-friendly Dates' ),
		'type'       => 'date_picker',
		'desc_field' => '<code>altInput</code> hides your original input and creates a new one.<br/> Upon date selection, the original input will contain a <code>Y-m-d...</code> string, while the <code>altInput</code> will display the date in a more legible, customizable format. <br/> Enabling this option is highly recommended.',
		'settings'   => array(
			'altInput'   => true,
			'altFormat'  => 'F j, Y',
			'dateFormat' => 'Y-m-d',
		),
	),
	array(
		'id'         => 'date_picker_min_max_dates',
		'title'      => __( 'minDate and maxDate' ),
		'type'       => 'date_picker',
		'desc_field' => '<code>minDate</code> option specifies the minimum/earliest date (inclusively) allowed for selection. <br/><code>maxDate</code> option specifies the maximum/latest date (inclusively) allowed for selection.',
		'settings'   => array(
			'minDate' => date( 'Y-m-d', strtotime( ' -5 day' ) ),
			'maxDate' => date( 'Y-m-d', strtotime( ' +5 day' ) ),
		),
	),

	/**
	 * Date Picker Themes.
	 */
	array(
		'content' => __( 'Date Picker Themes' ),
		'type'    => 'subheading',
	),
	array(
		'id'    => 'date_picker_theme_default',
		'title' => __( 'Date Picker : Default' ),
		'type'  => 'date_picker',
	),
	array(
		'id'    => 'date_picker_theme_light',
		'title' => __( 'Date Picker : light' ),
		'type'  => 'date_picker',
		'theme' => 'light',
	),
	array(
		'id'    => 'date_picker_theme_dark',
		'title' => __( 'Date Picker : Dark' ),
		'type'  => 'date_picker',
		'theme' => 'dark',
	),
	array(
		'id'    => 'date_picker_theme_material_blue',
		'title' => __( 'Date Picker : material_blue' ),
		'type'  => 'date_picker',
		'theme' => 'material_blue',
	),
	array(
		'id'    => 'date_picker_theme_material_green',
		'title' => __( 'Date Picker : material_green' ),
		'type'  => 'date_picker',
		'theme' => 'material_green',
	),
	array(
		'id'    => 'date_picker_theme_material_red',
		'title' => __( 'Date Picker : material_red' ),
		'type'  => 'date_picker',
		'theme' => 'material_red',
	),
	array(
		'id'    => 'date_picker_theme_meterial_orange',
		'title' => __( 'Date Picker : material_orange' ),
		'type'  => 'date_picker',
		'theme' => 'material_orange',
	),
	array(
		'id'    => 'date_picker_theme_airbnb',
		'title' => __( 'Date Picker : airbnb' ),
		'type'  => 'date_picker',
		'theme' => 'airbnb',
	),
	array(
		'id'    => 'date_picker_theme_confetti',
		'title' => __( 'Date Picker : confetti' ),
		'type'  => 'date_picker',
		'theme' => 'confetti',
	),
);
