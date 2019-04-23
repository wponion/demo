jQuery( window ).on( 'load', function() {
	var $html = '/**\n' +
		' * Admin Bar Module Accepts All the documented arguments that are passed to ` $wp_admin_bar->add_menu() ` function.\n' +
		' * \n' +
		' * Argument List\n' +
		' * \n' +
		' * array(\n' +
		' *    \'id\' => null, # The ID of the node\n' +
		' *    \'title\' => null, # The text that will be visible in the Toolbar. Including html tags is allowed.\n' +
		' *    \'parent\' => null, # The ID of the parent node.\n' +
		' *    \'href\' => null, # The \'href\' attribute for the link. If \'href\' is not set the node will be a text node\n' +
		' *    \'group\' => null, # This will make the node a group (node) if set to \'true\'. ' +
		' \n' +
		' *                       # Group nodes are not visible in the Toolbar, but nodes added to it are. See add_group().\n' +
		' * \n' +
		' *    \'meta\' => array(\n' +
		' *        \'html\' => The html used for the node.\n' +
		' *        \'class\' => The class attribute for the list item containing the link or text node.\n' +
		' *        \'rel\' => The rel attribute.\n' +
		' *        \'onclick\' => The onclick attribute for the link. This will only be set if the \'href\' argument is present.\n' +
		' *        \'target\' => The target attribute for the link. This will only be set if the \'href\' argument is present.\n' +
		' *        \'title\' => The title attribute. Will be set to the link or to a div containing a text node.\n' +
		' *        \'tabindex\' => The tabindex attribute. Will be set to the link or to a div containing a text node.\n' +
		' *    ),\n' +
		' * )\n' +
		' *\n' +
		' * @see https://codex.wordpress.org/Class_Reference/WP_Admin_Bar/add_menu\n' +
		' */';
	jQuery( '.wponion-demo-menu' ).on( 'click', function() {
		swal.fire( {
			html: '<pre class="wpo-adminbardemo">' + $html + '</pre>',
			width: 900
		} );
	} );
} );