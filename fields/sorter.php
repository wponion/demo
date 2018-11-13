<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 05:02 PM
 * File : sorter.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'      => 'sorter_1',
		'type'    => 'sorter',
		'title'   => 'Sorter',
		'default' => array(
			'enabled'  => array(
				'bmw'        => 'BMW',
				'mercedes'   => 'Mercedes',
				'volkswagen' => 'Volkswagen',
			),
			'disabled' => array(
				'ferrari' => 'Ferrari',
				'mustang' => 'Mustang',
			),
		),
	),
	array(
		'id'             => 'sorter_2',
		'type'           => 'sorter',
		'title'          => 'Sorter',
		'default'        => array(
			'enabled'  => array(
				'blue'   => 'Blue',
				'green'  => 'Green',
				'red'    => 'Red',
				'yellow' => 'Yellow',
				'orange' => 'Orange',
				'ocean'  => 'Ocean',
			),
			'disabled' => array(
				'black' => 'Black',
				'white' => 'White',
			),
		),
		'enabled_title'  => 'Active Colors',
		'disabled_title' => 'Deactive Colors',
	),
);
