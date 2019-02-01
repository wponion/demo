<?php
$return = array();
/* translators: Added LinkBack.*/
$return[] = WPO\Field::create( 'content', sprintf( __( 'ALL UI Fields Related Fields Code Can Be Found %1$s@wponion/demo%2$s' ), '<a href="https://github.com/wponion/demo">', '</a>' ) );
$return[] = WPO\Field::create( 'notice_primary', __( 'Primary Notice' ) );
$return[] = WPO\Field::create( 'notice_secondary', __( 'Secondary Notice' ) );
$return[] = WPO\Field::create( 'notice_info', __( 'Info Notice' ) );
$return[] = WPO\Field::create( 'notice_success', __( 'Success Notice' ) );
$return[] = WPO\Field::create( 'notice_Warning', __( 'Warning Notice' ) );
$return[] = WPO\Field::create( 'notice_danger', __( 'Danger Notice' ) );
$return[] = WPO\Field::create( 'notice_light', __( 'Success Light' ) );
$return[] = WPO\Field::create( 'notice_dark', __( 'Success Dark' ) );
$return[] = WPO\Field::create( 'notice_success', '<h4 class="alert-heading">Well done!</h4> <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p> <hr> <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>' );

$return[] = \WPO\Field::create( 'divider', '11' );
$return[] = \WPO\Field::create( 'subheading', __( 'Other Notice Features' ) );
$return[] = WPO\Field::create( 'notice_success', __( 'This Notice is sticky and canno\'t be hidden / closed.' ) )
	->set_close( false );
$return[] = WPO\Field::create( 'notice_success', __( 'This Notice Will Close in [count] seconds' ) )
	->set_close( false )
	->set_autoclose( 10000 );
$return[] = WPO\Field::create( 'notice_success', __( 'This Notice Will Close in (15000 / 1000 =  15) [count] seconds' ) )
	->set_close( false )
	->set_autoclose( 15000 );
return $return;
