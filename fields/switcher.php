<?php
$return = array();
/* translators: Add Custom HTML Link.*/
$return[] = \WPO\Field::create( 'content', sprintf( __( 'WPOnion Uses %1$sCSS Checkbox Library%2$s Plugin By hunzaboy | Please do refer %3$sonline documentation%2$s on how to use it.' ), '<a href="https://hunzaboy.github.io/CSS-Checkbox-Library/">', '</a>', '<a href="https://github.com/lokesh-coder/pretty-radio">' ) );
$return[] = \WPO\Field::create( 'subheading', __( 'Toggles/Switches' ) );

$return[] = \WPO\Field::create( 'switcher', 'switch_1', __( 'Switch Style 1' ) )
	->switch_style( 'style-1' );

$return[] = \WPO\Field::create( 'switcher', 'switch_2', __( 'Switch Style 2' ) )
	->switch_style( 'style-2' );

$return[] = \WPO\Field::create( 'switcher', 'switch_3', __( 'Switch Style 3' ) )
	->switch_style( 'style-3' );

$return[] = \WPO\Field::create( 'switcher', 'switch_4', __( 'Switch Style 4' ) )
	->switch_style( 'style-4' );

$return[] = \WPO\Field::create( 'switcher', 'switch_5', __( 'Switch Style 5' ) )
	->switch_style( 'style-5' );

$return[] = \WPO\Field::create( 'switcher', 'switch_6', __( 'Switch Style 6' ) )
	->switch_style( 'style-6' );

$return[] = \WPO\Field::create( 'switcher', 'switch_7', __( 'Switch Style 7' ) )
	->switch_style( 'style-7' );

$return[] = \WPO\Field::create( 'switcher', 'switch_8', __( 'Switch Style 8' ) )
	->switch_style( 'style-8' );

$return[] = \WPO\Field::create( 'switcher', 'switch_9', __( 'Switch Style 9' ) )
	->switch_style( 'style-9' );

$return[] = \WPO\Field::create( 'switcher', 'switch_9_ctxt', __( 'Switch Style 9 Custom Text' ) )
	->switch_style( 'style-9' )
	->on( __( 'Start' ) )
	->off( __( 'Stop' ) );

$return[] = \WPO\Field::create( 'switcher', 'switch_10', __( 'Switch Style 10' ) )
	->switch_style( 'style-10' );

$return[] = \WPO\Field::create( 'switcher', 'switch_11', __( 'Switch Style 11' ) )
	->switch_style( 'style-11' );

$return[] = \WPO\Field::create( 'switcher', 'switch_12', __( 'Switch Style 12' ) )
	->switch_style( 'style-12' );

$return[] = \WPO\Field::create( 'switcher', 'switch_13', __( 'Switch Style 13' ) )
	->switch_style( 'style-13' );

$return[] = \WPO\Field::create( 'switcher', 'switch_14', __( 'Switch Style 14' ) )
	->switch_style( 'style-14' );

$return[] = \WPO\Field::create( 'switcher', 'switch_14_ctxt', __( 'Switch Style 14 Custom Text' ) )
	->switch_style( 'style-14' )
	->on( __( 'Start' ) )
	->off( __( 'Stop' ) );

$return[] = \WPO\Field::create( 'switcher', 'switch_15', __( 'Switch Style 15' ) )
	->switch_style( 'style-15' );

$return[] = \WPO\Field::create( 'switcher', 'switch_16', __( 'Switch Style 16' ) )
	->switch_style( 'style-16' );

$return[] = \WPO\Field::create( 'switcher', 'switch_17', __( 'Switch Style 17' ) )
	->switch_style( 'style-17' );

$return[] = \WPO\Field::create( 'subheading', __( 'Circles' ) );

$return[] = \WPO\Field::create( 'switcher', 'switch_18', __( 'Switch Circle Style 1' ) )
	->switch_style( 'circle-1' );

$return[] = \WPO\Field::create( 'switcher', 'switch_19', __( 'Switch Circle Style 2' ) )
	->switch_style( 'circle-2' );

$return[] = \WPO\Field::create( 'switcher', 'switch_19', __( 'Switch Circle Style 3' ) )
	->switch_style( 'circle-3' );

$return[] = \WPO\Field::create( 'switcher', 'switch_20', __( 'Switch Circle Style 4' ) )
	->switch_style( 'circle-4' );

$return[] = \WPO\Field::create( 'subheading', __( 'Square' ) );

$return[] = \WPO\Field::create( 'switcher', 'switch_21', __( 'Switch Square Style 1' ) )
	->switch_style( 'square-1' );

$return[] = \WPO\Field::create( 'switcher', 'switch_22', __( 'Switch Square Style 2' ) )
	->switch_style( 'square-2' );

$return[] = \WPO\Field::create( 'switcher', 'switch_23', __( 'Switch Square Style 3' ) )
	->switch_style( 'square-3' );

$return[] = \WPO\Field::create( 'switcher', 'switch_24', __( 'Switch Square Style 4' ) )
	->switch_style( 'square-4' );

$return[] = \WPO\Field::create( 'subheading', __( 'Sizes' ) );

$return[] = \WPO\Field::create( 'switcher', 'switch_25', __( 'Switch Size small' ) )
	->switch_style( 'style-1' )
	->switch_size( 'small' );

$return[] = \WPO\Field::create( 'switcher', 'switch_26', __( 'Switch Size Normal' ) )
	->switch_style( 'style-1' );

$return[] = \WPO\Field::create( 'switcher', 'switch_27', __( 'Switch Size Large' ) )
	->switch_style( 'style-1' )
	->switch_size( 'large' );

$return[] = \WPO\Field::create( 'switcher', 'switch_28', __( 'Switch Size xLarge' ) )
	->switch_style( 'style-1' )
	->switch_size( 'xlarge' );

return $return;
