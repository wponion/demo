<?php
/**
 * @var \WPO\Container $c
 * @var \WPO\Container $s
 */
function wponion_demo_settings_full_group() {
	global $wpo;
	$builder = new \WPO\Builder();


	foreach ( $wpo as $c ) {
		if ( $c->has_fields() ) {
			$builder->container( $c->slug(), $c->title(), $c->icon() )
				->accordion( $c->slug(), $c->title(), array( 'fields' => $c->fields() ) );
		} elseif ( $c->has_containers() ) {
			$sub = $builder->container( $c->slug(), $c->title(), $c->icon() );
			foreach ( $c->containers() as $s ) {
				if ( $s->has_fields() ) {
					$sub->container( $s->slug(), $s->title(), $s->icon() )
						->accordion( $s->slug(), $s->title(), array( 'fields' => $s->fields() ) );
				}
			}
		}
	}

	return $builder;
}

$args = array(
	'option_name'     => '_wponion_accordion_demo',
	'framework_title' => __( 'WPOnion Accordion' ),
	'framework_desc'  => __( 'This demo shows how all fileds work inside a accordion' ),
	'theme'           => 'wp_modern',
	'is_single_page'  => false,
	'menu'            => array(
		'menu_title' => __( 'Full Accordion' ),
		'menu_slug'  => 'full-accordion',
		'submenu'    => 'wponion-settings-demo',
	),
);

$instance = wponion_settings( $args, 'wponion_demo_settings_full_group' );
