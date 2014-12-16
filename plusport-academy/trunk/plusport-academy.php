<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.plusport.com
 * @since             1.0.0
 * @package           PlusPort_Academy
 *
 * @wordpress-plugin
 * Plugin Name:       PlusPort Academy
 * Plugin URI:        https://github.com/PlusPort/WP-PlusPort-Academy
 * Description:       This plugin is required for the PlusPort Academy Widgets. General settings are made in this plugin
 * Version:           1.0.0
 * Author:            PlusPort B.V.
 * Author URI:        http://www.plusport.com/
 * Text Domain:       plusport-academy
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plusport-academy-activator.php
 */
function activate_plusport_academy() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plusport-academy-activator.php';
	PlusPort_Academy_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plusport-academy-deactivator.php
 */
function deactivate_plusport_academy() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plusport-academy-deactivator.php';
	PlusPort_Academy_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plusport_academy' );
register_deactivation_hook( __FILE__, 'deactivate_plusport_academy' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plusport-academy.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plusport_academy() {

	$plugin = new PlusPort_Academy();
	$plugin->run();

}
run_plusport_academy();
