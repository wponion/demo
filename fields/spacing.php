<?php
$return = array();

$return[] = WPO\Field::create( 'spacing', 'spacing', __( 'Spacing' ) );
$return[] = WPO\Field::create( 'spacing', 'spacing_1', __( 'Top & Bottom Spacing' ) )
	->set_desc( 'Provides Option Only To Configure Top & Bottom | Rest Are Disabled' )
	->set_left( false )
	->set_right( false );
$return[] = WPO\Field::create( 'spacing', 'spacing_2', __( 'Left & Right Spacing' ) )
	->set_desc( 'Provides Option Only To Configure Left & Right | Rest Are Disabled' )
	->set_top( false )
	->set_bottom( false );
$return[] = WPO\Field::create( 'spacing', 'spacing_3', __( 'Common / All Spacing' ) )
	->set_desc( 'If Common Spacing Enabled Then Each Direction Space Options are disbaled.' )
	->set_all( true );

$return[] = WPO\Field::create( 'spacing', 'spacing_4', __( 'Spacing With Fixed Unit' ) )
	->set_desc( 'Units are disabled and surfix appended to each field.' )
	->set_top( array( 'surfix' => 'px' ) )
	->set_bottom( array( 'surfix' => 'px' ) )
	->set_right( array( 'surfix' => 'px' ) )
	->set_left( array( 'surfix' => 'px' ) )
	->set_unit( false );
return $return;
