<?php
/**
 * Plugin Name:       ACF Field Styles Enhanced
 * Plugin URI:        https://github.com/matthewmcvickar/acf-field-styles-enhanced
 * Description:       A handful of styling improvements and CSS classes for ACF field groups to make for prettier editing.
 * Version:           0.0.44
 * Author:            Matthew McVickar
 * Author URI:        https://matthewmcvickar.com
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       acf-field-styles-enhanced
 * GitHub Plugin URI: https://github.com/matthewmcvickar/acf-field-styles-enhanced
 */

// Create a version number from the metadata above.
$plugin_data = get_file_data( __FILE__, array( 'Version' => 'Version' ), false );
define( 'ACF_FIELD_STYLES_ENHANCED_PLUGIN_VERSION', $plugin_data['Version'] );

// Enqueue our stylesheet.
add_action(
  'admin_enqueue_scripts',
  function() {
    wp_enqueue_style(
    'acf-field-styles-enhanced',
    plugin_dir_url( __FILE__ ) . 'acf-field-styles-enhanced.css',
    array(
      'acf-global',
      'acf-field-group',
      'acf-input',
      'acf-pro-field-group',
      'acf-pro-input'
    ),
    ACF_FIELD_STYLES_ENHANCED_PLUGIN_VERSION
  );
  },
  PHP_INT_MAX
);
