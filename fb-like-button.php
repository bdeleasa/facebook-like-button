<?php

/**
 * @link              https://github.com/bdeleasa/facebook-like-button
 * @since             1.0.0
 * @package           Facebook_Like_Button
 *
 * @wordpress-plugin
 * Plugin Name:       FB Like Button
 * Plugin URI:        https://github.com/bdeleasa/facebook-like-button
 * Description:       Enables a shortcode for outputting a Facebook Like button.
 * Version:           1.1.0
 * Author:            Brianna Deleasa
 * Author URI:        http://briannadeleasa.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       facebook-like-button
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-facebook-like-button-activator.php
 */
function activate_facebook_like_button() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-facebook-like-button-activator.php';
	Facebook_Like_Button_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-facebook-like-button-deactivator.php
 */
function deactivate_facebook_like_button() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-facebook-like-button-deactivator.php';
	Facebook_Like_Button_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_facebook_like_button' );
register_deactivation_hook( __FILE__, 'deactivate_facebook_like_button' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-facebook-like-button.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_facebook_like_button() {

	$plugin = new Facebook_Like_Button();
	$plugin->run();

}
run_facebook_like_button();
