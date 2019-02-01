<?php
$return = array();

$return[] = WPO\Field::create( 'heading', 'Heading Content' );
$return[] = WPO\Field::create( 'subheading', 'Heading Content' );
/* translators: Added LinkBack.*/
$return[] = WPO\Field::create( 'content', sprintf( __( 'ALL UI Fields Related Fields Code Can Be Found %1$s@wponion/demo%2$s' ), '<a href="https://github.com/wponion/demo">', '</a>' ) );
$return[] = WPO\Field::create( 'jambo_content', '<h1 class="display-4">Jumbotron</h1><p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>' );
$return[] = WPO\Field::create( 'iframe' )
	->set_url( 'https://www.youtube.com/embed/A9JV0EvCkMI' )
	->set_heading( 'Documentation Video' )
	->set_width( '400px' )
	->set_height( '200px' );

return $return;
