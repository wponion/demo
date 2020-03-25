<?php
global $wpo_list_table_content, $wpo_list_table_columns;

$wpo_list_table_content = array(
	array(
		'name'           => 'Rhea D. Ballard',
		'email'          => 'nunc.risus.varius@Ut.edu',
		'country'        => 'Botswana',
		'region'         => 'Gilgit Baltistan',
		'zipcode'        => 'M9S 8W6',
		'contact-number' => '16021130-3250',
		'company'        => 'Purus Maecenas Libero Consulting',
	),
	array(
		'name'           => 'Nehru I. Sparks',
		'email'          => 'massa.Vestibulum.accumsan@Proindolor.ca',
		'country'        => 'Djibouti',
		'region'         => 'ANT',
		'zipcode'        => '9682',
		'contact-number' => '16740429-8379',
		'company'        => 'In Foundation',
	),
	array(
		'name'           => 'Malik C. Garcia',
		'email'          => 'sem@laciniamattis.edu',
		'country'        => 'Saint Vincent and The Grenadines',
		'region'         => 'Nordrhein-Westphalen',
		'zipcode'        => '80530-10175',
		'contact-number' => '16380912-7040',
		'company'        => 'Amet Lorem Institute',
	),
	array(
		'name'           => 'Ariel D. Knox',
		'email'          => 'faucibus@consectetuer.ca',
		'country'        => 'Macao',
		'region'         => 'Madhya Pradesh',
		'zipcode'        => 'Z7161',
		'contact-number' => '16821222-4946',
		'company'        => 'Et Ultrices Posuere Company',
	),
	array(
		'name'           => 'Tobias E. Fuentes',
		'email'          => 'ornare.placerat@nonsapienmolestie.edu',
		'country'        => 'Ecuador',
		'region'         => 'ON',
		'zipcode'        => '52317',
		'contact-number' => '16391001-9615',
		'company'        => 'Posuere Enim Nisl Institute',
	),
	array(
		'name'           => 'Cole Y. Dorsey',
		'email'          => 'Nam.ligula@mollis.co.uk',
		'country'        => 'Algeria',
		'region'         => 'QLD',
		'zipcode'        => '782331',
		'contact-number' => '16230129-7871',
		'company'        => 'Eleifend Nec Industries',
	),
	array(
		'name'           => 'Paula Y. Lamb',
		'email'          => 'neque.In@elitEtiam.ca',
		'country'        => 'Switzerland',
		'region'         => 'New South Wales',
		'zipcode'        => '82563',
		'contact-number' => '16730319-1329',
		'company'        => 'Nunc Laoreet Limited',
	),
	array(
		'name'           => 'Priscilla D. Adkins',
		'email'          => 'quis.pede.Suspendisse@atortor.net',
		'country'        => 'Tokelau',
		'region'         => 'Cartago',
		'zipcode'        => '27191',
		'contact-number' => '16380824-7609',
		'company'        => 'At Augue Limited',
	),
	array(
		'name'           => 'Zephania X. Santiago',
		'email'          => 'dolor.tempus@Namligulaelit.com',
		'country'        => 'China',
		'region'         => 'CN',
		'zipcode'        => '24066',
		'contact-number' => '16170513-2544',
		'company'        => 'Mus Consulting',
	),
	array(
		'name'           => 'Rigel I. Kidd',
		'email'          => 'quam@mollisnon.ca',
		'country'        => 'Timor-Leste',
		'region'         => 'CAJ',
		'zipcode'        => '52488',
		'contact-number' => '16430430-1361',
		'company'        => 'Dictum Eleifend Nunc PC',
	),
);

$wpo_list_table_columns = array(
	'name'           => 'Name',
	'email'          => 'Email',
	'country'        => 'Country',
	'region'         => 'Region',
	'zipcode'        => 'Zip/Pin/Postal Code',
	'contact-number' => 'Contact Number',
	'company'        => 'Company',
);

wponion_admin_page( array(
	'menu_title' => __( 'WPO List Table' ),
	'page_title' => __( 'WPO List Table' ),
	'menu_slug'  => 'wpo-list-table',
	'render'     => 'false',
) );

require __DIR__ . '/wp-table.php';

require __DIR__ . '/bs-table.php';

function wpo_wp_list_table_demo() {
	global $wpo_list_table_content, $wpo_list_table_columns;
	/**
	 * @var \WPO\Fields\WP_List_Table $table
	 */
	echo '<div class="wponion-framework" style="background: white; border: 1px solid #ddd;">';

	/**
	 * Basic Table.
	 */
	echo wpo_field( 'subheading', __( 'Basic Table' ) )->render();
	$table = wpo_field( 'wp_list_table' );
	$table->data( $wpo_list_table_content );
	$table->settings( array( 'columns' => $wpo_list_table_columns ) );
	echo $table->render();

	/**
	 * Without Search Field.
	 */
	echo wpo_field( 'subheading', __( 'Without Search Field' ) )->render();
	$table = wpo_field( 'wp_list_table' );
	$table->data( $wpo_list_table_content );
	$table->settings( array(
		'columns' => $wpo_list_table_columns,
		'search'  => false,
	) );
	echo $table->render();
	echo '</div>';


}
