<?php
$return = array();

$return[] = WPO\Field::create( 'textarea', 'textarea', __( 'Textarea' ) );
$return[] = WPO\Field::create( 'textarea', 'textarea_1', __( 'Custom Row & Col' ) )
	->set_rows( 12 )
	->set_cols( 10 );
$return[] = WPO\Field::create( 'textarea', 'textarea_2', __( 'Disabled Textarea' ) )
	->disable();
$return[] = WPO\Field::create( 'textarea', 'textarea_3', __( 'Textarea Custom Styling' ) )
	->set_style( 'border:1px solid #343434;' )
	->set_style( 'color:green;font-weight:bold;' )
	->set_style( array( 'font-size' => '20px' ) );

/**
 * Prefix & Surfix.
 */
$return[] = WPO\Field::create( 'subheading', __( 'Prefix & Surfix' ) );
$return[] = WPO\Field::create( 'textarea', 'textarea_prefix_1', __( 'With Prefix' ) )
	->set_prefix( '$' );
$return[] = WPO\Field::create( 'textarea', 'textarea_surfix_1', __( 'With Surfix' ) )
	->set_surfix( 'USD' );
$return[] = WPO\Field::create( 'textarea', 'textarea_prefix_surfix_1', __( 'With Prefix & Surfix' ) )
	->set_prefix( '$' )
	->set_surfix( 'USD' );

return $return;
