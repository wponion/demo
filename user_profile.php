<?php
/**
 *
 * Project : bullet-wp
 * Date : 06-08-2018
 * Time : 11:51 AM
 * File : user_profile.php
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

$instance = wponion_user_profile( array(
	'option_name' => '_wponion_user_profile',
), $tax_fields );