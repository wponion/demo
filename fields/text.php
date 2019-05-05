<?php
$return = array();

$return[] = \WPO\Field::create( 'text', 'text_1', 'Simple Text Field' );
$return[] = \WPO\Field::create( 'text', 'text_2', 'With Placeholder' )
	->placeholder( __( 'Placeholder Text Here' ) );
$return[] = \WPO\Field::create( 'text', 'text_3', 'Disabled Input' )
	->disable();
$return[] = \WPO\Field::create( 'text', 'text_4', 'With Data List' )
	->options( array(
		'option1' => 'Option 1',
		'option2' => 'Option 2',
		'option3' => 'Option 3',
	) )
	->option( 'option4', 'Option 4' )
	->option( 'Option 5' );

/**
 * HTML 5 Input Types.
 */
$return[] = \WPO\Field::create( 'subheading', __( 'HTML5 Input Types' ) );
$return[] = \WPO\Field::create( 'text', 'text_html5_search', __( 'HTML5 search' ), array( 'text_type' => 'search' ) );
$return[] = \WPO\Field::create( 'text', 'text_html5_email', __( 'HTML5 email' ), array( 'text_type' => 'email' ) );
$return[] = \WPO\Field::create( 'text', 'text_html5_url', __( 'HTML5 url' ), array( 'text_type' => 'url' ) );
$return[] = \WPO\Field::create( 'text', 'text_html5_tel', __( 'HTML5 tel' ), array( 'text_type' => 'tel' ) );
$return[] = \WPO\Field::create( 'text', 'text_html5_time', __( 'HTML5 time' ), array( 'text_type' => 'time' ) );
$return[] = \WPO\Field::create( 'text', 'text_html5_datetime', __( 'HTML5 datetime' ), array( 'text_type' => 'datetime' ) );
$return[] = \WPO\Field::create( 'text', 'text_html5_datetime-local', __( 'HTML5 datetime-local' ), array( 'text_type' => 'datetime-local' ) );
$return[] = \WPO\Field::create( 'text', 'text_html5_color', __( 'HTML5 color' ), array( 'text_type' => 'color' ) );

/**
 * Prefix & Surfix.
 */
$return[] = WPO\Field::create( 'subheading', __( 'Prefix & Surfix' ) );
$return[] = WPO\Field::create( 'text', 'text_prefix_1', __( 'With Prefix' ) )
	->prefix( '$' );
$return[] = WPO\Field::create( 'text', 'text_surfix_1', __( 'With Surfix' ) )
	->surfix( 'USD' );
$return[] = WPO\Field::create( 'text', 'text_prefix_surfix_1', __( 'With Prefix & Surfix' ) )
	->prefix( '$' )
	->surfix( 'USD' );

$return[] = WPO\Field::create( 'subheading', __( 'Inputmask' ) );
/* translators: Add Custom HTML Link.*/
$return[] = WPO\Field::create( 'content', sprintf( __( 'WPOnion Uses %1$sInputMask jQuery%2$s Plugin By RobinHerbots | Please do refer %3$ssonline documentation%2$s on how to use it.' ), '<a href="https://robinherbots.github.io/Inputmask/">', '</a>', '<a href="https://github.com/RobinHerbots/Inputmask#usage">' ) );
$return[] = WPO\Field::create( 'text', 'text_inputmask_1', __( 'Static Inputmask' ), array(
	'inputmask'  => '99-9999999',
	'desc_field' => wponion_highlight_string( '// Javascript Code :
$(selector).inputmask("99-9999999"); ' ),
) );
$return[] = WPO\Field::create( 'text', 'text_inputmask_2', __( 'mask with dynamic syntax' ), array(
	'desc_field' => wponion_highlight_string( '// Javascript Code :
$(selector).inputmask("9-a{1,3}9{1,3}"); ' ),
) )
	->inputmask( '9-a{1,3}9{1,3}' );
/* translators: Add Custom HTML Link.*/
$return[] = WPO\Field::create( 'content', sprintf( __( 'With an alias you can define a complex mask definition and call it by using an alias name. So this is mainly to simplify the use of your masks. Some aliases found in the extensions are: email, currency, decimal, integer, date, datetime, dd/mm/yyyy, etc. <br/>WPOnion Uses %1$sInputMask jQuery%2$s Plugin By RobinHerbots | Please do refer %3$ssonline documentation%2$s on how to use it.' ), '<a href="https://robinherbots.github.io/Inputmask/">', '</a>', '<a href="https://github.com/RobinHerbots/Inputmask#usage">' ) );
$return[] = WPO\Field::create( 'text', 'text_inputmask_3', __( 'alias : datetime' ) )
	->inputmask( array( 'alias' => 'datetime' ) )
	->desc_field( wponion_highlight_string( '// Javascript Code :
$(selector).inputmask( { alias : "datetime" } ); ' ) );
$return[] = WPO\Field::create( 'text', 'text_inputmask_4', __( 'alias : email' ) )
	->inputmask( array( 'alias' => 'email' ) )
	->desc_field( wponion_highlight_string( '// Javascript Code :
$(selector).inputmask( { alias : "email" } );' ) );

$return[] = WPO\Field::create( 'subheading', __( 'Inputmask Events' ) );
$return[] = WPO\Field::create( 'text', 'text_inputmask_5', __( 'Alert Triggered on content paste' ) )
	->inputmask( array( 'onBeforePaste' => 'function(pastedValue,opts){alert(JSON.stringify(pastedValue));}' ) )
	->desc_field( wponion_highlight_string( '// Javascript Code :
$(selector).inputmask( {
	onBeforePaste: function (pastedValue, opts) {
		return phoneNumOnPaste(pastedValue, opts);
	}
 } );' ) );
$return[] = WPO\Field::create( 'text', 'text_inputmask_6', __( 'Event On Field Complete.' ) )
	->after( ' Field On Complete then it will update here <span id="wpoinptmaskaddhere"> </span>' )
	->inputmask( array(
		'alias'      => 'email',
		'oncomplete' => 'function(a){
			jQuery(a.currentTarget).parent().find("span#wpoinptmaskaddhere").html(jQuery(a.currentTarget).val())
		}',
	) )
	->desc_field( wponion_highlight_string( '// Javascript Code :
$(selector).inputmask({
	alias : "email",
	oncomplete: function(a){
		jQuery(a.currentTarget).parent().find("span#wpoinptmaskaddhere").html(jQuery(a.currentTarget).val());
	}
});' ) );

return $return;
