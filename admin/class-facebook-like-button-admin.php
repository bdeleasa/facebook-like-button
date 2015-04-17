<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Brianna Deleasa <me@briannadeleasa.com>
 */
class Facebook_Like_Button_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Enables the use of shortcodes in the text widget.
	 *
	 * @since    1.0.0
	 */
	public function text_widget_enable_shortcodes() {

		add_filter( 'widget_text', 'do_shortcode' );

	}


	/**
	 * Initializes the options page
	 *
	 * @since 1.0.0
	 */
	public function init_options_page() {

		include 'class-facebook-like-button-options.php';

		// Get it started
		$GLOBALS['Facebook_Like_Button_Options'] = new Facebook_Like_Button_Options();
		$GLOBALS['Facebook_Like_Button_Options']->hooks();

	}

}
