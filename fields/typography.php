<?php
$return = array();

$return[] = \WPO\Field::create( 'typography', 'typography', __( 'Typography' ) );
$return[] = \WPO\Field::create( 'typography', 'typography_1', __( 'Custom Preview Text' ) )
	->preview( 'This is a Custom Preview Text' );
$return[] = \WPO\Field::create( 'subheading', __( 'Basic Options' ) );
$return[] = \WPO\Field::create( 'typography', 'typography_2', __( 'Without Font Family' ) )
	->font_family( false )
	->backup_font( false );
$return[] = \WPO\Field::create( 'typography', 'typography_2', __( 'Without Font Sizes & Colors' ) )
	->line_height( false )
	->font_size( false )
	->letter_spacing( false )
	->color( false );

$return[] = \WPO\Field::create( 'typography', 'typography_3', __( 'Only Font Family' ) )
	->line_height( false )
	->font_size( false )
	->font_weight( false )
	->font_style( false )
	->text_align( false )
	->writing_mode( false )
	->text_orientation( false )
	->text_direction( false )
	->text_transform( false )
	->text_decoration_line( false )
	->text_decoration_style( false )
	->text_decoration_color( false )
	->letter_spacing( false )
	->color( false );

return $return;
