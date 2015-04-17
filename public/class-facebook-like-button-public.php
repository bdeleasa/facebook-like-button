<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Facebook_Like_Button
 * @subpackage Facebook_Like_Button/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Facebook_Like_Button
 * @subpackage Facebook_Like_Button/public
 * @author     Brianna Deleasa <me@briannadeleasa.com>
 */
class Facebook_Like_Button_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}


	/**
	 * Outputs in the footer on the public-facing side of the site
	 *
	 * @since   1.0.0
	 */
	public function wp_footer() {

		include plugin_dir_path( dirname( __FILE__ ) ) . 'public/display/facebook-js-sdk.php';

	}

	/**
	 * Registers all shortcodes
	 */
	public function init_shortcodes() {

		add_shortcode( 'fb-like-button', array($this, 'shortcode_fb_like_button') );

	}


	/**
	 * Creates a shortcode [fb-like-button]
	 */
	public function shortcode_fb_like_button( $atts, $content = NULL ) {

		$a = shortcode_atts( array(
			'url' => facebook_like_button_get_option('url'),
			'action' => facebook_like_button_get_option('action'),
			'layout' => facebook_like_button_get_option('layout'),
			'show_faces' => facebook_like_button_get_option('show_faces'),
			'share' => facebook_like_button_get_option('share'),
		), $atts );

		ob_start();

		// Make the array above into variables for use in the template
		extract($a);

		// We want these values as true/false
		$show_faces     = ($show_faces === 'on') ? 'true' : 'false';
		$share          = ($share === 'on') ? 'true' : 'false';

		include plugin_dir_path( dirname( __FILE__ ) ) . 'public/display/shortcode-fb-like-button.php';

		$contents = ob_get_contents();

		ob_end_clean();

		return $contents;

	}

}
