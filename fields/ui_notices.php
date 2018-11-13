<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 08:22 AM
 * File : ui_notices.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		/* translators: Added LinkBack.*/
		'content' => sprintf( __( 'ALL UI Fields Related Fields Code Can Be Found %1$s@wponion/demo%2$s' ), '<a href="http://github.com/wponion/demo">', '</a>' ),
		'type'    => 'content',
	),

	array( 'content' => __( 'Primary Notice' ), 'type' => 'notice_primary', ),
	array( 'content' => __( 'Secondary Notice' ), 'type' => 'notice_secondary', ),
	array( 'content' => __( 'Info Notice' ), 'type' => 'notice_info', ),
	array( 'content' => __( 'Success Notice' ), 'type' => 'notice_success', ),
	array( 'content' => __( 'Warning Notice' ), 'type' => 'notice_Warning', ),
	array( 'content' => __( 'Danger Notice' ), 'type' => 'notice_danger', ),
	array( 'content' => __( 'Success Light' ), 'type' => 'notice_light', ),
	array( 'content' => __( 'Success Dark' ), 'type' => 'notice_dark', ),
	array( 'content' => ' ', 'type' => 'content' ),

	array(
		'content' => '<h4 class="alert-heading">Well done!</h4> <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p> <hr> <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>',
		'type'    => 'notice_success',
	),
);
