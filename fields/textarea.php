<?php
$return = array();

$return[] = WPO\Field::create( 'textarea', 'textarea', __( 'Textarea' ) );
$return[] = WPO\Field::create( 'textarea', 'textarea_1', __( 'Custom Row & Col' ) )
	->rows( 12 )
	->cols( 10 );
$return[] = WPO\Field::create( 'textarea', 'textarea_2', __( 'Disabled Textarea' ) )
	->disable();
$return[] = WPO\Field::create( 'textarea', 'textarea_3', __( 'Textarea Custom Styling' ) )
	->style( 'border:1px solid #343434;' )
	->style( 'color:green;font-weight:bold;' )
	->style( array( 'font-size' => '20px' ) );

/**
 * Prefix & Surfix.
 */
$return[] = WPO\Field::create( 'subheading', __( 'Prefix & Surfix' ) );
$return[] = WPO\Field::create( 'textarea', 'textarea_prefix_1', __( 'With Prefix' ) )
	->prefix( '$' );
$return[] = WPO\Field::create( 'textarea', 'textarea_surfix_1', __( 'With Surfix' ) )
	->surfix( 'USD' );
$return[] = WPO\Field::create( 'textarea', 'textarea_prefix_surfix_1', __( 'With Prefix & Surfix' ) )
	->prefix( '$' )
	->surfix( 'USD' );

return $return;
