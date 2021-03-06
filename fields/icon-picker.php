<?php
$return = array();

$return[] = WPO\Field::create( 'icon_picker', 'icon_picker', __( 'Icon Picker' ) );
$return[] = WPO\Field::create( 'icon_picker', 'icon_picker_1', __( 'Icon Picker + Hidden Input' ) )
	->hide_input();
$return[] = WPO\Field::create( 'icon_picker', 'icon_picker_2', __( 'Custom Button Labels' ) )
	->add_button( '+' )
	->remove_button( '-' );
$return[] = WPO\Field::create( 'icon_picker', 'icon_picker_3', __( 'Dashicon Only' ) )
	->enabled( array( 'dashicons' ) );

$return[] = WPO\Field::create( 'icon_picker', 'icon_picker_4', __( 'Customized Icon Tooltip' ) )
	->icon_tooltip( array(
		'arrow'       => true,
		'interactive' => true,
		'content'     => '<input type="text"/>',
		'onShow'      => 'function(elem){jQuery(elem.popper).find("input").val(jQuery(elem.reference).attr("data-icon")); }',
	) );

return $return;
