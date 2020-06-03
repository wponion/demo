<?php
add_action( 'wp_ajax_wponion-demo-ajax-action1', function () {
	wp_send_json_success();
} );
add_action( 'wp_ajax_wponion-demo-ajax-action3', function () {
	if ( 1 === rand( 0, 1 ) ) {
		wp_send_json_success( array( 'msg' => '<strong class="wpo-text-success"> Response From Ajax Success</strong>' ) );
	} else {
		wp_send_json_error( array( 'msg' => '<strong class="wpo-text-danger"> Response From Ajax Error</strong>' ) );
	}
} );
add_action( 'wp_ajax_wponion-demo-ajax-action4', function () {
	wp_send_json_success( array(
		'callback' => array(
			'alert("CallBack From Ajax");',
		),
	) );
} );

wponion_admin_page( array(
	'menu_title' => __( 'Ajax Demo' ),
	'assets'     => 'wponion-ajax-demo',
	'menu_slug'  => 'wponion-ajax-demo',
	'submenu'    => 'wponion-demo',
	'render'     => function () {
		echo <<<HTML
<div style="padding:25px; background: #ddd; width:50%; margin-bottom: 15px">
<strong style="font-size:14px; margin-bottom: 15px; display: inline-block;">Clicking this button will trigger an ajax request & block the button.</strong><br/>
<button type="button" class="wpo-ajax-btn1 button button-primary" data-loading-text="Processing...">Button</button>
</div>

<div style="padding:25px; background: #ddd; width:50%; margin-bottom:15px;">
<strong style="font-size:14px; margin-bottom: 15px; display: inline-block;">Clicking this button will trigger an ajax request & block the whole element.</strong><br/>
<button type="button" class="wpo-ajax-btn2 button button-primary" data-loading-text="Processing...">Block & Ajax</button>
</div>

<div style="padding:25px; background: #ddd;  width:50%; vertical-align: middle; margin-bottom:15px;">
<strong style="font-size:14px; margin-bottom: 15px; display: inline-block;">Clicking the button will trigger an ajax request & display the response below</strong><br/>
<div class="response" style="padding:25px; background: #eaeaea; display: block;margin-bottom: 15px;"></div>
<button type="button" class="wpo-ajax-btn3 button button-primary" data-loading-text="Processing...">Ajax</button>
</div>

<div style="padding:25px; background: #ddd;  width:50%; vertical-align: middle; margin-bottom:15px;">
<strong style="font-size:14px; margin-bottom: 15px; display: inline-block;">Clicking the button will trigger an ajax request & render callback from javascript</strong><br/>
<button type="button" class="wpo-ajax-btn4 button button-primary" data-loading-text="Processing...">Ajax</button>
</div>
HTML;
	},
) );
