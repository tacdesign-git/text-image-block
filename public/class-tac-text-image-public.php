<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://tac.studio
 * @since      1.0.0
 *
 * @package    Tac_Text_Image
 * @subpackage Tac_Text_Image/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Tac_Text_Image
 * @subpackage Tac_Text_Image/public
 * @author     TAC Design <dev@tac-design.co.uk>
 */
class Tac_Text_Image_Public {

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
		 * defined in Tac_Text_Image_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Tac_Text_Image_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/tac-text-image-public.css', array(), $this->version, 'all' );

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
		 * defined in Tac_Text_Image_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Tac_Text_Image_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/tac-text-image-public.js', array( 'jquery' ), $this->version, false );

	}


	

	public function inject_custom_content_block($content) {
		global $post;

		echo plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/tac-text-image-public-display.php';
		echo get_row_layout();
		
		// Check if the current post has the specific ACF layout/block you're targeting
		if (have_rows('content_blocks', $post->ID)): 

			while (have_rows('content_blocks', $post->ID)): the_row();

			

				if (get_row_layout() == 'flexiimagetext'):
					ob_start();
					include plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/tac-text-image-public-display.php';
					$block_content = ob_get_clean();

					// Append or insert the block content where you want it relative to the post content
					$content .= $block_content;
				endif;

			endwhile;
		endif;

		return $content;
	}


}
