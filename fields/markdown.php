<?php
$return  = array();
$PHPCODE = <<<PHP
\$content   = array( 'type' => 'content', 'content' => 'Your Diect Content' );
\$content   = array( 'type' => 'content', 'content' => 'Your Diect Content', 'markdown' => true ); // Enable Markdown
\$content_2 = array( 'type' => 'content', 'content' => 'your_callback_function' );
\$content_3 = array( 'type' => 'content', 'include' => 'path_to_file' ); // Provide u file path;
function your_callback_function() {
	echo "Hello World";
}
PHP;
$code    = wponion_highlight_string( $PHPCODE );


$markdown = "# WPOnion Development Source Code
#### ~ Lightweight, Flexible WP Settings Framework ~ 
---
## So what is WPOnion , exactly?
WPOnion is a simple yet powerful framework that helps developers build custom meta boxes and custom fields in WordPress fast and easily.
The framework lets you define custom meta boxes and custom fields via arrays and handles everything behind the scene automatically. It has a wide range of field types, field settings and supports not only post meta but also term meta, user meta, comment meta, settings pages and custom tables.
## Contribution
Like WPOnion Framework, this documentation is open sourced on Github & GitBooks. The website\'s content is written in Markdown.
If you find anything incorrect in the documentation or out-dated, please help us fix it.
In case you come across anything along the way that we haven’t covered, or if you know of a tip you think others would find handy, please file an issue and we’ll see about including it in this guide.
## Documentation
https://wponion.gitbook.io/docs/',";

$return[] = WPO\Field::create( 'notice_info', __( 'Content Field Is used to render markdown' ) );
$return[] = WPO\Field::create( 'content', 'You can pass content for this field by the following ways
* 1. String
* 2. File
* 3. Callback
## Field Code :
' . $code . '
' )
	->markdown( true );
$return[] = WPO\Field::create( 'subheading', __( 'Sample Of Markdown Render' ) );
$return[] = WPO\Field::create( 'content' )
	->content( $markdown )
	->markdown( true );

return $return;
