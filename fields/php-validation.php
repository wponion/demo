<?php
$return = array();

$return[] = WPO\Field::create( 'text', 'text', __( 'Required Textfield' ) )
	->validate( 'wponion_is_required' )
	->desc( 'This field is validated via php and its required (cannot be empty)' );

$return[] = WPO\Field::create( 'text', 'text_1', __( 'Required Textfield With Custom Error MSG' ) )
	->validate( array( 'wponion_is_required' => __( 'Please Provide A Valid Input. This Field Cannot Be Empty.' ) ) )
	->desc( 'This field is validated via php and its required (cannot be empty)' );

$return[] = WPO\Field::create( 'text', 'email', __( 'Required Email' ) )
	->validate( 'wponion_is_email' )
	->desc( 'This field is validated via php and its required (cannot be empty) AND IT should be an Email' );

$return[] = WPO\Field::create( 'text', 'url', __( 'Required Website URL' ) )
	->validate( 'wponion_is_url' )
	->desc( 'Field Accecpts only Website Urls.' );

return $return;
