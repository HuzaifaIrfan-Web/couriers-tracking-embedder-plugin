<?php

/**
 * Register all actions and filters for the plugin
 *
 * @link       https://huzaifairfan.com/
 * @since      1.0.0
 *
 * @package    Couriers_Tracking_Embedder_Plugin
 * @subpackage Couriers_Tracking_Embedder_Plugin/includes
 */

/**
 * Register all actions and filters for the plugin.
 *
 * Maintain a list of all hooks that are registered throughout
 * the plugin, and register them with the WordPress API. Call the
 * run function to execute the list of actions and filters.
 *
 * @package    Couriers_Tracking_Embedder_Plugin
 * @subpackage Couriers_Tracking_Embedder_Plugin/includes
 * @author     Huzaifa Irfan <huzaifairfan2001@gmail.com>
 */
 
class Couriers_Tracking_Embedder_Plugin_Shortcode
{

	public static function run()
	{



function couriers_tracking_embedder_form_func($variables){

	extract($variables);
	// $action, $placeholder


	ob_start();

	include_once plugin_dir_path(dirname(__FILE__)) . 'public/partials/couriers-tracking-embedder-plugin-form-display.php';
	$output = ob_get_contents();
	ob_end_clean();

	return $output;
}

add_shortcode('ct_embedder_form','couriers_tracking_embedder_form_func');





// Plugin Tracking Deatils ShortCode




function couriers_tracking_embedder_track_details_func($variables){


	extract($variables);
	// $tracking_url


	ob_start();
	include_once plugin_dir_path(dirname(__FILE__)) . 'public/partials/couriers-tracking-embedder-plugin-public-display.php';
	$output = ob_get_contents();
	ob_end_clean();

	return $output;
};

add_shortcode('ct_embedder_track_details','couriers_tracking_embedder_track_details_func');



	}
}



Couriers_Tracking_Embedder_Plugin_Shortcode::run();