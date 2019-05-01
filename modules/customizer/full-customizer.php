<?php
if ( wponion_is_debug() ) {
	/**
	 * @var \WPO\Container $_data
	 * @var \WPO\Container $data
	 */
	global $wpo;
	$cb = wponion_builder();

	foreach ( $wpo as $_data ) {
		$data = $_data->_clone();
		$data->set_title( __( 'WPOnion' ) . ' ' . $data->title() );
		$data->set_slug( 'wponion_' . $data->slug() );
		$cb->container( $data );
	}

	$customizer = wponion_customizer( array(
		'option_name' => '_wponion_full_customizer_demo',
	), $cb );
}
