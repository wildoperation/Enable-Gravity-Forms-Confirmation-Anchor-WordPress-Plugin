<?php
/**
 * Plugin Name:     Enable Gravity Forms Confirmation Anchor
 * Plugin URI:      https://wordpress.org/plugins/enable-gravity-forms-confirmation-anchor
 * Description:     Enables the confirmation anchor functionality for all Gravity Forms on your site.
 * Version:         1.0.1
 * Author:          Wild Operation
 * Author URI:      https://wildoperation.com
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:     enable-gravity-forms-confirmation-anchor
 *
 * @package WordPress
 * @subpackage Enable Gravity Forms Confirmation Anchor
 * @since 1.0.0
 * @version 1.0.1
 */

/* Abort! */
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

new \WOEGFCA\Vendor\WOWPRB\WPPluginReviewBug(
	__FILE__,
	'enable-gravity-forms-confirmation-anchor',
	array(
		'intro'            => __( 'You\'ve been using Enable Gravity Forms Confirmation Anchor for a while now. We\'d love your feedback!', 'enable-gravity-forms-confirmation-anchor' ),
		'rate_link_text'   => __( 'Rate the plugin', 'enable-gravity-forms-confirmation-anchor' ),
		'remind_link_text' => __( 'Remind me later', 'enable-gravity-forms-confirmation-anchor' ),
		'nobug_link_text'  => __( 'Don\'t ask again', 'enable-gravity-forms-confirmation-anchor' ),
	)
);

/**
 * Enable confirmation anchor on all forms.
 *
 * Reference: https://docs.gravityforms.com/gform_confirmation_anchor/
 */
add_filter( 'gform_confirmation_anchor', '__return_true', 100 );
