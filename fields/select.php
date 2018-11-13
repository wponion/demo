<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 01:18 PM
 * File : select.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'      => 'select_multiple_1',
		'title'   => __( 'Select' ),
		'type'    => 'select',
		'options' => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'       => 'select_multiple_2',
		'title'    => __( 'Select Group Options' ),
		'type'     => 'select',
		'multiple' => true,
		'options'  => array(
			__( 'Group 1' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
			__( 'Group 2' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
			__( 'Group 3' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
		),
	),

	/**
	 * Improved Checkbox Options.
	 */
	array(
		'content' => __( 'Select Improved Options' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'select_improved_options_1',
		'title'   => __( 'Select' ),
		'type'    => 'select',
		'options' => array(
			'option1' => array(
				'label'      => __( 'Custom Styled Option' ),
				'attributes' => array( 'style' => 'color:green;' ),
			),
			'option2' => array(
				'label'    => __( 'Option 2' ),
				'disabled' => true,
			),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),

	/**
	 * Dyanmic Option Data.
	 */
	array(
		'content' => __( 'Dynamic Options' ),
		'type'    => 'subheading',
	),
	array(
		'id'      => 'select_dynamic_options_pages',
		'title'   => __( 'WP Pages As Options' ),
		'type'    => 'select',
		'options' => 'pages',
	),
	array(
		'id'      => 'select_dynamic_options_posts',
		'title'   => __( 'WP Post As Options' ),
		'type'    => 'select',
		'options' => 'posts',
	),
	array(
		'id'      => 'select_dynamic_options_categories',
		'title'   => __( 'WP Categories As Options' ),
		'type'    => 'select',
		'options' => 'categories',
	),
	array(
		'id'         => 'select_dynamic_options_cpt',
		'title'      => __( 'WP Custom Post Type As Options' ),
		'type'       => 'select',
		'query_args' => array(
			'post_type' => 'your_post_type_name',
		),
		'desc_field' => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
	),
	array(
		'id'         => 'select_dynamic_options_categories_custom',
		'title'      => __( 'WP Categories As Options' ),
		'type'       => 'select',
		'options'    => 'categories',
		'query_args' => array(
			'option_key'   => 'slug',
			'option_value' => 'term_id',
		),
		'desc_field' => __( 'Each Option Label Mapped To Category Term ID And its value Mapped as Term Slug' ),
	),

	/**
	 * Select2 Framework.
	 */
	array(
		'content' => __( 'JS : Select2 Framework' ),
		'type'    => 'subheading',
	),
	array(
		/* translators: Added Select2 Link.*/
		'content' => sprintf( __( 'WPOnion Uses %1$sjQuery Select2%2$s | Please do refer %1$sOnline Documentation%2$s for more information' ), '<a href="https://select2.org/">', '</a>' ),
		'type'    => 'content',
	),
	array(
		'id'      => 'select2',
		'title'   => __( 'Simple Select2' ),
		'type'    => 'select',
		'select2' => true,
		'style'   => 'width:250px',
		'options' => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'       => 'select2_group',
		'title'    => __( 'Select2 Group Options' ),
		'type'     => 'select',
		'select2'  => true,
		'style'    => 'width:250px',
		'multiple' => true,
		'options'  => array(
			__( 'Group 1' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
			__( 'Group 2' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
			__( 'Group 3' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
		),
	),
	array(
		'id'      => 'select2_classic_theme',
		'title'   => __( 'Select2 Classic Theme' ),
		'type'    => 'select',
		'select2' => array( 'theme' => 'classic' ),
		'style'   => 'width:250px',
		'options' => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'      => 'select2_custom_templating',
		'title'   => __( 'Select2 Templating' ),
		'type'    => 'select',
		'select2' => array(
			'templateSelection' => 'function(state){
				if (!state.id) {return state.text;}
				return jQuery("<span><img style=\'width: 8%;vertical-align: text-bottom;\' src=\'"+state.element.value.toLowerCase()+"\'>"+state.text+"</span>");
			}',
		),
		'style'   => 'width:250px',
		'options' => array(
			'https://s3.wponion.com/placeholder/100/1.jpg' => __( '100px 1.jpg' ),
			'https://s3.wponion.com/placeholder/100/2.jpg' => __( '100px 2.jpg' ),
			'https://s3.wponion.com/placeholder/100/3.jpg' => __( '100px 3.jpg' ),
			'https://s3.wponion.com/placeholder/100/4.jpg' => __( '100px 4.jpg' ),
			'https://s3.wponion.com/placeholder/100/5.jpg' => __( '100px 5.jpg' ),
			'https://s3.wponion.com/placeholder/100/1.gif' => __( '100px Gif 1' ),
			'https://s3.wponion.com/placeholder/100/2.gif' => __( '100px Gif 2' ),
			'https://s3.wponion.com/placeholder/100/3.gif' => __( '100px Gif 3' ),
		),
	),

	/**
	 * Chosen Framework.
	 */
	array(
		'content' => __( 'JS : Chosen Framework' ),
		'type'    => 'subheading',
	),
	array(
		/* translators: Added Select2 Link.*/
		'content' => sprintf( __( 'WPOnion Uses %1$sjQuery Chosen%2$s | Please do refer %1$sOnline Documentation%2$s for more information' ), '<a href="https://harvesthq.github.io/chosen/">', '</a>' ),
		'type'    => 'content',
	),
	array(
		'id'      => 'chosen',
		'title'   => __( 'Simple Chosen' ),
		'type'    => 'select',
		'chosen'  => true,
		'style'   => 'width:250px',
		'options' => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'       => 'chosen_group',
		'title'    => __( 'Chosen Group Options' ),
		'type'     => 'select',
		'chosen'   => true,
		'style'    => 'width:250px',
		'multiple' => true,
		'options'  => array(
			__( 'Group 1' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
			__( 'Group 2' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
			__( 'Group 3' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
		),
	),

	/**
	 * Selectize.
	 */
	array(
		'content' => __( 'JS : Selectize Framework' ),
		'type'    => 'subheading',
	),
	array(
		/* translators: Added Selectize Link.*/
		'content' => sprintf( __( 'WPOnion Uses %1$sjQuery Selectize%2$s | Please do refer %1$sOnline Documentation%2$s for more information' ), '<a href="https://select2.org/">', '</a>' ),
		'type'    => 'content',
	),
	array(
		'content' => __( 'Selectize Requires WPOnion Selectize Addon To Be Installed ' ),
		'type'    => 'notice_warning',
	),
	array(
		'id'        => 'selectize',
		'title'     => __( 'Simple Selectize' ),
		'type'      => 'select',
		'selectize' => true,
		'style'     => 'width:250px',
		'options'   => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'        => 'selectize_group',
		'title'     => __( 'Selectize Group Options' ),
		'type'      => 'select',
		'selectize' => true,
		'style'     => 'width:250px',
		'multiple'  => true,
		'options'   => array(
			__( 'Group 1' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
			__( 'Group 2' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
			__( 'Group 3' ) => array(
				'option1' => __( 'Option 1' ),
				'option2' => __( 'Option 2' ),
				'option3' => __( 'Option 3' ),
				'option4' => __( 'Option 4' ),
			),
		),
	),
	array(
		'id'        => 'selectize_legacy',
		'title'     => __( 'Selectize legacy Theme' ),
		'type'      => 'select',
		'selectize' => array( 'theme' => 'selectize-legacy' ),
		'style'     => 'width:250px',
		'options'   => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'        => 'selectize_bs2',
		'title'     => __( 'Selectize BootStrap2 Theme' ),
		'type'      => 'select',
		'selectize' => array( 'theme' => 'selectize-bs2' ),
		'style'     => 'width:250px',
		'options'   => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'        => 'selectize_bs3',
		'title'     => __( 'Selectize BootStrap3 Theme' ),
		'type'      => 'select',
		'selectize' => array( 'theme' => 'selectize-bs3' ),
		'style'     => 'width:250px',
		'options'   => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'        => 'selectize_bs4',
		'title'     => __( 'Selectize BootStrap4 Theme' ),
		'type'      => 'select',
		'selectize' => array( 'theme' => 'selectize-bs4' ),
		'style'     => 'width:250px',
		'options'   => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
	array(
		'id'        => 'selectize_dark',
		'title'     => __( 'Selectize dark Theme' ),
		'type'      => 'select',
		'selectize' => array( 'theme' => 'selectize-dark' ),
		'style'     => 'width:250px',
		'options'   => array(
			'option1' => __( 'Option 1' ),
			'option2' => __( 'Option 2' ),
			'option3' => __( 'Option 3' ),
			'option4' => __( 'Option 4' ),
		),
	),
);
