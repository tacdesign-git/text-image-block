<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://tac.studio
 * @since      1.0.0
 *
 * @package    Tac_Text_Image
 * @subpackage Tac_Text_Image/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Tac_Text_Image
 * @subpackage Tac_Text_Image/includes
 * @author     TAC Design <dev@tac-design.co.uk>
 */
class Tac_Text_Image_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'tac-text-image',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
