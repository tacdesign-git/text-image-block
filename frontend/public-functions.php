<?php

// Enqueue any necessary styles or scripts specific to this block
function enqueue_my_custom_block_assets() {

    if (is_singular() && have_rows('content_blocks')) {
        // Check if our block exists on the page before enqueuing
        while (have_rows('content_blocks')) : the_row();
            if (get_row_layout() == 'flexiimagetext') {
                wp_enqueue_style('tac-block-style', plugin_dir_url(__FILE__) . 'frontend/public.css');
                wp_enqueue_script('tac-block-script', plugin_dir_url(__FILE__) . 'frontend/public.js', array('jquery'), '', true);
                break; // Exit the loop once our block is found
            }
        endwhile;
    }

}
add_action('wp_enqueue_scripts', 'enqueue_my_custom_block_assets');

// Render the block's content
function render_my_custom_block() {
    ob_start();
    echo 'this a test';
    ob_end_flush();
}



