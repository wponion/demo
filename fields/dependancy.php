<?php
/**
 *
 * Project : wponion
 * Date : 22-11-2018
 * Time : 06:25 AM
 * File : dependancy.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'dependency_text',
		'title' => __( 'Text' ),
		'type'  => 'text',
	),
	array(
		'type'       => 'notice_danger',
		'content'    => __( 'You Wrote Hello' ),
		'dependency' => array( 'dependency_text', '==', 'Hello' ),
	),

	array(
		'title'      => __( 'Group' ),
		'id'         => 'dependency_group',
		'type'       => 'group',
		'dependency' => array( 'dependency_text', '==', 'Hello' ),
		'fields'     => array(
			array(
				'id'          => 'group_dependency_text',
				'title'       => __( 'Text' ),
				'type'        => 'text',
				'js_validate' => 'required',
			),
			array(
				'type'       => 'notice_danger',
				'content'    => __( 'You Wrote Hello' ),
				'dependency' => array( 'group_dependency_text', '==', 'Hello' ),
			),
		),

	),
);
