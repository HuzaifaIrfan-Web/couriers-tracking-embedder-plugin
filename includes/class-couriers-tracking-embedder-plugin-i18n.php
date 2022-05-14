<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://huzaifairfan.com/
 * @since      1.0.0
 *
 * @package    Couriers_Tracking_Embedder_Plugin
 * @subpackage Couriers_Tracking_Embedder_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Couriers_Tracking_Embedder_Plugin
 * @subpackage Couriers_Tracking_Embedder_Plugin/includes
 * @author     Huzaifa Irfan <huzaifairfan2001@gmail.com>
 */
class Couriers_Tracking_Embedder_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'couriers-tracking-embedder-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
