<?php
$return = array();

$return[] = WPO\Field::create( 'wp_link', 'wp_link', __( 'WP Link' ) );
$return[] = WPO\Field::create( 'wp_link', 'wp_link_1', __( 'WP Link Button Customized' ) )
	->set_button( array(
		'label' => __( 'Select A URL (Link)' ),
		'class' => 'button button-info',
	) );
$return[] = WPO\Field::create( 'wp_link', 'wp_link_2', __( 'WP Link 2' ) )
	->set_desc( 'Shows Input Field For All Attributes.' )
	->set_show_input( true );

$return[] = WPO\Field::create( 'wp_link', 'wp_link_3', __( 'WP Link 3' ) )
	->set_desc( 'This Field Has Only URL Selector And Shows Actual Input' )
	->set_link_title( false )
	->set_target( false )
	->set_show_input( true )
	->set_example( false );


return $return;
