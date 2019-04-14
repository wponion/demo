<?php
function wponion_demo_select_options() {
	return array( '1', '2', '3', '4' );
}

$options       = array(
	'option1' => __( 'Option 1' ),
	'option2' => __( 'Option 2' ),
	'option3' => __( 'Option 3' ),
	'option4' => __( 'Option 4' ),
);
$group_options = array(
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
);
$return        = array();
$return[]      = \WPO\Field::create( 'select', 'select', __( 'Select' ), array( 'options' => $options ) );
$return[]      = \WPO\Field::create( 'select', 'select_1', __( 'Select Group Options' ), array( 'options' => $group_options ) );
$return[]      = \WPO\Field::create( 'select', 'select_2', __( 'Select Multiple' ), array( 'options' => $options ) )
	->set_multiple( true );
$return[]      = \WPO\Field::create( 'select', 'select_3', __( 'Select Multiple Group Options' ), array( 'options' => $group_options ) )
	->set_multiple( true );

$return[] = WPO\Field::create( 'subheading', __( 'Dynamic Options' ) );
$return[] = WPO\Field::create( 'select', 'select_4', __( 'WP Pages As Options' ) )
	->set_options( 'pages' );
$return[] = WPO\Field::create( 'select', 'select_5', __( 'WP Post As Options' ) )
	->set_options( 'posts' );
$return[] = WPO\Field::create( 'select', 'select_6', __( 'WP Categories As Options' ) )
	->set_options( 'categories' );
$return[] = WPO\Field::create( 'select', 'select_7', __( 'WP Custom Post Type As Options' ) )
	->set_query_args( array( 'post_type' => 'your_post_type_name' ) )
	->set_desc_field( wponion_highlight_string( var_export( array(
		'post_type' => 'your_post_type_name',
	), true ) ) );
$return[] = WPO\Field::create( 'select', 'select_8', __( 'WP Categories As Options' ) )
	->set_options( 'categories' )
	->set_query_args( array(
		'option_key'   => 'slug',
		'option_label' => 'term_id',
	) )
	->set_desc_field( 'Each Option Label Mapped To Category Term ID And its value Mapped as Term Slug' . wponion_highlight_string( var_export( array(
			'option_key'   => 'slug',
			'option_value' => 'term_id',
		), true ) ) );

$return[] = WPO\Field::create( 'select', 'select_8_1', __( 'Custom Callback ' ), array(
	'select2' => true,
	'options' => 'wponion_demo_select_options',
) );
$return[] = WPO\Field::create( 'select', 'select_8_2', __( 'Custom Callback (Ajax) ' ), array(
	'select2' => true,
	'ajax'    => true,
	'options' => 'wponion_demo_select_options',
) );

$return[] = WPO\Field::create( 'select', 'select_8_3', __( 'Query Args With Custom Output Template' ), array(
	'select2'    => true,
	'ajax'       => true,
	'options'    => 'category',
	'query_args' => array(
		'taxonomy'     => 'product_cat',
		'option_label' => '#[term_id] [name] ([count])',
	),
) );


/**
 * Select2 Framework
 */
$return[] = WPO\Field::create( 'subheading', __( 'JS : Select2 Framework' ) );
/* translators: Added Select2 Link.*/
$return[]    = WPO\Field::create( 'content', sprintf( __( 'WPOnion Uses %1$sjQuery Select2%2$s | Please do refer %1$sOnline Documentation%2$s for more information' ), '<a href="https://select2.org/">', '</a>' ) );
$return[]    = \WPO\Field::create( 'select', 'select_9', 'Simple Select2' )
	->set_options( $options )
	->set_style( 'width:250px' )
	->select_framework( 'select2' );
$return[]    = \WPO\Field::create( 'select', 'select_10', 'Select2 Group Options' )
	->set_options( $group_options )
	->set_style( 'width:250px' )
	->select_framework( 'select2' )
	->set_multiple( true );
$return[]    = \WPO\Field::create( 'select', 'select_11', 'Select2 Classic Theme' )
	->set_options( $options )
	->set_style( 'width:250px' )
	->select_framework( 'select2', array( 'theme' => 'classic' ) )
	->set_desc_field( '<strong>Code</strong>' . wponion_highlight_string( array( 'select2' => array( 'theme' => 'classic' ) ) ) );
