<?php

class Tac_Text_Image_PUBLIC {

    public function __construct() {
        add_filter('the_content', array($this, 'inject_custom_content_block'), 20);
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
