<?php
/**
 *
 * Project : wponion
 * Date : 15-11-2018
 * Time : 10:42 AM
 * File : wplisttable.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */


function wponion_list_table_callback( $page, $table_instance ) {
	$return = array();
	$i      = 1;
	$i      = ( 2 === $page ) ? 10 : $i;
	$i      = ( 3 === $page ) ? 20 : $i;

	$limit = 10;
	$limit = ( 2 === $page ) ? 20 : $limit;
	$limit = ( 3 === $page ) ? 25 : $limit;

	while ( $i <= $limit ) {
		$return[] = array(
			'title' => "Title : " . $i,
			'col_1' => "Col 1 : " . $i,
			'col_2' => "Col 2 : " . $i,
		);
		$i++;
	}
	return $return;
}

return array(
	array(
		'title'    => __( 'List Table' ),
		'type'     => 'wp_list_table',
		'settings' => array(
			'total_items'  => function () {
				return 25;
			},
			'sortable'     => array(
				'title' => array( 'orderby', true ),
			),
			'bulk_actions' => array(
				'delete'  => __( 'Delete' ),
				'include' => __( 'Include' ),
			),
			'filter_menus' => array(
				'showpost'  => 'Show Posts',
				'showpost2' => 'Show Posts2',
			),
			'columns'      => array(
				'title' => __( 'Title' ),
				'col_1' => __( 'Columns 1' ),
				'col_2' => __( 'Columns 2' ),
			),
		),
		'data'     => 'wponion_list_table_callback', // is a custom callback function
	),
);
