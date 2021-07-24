<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://simone.vannucci.ch
 * @since      1.0.0
 *
 * @package    Qr_Code_Redirect
 * @subpackage Qr_Code_Redirect/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Qr_Code_Redirect
 * @subpackage Qr_Code_Redirect/includes
 * @author     Simone Vannucci <info@vannucci.ch>
 */
class Qr_Code_Redirect_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'qr-code-redirect',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
