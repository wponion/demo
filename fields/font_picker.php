<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 03:56 PM
 * File : font_picker.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'font_picker',
		'title' => __( 'Font Picker' ),
		'type'  => 'font_picker',
	),
	array(
		'id'           => 'font_picker_1',
		'title'        => __( 'No Google Fonts' ),
		'type'         => 'font_picker',
		'google_fonts' => false,
	),
	array(
		'id'            => 'font_picker_2',
		'title'         => __( 'No Websafe Fonts' ),
		'type'          => 'font_picker',
		'websafe_fonts' => false,
	),
	array(
		'id'    => 'font_picker_3',
		'title' => __( 'No Font Grouping' ),
		'type'  => 'font_picker',
		'group' => false,
	),
	array(
		'content' => __( 'JS Select Framework' ),
		'type'    => 'subheading',
	),

	array(
		'id'      => 'font_picker_select',
		'title'   => __( 'Select2' ),
		'type'    => 'font_picker',
		'select2' => true,
	),

	array(
		'id'     => 'font_picker_chosen',
		'title'  => __( 'Chosen' ),
		'type'   => 'font_picker',
		'chosen' => true,
	),

	array(
		'id'        => 'font_picker_selectize',
		'title'     => __( 'Selectize' ),
		'type'      => 'font_picker',
		'selectize' => true,
		'style'     => 'width:240px',
	),
);
