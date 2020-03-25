<?php


wponion_admin_page( array(
	'menu_title' => __( 'WordPress' ),
	'page_title' => __( 'WordPress Style Table' ),
	'submenu'    => 'wpo-list-table',
	'menu_slug'  => 'wpo-wp-list-table',
	'tabs'       => array(
		array(
			'title'  => __( 'Basic' ),
			'name'   => 'basic-table',
			'render' => 'wponion_wp_list_table_demo',
		),
		array(
			'title'  => __( 'No Search' ),
			'name'   => 'no-search',
			'render' => 'wponion_wp_list_table_demo',
		),
		array(
			'title'  => __( 'No Table-nav' ),
			'name'   => 'no-table-nav',
			'render' => 'wponion_wp_list_table_demo',
		),
		array(
			'title'  => __( 'Sortable Columns' ),
			'name'   => 'sortable',
			'render' => 'wponion_wp_list_table_demo',
		),
	),
) );

/**+
 * @param \WPOnion\Modules\Admin_Page $page
 */
function wponion_wp_list_table_demo( $page ) {
	global $wpo_list_table_content, $wpo_list_table_columns;
	$settings = array(
		'columns' => $wpo_list_table_columns,
	);
	$table    = wpo_field( 'wp_list_table' );
	$table->data( $wpo_list_table_content );

	echo '<div class="wponion-framework" style="background: white; border: 1px solid #ddd;">';
	switch ( $page->active_tab() ) {
		case 'basic':
			break;
		case 'no-search':
			$settings['search'] = false;
			break;
		case 'no-table-nav':
			$settings['tablenav_top']    = false;
			$settings['search']          = false;
			$settings['tablenav_bottom'] = false;
			break;
		case 'sortable':
			$settings['sortable'] = array(
				'contact-number' => 'contact-number',
				'name'           => array( 'name', true ),
			);
			$table->data( function () {
				global $wpo_list_table_content;
				usort( $wpo_list_table_content, function ( $a, $b ) {
					$orderby = ( ! empty( $_GET['orderby'] ) ) ? $_GET['orderby'] : 'contact-number';
					$order   = ( ! empty( $_GET['order'] ) ) ? $_GET['order'] : 'asc';
					$result  = strcmp( $a[ $orderby ], $b[ $orderby ] );
					return ( 'asc' === $order ) ? $result : -$result;
				} );

				return $wpo_list_table_content;
			} );
			break;
	}

	$table->settings( $settings );
	echo $table->render();
	echo '</div>';
}