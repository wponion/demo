<?php
$return = array();

$return[] = WPO\Field::create( 'wp_link', 'wp_link', __( 'WP Link' ) );
$return[] = WPO\Field::create( 'wp_link', 'wp_link_1', __( 'WP Link Button Customized' ) )
	->button( array(
		'label' => __( 'Select A URL (Link)' ),
		'class' => 'button button-info',
	) );
$return[] = WPO\Field::create( 'wp_link', 'wp_link_2', __( 'WP Link 2' ) )
	->desc( 'Shows Input Field For All Attributes.' )
	->show_input( true );

$return[] = WPO\Field::create( 'wp_link', 'wp_link_3', __( 'WP Link 3' ) )
	->desc( 'This Field Has Only URL Selector And Shows Actual Input' )
	->link_title( false )
	->target( false )
	->show_input( true )
	->example( false );


return $return;
