<?php
$return = array();

$return[] = WPO\Field::create( 'text', 'yourname', __( 'Your Name' ) );
$return[] = WPO\Field::create( 'textarea', 'youraddress', __( 'Your Address' ) );
$return[] = WPO\Field::create( 'divider', 'OR' );
$return[] = WPO\Field::create( 'text', 'yournumber', __( 'Your Mobile No' ) );
$return[] = WPO\Field::create( 'text', 'yoremail', __( 'Your Email' ) );
$return[] = WPO\Field::create( 'notice_info', 'Divider Can also have Custom Text' );

$return[] = WPO\Field::create( 'text', 'yourname2', __( 'Your Name' ), array( 'wrap_class' => 'col-xs-12 col-sm-12 col-lg-6' ) );
$return[] = WPO\Field::create( 'textarea', 'youraddress2', __( 'Your Address' ), array( 'wrap_class' => 'col-xs-12 col-sm-12 col-lg-6' ) );
$return[] = WPO\Field::create( 'divider', 'OR' );
$return[] = WPO\Field::create( 'text', 'yournumber2', __( 'Your Mobile No' ), array( 'wrap_class' => 'col-xs-12 col-sm-12 col-lg-6' ) );
$return[] = WPO\Field::create( 'text', 'yoremail2', __( 'Your Email' ), array( 'wrap_class' => 'col-xs-12 col-sm-12 col-lg-6' ) );

return $return;
