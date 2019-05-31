<?php
$return  = array();
$phpcode = <<<PHP
\$content   = array( 'type' => 'content', 'content' => 'Your Diect Content' );
\$content   = array( 'type' => 'content', 'content' => 'Your Diect Content', 'markdown' => true ); // Enable Markdown
\$content_2 = array( 'type' => 'content', 'content' => 'your_callback_function' );
\$content_3 = array( 'type' => 'content', 'content' => 'path_to_file' ); // Provide u file path;
function your_callback_function() {
	echo "Hello World";
}
PHP;

$code     = wponion_highlight_string( $phpcode );
$return[] = WPO\Field::create( 'notice_info', __( 'Content Field Is used to render markdown' ) );
$return[] = WPO\Field::create( 'content', 'You can pass content for this field by the following ways
* 1. String
* 2. File
* 3. Callback
## Field Code :
' . $code . '
' )
	->markdown( true );
$return[] = WPO\Field::create( 'subheading', __( 'Content With Markdown From A File' ) );
$return[] = WPO\Field::create( 'content' )
	->content( __DIR__ . '/markdown.md' )
	->markdown( true );
$return[] = WPO\Field::create( 'subheading', __( 'Content With Markdown From A Function' ) );
$return[] = WPO\Field::create( 'content' )
	->content( function () {
		return '
# Markdown Heading h1
## Markdown Heading h2
### Markdown Heading h3
#### Markdown Heading h4
##### Markdown Heading h5
###### Markdown Heading h6

		';
	} )
	->markdown( true );

return $return;
