<?php
$return = array();

$return[] = WPO\Field::create( 'sorter', 'sorter', __( 'Sorter' ) )
	->set_enabled( array(
		'bmw'        => 'BMW',
		'mercedes'   => 'Mercedes',
		'volkswagen' => 'Volkswagen',
	) )
	->set_disabled( array(
		'ferrari' => 'Ferrari',
		'mustang' => 'Mustang',
	) );

$return[] = WPO\Field::create( 'sorter', 'sorter_2', __( 'Sorter With Custom Labels' ) )
	->set_enabled( array(
		'blue'   => 'Blue',
		'green'  => 'Green',
		'red'    => 'Red',
		'yellow' => 'Yellow',
		'orange' => 'Orange',
		'grey'   => 'Grey',
		'silver' => 'Silver',
	) )
	->set_disabled( array(
		'black' => 'Black',
		'white' => 'White',
	) )
	->set_enabled_title( __( 'Active Colors' ) )
	->set_disabled_title( __( 'Inactive Colors' ) );

$return[] = WPO\Field::create( 'sorter', 'sorter_3', __( 'Sorter With Single Group' ) )
	->set_enabled( array(
		'blue'   => 'Blue',
		'green'  => 'Green',
		'red'    => 'Red',
		'yellow' => 'Yellow',
		'orange' => 'Orange',
		'grey'   => 'Grey',
		'silver' => 'Silver',
	) );

return $return;
