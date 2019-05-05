<?php
$return = array();

$return[] = WPO\Field::create( 'upload', 'upload', __( 'Upload' ) );
$return[] = WPO\Field::create( 'upload', 'upload_1', __( 'Upload' ) )
	->button( array(
		'label' => __( 'Upload Image' ),
		'class' => 'button button-dark',
	) )
	->desc_field( 'This field is customized to have custom label for button and primary class for upload button' );

$return[] = WPO\Field::create( 'upload', 'upload_2', __( 'Upload' ) )
	->library( 'image' )
	->frame_title( 'Upload Background Image' )
	->insert_title( 'Use Image' )
	->desc_field( 'Click Upload button and see the frame content changes.' );

return $return;
