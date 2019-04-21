jQuery( window ).on( 'load', function() {
	jQuery( '.wpo-ajax-btn1' ).on( 'click', function() {
		wponion_ajax( {
			button_lock: jQuery( this ),
			data: {
				action: 'wponion-demo-ajax-action1',
			},
			type: 'POST',
			success: function() {
				alert( 'Ajax Finished' );
			},
			error: function() {
				alert( 'Ajax Got Error !!' );
			},
			always: function() {
				alert( 'Ajax  ON Always' );
			}
		} ).send();
	} );
	jQuery( '.wpo-ajax-btn2' ).on( 'click', function() {
		wponion_ajax( {
			button_lock: jQuery( this ),
			element_lock: jQuery( this ).parent(),
			data: {
				action: 'wponion-demo-ajax-action1',
			},
			type: 'POST',
			success: function() {
				alert( 'Ajax Finished' );
			},
			error: function() {
				alert( 'Ajax Got Error !!' );
			},
			blockUI: {
				message: 'Please Wait...',
				overlayCSS: {
					background: '#fff',
					opacity: 0.5
				}
			},
		} ).send();
	} );
	jQuery( '.wpo-ajax-btn3' ).on( 'click', function() {
		wponion_ajax( {
			button_lock: jQuery( this ),
			data: {
				action: 'wponion-demo-ajax-action3',
			},
			type: 'POST',
			response_element: jQuery( this ).parent().find( 'div.response' ),
		} ).send();
	} );
	jQuery( '.wpo-ajax-btn4' ).on( 'click', function() {
		wponion_ajax( {
			button_lock: jQuery( this ),
			action: 'wponion-demo-ajax-action4',
		} ).send();
	} );
} );