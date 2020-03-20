<?php
$return = array();

$return[] = \WPO\Field::create( 'subheading', __( 'Text CSS Shadow' ) );
$return[] = WPO\Field::create( 'css_shadow', 'css_shadow', __( 'Text CSS Shadow' ) );
$return[] = WPO\Field::create( 'css_shadow', 'css_shadow_1', __( 'Text CSS Shadow Custom Text' ) )
	->preview( 'Custom Text To Show In Shadow Preview' );
$return[] = WPO\Field::create( 'css_shadow', 'css_shadow_2', __( 'Text CSS Shadow With No Preview' ) )
	->preview( false );


$return[] = \WPO\Field::create( 'subheading', __( 'Box CSS Shadow' ) );
$return[] = WPO\Field::create( 'css_shadow', 'box_css_shadow', __( 'Box CSS Shadow' ) )
	->shadow_type( 'box' );
$return[] = WPO\Field::create( 'css_shadow', 'box_css_shadow_1', __( 'Box CSS Shadow Custom Text' ) )
	->shadow_type( 'box' )
	->preview( 'Custom Text To Show In Shadow Preview' );
$return[] = WPO\Field::create( 'css_shadow', 'box_css_shadow_2', __( 'Box CSS Shadow With No Preview' ) )
	->shadow_type( 'box' )
	->preview( false );

return $return;
