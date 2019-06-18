<?php

$return = array();


/**
 * Simple Swal Modal Field.
 */
$swal_modal_field = wpo_field( 'accordion', 'accordion', __( 'Accordion' ) )->horizontal( true );
$swal_modal_field->text( 'text', __( 'Text Field' ) );
$return[] = \WPO\Field::create( 'modal', 'modal', __( 'Simple Swal Modal' ), array(
	'modal_config' => array(
		'width' => 800,
	),
	'fields'       => array(
		wpo_field( 'text', 'textfield', __( 'Text Field' ) )->js_validate( 'required' ),
		wpo_field( 'textarea', 'textareafield', __( 'Textarea Field' ) ),
		$swal_modal_field,
	),
) );

/**
 * Just WP Modal With Fields.
 */
$return[] = \WPO\Field::create( 'modal', 'wp_modal_single', __( 'WP Modal With Fields' ), array(
	'fields'     => array(
		wpo_field( 'text', 'textfield', __( 'Text Field' ) ),
	),
	'modal_type' => 'wp',
) )
	->desc( 'Just WP Modal With Fields.' );


/**
 * Single Main Container With 2 Sub Container.
 */
$modal_page   = wpo_container( 'page1', __( 'Page 1' ), 'dashicons dashicons-admin-generic' );
$mpg_section1 = $modal_page->container( 'section1', __( 'Section 1' ), 'dashicons dashicons-admin-generic' )
	->set_var( 'sidebar', __( 'Sidebar Content' ) );
$mpg_section2 = $modal_page->container( 'section2', __( 'Section 2' ), 'dashicons dashicons-admin-generic' );
$mpg_section1->textarea( 'big_textarea', __( 'Big Textarea' ) );
$mpg_section2->icon_picker( 'icon_picker_big', __( 'Simple Icon Picker' ) );
$return[] = \WPO\Field::create( 'modal', 'wp_modal_sections', __( 'WP Modal With Sub Section' ), array(
	'fields'     => $modal_page,
	'modal_type' => 'wp',
) )
	->desc( 'Single Main Container With 2 Sub Container.' );

/**
 * Just Containers & Field.
 */
$just_container = wpo_container( 'just-container', __( 'Just Container' ) );
$just_container->color_picker( 'color_picker', __( 'Big Modal Color Picker' ) );
$return[] = \WPO\Field::create( 'modal', 'wp_modal_single_container', __( 'WP Modal With Title & Fields' ), array(
	'fields'     => $just_container,
	'modal_type' => 'wp',
) )
	->desc( 'Just Single Container With Just Fields.' );

/**
 * With Containers , Sub Containers
 */
$modal_builder = wpo_builder();
$modal_page1   = $modal_builder->container( 'page1', __( 'Page 1' ) );
$modal_page1->textarea( 'big_textareabase', __( 'Big Textarea ' ) );
$modal_page2         = $modal_builder->container( 'page2', __( 'Page 2' ) );
$modal_page_section1 = $modal_page2->container( 'section1', __( 'Section 1' ), 'dashicons dashicons-admin-generic' );
$modal_page_section1->textarea( 'big_textarea', __( 'Big Textarea' ) );
$modal_page_section2 = $modal_page2->container( 'section2', __( 'Section 2' ), 'dashicons dashicons-admin-generic' );
$modal_page_section2->icon_picker( 'icon_picker_big', __( 'Simple Icon Picker' ) );
$return[] = \WPO\Field::create( 'modal', 'wp_modal_containers_sections', __( 'WP Modal With Containers & Sub Section' ), array(
	'fields'       => $modal_builder,
	'modal_config' => array( 'size' => 'default' ),
	'modal_type'   => 'wp',
) )
	->desc( 'Full Functions.' );


return $return;
