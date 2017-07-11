<?php

/**
 * Plugin Name:       ACF Field Styles Enhanced
 * Plugin URI:        https://github.com/matthewmcvickar/acf-field-styles-enhanced
 * Description:       A handful of styling improvements and CSS classes for ACF field groups to make for prettier editing.
 * Version:           0.0.1
 * Author:            Matthew McVickar
 * Author URI:        http://matthewmcvickar.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mm-acf-field-styles-enhanced
 * GitHub Plugin URI: https://github.com/matthewmcvickar/acf-field-styles-enhanced
 */

define('PLUGIN_VERSION', '0.0.1');

function enqueue_acf_field_styles_enhanced_stylesheet() {
  wp_enqueue_style('acf-field-styles-enhanced', plugin_dir_url(__FILE__) . 'acf-field-styles-enhanced.css', null, PLUGIN_VERSION);
}
add_action('admin_enqueue_scripts', 'enqueue_acf_field_styles_enhanced_stylesheet');

?>
