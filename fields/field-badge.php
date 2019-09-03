<?php

use \WPO\Field as Field;

$return = array();

/**
 * Field Badge
 */
$return[] = Field::create( 'text', 'field_badge1', __( 'Badge top-left' ) )
	->badge( __( 'NEW' ) );
$return[] = Field::create( 'text', 'field_badge2', __( 'Badge top-center' ) )
	->badge( array(
		'placement' => 'top-center',
		'content'   => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge3', __( 'Badge top-right' ) )
	->badge( array(
		'placement' => 'top-right',
		'content'   => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge4', __( 'Badge bottom-left' ) )
	->badge( array(
		'placement' => 'bottom-left',
		'content'   => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge5', __( 'Badge bottom-center' ) )
	->badge( array(
		'placement' => 'bottom-center',
		'content'   => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge6', __( 'Badge bottom-right' ) )
	->badge( array(
		'placement' => 'bottom-right',
		'content'   => __( 'NEW' ),
	) );

$return[] = Field::create( 'subheading', __( 'Badge Colors' ) );
$return[] = Field::create( 'text', 'field_badge7', __( 'PRIMARY' ) )
	->badge( array(
		'type'    => 'primary',
		'content' => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge8', __( 'SECONDARY' ) )
	->badge( array(
		'type'    => 'secondary',
		'content' => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge9', __( 'SUCCESS' ) )
	->badge( array(
		'type'    => 'success',
		'content' => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge10', __( 'WARNING' ) )
	->badge( array(
		'type'    => 'warning',
		'content' => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge11', __( 'INFO' ) )
	->badge( array(
		'type'    => 'info',
		'content' => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge12', __( 'DANGER' ) )
	->badge( array(
		'type'    => 'danger',
		'content' => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge13', __( 'LIGHT' ) )
	->badge( array(
		'type'    => 'light',
		'content' => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge14', __( 'DARK' ) )
	->badge( array(
		'type'    => 'dark',
		'content' => __( 'NEW' ),
	) );

$return[] = Field::create( 'subheading', __( 'Badge Options' ) );

$return[] = Field::create( 'text', 'field_badge15', __( 'Outline' ) )
	->badge( array(
		'type'    => 'success',
		'outline' => true,
		'content' => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge16', __( 'Pointer' ) )
	->badge( array(
		'type'    => 'dark',
		'pointer' => true,
		'content' => __( 'NEW' ),
	) );
$return[] = Field::create( 'text', 'field_badge17', __( 'Pointer & Outline' ) )
	->badge( array(
		'type'    => 'danger',
		'pointer' => true,
		'outline' => true,
		'content' => __( 'NEW' ),
	) );
return $return;
