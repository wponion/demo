<?php

function wponion_demo_wc_product_metabox() {
	$builder = wponion_builder();
	$builder->container( 'general' )->text( 'textfield', __( 'Shows Only In General TAB' ) );
	$customtab = $builder->container( 'custom-tab', __( 'WPonion Custom Tab' ) );
	$customtab->textarea( 'textareafield', __( 'Custom Textarea' ) )->horizontal( true );
	$customtab              = $customtab->accordion( 'myacc' );
	$customtab['variation'] = 'only';
	$customtab->image( 'product_image', __( 'Product 2nd Image' ), array(
		'variation'  => true,
		'desc_field' => __( 'This Field Will Show in both variation & this tab' ),
	) );
	$customtab->icon_picker( 'product_icon', __( 'Variation Icon' ), array(
		'variation'  => 'only',
		'desc_field' => __( 'This Field Will Show in only variation' ),
	) )->validate( 'wponion_is_required' );
	return $builder;
}

wponion_wc_product( array(
	'option_name' => '_wponion_demo_wc',
), 'wponion_demo_wc_product_metabox' );
