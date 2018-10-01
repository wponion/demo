<?php
/**
 *
 * Project : bullet-wp
 * Date : 30-07-2018
 * Time : 07:04 AM
 * File : fields.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package bullet-wp
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

$wpof_all_colors              = \WPOnion\Helper::get_material_design_colors( 'all' );
$wpof_color_1                 = \WPOnion\Helper::get_material_design_colors( 100 );
$wpof_color_2                 = \WPOnion\Helper::get_material_design_colors( 200 );
$wpof                         = array();
$wpof['features']             = array(
	array(
		'id'    => 'features_text',
		'title' => __( 'Simple Text Field' ),
		'type'  => 'text',
	),
	array(
		'id'    => 'features_text_2',
		'title' => __( 'Simple Text Field' ),
		'desc'  => __( 'Here is some field description and this how it looks like :D ' ),
		'type'  => 'text',
	),
	array(
		'id'         => 'features_text_3',
		'title'      => __( 'Simple Text Field' ),
		'desc_field' => __( 'Here is some field description and this how it looks like :D ' ),
		'type'       => 'text',
	),
	array(
		'id'         => 'features_text_4',
		'desc_field' => __( 'Just the field with description but without title' ),
		'type'       => 'text',
	),
	array(
		'id'         => 'features_text_5',
		'title'      => __( 'Textfield In a 4 ColLayout' ),
		'column'     => 3,
		'desc_field' => __( 'Here is some field description and this how it looks like :D ' ),
		'type'       => 'text',
	),
	array(
		'id'         => 'features_text_6',
		'title'      => __( 'Textfield In a 4 ColLayout' ),
		'column'     => 6,
		'desc_field' => __( 'Here is some field description and this how it looks like :D ' ),
		'type'       => 'text',
	),
	array(
		'id'         => 'features_text_7',
		'title'      => __( 'Textfield In a 4 ColLayout' ),
		'column'     => 3,
		'desc_field' => __( 'Here is some field description and this how it looks like :D ' ),
		'type'       => 'text',
	),
	array(
		'id'         => 'features_text_8',
		'title'      => __( 'horizontal layout' ),
		'horizontal' => true,
		'desc_field' => __( 'Here is some field description and this how it looks like :D ' ),
		'type'       => 'text',
	),
	array(
		'id'         => 'features_text_9',
		'title'      => __( 'Textfield In a 4 Col& horizontal Layout' ),
		'column'     => 4,
		'horizontal' => true,
		'desc_field' => __( 'Here is some field description and this how it looks like :D ' ),
		'type'       => 'text',
	),
	array(
		'id'         => 'features_text_10',
		'title'      => __( 'Textfield In a 4 Col& horizontal Layout' ),
		'column'     => 4,
		'horizontal' => true,
		'desc_field' => __( 'Here is some field description and this how it looks like :D ' ),
		'type'       => 'text',
	),
	array(
		'id'         => 'features_text_11',
		'title'      => __( 'Textfield In a 4 Col& horizontal Layout' ),
		'column'     => 4,
		'horizontal' => true,
		'desc_field' => __( 'Here is some field description and this how it looks like :D ' ),
		'type'       => 'text',
	),
	array(
		'id'     => 'features_text_12',
		'title'  => __( 'Field With Before & After' ),
		'before' => '<p>' . __( 'Here are some before Text' ) . '</p>',
		'after'  => '<p>' . __( 'Here are some after Text' ) . '</p>',
		'type'   => 'text',
	),
	array(
		'id'    => 'features_text_13',
		'title' => __( 'Field With Help Tip' ),
		'help'  => '<p>' . __( 'Here are some before Text' ) . '</p>',
		'type'  => 'text',
	),
);
$wpof['text']                 = array(
	array(
		'title' => __( 'Text Input' ),
		'type'  => 'text',
		'id'    => 'ui_text',
	),
	array(
		'title'       => __( 'Text Input With Placeholder' ),
		'type'        => 'text',
		'id'          => 'ui_text_1',
		'placeholder' => __( 'Custom Placeholder' ),
	),
	array(
		'title'  => __( 'Input Prefix & Surfix' ),
		'type'   => 'text',
		'id'     => 'ui_text_2',
		'prefix' => '$',
		'surfix' => 'Per KG',
	),
	array(
		'content' => __( 'jQuery Inputmask Plugin' ),
		'type'    => 'subheading',
	),
	array(
		'title'     => __( 'Date Input Masking' ),
		'type'      => 'text',
		'inputmask' => 'dd/mm/yyyy',
		'id'        => 'ui_text_inputmask_1',
	),
	array(
		'title'     => __( 'alias Input Masking' ),
		'type'      => 'text',
		'inputmask' => array( 'alias' => 'datetime' ),
		'id'        => 'ui_text_inputmask_2',
	),
	array(
		'title'     => __( 'InputMask Events' ),
		'type'      => 'text',
		'after'     => 'Field On Complete then it will update here <span> </span>',
		'inputmask' => array(
			'alias'      => 'ip',
			'oncomplete' => 'function(a){
			jQuery(a.currentTarget).parent().parent().find("span").html(jQuery(a.currentTarget).val())
			}',
		),
		'id'        => 'ui_text_inputmask_3',
	),
);
$wpof['textarea']             = array(
	array(
		'title' => __( 'Text Input' ),
		'type'  => 'textarea',
		'id'    => 'ui_textarea',
	),
	array(
		'title'       => __( 'textarea Input With Placeholder' ),
		'type'        => 'textarea',
		'id'          => 'ui_textarea_1',
		'placeholder' => __( 'Custom Placeholder' ),
	),
	array(
		'title' => __( 'Textarea With Row & Cols' ),
		'type'  => 'textarea',
		'row'   => 20,
		'col'   => 20,
		'id'    => 'ui_textarea_2',
	),
);
$wpof['checkbox']             = array(
	array(
		'id'    => 'checkbox',
		'type'  => 'checkbox',
		'title' => __( 'Checkbox' ),
	),
	array(
		'id'    => 'checkbox_1',
		'type'  => 'checkbox',
		'title' => __( 'Checkbox With Custom label' ),
		'label' => __( 'Are you sure ?' ),
	),
	array(
		'id'    => 'checkbox_2',
		'type'  => 'checkbox',
		'title' => __( 'Checkbox With Custom label' ),
		'label' => __( 'Are you sure ?' ),
	),
	array(
		'id'      => 'checkbox_3',
		'type'    => 'checkbox',
		'title'   => __( 'Checkbox Options' ),
		'options' => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
	),
	array(
		'id'      => 'checkbox_4',
		'type'    => 'checkbox',
		'title'   => __( 'Checkbox Group Options' ),
		'options' => array(
			__( 'Group 1' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 2' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 3' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
		),
	),
	array(
		'id'      => 'checkbox_5',
		'type'    => 'checkbox',
		'title'   => __( 'Checkbox Extra Options' ),
		'options' => array(
			'option1' => array(
				'label'   => __( 'Option With TextToolTip' ),
				'tooltip' => __( 'This is a simple text tooltip' ),
			),
			'option2' => array(
				'label'   => __( 'Option With Image' ),
				'tooltip' => 'http://s3.wponion.com/placeholder/250/10.jpg',
			),
		),
	),
);
$wpof['radio']                = array(
	array(
		'id'      => 'radio_3',
		'type'    => 'radio',
		'title'   => __( 'Radio Options' ),
		'options' => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
	),
	array(
		'id'      => 'radio_4',
		'type'    => 'radio',
		'title'   => __( 'radio Group Options' ),
		'options' => array(
			__( 'Group 1' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 2' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 3' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
		),
	),
	array(
		'id'      => 'radio_5',
		'type'    => 'radio',
		'title'   => __( 'Radio Extra Options' ),
		'options' => array(
			'option1' => array(
				'label'   => __( 'Option With TextToolTip' ),
				'tooltip' => __( 'This is a simple text tooltip' ),
			),
			'option2' => array(
				'label'   => __( 'Option With Image' ),
				'tooltip' => 'http://s3.wponion.com/placeholder/250/10.jpg',
			),
		),
	),
);
$wpof['select']               = array(
	array(
		'id'      => 'select_1',
		'type'    => 'select',
		'title'   => __( 'Select' ),
		'options' => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
	),
	array(
		'id'      => 'select_2',
		'type'    => 'select',
		'title'   => __( 'Select Group Options' ),
		'options' => array(
			__( 'Group 1' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 2' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 3' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
		),
	),
	array(
		'id'       => 'select_3',
		'type'     => 'select',
		'title'    => __( 'Select Multiple' ),
		'multiple' => true,
		'options'  => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
	),

	array(
		'content' => __( 'Select2 Framework' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'select_4',
		'type'    => 'select',
		'title'   => __( 'Select' ),
		'options' => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'select2' => true,
	),
	array(
		'id'      => 'select_5',
		'type'    => 'select',
		'title'   => __( 'Select Group Options' ),
		'options' => array(
			__( 'Group 1' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 2' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 3' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
		),
		'select2' => true,
	),
	array(
		'id'       => 'select_6',
		'type'     => 'select',
		'title'    => __( 'Select Multiple' ),
		'multiple' => true,
		'options'  => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'select2'  => true,
	),
	array(
		'id'      => 'select_7',
		'type'    => 'select',
		'title'   => __( 'Select With Custom Theme' ),
		'options' => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'select2' => array( 'theme' => 'classic' ),
	),

	array(
		'content' => __( 'Chosen Framework' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'select_8',
		'type'    => 'select',
		'title'   => __( 'Select' ),
		'options' => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'chosen'  => true,
	),
	array(
		'id'      => 'select_9',
		'type'    => 'select',
		'title'   => __( 'Select Group Options' ),
		'options' => array(
			__( 'Group 1' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 2' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 3' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
		),
		'chosen'  => true,
	),
	array(
		'id'       => 'select_10',
		'type'     => 'select',
		'title'    => __( 'Select Multiple' ),
		'multiple' => true,
		'options'  => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'chosen'   => true,
	),


	array(
		'content' => __( 'Selectize Framework' ),
		'type'    => 'subheading',
	),
	array(
		'id'        => 'select_11',
		'type'      => 'select',
		'title'     => __( 'Select' ),
		'options'   => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'selectize' => true,
	),
	array(
		'id'        => 'select_12',
		'type'      => 'select',
		'title'     => __( 'Select Group Options' ),
		'options'   => array(
			__( 'Group 1' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 2' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
			__( 'Group 3' ) => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
				'option3' => 'Option 3',
				'option4' => 'Option 4',
			),
		),
		'selectize' => true,
	),
	array(
		'id'        => 'select_13',
		'type'      => 'select',
		'title'     => __( 'Select Multiple' ),
		'multiple'  => true,
		'options'   => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'selectize' => true,
	),
	array(
		'id'        => 'select_14',
		'type'      => 'select',
		'title'     => __( 'Selectize  legacy' ),
		'multiple'  => true,
		'options'   => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'selectize' => array( 'theme' => 'selectize-legacy' ),
	),
	array(
		'id'        => 'select_16',
		'type'      => 'select',
		'title'     => __( 'Selectize  BootStrap2' ),
		'multiple'  => true,
		'options'   => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'selectize' => array( 'theme' => 'selectize-bs2' ),
	),
	array(
		'id'        => 'select_17',
		'type'      => 'select',
		'title'     => __( 'Selectize  BootStrap3' ),
		'multiple'  => true,
		'options'   => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'selectize' => array( 'theme' => 'selectize-bs3' ),
	),
	array(
		'id'        => 'select_18',
		'type'      => 'select',
		'title'     => __( 'Selectize  BootStrap4' ),
		'multiple'  => true,
		'options'   => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'selectize' => array( 'theme' => 'selectize-bs4' ),
	),
	array(
		'id'        => 'select_19',
		'type'      => 'select',
		'title'     => __( 'Selectize  Dark' ),
		'multiple'  => true,
		'options'   => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3',
			'option4' => 'Option 4',
		),
		'selectize' => array( 'theme' => 'selectize-dark' ),
	),
);
$wpof['background']           = array(
	array(
		'id'      => 'background',
		'title'   => __( 'Background' ),
		'type'    => 'background',
		'select2' => array( 'theme' => 'classic' ),
	),
	array(
		'id'               => 'background_1',
		'title'            => __( 'No BG Image Uplaod' ),
		'background-image' => false,
		'background-color' => false,
		'type'             => 'background',
		'select2'          => array( 'theme' => 'classic' ),
	),
);
$wpof['upload']               = array(
	array(
		'id'    => 'upload',
		'title' => __( 'Upload' ),
		'type'  => 'upload',
	),

	array(
		'id'     => 'upload_2',
		'title'  => __( 'Upload 2' ),
		'type'   => 'upload',
		'button' => __( 'Upload Video' ),
	),
	array(
		'id'       => 'upload_3',
		'title'    => __( 'Logo Upload' ),
		'type'     => 'upload',
		'desc'     => __( 'Custom Config for Upload Window. click the button and check' ),
		'settings' => array(
			'upload_type'  => 'image',
			'frame_title'  => __( 'Select Image For Logo' ),
			'insert_title' => __( 'Select Logo' ),
		),
	),
);
$wpof['icon_picker']          = array(
	array(
		'title' => __( 'Icon Picker' ),
		'type'  => 'icon_picker',
		'id'    => 'icon_picker',
	),
	array(
		'title'      => __( 'Dashicon Picker' ),
		'desc_field' => __( 'This field is just blocked with only Dashicons no other font libs' ),
		'type'       => 'icon_picker',
		'id'         => 'icon_picker_2',
		'enabled'    => array( 'dashicons' ),
	),
	array(
		'title'      => __( 'Icon Input Hidden' ),
		'type'       => 'icon_picker',
		'id'         => 'icon_picker_3',
		'show_input' => false,
	),
	array(
		'title'         => __( 'Custom Button Names' ),
		'type'          => 'icon_picker',
		'id'            => 'icon_picker_4',
		'add_button'    => __( 'Select Icon' ),
		'remove_button' => __( 'Delete Icon' ),
	),
);
$wpof['font_picker']          = array(
	array(
		'title' => __( 'Font Selector' ),
		'type'  => 'font_picker',
		'id'    => 'font_picker_1',
	),
	array(
		'title'         => __( 'Only Google Font Selector' ),
		'type'          => 'font_picker',
		'id'            => 'font_picker_2',
		'websafe_fonts' => false,
	),
	array(
		'title'        => __( 'Only Websafe Font Selector' ),
		'type'         => 'font_picker',
		'id'           => 'font_picker_3',
		'google_fonts' => false,
	),
	array(
		'title' => __( 'Group Font Libs' ),
		'type'  => 'font_picker',
		'group' => false,
		'id'    => 'font_picker_4',
	),
	array(
		'title'   => __( 'Select2 Framework With Fonts' ),
		'type'    => 'font_picker',
		'group'   => false,
		'select2' => true,
		'id'      => 'font_picker_5',
	),
	array(
		'title'  => __( 'Chosen Framework With Fonts' ),
		'type'   => 'font_picker',
		'group'  => false,
		'chosen' => true,
		'id'     => 'font_picker_6',
	),
	array(
		'title'     => __( 'Selectize Framework With Fonts' ),
		'type'      => 'font_picker',
		'group'     => false,
		'selectize' => true,
		'id'        => 'font_picker_8',
	),
);
$wpof['image_select']         = array(
	array(
		'title'      => __( 'Image Select' ),
		'desc_field' => __( 'Allows Multiple Image Select' ),
		'id'         => 'image_select_1',
		'type'       => 'image_select',
		'options'    => array(
			'image1' => 'http://s3.wponion.com/placeholder/100/1.jpg',
			'image2' => 'http://s3.wponion.com/placeholder/100/2.jpg',
			'image3' => 'http://s3.wponion.com/placeholder/100/3.jpg',
			'image4' => 'http://s3.wponion.com/placeholder/100/4.jpg',
			'image5' => 'http://s3.wponion.com/placeholder/100/5.jpg',
			'image6' => 'http://s3.wponion.com/placeholder/100/6.jpg',
		),
	),
	array(
		'title'      => __( 'Image Select' ),
		'desc_field' => __( 'Radio Type Image Select' ),
		'id'         => 'image_select_2',
		'image_type' => 'radio',
		'type'       => 'image_select',
		'options'    => array(
			'image1' => 'http://s3.wponion.com/placeholder/100/7.jpg',
			'image2' => 'http://s3.wponion.com/placeholder/100/8.jpg',
			'image3' => 'http://s3.wponion.com/placeholder/100/9.jpg',
			'image4' => 'http://s3.wponion.com/placeholder/100/10.jpg',
			'image5' => 'http://s3.wponion.com/placeholder/100/11.jpg',
			'image6' => 'http://s3.wponion.com/placeholder/100/12.jpg',
		),
	),
	array(
		'title'      => __( 'Image Select Grouped Layout' ),
		'desc_field' => __( 'Allows Multiple Image Select' ),
		'id'         => 'image_select_3',
		'type'       => 'image_select',
		'options'    => array(
			__( '100px Images' ) => array(
				'image1' => 'http://s3.wponion.com/placeholder/100/12.jpg',
				'image2' => 'http://s3.wponion.com/placeholder/100/14.jpg',
				'image3' => 'http://s3.wponion.com/placeholder/100/15.jpg',
				'image4' => 'http://s3.wponion.com/placeholder/100/16.jpg',
				'image5' => 'http://s3.wponion.com/placeholder/100/17.jpg',
				'image6' => 'http://s3.wponion.com/placeholder/100/18.jpg',
			),
			__( '75px Images' )  => array(
				'image1' => 'http://s3.wponion.com/placeholder/75/1.jpg',
				'image2' => 'http://s3.wponion.com/placeholder/75/2.jpg',
				'image3' => 'http://s3.wponion.com/placeholder/75/3.jpg',
				'image4' => 'http://s3.wponion.com/placeholder/75/4.jpg',
				'image5' => 'http://s3.wponion.com/placeholder/75/5.jpg',
				'image6' => 'http://s3.wponion.com/placeholder/75/6.jpg',
			),
			__( '250px Images' ) => array(
				'image1' => 'http://s3.wponion.com/placeholder/250/1.jpg',
				'image2' => 'http://s3.wponion.com/placeholder/250/2.jpg',
				'image3' => 'http://s3.wponion.com/placeholder/250/3.jpg',
				'image4' => 'http://s3.wponion.com/placeholder/250/4.jpg',
			),
		),
	),
	array(
		'title'   => __( 'Image Select Extra Options' ),
		'id'      => 'image_select_4',
		'type'    => 'image_select',
		'options' => array(
			'image1' => array(
				'label'   => 'http://s3.wponion.com/placeholder/100/12.jpg',
				'tooltip' => 'http://s3.wponion.com/placeholder/100/13.jpg',
			),
			'image2' => array(
				'label'   => 'http://s3.wponion.com/placeholder/100/14.jpg',
				'tooltip' => 'http://s3.wponion.com/placeholder/100/1.gif',
			),
			'image3' => array(
				'label'   => 'http://s3.wponion.com/placeholder/100/15.jpg',
				'tooltip' => 'image select can have either text tooltip or image tooltip',
			),
		),
	),
);
$wpof['wp_links']             = array(
	array(
		'type'  => 'wp_link',
		'title' => __( 'WP Link Model' ),
		'id'    => 'wp_link',
	),

	array(
		'type'   => 'wp_link',
		'title'  => __( 'Custom button text' ),
		'id'     => 'wp_link_1',
		'button' => __( 'Pick A URL' ),
	),
);
$wpof['switcher']             = array(
	array(
		'title' => __( 'Switcher' ),
		'type'  => 'switcher',
		'id'    => 'switcher',
	),
);
$wpof['key_value']            = array(
	array(
		'title' => __( 'Key Value' ),
		'type'  => 'key_value',
		'id'    => 'key_value',
	),
	array(
		'title'         => __( 'Key Value' ),
		'desc_field'    => __( 'Customized Buttons' ),
		'type'          => 'key_value',
		'id'            => 'key_value_1',
		'add_button'    => __( '+' ),
		'remove_button' => __( 'DELETE' ),
	),

	array(
		'title'       => __( 'Key Value' ),
		'desc_field'  => __( 'Custom Input Prefix' ),
		'type'        => 'key_value',
		'id'          => 'key_value_2',
		'key_input'   => array( 'prefix' => __( 'ID' ) ),
		'value_input' => array( 'prefix' => __( 'Name' ) ),
	),
);
$wpof['color_picker_palette'] = array(
	array(
		'title' => __( 'Color Picker' ),
		'type'  => 'color_picker',
		'id'    => 'color_picker_1',
		'rgba'  => false,
	),
	array(
		'title' => __( 'Color Picker (RGBA)' ),
		'type'  => 'color_picker',
		'id'    => 'color_picker_2',
	),
	array(
		'title'   => __( 'Color Palette' ),
		'type'    => 'color_palette',
		'id'      => 'color_palette',
		'options' => \WPOnion\Helper::get_material_design_colors(),
	),
	array(
		'title'   => __( 'Color Palette Big Size' ),
		'type'    => 'color_palette',
		'id'      => 'color_palette_1',
		'size'    => 35,
		'options' => $wpof_color_1,
	),
	array(
		'title'        => __( 'Color Palette (Checkbox)' ),
		'type'         => 'color_palette',
		'id'           => 'color_palette_2',
		'palette_type' => 'checkbox',
		'size'         => 35,
		'options'      => $wpof_color_2,
	),
	array(
		'title'        => __( 'Color Palette (Square View)' ),
		'type'         => 'color_palette',
		'id'           => 'color_palette_3',
		'style'        => 'square with-margin',
		'palette_type' => 'checkbox',
		'size'         => 35,
		'options'      => $wpof_color_1,
	),
	array(
		'title'        => __( 'Color Palette (Square View)' ),
		'type'         => 'color_palette',
		'id'           => 'color_palette_4',
		'style'        => 'square',
		'palette_type' => 'checkbox',
		'size'         => 35,
		'options'      => $wpof_color_2,
	),
	array(
		'title'        => __( 'Color Palette (Square View)' ),
		'type'         => 'color_palette',
		'id'           => 'color_palette_5',
		'style'        => 'round',
		'palette_type' => 'radio',
		'size'         => 35,
		'options'      => $wpof_color_1,
	),
	array(
		'title'        => __( 'Color Palette Large Collection' ),
		'type'         => 'color_palette',
		'id'           => 'color_palette_6',
		'style'        => 'square',
		'palette_type' => 'checkbox',
		'size'         => 25,
		'options'      => $wpof_all_colors,
	),
	array(
		'title'        => __( 'Color Palette Large Collection' ),
		'type'         => 'color_palette',
		'id'           => 'color_palette_7',
		'style'        => 'square with-margin',
		'palette_type' => 'radio',
		'size'         => 25,
		'options'      => $wpof_all_colors,
	),
);
$wpof['image_picker']         = array(
	array(
		'title' => __( 'Image Picker' ),
		'type'  => 'image',
		'id'    => 'image',
	),
	array(
		'title' => __( 'Gallery Picker' ),
		'type'  => 'gallery',
		'id'    => 'gallery',
		'sort'  => true,
	),
	array(
		'title'         => __( 'Gallery Customized Buttons' ),
		'type'          => 'gallery',
		'id'            => 'gallery_1',
		'add_button'    => __( 'New Gallery' ),
		'edit_button'   => __( 'Edit' ),
		'sort'          => false,
		'remove_button' => __( 'Clear' ),
	),
);
$wpof['date_picker']          = array(
	array(
		'title'    => __( 'Date Picker' ),
		'id'       => 'date_picker',
		'settings' => array(),
		'type'     => 'date_picker',
	),
	array(
		'title'      => __( 'Date Picker' ),
		'id'         => 'date_picker_2',
		'settings'   => array(
			'altInput'   => true,
			'altFormat'  => 'F j, Y',
			'dateFormat' => 'Y-m-d',
		),
		'type'       => 'date_picker',
		'desc_field' => __( 'Check <a href="https://flatpickr.js.org/examples/#human-friendly-dates">Human-friendly Dates</a>' ),
	),
	array(
		'content' => __( 'Time Picker' ),
		'type'    => 'subheading',
	),
	array(
		'title'      => __( 'Time Picker' ),
		'id'         => 'time_picker',
		'type'       => 'date_picker',
		'settings'   => array(
			'enableTime' => true,
			'noCalendar' => true,
			'dateFormat' => 'H:i',
		),
		'desc_field' => __( 'Check <a href="https://flatpickr.js.org/examples/#time-picker">Time Picker</a>' ),
	),
	array(
		'title'      => __( '24-hour Time Picker' ),
		'id'         => 'time_picker_1',
		'type'       => 'date_picker',
		'settings'   => array(
			'enableTime' => true,
			'noCalendar' => true,
			'dateFormat' => 'H:i',
			'time_24hr'  => true,
		),
		'desc_field' => __( 'Check <a href="https://flatpickr.js.org/examples/#24-hour-time-picker">24-hour Time</a>' ),
	),
	array(
		'content' => __( 'Date Picker Themes' ),
		'type'    => 'subheading',
	),
	array(
		'title' => __( 'Default Theme' ),
		'id'    => 'date_picker_theme_0',
		'type'  => 'date_picker',
	),
	array(
		'title' => __( 'Dark Theme' ),
		'id'    => 'date_picker_theme_1',
		'theme' => 'dark',
		'type'  => 'date_picker',
	),
	array(
		'title' => __( 'Light Theme' ),
		'id'    => 'date_picker_theme_2',
		'theme' => 'light',
		'type'  => 'date_picker',
	),
	array(
		'title' => __( 'Airbnb Theme' ),
		'id'    => 'date_picker_theme_3',
		'theme' => 'airbnb',
		'type'  => 'date_picker',
	),
	array(
		'title' => __( 'confetti Theme' ),
		'id'    => 'date_picker_theme_4',
		'theme' => 'confetti',
		'type'  => 'date_picker',
	),
	array(
		'title' => __( 'meterial_red Theme' ),
		'id'    => 'date_picker_theme_5',
		'theme' => 'meterial_red',
		'type'  => 'date_picker',
	),
	array(
		'title' => __( 'meterial_green Theme' ),
		'id'    => 'date_picker_theme_6',
		'theme' => 'meterial_green',
		'type'  => 'date_picker',
	),
	array(
		'title' => __( 'meterial_blue Theme' ),
		'id'    => 'date_picker_theme_7',
		'theme' => 'meterial_blue',
		'type'  => 'date_picker',
	),
	array(
		'title' => __( 'meterial_orange Theme' ),
		'id'    => 'date_picker_theme_8',
		'theme' => 'meterial_orange',
		'type'  => 'date_picker',
	),
);
$wpof['wp_editor']            = array(
	array(
		'title' => __( 'WP Editor' ),
		'id'    => 'wp_editor',
		'type'  => 'wp_editor',
	),
);
$wpof['fieldset']             = array(
	array(
		'title'  => __( 'Fieldset' ),
		'type'   => 'fieldset',
		'id'     => 'fieldset',
		'fields' => array(
			array(
				'id'    => 'features_text',
				'title' => __( 'Simple Text Field' ),
				'type'  => 'text',
			),
			array(
				'title' => __( 'Text Input' ),
				'type'  => 'textarea',
				'id'    => 'ui_textarea',
			),
			array(
				'id'    => 'checkbox_1',
				'type'  => 'checkbox',
				'title' => __( 'Checkbox With Custom label' ),
				'label' => __( 'Are you sure ?' ),
			),
			array(
				'id'      => 'checkbox_3',
				'type'    => 'checkbox',
				'title'   => __( 'Checkbox Options' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
			array(
				'id'      => 'select_1',
				'type'    => 'select',
				'title'   => __( 'Select' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
		),
	),
	array(
		'title'  => __( 'fieldset  Basic Features' ),
		'type'   => 'fieldset',
		'id'     => 'fieldset_0',
		'fields' => $wpof['features'],
	),
	array(
		'title'   => __( 'Fieldset' ),
		'type'    => 'fieldset',
		'heading' => __( 'Fieldset Heading' ),
		'id'      => 'fieldset_1',
		'fields'  => array(
			array(
				'id'    => 'features_text',
				'title' => __( 'Simple Text Field' ),
				'type'  => 'text',
			),
			array(
				'title' => __( 'Text Input' ),
				'type'  => 'textarea',
				'id'    => 'ui_textarea',
			),
			array(
				'id'    => 'checkbox_1',
				'type'  => 'checkbox',
				'title' => __( 'Checkbox With Custom label' ),
				'label' => __( 'Are you sure ?' ),
			),
			array(
				'id'      => 'checkbox_3',
				'type'    => 'checkbox',
				'title'   => __( 'Checkbox Options' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
			array(
				'id'      => 'select_1',
				'type'    => 'select',
				'title'   => __( 'Select' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
		),
	),
	array(
		'title'  => __( 'Nested Fieldset' ),
		'type'   => 'fieldset',
		'id'     => 'fieldset_2',
		'fields' => array(
			array(
				'id'    => 'features_text',
				'title' => __( 'Simple Text Field' ),
				'type'  => 'text',
			),
			array(
				'title'  => __( 'Nested Fieldset 1' ),
				'type'   => 'fieldset',
				'id'     => 'fieldset_2_1',
				'fields' => array(
					array(
						'id'    => 'features_text',
						'title' => __( 'Simple Text Field' ),
						'type'  => 'text',
					),
					array(
						'title' => __( 'Text Input' ),
						'type'  => 'textarea',
						'id'    => 'ui_textarea',
					),
					array(
						'id'    => 'checkbox_1',
						'type'  => 'checkbox',
						'title' => __( 'Checkbox With Custom label' ),
						'label' => __( 'Are you sure ?' ),
					),
					array(
						'id'      => 'checkbox_3',
						'type'    => 'checkbox',
						'title'   => __( 'Checkbox Options' ),
						'options' => array(
							'option1' => 'Option 1',
							'option2' => 'Option 2',
							'option3' => 'Option 3',
							'option4' => 'Option 4',
						),
					),
					array(
						'id'      => 'select_1',
						'type'    => 'select',
						'title'   => __( 'Select' ),
						'options' => array(
							'option1' => 'Option 1',
							'option2' => 'Option 2',
							'option3' => 'Option 3',
							'option4' => 'Option 4',
						),
					),
				),
			),
			array(
				'title' => __( 'Text Input' ),
				'type'  => 'textarea',
				'id'    => 'ui_textarea',
			),
			array(
				'id'    => 'checkbox_1',
				'type'  => 'checkbox',
				'title' => __( 'Checkbox With Custom label' ),
				'label' => __( 'Are you sure ?' ),
			),
			array(
				'id'      => 'checkbox_3',
				'type'    => 'checkbox',
				'title'   => __( 'Checkbox Options' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
			array(
				'id'      => 'select_1',
				'type'    => 'select',
				'title'   => __( 'Select' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
		),
	),
);
$wpof['accordion']            = array(
	array(
		'title'  => __( 'Accordion' ),
		'type'   => 'accordion',
		'id'     => 'accordion',
		'fields' => array(
			array(
				'id'    => 'features_text',
				'title' => __( 'Simple Text Field' ),
				'type'  => 'text',
			),
			array(
				'title' => __( 'Text Input' ),
				'type'  => 'textarea',
				'id'    => 'ui_textarea',
			),
			array(
				'id'    => 'checkbox_1',
				'type'  => 'checkbox',
				'title' => __( 'Checkbox With Custom label' ),
				'label' => __( 'Are you sure ?' ),
			),
			array(
				'id'      => 'checkbox_3',
				'type'    => 'checkbox',
				'title'   => __( 'Checkbox Options' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
			array(
				'id'      => 'select_1',
				'type'    => 'select',
				'title'   => __( 'Select' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
		),
	),
	array(
		'title'  => __( 'Accordion  Basic Features' ),
		'type'   => 'accordion',
		'id'     => 'accordion_0',
		'fields' => $wpof['features'],
	),
	array(
		'title'           => __( 'Accordion' ),
		'type'            => 'accordion',
		'accordion_title' => __( 'Custom Heading Goes Here.' ),
		'id'              => 'accordion_1',
		'fields'          => array(
			array(
				'id'    => 'features_text',
				'title' => __( 'Simple Text Field' ),
				'type'  => 'text',
			),
			array(
				'title' => __( 'Text Input' ),
				'type'  => 'textarea',
				'id'    => 'ui_textarea',
			),
			array(
				'id'    => 'checkbox_1',
				'type'  => 'checkbox',
				'title' => __( 'Checkbox With Custom label' ),
				'label' => __( 'Are you sure ?' ),
			),
			array(
				'id'      => 'checkbox_3',
				'type'    => 'checkbox',
				'title'   => __( 'Checkbox Options' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
			array(
				'id'      => 'select_1',
				'type'    => 'select',
				'title'   => __( 'Select' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
		),
	),
	array(
		'title'  => __( 'Nested accordion' ),
		'type'   => 'accordion',
		'id'     => 'accordion_2',
		'fields' => array(
			array(
				'id'    => 'features_text',
				'title' => __( 'Simple Text Field' ),
				'type'  => 'text',
			),
			array(
				'title'  => __( 'Nested accordion 1' ),
				'type'   => 'accordion',
				'id'     => 'accordion_2_1',
				'fields' => array(
					array(
						'id'    => 'features_text',
						'title' => __( 'Simple Text Field' ),
						'type'  => 'text',
					),
					array(
						'title' => __( 'Text Input' ),
						'type'  => 'textarea',
						'id'    => 'ui_textarea',
					),
					array(
						'id'    => 'checkbox_1',
						'type'  => 'checkbox',
						'title' => __( 'Checkbox With Custom label' ),
						'label' => __( 'Are you sure ?' ),
					),
					array(
						'id'      => 'checkbox_3',
						'type'    => 'checkbox',
						'title'   => __( 'Checkbox Options' ),
						'options' => array(
							'option1' => 'Option 1',
							'option2' => 'Option 2',
							'option3' => 'Option 3',
							'option4' => 'Option 4',
						),
					),
					array(
						'id'      => 'select_1',
						'type'    => 'select',
						'title'   => __( 'Select' ),
						'options' => array(
							'option1' => 'Option 1',
							'option2' => 'Option 2',
							'option3' => 'Option 3',
							'option4' => 'Option 4',
						),
					),
				),
			),
			array(
				'title' => __( 'Text Input' ),
				'type'  => 'textarea',
				'id'    => 'ui_textarea',
			),
			array(
				'id'    => 'checkbox_1',
				'type'  => 'checkbox',
				'title' => __( 'Checkbox With Custom label' ),
				'label' => __( 'Are you sure ?' ),
			),
			array(
				'id'      => 'checkbox_3',
				'type'    => 'checkbox',
				'title'   => __( 'Checkbox Options' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
			array(
				'id'      => 'select_1',
				'type'    => 'select',
				'title'   => __( 'Select' ),
				'options' => array(
					'option1' => 'Option 1',
					'option2' => 'Option 2',
					'option3' => 'Option 3',
					'option4' => 'Option 4',
				),
			),
		),
	),
);
$wpof['group']                = array(
	array(
		'title'  => __( 'Simple Group' ),
		'fields' => $wpof['text'],
		'id'     => 'group',
		'type'   => 'group',
	),

	array(
		'title'  => __( 'Limited Group' ),
		'fields' => $wpof['textarea'],
		'id'     => 'group_1',
		'type'   => 'group',
		'limit'  => 4,
	),
);
$wpof['tab']                  = array(
	array(
		'title'    => __( 'Tab' ),
		'id'       => 'tab',
		'type'     => 'tab',
		'sections' => array(
			array(
				'title'  => __( 'Features' ),
				'name'   => 'features',
				'fields' => $wpof['features'],
			),
			array(
				'title'  => __( 'Fieldset' ),
				'name'   => 'fieldset',
				'fields' => $wpof['fieldset'],
			),
			array(
				'title'  => __( 'Accordion' ),
				'name'   => 'accordion',
				'fields' => $wpof['accordion'],
			),
		),
	),

	array(
		'title'     => __( 'Tab (WC Style)' ),
		'id'        => 'tab_1',
		'type'      => 'tab',
		'tab_style' => 'left',
		'sections'  => array(
			array(
				'title'  => __( 'Features' ),
				'name'   => 'features',
				'fields' => $wpof['features'],
			),
			array(
				'title'  => __( 'Fieldset' ),
				'name'   => 'fieldset',
				'fields' => $wpof['fieldset'],
			),
			array(
				'title'  => __( 'Accordion' ),
				'name'   => 'accordion',
				'fields' => $wpof['accordion'],
			),
		),
	),
);
$wpof['uifields']             = array(
	array(
		'content' => __( 'Big Heading' ),
		'type'    => 'heading',
	),

	array(
		'content'     => __( 'This is a primary alert—check it out!' ),
		'type'        => 'notice',
		'notice_type' => 'primary',
	),
	array(
		'content'     => __( 'This is a secondary alert—check it out!' ),
		'type'        => 'notice',
		'notice_type' => 'secondary',
	),
	array(
		'content'     => __( 'This is a success alert—check it out!' ),
		'type'        => 'notice',
		'notice_type' => 'success',
	),
	array(
		'content'     => __( 'This is a danger alert—check it out!' ),
		'type'        => 'notice',
		'notice_type' => 'danger',
	),
	array(
		'content'     => __( 'This is a warning alert—check it out!' ),
		'type'        => 'notice',
		'notice_type' => 'warning',
	),
	array(
		'content'     => __( 'This is a info alert—check it out!' ),
		'type'        => 'notice',
		'notice_type' => 'info',
	),
	array(
		'content'     => __( 'This is a light alert—check it out!' ),
		'type'        => 'notice',
		'notice_type' => 'light',
	),
	array(
		'content'     => __( 'This is a dark alert—check it out!' ),
		'type'        => 'notice',
		'notice_type' => 'dark',
	),

);