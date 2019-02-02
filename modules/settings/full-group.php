<?php
/**
 * @var \WPO\Container $c
 * @var \WPO\Container $s
 */
global $wpo;
$builder = new \WPO\Builder();


foreach ( $wpo as $c ) {
	if ( $c->has_fields() ) {
		$builder->container( $c->slug(), $c->title(), $c->icon() )
			->group( $c->slug(), $c->title(), array( 'fields' => $c->fields() ) );
	} elseif ( $c->has_containers() ) {
		$sub = $builder->container( $c->slug(), $c->title(), $c->icon() );
		foreach ( $c->containers() as $s ) {
			if ( $s->has_fields() ) {
				$sub->container( $s->slug(), $s->title(), $s->icon() )
					->group( $s->slug(), $s->title(), array( 'fields' => $s->fields() ) );
			}
		}
	}
}

$args = array(
	'option_name'     => '_wponion_group_demo',
	'framework_title' => __( 'WPOnion Group' ),
	'framework_desc'  => __( 'This demo shows how all fileds work inside a group' ),
	'theme'           => 'wp_modern',
	'is_single_page'  => false,
	'menu'            => array(
		'menu_title' => __( 'Full Group' ),
		'menu_slug'  => 'full-group',
		'submenu'    => 'wponion-demo',
	),
);

$instance = wponion_settings( $args, $builder );