$custom_view = \WPO\Field::create( 'select', 'select_12', 'Select2 Custom Template' )
	->set_options( array(
		'https://s3.wponion.com/placeholder/100/1.jpg' => __( '100px 1.jpg' ),
		'https://s3.wponion.com/placeholder/100/2.jpg' => __( '100px 2.jpg' ),
		'https://s3.wponion.com/placeholder/100/3.jpg' => __( '100px 3.jpg' ),
		'https://s3.wponion.com/placeholder/100/4.jpg' => __( '100px 4.jpg' ),
		'https://s3.wponion.com/placeholder/100/5.jpg' => __( '100px 5.jpg' ),
		'https://s3.wponion.com/placeholder/100/1.gif' => __( '100px Gif 1' ),
		'https://s3.wponion.com/placeholder/100/2.gif' => __( '100px Gif 2' ),
		'https://s3.wponion.com/placeholder/100/3.gif' => __( '100px Gif 3' ),
	) )
	->set_style( 'width:250px' )
	->select_framework( 'select2', array(
		'templateSelection' => 'function(state){
				if (!state.id) {return state.text;}
				var value = state.element.value.toLowerCase();
				var html = "<span><img style=\'width: 8%;vertical-align: text-bottom;\' src=\'"+value+"\'>"+state.text+"</span>";
				return jQuery(html);
			}',
	) );
$custom_view->set_desc_field( '<strong>Code</strong>' . wponion_highlight_string( array( 'select2' => $custom_view['select2'] ) ) );
$return[] = $custom_view;

/**
 * Chosen Framework
 */
$return[] = WPO\Field::create( 'subheading', __( 'JS : Chosen Framework' ) );
/* translators: Added Select2 Link.*/
$return[] = WPO\Field::create( 'content', sprintf( __( 'WPOnion Uses %1$sjQuery Chosen%2$s | Please do refer %1$sOnline Documentation%2$s for more information' ), '<a href="https://harvesthq.github.io/chosen/">', '</a>' ) );
$return[] = \WPO\Field::create( 'select', 'select_13', 'Simple Chosen' )
	->set_options( $options )
	->select_framework( 'chosen' );
$return[] = \WPO\Field::create( 'select', 'select_14', 'Chosen Group Options' )
	->set_options( $group_options )
	->set_multiple( true )
	->select_framework( 'chosen' );

/**
 * Selectize Framework
 */
$return[] = WPO\Field::create( 'subheading', __( 'JS : Selectize Framework' ) );
/* translators: Added Select2 Link.*/
$return[] = WPO\Field::create( 'content', sprintf( __( 'WPOnion Uses %1$sjQuery Selectize%2$s | Please do refer %1$sOnline Documentation%2$s for more information' ), '<a href="https://select2.org/">', '</a>' ) );
$return[] = WPO\Field::create( 'notice' )
	->set_content( 'Selectize Requires WPOnion Selectize Addon To Be Installed ' )
	->set_notice_type( 'warning' );
$return[] = \WPO\Field::create( 'select', 'select_15', 'Simple Selectize' )
	->set_options( $options )
	->select_framework( 'selectize' );
$return[] = \WPO\Field::create( 'select', 'select_16', 'Selectize Group Options' )
	->set_options( $group_options )
	->select_framework( 'selectize' );
$return[] = \WPO\Field::create( 'select', 'select_17', 'Selectize legacy Theme' )
	->set_options( $options )
	->select_framework( 'selectize', array( 'theme' => 'selectize-legacy' ) );
$return[] = \WPO\Field::create( 'select', 'select_18', 'Selectize Bootstrap 2 Theme' )
	->set_options( $options )
	->select_framework( 'selectize', array( 'theme' => 'selectize-bs2' ) );
$return[] = \WPO\Field::create( 'select', 'select_19', 'Selectize Bootstrap 3 Theme' )
	->set_options( $options )
	->select_framework( 'selectize', array( 'theme' => 'selectize-bs3' ) );
$return[] = \WPO\Field::create( 'select', 'select_20', 'Selectize Bootstrap 4 Theme' )
	->set_options( $options )
	->select_framework( 'selectize', array( 'theme' => 'selectize-bs4' ) );
$return[] = \WPO\Field::create( 'select', 'select_21', 'Selectize Dark Theme' )
	->set_options( $options )
	->select_framework( 'selectize', array( 'theme' => 'selectize-dark' ) );

return $return;
