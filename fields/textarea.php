<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 11:13 AM
 * File : textarea.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'textarea',
		'title' => __( 'Textarea' ),
		'type'  => 'textarea',
	),

	array(
		'id'    => 'textarea_1',
		'title' => __( 'Custom Row & Col' ),
		'rows'  => 12,
		'cols'  => 10,
		'type'  => 'textarea',
	),
	array(
		'id'       => 'textarea_2',
		'title'    => __( 'Disabled Textarea' ),
		'disabled' => true,
		'type'     => 'textarea',
	),
	array(
		'id'      => 'textarea_3',
		'title'   => __( 'Textarea Custom Styling.' ),
		'style'   => 'border:1px solid #343434;color:green;font-weight:bold;font-size:15px;',
		'default' => 'I am custom styled for this textarea',
		'type'    => 'textarea',
	),
);
