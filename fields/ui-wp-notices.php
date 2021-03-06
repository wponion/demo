<?php
$return = array();
/* translators: Added LinkBack.*/
$return[] = WPO\Field::create( 'content', sprintf( __( 'ALL UI Fields Related Fields Code Can Be Found %1$s@wponion/demo%2$s' ), '<a href="https://github.com/wponion/demo">', '</a>' ) );

$return[] = \WPO\Field::create( 'subheading', __( 'WordPress Notices' ) );
$return[] = WPO\Field::create( 'wp_notice_success', __( '<p>WP Success Notice</p>' ) );
$return[] = WPO\Field::create( 'wp_notice_info', __( '<p>WP Info Notice</p>' ) );
$return[] = WPO\Field::create( 'wp_notice_warning', __( '<p>WP Warning Notice</p>' ) );
$return[] = WPO\Field::create( 'wp_notice_error', __( '<p>WP Error Notice</p>' ) );
$return[] = WPO\Field::create( 'wp_notice_success', '<h4 class="alert-heading">Well done!</h4> <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p> <hr> <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>' );

$return[] = \WPO\Field::create( 'subheading', __( 'WordPress Large Notices' ) );
$return[] = WPO\Field::create( 'wp_notice_success', __( '<p>WP Success Notice</p>' ) )
	->large( true );
$return[] = WPO\Field::create( 'wp_notice_info', __( '<p>WP Info Notice</p>' ) )
	->large( true );
$return[] = WPO\Field::create( 'wp_notice_warning', __( '<p>WP Warning Notice</p>' ) )
	->large( true );
$return[] = WPO\Field::create( 'wp_notice_error', __( '<p>WP Error Notice</p>' ) )
	->large( true );
$return[] = WPO\Field::create( 'wp_notice_success', '<h4 class="alert-heading">Well done!</h4> <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p> <hr> <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>' )
	->large( true );

$return[] = \WPO\Field::create( 'subheading', __( 'WordPress Alt Notices' ) );
$return[] = WPO\Field::create( 'wp_notice_success', __( '<p>WP Success Notice</p>' ) )
	->alt( true );
$return[] = WPO\Field::create( 'wp_notice_info', __( '<p>WP Info Notice</p>' ) )
	->alt( true );
$return[] = WPO\Field::create( 'wp_notice_warning', __( '<p>WP Warning Notice</p>' ) )
	->alt( true );
$return[] = WPO\Field::create( 'wp_notice_error', __( '<p>WP Error Notice</p>' ) )
	->alt( true );
$return[] = WPO\Field::create( 'wp_notice_success', '<h4 class="alert-heading">Well done!</h4> <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p> <hr> <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>' )
	->alt( true );

$return[] = \WPO\Field::create( 'subheading', __( 'WordPress Alt Large Notices' ) );
$return[] = WPO\Field::create( 'wp_notice_success', __( '<p>WP Success Notice</p>' ) )
	->alt( true )
	->large( true );
$return[] = WPO\Field::create( 'wp_notice_info', __( '<p>WP Info Notice</p>' ) )
	->alt( true )
	->large( true );
$return[] = WPO\Field::create( 'wp_notice_warning', __( '<p>WP Warning Notice</p>' ) )
	->alt( true )
	->large( true );
$return[] = WPO\Field::create( 'wp_notice_error', __( '<p>WP Error Notice</p>' ) )
	->alt( true )
	->large( true );
$return[] = WPO\Field::create( 'wp_notice_success', '<h4 class="alert-heading">Well done!</h4> <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p> <hr> <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>' )
	->alt( true )
	->large( true );


$return[] = \WPO\Field::create( 'divider' );
$return[] = \WPO\Field::create( 'subheading', __( 'Other Notice Features' ) );
$return[] = WPO\Field::create( 'wp_notice_success', __( 'This Notice is sticky and canno\'t be hidden / closed.' ) )
	->close( false );
$return[] = WPO\Field::create( 'wp_notice_success', __( 'This Notice Will Close in [count] seconds' ) )
	->close( false )
	->autoclose( 10000 );
$return[] = WPO\Field::create( 'wp_notice_success', __( 'This Notice Will Close in (15000 / 1000 =  15) [count] seconds' ) )
	->close( false )
	->autoclose( 15000 );
return $return;
