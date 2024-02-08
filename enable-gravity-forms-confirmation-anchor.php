<?php
/**
 * Plugin Name:     Enable Gravity Forms Confirmation Anchor
 * Plugin URI:      https://wordpress.org/plugins/enable-gravity-forms-confirmation-anchor
 * Description:     Enables the confirmation anchor functionality for all Gravity Forms on your site.
 * Version:         1.0.0
 * Author:          Wild Operation
 * Author URI:      https://wildoperation.com
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:     enable-gravity-forms-confirmation-anchor
 *
 * @package WordPress
 * @subpackage Enable Gravity Forms Confirmation Anchor
 * @since 1.0.0
 * @version 1.0.0
 */

/* Abort! */
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

new \WOEGFCA\Vendor\WOWPRB\WPPluginReviewBug( __FILE__ );

/**
 * Enable confirmation anchor on all forms.
 *
 * Reference: https://docs.gravityforms.com/gform_confirmation_anchor/
 */
add_filter( 'gform_confirmation_anchor', '__return_true', 100 );
