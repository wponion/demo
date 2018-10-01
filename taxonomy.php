<?php
/**
 *
 * Project : bullet-wp
 * Date : 06-08-2018
 * Time : 11:19 AM
 * File : taxonomy.php
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @package bullet-wp
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */


if ( ! defined( 'ABSPATH' ) ) {
	die;
}

$tax_fields = array();

foreach ( $wpof as $fields ) {
	$tax_fields = array_merge( $tax_fields, $fields );
}


$instance = wponion_taxonomy( array(
	'option_name' => '_wponion_taxonomy',
	'taxonomy'    => 'product_cat',
	'theme'       => 'wp',
), $tax_fields );
