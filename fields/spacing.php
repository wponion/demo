<?php
$return = array();

$return[] = WPO\Field::create( 'spacing', 'spacing', __( 'Spacing' ) );
$return[] = WPO\Field::create( 'spacing', 'spacing_1', __( 'Top & Bottom Spacing' ) )
	->desc( 'Provides Option Only To Configure Top & Bottom | Rest Are Disabled' )
	->left( false )
	->right( false );
$return[] = WPO\Field::create( 'spacing', 'spacing_2', __( 'Left & Right Spacing' ) )
	->desc( 'Provides Option Only To Configure Left & Right | Rest Are Disabled' )
	->top( false )
	->bottom( false );
$return[] = WPO\Field::create( 'spacing', 'spacing_3', __( 'Common / All Spacing' ) )
	->desc( 'If Common Spacing Enabled Then Each Direction Space Options are disbaled.' )
	->all( true );

$return[] = WPO\Field::create( 'spacing', 'spacing_4', __( 'Spacing With Fixed Unit' ) )
	->desc( 'Units are disabled and surfix appended to each field.' )
	->top( array( 'surfix' => 'px' ) )
	->bottom( array( 'surfix' => 'px' ) )
	->right( array( 'surfix' => 'px' ) )
	->left( array( 'surfix' => 'px' ) )
	->unit( false );
return $return;
