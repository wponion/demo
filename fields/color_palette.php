<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 06:06 AM
 * File : color_palette.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'           => 'color_palette',
		'title'        => __( 'Color Palette' ),
		'desc'         => __( 'You Can Select Multiple Colors' ),
		'palette_type' => 'checkbox',
		'type'         => 'color_palette',
		'options'      => \WPOnion\Helper::get_material_design_colors(),
	),
	array(
		'id'           => 'color_palette_radio',
		'title'        => __( 'Color Palette' ),
		'desc'         => __( 'You Can Select Only 1 Color' ),
		'palette_type' => 'radio',
		'type'         => 'color_palette',
		'options'      => \WPOnion\Helper::get_material_design_colors( 50 ),
	),
	array(
		'content' => __( 'Color Palette Size' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'color_palette_size_1',
		'title'   => __( 'Color Palette Small' ),
		'size'    => 15,
		'type'    => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors( 900 ),
	),
	array(
		'id'      => 'color_palette_size_2',
		'title'   => __( 'Color Palette Large' ),
		'size'    => 45,
		'type'    => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors( 900 ),
	),
	array(
		'content' => __( 'Color Palette Layouts' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'color_palette_rounded',
		'title'   => __( 'Rounded' ),
		'style'   => 'round',
		'type'    => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors( 100 ),
	),
	array(
		'id'      => 'color_palette_rounded_shadow',
		'title'   => __( 'Rounded With Shadow' ),
		'style'   => 'round box-shadow ',
		'type'    => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors( 200 ),
	),
	array(
		'id'      => 'color_palette_rounded_margin',
		'title'   => __( 'Rounded With Margin' ),
		'style'   => 'round with-margin ',
		'type'    => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors( 300 ),
	),
	array(
		'id'      => 'color_palette_rounded_margin_shadow',
		'title'   => __( 'Rounded With Margin & Shadow' ),
		'style'   => 'round with-margin box-shadow ',
		'type'    => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors( 400 ),
	),
	array(
		'id'      => 'color_palette_square',
		'title'   => __( 'Square' ),
		'style'   => '',
		'type'    => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors( 500 ),
	),
	array(
		'id'      => 'color_palette_square_shadow',
		'title'   => __( 'Square With Shadow' ),
		'style'   => 'box-shadow ',
		'type'    => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors( 600 ),
	),
	array(
		'id'      => 'color_palette_square_margin',
		'title'   => __( 'Square With Margin' ),
		'style'   => 'with-margin ',
		'type'    => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors( 700 ),
	),
	array(
		'id'      => 'color_palette_square_margin_shadow',
		'title'   => __( 'Square With Margin & Shadow' ),
		'style'   => 'with-margin box-shadow ',
		'type'    => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors( 800 ),
	),

	array(
		'content' => __( 'Large Palettes' ),
		'type'    => 'subheading',
	),
	array(
		'id'           => 'color_palette_large_checkbox',
		'title'        => __( 'Color Palette' ),
		'desc'         => __( 'You Can Select Multiple Colors' ),
		'palette_type' => 'checkbox',
		'style'        => '',
		'type'         => 'color_palette',
		'options'      => \WPOnion\Helper::get_material_design_colors( 'all' ),
	),
	array(
		'id'           => 'color_palette_large_radio',
		'title'        => __( 'Color Palette' ),
		'desc'         => __( 'You Can Select Only 1 Color' ),
		'palette_type' => 'radio',
		'type'         => 'color_palette',
		'options'      => \WPOnion\Helper::get_material_design_colors( 'all' ),
	),
);
