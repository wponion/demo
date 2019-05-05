<?php
$return = array();

$return[] = WPO\Field::create( 'notice' )
	->content( '<strong>WPOnion Group</strong> Supports All Field Types Inside Group' )
	->notice_type( 'success' );

/**
 * Simple Group
 */
$group = WPO\Field::create( 'group', 'group_1', __( 'Group' ) );
$group->text( 'text', __( 'Textfield' ) );
$group->textarea( 'textarea', __( 'Textarea' ) );
$group->checkbox( 'checkbox', __( 'Checkbox' ) )
	->label( 'I Agree' );
$return[] = $group;

/**
 * Simple Group
 */
$group = WPO\Field::create( 'group', 'group_6', __( 'Limited Group' ) );
$group->limit( 3 );
$group->desc_field( 'Only 3 Instnace of this group can be created.' );
$group->text( 'text', __( 'Textfield' ) );
$group->textarea( 'textarea', __( 'Textarea' ) );
$group->checkbox( 'checkbox', __( 'Checkbox' ) )
	->label( 'I Agree' );
$return[] = $group;

/**
 * Nested Group.
 */
$group3 = \WPO\Field::create( 'group', 'group_2', __( 'Nested Group' ) );
$group3->text( 'text', __( 'Textfield' ) );
$group3->textarea( 'textarea', __( 'Textarea' ) );
$group3->checkbox( 'checkbox', __( 'Checkbox' ) )
	->label( 'I Agree' );

/**
 * Nested Level 1
 */
$nested = $group3->group( 'group_nested', __( 'Nested Group' ) );
$nested->heading( 'Nested Level 1' );
$nested->text( 'text', __( 'Nested Textfield' ) );
$nested->textarea( 'textarea', __( 'Nested Textarea' ) );

/**
 * Nested Level 2
 */
$nested1 = $nested->group( 'group_nested' );
$nested1->heading( 'Nested Level 2' );
$nested1->text( 'text', __( 'Nested Textfield' ) );
$return[] = $group3;

$return[] = \WPO\Field::create( 'subheading', __( 'Static / Dynamic Heading' ) );

/**
 * Group With Static Heading.
 */
$group3 = WPO\Field::create( 'group', 'group_3', __( 'Static Heading' ) );
$group3->heading( 'Custom Field Set Heading' );
$group3->text( 'text', __( 'Textfield' ) );
$return[] = $group3;

/**
 * Group With Dynamic Count + Static Heading.
 */
$group4 = WPO\Field::create( 'group', 'group_4', __( 'Static Heading + Dynamic Count' ) );
$group4->heading( '#[count] Custom Field Set Heading' )
	->desc( 'To Get Dynamic Count please use <code>[count]</code>' );
$group4->text( 'text', __( 'Textfield' ) );
$return[] = $group4;

/**
 * Group With Dynamic Heading.
 */
$group5 = WPO\Field::create( 'group', 'group_5', __( 'Static Heading + Dynamic Count' ) );
$group5->heading( 'Hello yourname! Thanks for visiting us from yourlocation' );
$group5->text( 'yourname', __( 'Your Name : ' ) );
$group5->text( 'yourlocation', __( 'Where You Are From : ' ) );
$group5->desc( 'Add New Group And Fill Up First Field' );
$group5->desc_field( 'To Get Field Content In Group Heading just use the group title for eg : <code>Hello yourname! Thanks for visiting us from yourlocation</code>' );
$return[] = $group5;

return $return;
