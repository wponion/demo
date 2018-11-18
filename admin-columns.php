<?php
/**
 *
 * Project : wponion
 * Date : 17-11-2018
 * Time : 10:17 AM
 * File : admin-columns.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

/**
 * Multiple Post Type With Single Column.
 */
wponion_admin_columns( array( 'page', 'post' ), __( 'Custom Column 1' ), function () {
	echo __( 'This Column is created using WPOnion' );
} );

/**
 * Single Post Type With Reorder.
 */
wponion_admin_columns( 'post', array(
	'title'   => __( 'Custom Column 2' ),
	'reorder' => 'author',
	'render'  => __( 'Column Reordered To Show After Author Column' ),
) );

/**
 * Multiple Post Type With Multiple Cols.
 */
wponion_admin_columns( array( 'post', 'page' ), array(
	array(
		'title'  => __( 'WPOnion Col1' ),
		'render' => 'I am called via column render callback',
	),
	'WPOnion Col 2',
	'WPOnion Col 3',
), function () {
	echo 'I am called via Global Callback';
} );
