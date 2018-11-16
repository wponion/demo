<?php
/**
 *
 * Project : wponion
 * Date : 14-11-2018
 * Time : 03:49 PM
 * File : validation.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'          => 'validation_text',
		'title'       => __( 'Text' ),
		'js_validate' => 'required',
		'desc'        => __( 'This field cannot be empty' ),
		'type'        => 'text',
	),
	array(
		'id'          => 'validation_textarea',
		'title'       => __( 'Textarea' ),
		'js_validate' => array(
			'minlength' => 4,
			'maxlength' => 10,
		),
		'desc'        => __( 'This field requires min of 4 to 10 char length' ),
		'type'        => 'textarea',
	),
	array(
		'id'          => 'validation_checkbox',
		'title'       => __( 'Checkbox' ),
		'js_validate' => 'required',
		'desc'        => __( 'This field is required' ),
		'type'        => 'checkbox',
	),
	array(
		'id'          => 'validation_switcher',
		'title'       => __( 'Switcher' ),
		'js_validate' => 'required',
		'desc'        => __( 'This field is required' ),
		'type'        => 'switcher',
	),
	array(
		'id'          => 'validation_checkbox_group',
		'title'       => __( 'Group Checkbox' ),
		'js_validate' => 'required',
		'type'        => 'checkbox',
		'options'     => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'          => 'validation_select',
		'title'       => __( 'Select' ),
		'js_validate' => 'required',
		'type'        => 'select',
		'select2'     => true,
		'options'     => array(
			''        => __( 'Choose Any' ),
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'          => 'validation_image_select_radio',
		'image_type'  => 'checkbox',
		'title'       => __( 'Image Select' ),
		'js_validate' => 'required',
		'desc'        => __( 'You can select multiple images' ),
		'type'        => 'image_select',
		'options'     => array(
			'image1' => 'https://s3.wponion.com/placeholder/75/1.jpg',
			'image2' => 'https://s3.wponion.com/placeholder/75/2.jpg',
			'image3' => 'https://s3.wponion.com/placeholder/75/3.jpg',
			'image4' => 'https://s3.wponion.com/placeholder/75/4.jpg',
			'image5' => 'https://s3.wponion.com/placeholder/75/5.jpg',
		),
	),

	array(
		'id'          => 'validate_key_value',
		'title'       => __( 'Key Value' ),
		'type'        => 'key_value',
		'js_validate' => array(
			'value' => 'required',
		),
	),

);
