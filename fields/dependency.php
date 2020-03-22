<?php
$return = array();

$return[]  = wpo_field( 'subheading', __( 'Checkbox Dependency' ) );
$return[]  = wpo_field( 'notice', __( 'Text field will be enabled and revealed when the below checkbox is checked.' ) );
$return[]  = wpo_field( 'checkbox', 'checkbox_1', __( 'Check me ' ) )->label( __( 'Check To Enable A Text Field' ) );
$textfield = wpo_field( 'text', 'text_1', __( 'Textfield' ) );
$textfield->dependency( 'checkbox_1', 'checked', 'true' );
$return[] = $textfield;


$return[]     = wpo_field( 'subheading', __( 'Word Dependency' ) );
$return[]     = wpo_field( 'notice', __( 'A Notice will be revealed when the text field value is either <code>yes</code> or <code>true</code>>' ) );
$return[]     = wpo_field( 'text', 'text_2', __( 'Show Notice ?' ) );
$notice_field = wpo_field( 'notice', __( 'You Have Successfully Found The Hidden Notice' ) )->notice_type( 'warning' );
$notice_field->dependency( 'text_2', 'values', array( 'yes', 'true' ) );
$return[] = $notice_field;

$return[]     = wpo_field( 'subheading', __( 'Multiple Dependencies' ) );
$return[]     = wpo_field( 'notice', __( 'A Notice will be revealed when the checkbox is checked and the text field value is an email address' ) );
$return[]     = wpo_field( 'checkbox', 'checkbox_2', __( 'Send Emails ? ' ) );
$return[]     = wpo_field( 'text', 'text_3', __( 'Your Email ID' ) );
$notice_field = wpo_field( 'notice', __( 'You Have Successfully Found The Hidden Notice' ) )->notice_type( 'warning' );
$notice_field->dependency( 'checkbox_2', 'checked', 'true' )
	->rule( 'text_3', 'email', true );
$return[] = $notice_field;

$return[]  = wpo_field( 'subheading', __( 'Modifying Field Value' ) );
$return[]  = wpo_field( 'notice', __( 'Change the text field value when the select menu changes.' ) );
$return[]  = wpo_field( 'select', 'select_1', __( 'Enable ? ' ) )
	->option( 'Yes', 'Yes' )
	->option( 'No', 'No' );
$textfield = wpo_field( 'text', 'text_4', __( 'Your Message' ) );
$textfield->dependency( 'select_1', 'values', array( 'Yes' ) );
$textfield->dependency_settings( array(
	'valueOnEnable'  => 'Hello, world!',
	'valueOnDisable' => 'Goodbye, cruel world...',
	'hide'           => false,
) );
$return[] = $textfield;


return $return;
