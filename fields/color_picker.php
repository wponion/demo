<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 06:20 AM
 * File : color_picker.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

$mc  = \WPOnion\Helper::get_material_design_colors();
$mc2 = \WPOnion\Helper::get_material_design_colors( 50 );
$all = array_merge( $mc, $mc2 );

return array(
	array(
		'type'    => 'subheading',
		'content' => __( 'Color Picker' ),
	),
	array(
		'id'    => 'color_picker',
		'title' => __( 'Color Picker' ),
		'type'  => 'color_picker',
	),
	array(
		'id'    => 'color_picker_no_rgba',
		'title' => __( 'Color Picker Without RGBA' ),
		'type'  => 'color_picker',
		'rgba'  => false,
	),
	array(
		'type'    => 'subheading',
		'content' => __( 'Color Picker Via Palette' ),
	),
	array(
		'id'           => 'color_picker_palette',
		'title'        => __( 'Color Picker Palette' ),
		'desc'         => __( 'You Can Select Multiple Colors' ),
		'palette_type' => 'checkbox',
		'type'         => 'color_picker',
		'options'      => $mc,
	),

	array(
		'id'           => 'color_picker_palette_radio',
		'title'        => __( 'Color Picker Palette' ),
		'desc'         => __( 'You Can Select Only 1 Color' ),
		'palette_type' => 'radio',
		'type'         => 'color_picker',
		'options'      => $mc2,
	),
	array(
		'id'      => 'color_picker_palette_size',
		'title'   => __( 'Color Palette Custom Size' ),
		'size'    => 35,
		'type'    => 'color_picker',
		'options' => $mc,
	),

	array(
		'content' => __( 'Color Palette Layouts' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'color_palette_rounded',
		'title'   => __( 'Rounded' ),
		'style'   => 'round',
		'type'    => 'color_picker',
		'options' => $mc,
	),
	array(
		'id'      => 'color_palette_rounded_shadow',
		'title'   => __( 'Rounded With Shadow' ),
		'style'   => 'round box-shadow ',
		'type'    => 'color_picker',
		'options' => $mc2,
	),
	array(
		'id'      => 'color_palette_rounded_margin',
		'title'   => __( 'Rounded With Margin' ),
		'style'   => 'round with-margin ',
		'type'    => 'color_picker',
		'options' => $mc,
	),
	array(
		'id'      => 'color_palette_square',
		'title'   => __( 'Square' ),
		'style'   => '',
		'type'    => 'color_picker',
		'options' => $mc,
	),
	array(
		'id'      => 'color_palette_square_shadow',
		'title'   => __( 'Square With Shadow' ),
		'style'   => 'box-shadow ',
		'type'    => 'color_picker',
		'options' => $mc2,
	),
	array(
		'id'      => 'color_palette_square_margin',
		'title'   => __( 'Square With Margin' ),
		'style'   => 'with-margin ',
		'type'    => 'color_picker',
		'options' => $mc,
	),
);
