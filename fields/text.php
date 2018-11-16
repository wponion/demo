<?php
/**
 *
 * Project : wponion
 * Date : 09-11-2018
 * Time : 10:00 AM
 * File : text.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package wponion
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

return array(
	array(
		'id'    => 'text_1',
		'title' => __( 'Simple Text Field' ),
		'type'  => 'text',
	),
	array(
		'id'          => 'text_2',
		'title'       => __( 'With Placeholder' ),
		'type'        => 'text',
		'placeholder' => __( 'Placeholder Text Here' ),
	),
	/*array(
		'id'      => 'typography',
		'type'    => 'typography',
		'title'   => __( 'Font Picker' ),
		'content' => 'Some Text',
	),*/
	array(
		'id'       => 'text_3',
		'title'    => __( 'Disabled Input' ),
		'type'     => 'text',
		'disabled' => true,
	),

	/**
	 * HTML 5 Inputs.
	 */
	array(
		'content' => __( 'HTML5 Input Types' ),
		'type'    => 'subheading',
	),
	array(
		'id'        => 'text_html5_search',
		'title'     => __( 'HTML5 search' ),
		'type'      => 'text',
		'text_type' => 'search',
	),
	array(
		'id'        => 'text_html5_email',
		'title'     => __( 'HTML5 email' ),
		'type'      => 'text',
		'text_type' => 'email',
	),
	array(
		'id'        => 'text_html5_url',
		'title'     => __( 'HTML5 url' ),
		'type'      => 'text',
		'text_type' => 'url',
	),
	array(
		'id'        => 'text_html5_tel',
		'title'     => __( 'HTML5 tel' ),
		'type'      => 'text',
		'text_type' => 'tel',
	),
	array(
		'id'        => 'text_html5_number',
		'title'     => __( 'HTML5 number' ),
		'type'      => 'text',
		'text_type' => 'number',
	),
	array(
		'id'        => 'text_html5_range',
		'title'     => __( 'HTML5 range' ),
		'type'      => 'text',
		'text_type' => 'range',
	),
	array(
		'id'        => 'text_html5_date',
		'title'     => __( 'HTML5 date' ),
		'type'      => 'text',
		'text_type' => 'date',
	),
	array(
		'id'        => 'text_html5_month',
		'title'     => __( 'HTML5 month' ),
		'type'      => 'text',
		'text_type' => 'month',
	),
	array(
		'id'        => 'text_html5_week',
		'title'     => __( 'HTML5 week' ),
		'type'      => 'text',
		'text_type' => 'week',
	),
	array(
		'id'        => 'text_html5_time',
		'title'     => __( 'HTML5 time' ),
		'type'      => 'text',
		'text_type' => 'time',
	),
	array(
		'id'        => 'text_html5_datetime',
		'title'     => __( 'HTML5 datetime' ),
		'type'      => 'text',
		'text_type' => 'datetime',
	),
	array(
		'id'        => 'text_html5_datetime - local',
		'title'     => __( 'HTML5 datetime - local' ),
		'type'      => 'text',
		'text_type' => 'datetime-local',
	),
	array(
		'id'        => 'text_html5_color',
		'title'     => __( 'HTML5 color' ),
		'type'      => 'text',
		'text_type' => 'color',
	),

	/**
	 * Prefix & Surfix
	 */
	array(
		'content' => __( 'Prefix & Surfix' ),
		'type'    => 'subheading',
	),
	array(
		'id'     => 'text_prefix_1',
		'title'  => __( 'With Prefix' ),
		'type'   => 'text',
		'prefix' => '$',
	),
	array(
		'id'     => 'text_surfix_1',
		'title'  => __( 'With Surfix' ),
		'type'   => 'text',
		'surfix' => 'USD',
	),
	array(
		'id'     => 'text_prefix_surfix_1',
		'title'  => __( 'Surfix & Prefix' ),
		'type'   => 'text',
		'surfix' => 'USD',
		'prefix' => '$',
	),

	array(
		'content' => 'Inputmask',
		'type'    => 'subheading',
	),
	array(
		/* translators: Add Custom HTML Link.*/
		'content' => sprintf( __( 'WPOnion Uses %1$sInputMask jQuery%2$s Plugin By RobinHerbots | Please do refer %3$ssonline documentation%2$s on how to use it.' ), '<a href="https://robinherbots.github.io/Inputmask/">', '</a>', '<a href="https://github.com/RobinHerbots/Inputmask#usage">' ),
		'type'    => 'content',
	),

	array(
		'id'         => 'text_inputmask_1',
		'title'      => __( 'Static Inputmask' ),
		'type'       => 'text',
		'inputmask'  => '99-9999999',
		'desc_field' => 'Javascript Code: <code>$(selector).inputmask("99-9999999"); </code>',
	),

	array(
		'id'         => 'text_inputmask_2',
		'title'      => __( 'mask with dynamic syntax' ),
		'type'       => 'text',
		'inputmask'  => '9-a{1,3}9{1,3}',
		'desc_field' => 'Javascript Code: <code>$(selector).inputmask("9-a{1,3}9{1,3}"); </code>',
	),

	array(
		/* translators: Add Custom HTML Link.*/
		'content' => sprintf( __( 'With an alias you can define a complex mask definition and call it by using an alias name. So this is mainly to simplify the use of your masks. Some aliases found in the extensions are: email, currency, decimal, integer, date, datetime, dd/mm/yyyy, etc. <br/>WPOnion Uses %1$sInputMask jQuery%2$s Plugin By RobinHerbots | Please do refer %3$ssonline documentation%2$s on how to use it.' ), '<a href="https://robinherbots.github.io/Inputmask/">', '</a>', '<a href="https://github.com/RobinHerbots/Inputmask#usage">' ),
		'type'    => 'content',
	),

	array(
		'id'         => 'text_inputmask_3',
		'title'      => __( 'alias : datetime' ),
		'type'       => 'text',
		'inputmask'  => array( 'alias' => 'datetime' ),
		'desc_field' => 'Javascript Code: <code>$(selector).inputmask({ alias: "datetime"}); </code>',
	),

	array(
		'id'         => 'text_inputmask_4',
		'title'      => __( 'alias : email' ),
		'type'       => 'text',
		'inputmask'  => array( 'alias' => 'email' ),
		'desc_field' => 'Javascript Code: <code>$(selector).inputmask({ alias: "email"}); </code>',
	),

	array(
		'content' => 'Inputmask Events',
		'type'    => 'subheading',
	),

	array(
		'id'         => 'text_inputmask_5',
		'title'      => __( 'Alert Triggered on content paste' ),
		'type'       => 'text',
		'inputmask'  => array( 'onBeforePaste' => 'function(pastedValue,opts){alert(JSON.stringify(pastedValue));}' ),
		'desc_field' => 'Javascript Code: <code>$(selector).inputmask({
	onBeforePaste: function (pastedValue, opts) {
    	return phoneNumOnPaste(pastedValue, opts);
    }}); </code>',
	),

	array(
		'id'         => 'text_inputmask_6',
		'title'      => __( 'Alert Triggered on content paste' ),
		'type'       => 'text',
		'inputmask'  => array(
			'alias'      => 'email',
			'oncomplete' => 'function(a){
			jQuery(a.currentTarget).parent().parent().find("span").html(jQuery(a.currentTarget).val())
			}',
		),
		'after'      => 'Field On Complete then it will update here <span> </span>',
		'desc_field' => 'Javascript Code: <code>
		$(selector).inputmask({
		\'alias\' => \'email\'
			oncomplete: function(a){
				jQuery(a.currentTarget).parent().parent().find("span").html(jQuery(a.currentTarget).val());
			}
		}); </code>',
	),
);


