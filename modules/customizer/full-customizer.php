<?php
if ( wponion_is_debug() ) {
	/**
	 * @var \WPO\Container $data
	 */
	global $wpo;
	$builder = wponion_builder();

	foreach ( $wpo as $data ) {
		$data->set_title( __( 'WPOnion' ) . ' ' . $data->title() );
		$data->set_slug( 'wponion_' . $data->slug() );
		$builder->container( $data );
	}

	$customizer = wponion_customizer( array(
		'option_name' => '_wponion_full_customizer_demo',
	), $builder );
}
