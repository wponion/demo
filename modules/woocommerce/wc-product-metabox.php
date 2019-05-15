<?php

$builder = wponion_builder();

// Below Text Field Shows in General TAB in WooCommerce
$builder->container( 'general' )
	->text( 'textfield', __( 'Shows Only In General TAB' ) );

$customtab = $builder->container( 'custom-tab', __( 'WPonion Custom Tab' ) );
$customtab->textarea( 'textareafield', __( 'Custom Textarea' ) )
	->horizontal( true );

$customtab->image( 'product_image', __( 'Product 2nd Image' ), array(
	'variation'  => true,
	'desc_field' => __( 'This Field Will Show in both variation & this tab' ),
) );
$customtab->icon_picker( 'product_icon', __( 'Variation Icon' ), array(
	'variation'  => 'only',
	'desc_field' => __( 'This Field Will Show in only variation' ),
) );

wponion_wc_product( array(
	'option_name' => '_wponion_demo_wc',
), $builder );
