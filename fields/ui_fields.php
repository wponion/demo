<?php
/**
 *
 * Project : wponion
 * Date : 10-11-2018
 * Time : 08:04 AM
 * File : ui_fields.php
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
		'content' => sprintf( __( 'ALL UI Fields Related Fields Code Can Be Found %1$s@wponion/demo%2$s' ), '<a href="https://github.com/wponion/demo">', '</a>' ),
		'type'    => 'content',
	),

	array(
		'content' => __( 'Heading Field' ),
		'type'    => 'heading',
	),
	array(
		'content' => 'Simple & Neat Content Field',
		'type'    => 'content',
	),
	array(
		'content' => __( 'SubHeading Field' ),
		'type'    => 'subheading',
	),
	array(
		'content' => '<h1 class="display-4">Jumbotron</h1><p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>',
		'type'    => 'jambo_content',
	),
	array(
		'url'    => 'https://www.youtube.com/embed/A9JV0EvCkMI',
		'type'   => 'iframe',
		'height' => '350px',
	),
);
