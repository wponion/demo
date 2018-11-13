<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 03:47 PM
 * File : icon_picker.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'icon_picker',
		'title' => __( 'Icon Picker' ),
		'type'  => 'icon_picker',
	),
	array(
		'id'         => 'icon_picker_1',
		'title'      => __( 'Icon Picker With Hidden Input' ),
		'type'       => 'icon_picker',
		'show_input' => false,
	),
	array(
		'id'            => 'icon_picker_2',
		'title'         => __( 'Icon Picker With Button Labels' ),
		'type'          => 'icon_picker',
		'add_button'    => '+',
		'remove_button' => '-',
	),
	array(
		'id'       => 'icon_picker_3',
		'title'    => __( 'Dashicons Removed From Picker' ),
		'type'     => 'icon_picker',
		'disabled' => array( 'dashicons' ),
	),
	array(
		'id'           => 'icon_picker_4',
		'title'        => __( 'Icon ToolTip Customization' ),
		'type'         => 'icon_picker',
		'icon_tooltip' => array(
			'placement' => 'top',
			'arrow'     => true,
		),
	),
);
