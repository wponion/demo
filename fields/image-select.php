<?php

use WPO\Field;

$options1 = array(
	'image1' => 'https://s3.wponion.com/placeholder/75/1.jpg',
	'image2' => 'https://s3.wponion.com/placeholder/75/2.jpg',
	'image3' => 'https://s3.wponion.com/placeholder/75/3.jpg',
	'image4' => 'https://s3.wponion.com/placeholder/75/4.jpg',
	'image5' => 'https://s3.wponion.com/placeholder/75/5.jpg',
);
$options2 = array(
	'image6'  => 'https://s3.wponion.com/placeholder/75/6.jpg',
	'image7'  => 'https://s3.wponion.com/placeholder/75/7.jpg',
	'image8'  => 'https://s3.wponion.com/placeholder/75/8.jpg',
	'image9'  => 'https://s3.wponion.com/placeholder/75/9.jpg',
	'image10' => 'https://s3.wponion.com/placeholder/75/10.jpg',
);
$options3 = array(
	'image11' => 'https://s3.wponion.com/placeholder/100/11.jpg',
	'image12' => 'https://s3.wponion.com/placeholder/100/12.jpg',
	'image13' => 'https://s3.wponion.com/placeholder/100/13.jpg',
	'image14' => 'https://s3.wponion.com/placeholder/100/14.jpg',
	'image15' => 'https://s3.wponion.com/placeholder/100/15.jpg',
);
$options4 = array(
	'image16' => 'https://s3.wponion.com/placeholder/100/16.jpg',
	'image17' => 'https://s3.wponion.com/placeholder/100/17.jpg',
	'image18' => 'https://s3.wponion.com/placeholder/100/18.jpg',
	'image19' => 'https://s3.wponion.com/placeholder/100/19.jpg',
	'image20' => 'https://s3.wponion.com/placeholder/100/20.jpg',
);
$return   = array();

$return[] = WPO\Field::create( 'image_select', 'image_select', 'Image Select', array( 'options' => $options1 ) );
$return[] = WPO\Field::create( 'image_select', 'image_select_1', 'Image Select Multiple', array( 'options' => $options1 ) )
	->multiple( true )
	->desc_field( 'Multiple Select Enabled.' );
$return[] = WPO\Field::create( 'image_select', 'image_select_3', 'Image Select Group' )
	->options( array(
		__( 'Group 1' ) => $options1,
		__( 'Group 2' ) => $options2,
	) );
$return[] = WPO\Field::create( 'image_select', 'image_select_4', 'Image Select Group Multiple' )
	->options( array(
		__( 'Group 1' ) => $options3,
		__( 'Group 2' ) => $options4,
	) )
	->multiple( true )
	->desc_field( 'Multiple Select Enabled.' );

$return[] = WPO\Field::create( 'subheading', __( 'Predefined Layouts' ) );
$return[] = WPO\Field::create( 'image_select', 'body_layout', 'Body Layout ', array(
	'options'    => 'body_layouts',
	'query_args' => array( 'size' => '75' ),
	'desc_field' => __( 'Image Size is 75px. available sizes [75px, 100px, 125px ] ' ),
) );
$return[] = WPO\Field::create( 'image_select', 'header_layout', 'Header Layout', array(
	'options'    => 'header_layouts',
	'desc_field' => __( 'Image Size is 100px. available sizes [75px, 100px, 125px ] ' ),
	'query_args' => array( 'size' => '100' ),
) );
$return[] = WPO\Field::create( 'image_select', 'sidebar_layout', 'Sidebar Layout', array(
	'options'    => 'sidebar_layouts',
	'desc_field' => __( 'Image Size is 100px. available sizes [75px, 100px, 125px ] ' ),
	'query_args' => array( 'size' => '100' ),
) );

$return[] = WPO\Field::create( 'subheading', __( 'Improved Options' ) );
$return[] = WPO\Field::create( 'image_select', 'image_select_5', 'Improved Select Options' )
	->options( array(
		'image4' => 'https://s3.wponion.com/placeholder/250/4.jpg',
		'image1' => array(
			'label'    => 'https://s3.wponion.com/placeholder/250/1.jpg',
			'disabled' => true,
		),
		'image2' => array(
			'label'   => 'https://s3.wponion.com/placeholder/250/2.jpg',
			'tooltip' => __( 'ToolTip Content Here...' ),
		),
		'image3' => array(
			'label'   => 'https://s3.wponion.com/placeholder/250/3.jpg',
			'tooltip' => 'https://s3.wponion.com/placeholder/500/1.gif',
		),
	) );

return $return;
