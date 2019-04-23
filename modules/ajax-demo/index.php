<?php
add_action( 'wp_ajax_wponion-demo-ajax-action1', function () {
	wp_send_json_success();
} );
add_action( 'wp_ajax_wponion-demo-ajax-action3', function () {
	if ( 1 === rand( 0, 1 ) ) {
		wp_send_json_success( array( 'msg' => '<strong> Response From Ajax Success</strong>' ) );
	} else {
		wp_send_json_error( array( 'msg' => '<strong> Response From Ajax Error</strong>' ) );
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
<div style="padding:25px; background: #eee; display: inline-block;">
<strong style="font-size:14px; margin-bottom: 15px; display: inline-block;">Clicking This button will trigger an ajax request and block's the button.</strong><br/>
<button type="button" class="wpo-ajax-btn1 button button-primary" data-loading-text="Processing...">Button</button>
</div>

<div style="padding:25px; background: #c3c3c3; display: inline-block;">
<strong style="font-size:14px; margin-bottom: 15px; display: inline-block;">Clicking This button will trigger an ajax request and block's the whole element.</strong><br/>
<button type="button" class="wpo-ajax-btn2 button button-primary" data-loading-text="Processing...">Block & Ajax</button>
</div>
<br/>
<br/>
<div style="padding:25px; background: #c3c3c3; display: inline-block; vertical-align: middle;">
<strong style="font-size:14px; margin-bottom: 15px; display: inline-block;">Clicking the button will trigger an ajax request and the resposne will be displayed below</strong><br/>
<div class="response" style="padding:25px; background: #eaeaea; display: block;margin-bottom: 15px;"></div>
<button type="button" class="wpo-ajax-btn3 button button-primary" data-loading-text="Processing...">Ajax</button>
</div>
<div style="padding:25px; background: #c3c3c3; display: inline-block; vertical-align: middle;">
<strong style="font-size:14px; margin-bottom: 15px; display: inline-block;">Clicking the button will trigger an ajax request and will also render callback from javascript</strong><br/>
<button type="button" class="wpo-ajax-btn4 button button-primary" data-loading-text="Processing...">Ajax</button>
</div>
HTML;
	},
) );
