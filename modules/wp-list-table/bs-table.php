<?php

wponion_admin_page( array(
	'menu_title' => __( 'Bootstrap' ),
	'page_title' => __( 'Bootstrap' ),
	'submenu'    => 'wpo-list-table',
	'menu_slug'  => 'wpo-bs-list-table',
	'tabs'       => array(
		array(
			'title'  => __( 'Basic' ),
			'name'   => 'basic',
			'render' => 'wponion_bootstrap_list_table_demo',
		),
		array(
			'title'  => __( 'Dark' ),
			'name'   => 'dark',
			'render' => 'wponion_bootstrap_list_table_demo',
		),
		array(
			'title'  => __( 'Head / Footer' ),
			'name'   => 'head-footer',
			'render' => 'wponion_bootstrap_list_table_demo',
		),
		array(
			'title'  => __( 'Bordered' ),
			'name'   => 'bordered',
			'render' => 'wponion_bootstrap_list_table_demo',
		),
		array(
			'title'  => __( 'Borderless' ),
			'name'   => 'borderless',
			'render' => 'wponion_bootstrap_list_table_demo',
		),
		array(
			'title'  => __( 'Contextual' ),
			'name'   => 'contextual',
			'render' => 'wponion_bootstrap_list_table_demo',
		),
		array(
			'title'  => __( 'Sortable Columns' ),
			'name'   => 'sortable',
			'render' => 'wponion_bootstrap_list_table_demo',
		),
	),
) );
/**+
 * @param \WPOnion\Modules\Admin_Page $page
 */
function wponion_bootstrap_list_table_demo( $page ) {
	global $wpo_list_table_content, $wpo_list_table_columns;
	$settings = array(
		'columns'     => $wpo_list_table_columns,
		'table_style' => 'bootstrap',
	);
	$table    = wpo_field( 'wp_list_table' );
	$table->data( $wpo_list_table_content );
	$main_style = '';

	switch ( $page->active_tab() ) {
		case 'basic':
			$main_style = 'background:white;border:1px solid #ddd;';
			break;
		case 'dark':
			$settings['html_class'] = array( 'table' => 'table-dark' );
			break;
		case 'head-footer':
			$main_style             = 'background:white;border:1px solid #ddd;';
			$settings['html_class'] = array(
				'thead' => 'table-dark',
				'tfoot' => 'table-secondary',
				'table' => 'wpo-text-left',
			);
			break;
		case 'bordered':
			$main_style             = 'background:white;border:1px solid #ddd;';
			$settings['html_class'] = array(
				'table' => 'wpo-text-left table-bordered',
			);
			break;
		case 'borderless':
			$main_style             = 'background:white;border:1px solid #ddd;';
			$settings['html_class'] = array(
				'table' => 'table-borderless',
			);
			break;
		case 'contextual':
			$main_style             = 'background:white;border:1px solid #ddd;';
			$settings['html_class'] = array(
				'content' => function () {
					static $sent_class = array();
					$content = array(
						'active',
						'primary',
						'secondary',
						'success',
						'danger',
						'warning',
						'info',
						'light',
						'dark',
					);
					foreach ( $content as $class ) {
						if ( ! isset( $sent_class[ $class ] ) ) {
							$sent_class[ $class ] = true;
							return 'table-' . $class;
						}
					}
					return '';
				},
			);
			break;
		case 'sortable':
			$main_style           = 'background:white;border:1px solid #ddd;';
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
	echo '<div class="wponion-framework" style="' . $main_style . '">';
	echo $table->render();
	echo '</div>';
}