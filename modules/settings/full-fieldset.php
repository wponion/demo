<?php
function wponion_demo_settings_full_fieldset() {
	global $wpo;
	/**
	 * @var \WPO\Container $c
	 * @var \WPO\Container $s
	 */

	$builder = new \WPO\Builder();
	foreach ( $wpo as $c ) {
		if ( $c->has_fields() ) {
			$builder->container( $c->slug(), $c->title(), $c->icon() )
				->fieldset( $c->slug(), $c->title(), array( 'fields' => $c->fields() ) );
		} elseif ( $c->has_containers() ) {
			$sub = $builder->container( $c->slug(), $c->title(), $c->icon() );
			foreach ( $c->containers() as $s ) {
				if ( $s->has_fields() ) {
					$sub->container( $s->slug(), $s->title(), $s->icon() )
						->fieldset( $s->slug(), $s->title(), array( 'fields' => $s->fields() ) );
				}
			}
		}
	}
	return $builder;
}


$args = array(
	'option_name'     => '_wponion_fieldset_demo',
	'framework_title' => __( 'WPOnion Fieldset' ),
	'framework_desc'  => __( 'This demo shows how all fileds work inside a Fieldset' ),
	'theme'           => 'wp_modern',
	'is_single_page'  => false,
	'menu'            => array(
		'menu_title' => __( 'Full Fieldset' ),
		'menu_slug'  => 'full-fieldset',
		'submenu'    => 'wponion-settings-demo',
	),
);

$instance = wponion_settings( $args, 'wponion_demo_settings_full_fieldset' );
