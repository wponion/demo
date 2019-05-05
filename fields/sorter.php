<?php
$return = array();

$return[] = WPO\Field::create( 'sorter', 'sorter', __( 'Sorter' ) )
	->enabled( array(
		'bmw'        => 'BMW',
		'mercedes'   => 'Mercedes',
		'volkswagen' => 'Volkswagen',
	) )
	->disabled( array(
		'ferrari' => 'Ferrari',
		'mustang' => 'Mustang',
	) );

$return[] = WPO\Field::create( 'sorter', 'sorter_2', __( 'Sorter With Custom Labels' ) )
	->enabled( array(
		'blue'   => 'Blue',
		'green'  => 'Green',
		'red'    => 'Red',
		'yellow' => 'Yellow',
		'orange' => 'Orange',
		'grey'   => 'Grey',
		'silver' => 'Silver',
	) )
	->disabled( array(
		'black' => 'Black',
		'white' => 'White',
	) )
	->enabled_title( __( 'Active Colors' ) )
	->disabled_title( __( 'Inactive Colors' ) );

$return[] = WPO\Field::create( 'sorter', 'sorter_3', __( 'Sorter With Single Group' ) )
	->enabled( array(
		'blue'   => 'Blue',
		'green'  => 'Green',
		'red'    => 'Red',
		'yellow' => 'Yellow',
		'orange' => 'Orange',
		'grey'   => 'Grey',
		'silver' => 'Silver',
	) );

return $return;
