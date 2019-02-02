<?php
$return = array();

$return[] = WPO\Field::create( 'text', 'text', __( 'Required Textfield' ) )
	->set_validate( 'wponion_is_required' )
	->set_desc( 'This field is validated via php and its required (cannot be empty)' );

$return[] = WPO\Field::create( 'text', 'text_1', __( 'Required Textfield With Custom Error MSG' ) )
	->set_validate( array( 'wponion_is_required' => __( 'Please Provide A Valid Input. This Field Cannot Be Empty.' ) ) )
	->set_desc( 'This field is validated via php and its required (cannot be empty)' );

$return[] = WPO\Field::create( 'text', 'email', __( 'Required Email' ) )
	->set_validate( 'wponion_is_email' )
	->set_desc( 'This field is validated via php and its required (cannot be empty) AND IT should be an Email' );

$return[] = WPO\Field::create( 'text', 'url', __( 'Required Website URL' ) )
	->set_validate( 'wponion_is_url' )
	->set_desc( 'Field Accecpts only Website Urls.' );

return $return;
