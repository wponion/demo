<?php
global $wpof, $wpo;

$wpo  = array();
$wpof = array();

$wpof['basic_feature'] = wponion_field_file( 'basic-feature.php' );


$wpo[] = WPO\Container::create( 'basic_feature', 'Basic Feature' )
	->set_fields( $wpof['basic_feature'] );
