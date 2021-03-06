<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://digital-manager.io
 * @since      1.0.0
 *
 * @package    Web_Directory
 * @subpackage Web_Directory/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Web_Directory
 * @subpackage Web_Directory/public
 * @author     david fieffe <david@loading-data.com>
 */
class Web_Directory_Public {

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
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Web_Directory_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Web_Directory_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/web-directory-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Web_Directory_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Web_Directory_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script(
			'vue-js',
			'https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.2/vue.min.js',
			array (),
			'2.3.2',
			true);

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/web-directory-public.js', array( 'jquery', 'vue-js' ), $this->version, true );

	}


	// Add Shortcode
	public function websitedirectory_shortcode() {
		$display_file = dirname(__FILE__).'/partials/web-directory-public-display.php';
		ob_start();
		include $display_file;
		$output = ob_get_contents();
		ob_end_clean();

		return $output;

	}




}
