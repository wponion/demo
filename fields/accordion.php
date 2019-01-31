<?php
$return = array();

$return[] = WPO\Field::create( 'notice' )
	->set_content( '<strong>WPOnion Accordion</strong> Supports All Field Types Inside Accordion' )
	->set_notice_type( 'success' );

/**
 * Simple Accordion
 */
$accordion = WPO\Field::create( 'accordion', 'accordion_1', __( 'Accordion' ) );
$accordion->text( 'text', __( 'Textfield' ) );
$accordion->textarea( 'textarea', __( 'Textarea' ) );
$accordion->checkbox( 'checkbox', __( 'Checkbox' ) )
	->set_label( 'I Agree' );
$return[] = $accordion;

/**
 * Accordion With Heading.
 */
$accordion2 = WPO\Field::create( 'accordion', 'accordion_2', __( 'Accordion' ) );
$accordion2->set_heading( 'Custom Field Set Heading' );
$accordion2->text( 'text', __( 'Textfield' ) );
$accordion2->textarea( 'textarea', __( 'Textarea' ) );
$accordion2->checkbox( 'checkbox', __( 'Checkbox' ) )
	->set_label( 'I Agree' );
$return[] = $accordion2;

/**
 * Nested Accordion.
 */
$accordion3 = \WPO\Field::create( 'accordion', 'accordion_3', __( 'Nested Accordion' ) );
$accordion3->text( 'text', __( 'Textfield' ) );
$accordion3->textarea( 'textarea', __( 'Textarea' ) );
$accordion3->checkbox( 'checkbox', __( 'Checkbox' ) )
	->set_label( 'I Agree' );

/**
 * Nested Level 1
 */
$nested = $accordion3->accordion( 'accordion_nested', __( 'Nested Accordion' ) );
$nested->set_heading( 'Nested Level 1' );
$nested->text( 'text', __( 'Nested Textfield' ) );
$nested->textarea( 'textarea', __( 'Nested Textarea' ) );

/**
 * Nested Level 2
 */
$nested1 = $nested->accordion( 'accordion_nested' );
$nested1->set_heading( 'Nested Level 2' );
$nested1->text( 'text', __( 'Nested Textfield' ) );

$return[] = $accordion3;

return $return;
