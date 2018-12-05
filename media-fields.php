<?php
/**
 * Created by PhpStorm.
 * User: varun
 * Date: 05-12-2018
 * Time: 06:34 AM
 */


wponion_media_fields( array(
	'option_name' => '_wponion_media_fields',
), array(
	array(
		'type'    => 'subheading',
		'content' => __( 'Media Fields' ),
	),
	array(
		'type'         => 'text',
		'title'        => __( 'Show ?' ),
		'id'           => 'show',
		'switch_style' => 'style-14',
	),
) );