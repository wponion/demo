<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 02:43 PM
 * File : background.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'background',
		'type'  => 'background',
		'title' => __( 'Background' ),
	),

	array(
		'id'               => 'background_1',
		'type'             => 'background',
		'title'            => __( 'Background Without Color & Image' ),
		'background-image' => false,
		'background-color' => false,
	),

	array(
		'type'    => 'subheading',
		'content' => __( 'JS Select Frameworks' ),
	),

	array(
		'id'      => 'background_select2',
		'type'    => 'background',
		'title'   => __( 'Select2 Framework' ),
		'select2' => true,
	),

	array(
		'id'     => 'background_chosen',
		'type'   => 'background',
		'title'  => __( 'Chosen Framework' ),
		'chosen' => true,
	),

	array(
		'id'        => 'background_selectize',
		'type'      => 'background',
		'title'     => __( 'Selectize Framework' ),
		'selectize' => true,
	),
);
