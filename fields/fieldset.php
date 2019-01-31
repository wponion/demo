<?php
$return = array();

$return[] = WPO\Field::create( 'notice' )
	->set_content( '<strong>WPOnion Fieldset</strong> Supports All Field Types Inside A Fieldset' )
	->set_notice_type( 'success' );

/**
 * Simple Fieldset
 */
$fieldset = WPO\Field::create( 'fieldset', 'fieldset_1', __( 'Fieldset' ) );
$fieldset->text( 'text', __( 'Textfield' ) );
$fieldset->textarea( 'textarea', __( 'Textarea' ) );
$fieldset->checkbox( 'checkbox', __( 'Checkbox' ) )
	->set_label( 'I Agree' );
$return[] = $fieldset;

/**
 * Fieldset With Heading.
 */
$fieldset2 = WPO\Field::create( 'fieldset', 'fieldset_2', __( 'Fieldset' ) );
$fieldset2->set_heading( 'Custom Field Set Heading' );
$fieldset2->text( 'text', __( 'Textfield' ) );
$fieldset2->textarea( 'textarea', __( 'Textarea' ) );
$fieldset2->checkbox( 'checkbox', __( 'Checkbox' ) )
	->set_label( 'I Agree' );
$return[] = $fieldset2;

/**
 * Nested Fieldset.
 */
$fieldset3 = \WPO\Field::create( 'fieldset', 'fieldset_3', __( 'Nested Fieldset' ) );
$fieldset3->text( 'text', __( 'Textfield' ) );
$fieldset3->textarea( 'textarea', __( 'Textarea' ) );
$fieldset3->checkbox( 'checkbox', __( 'Checkbox' ) )
	->set_label( 'I Agree' );

/**
 * Nested Level 1
 */
$nested = $fieldset3->fieldset( 'fieldset_nested', __( 'Nested Fieldset' ) );
$nested->set_heading( 'Nested Level 1' );
$nested->text( 'text', __( 'Nested Textfield' ) );
$nested->textarea( 'textarea', __( 'Nested Textarea' ) );

/**
 * Nested Level 2
 */
$nested1 = $nested->fieldset( 'fieldset_nested' );
$nested1->set_heading( 'Nested Level 2' );
$nested1->text( 'text', __( 'Nested Textfield' ) );

$return[] = $fieldset3;

return $return;
