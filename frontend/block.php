<?php

//include plugin_dir_path(__FILE__) . 'public-functions.php';

// Call the rendering function
//render_my_custom_block();

function enqueue_my_custom_block_assets() {

    if (have_rows('content_blocks')) {
        // Check if our block exists on the page before enqueuing
        while (have_rows('content_blocks')) : the_row();
            if (get_row_layout() == 'flexiimagetext') {
                wp_enqueue_style('tac-block-style', plugin_dir_url(__FILE__) . 'public.css');
                wp_enqueue_script('tac-block-script', plugin_dir_url(__FILE__) . 'public.js', array('jquery'), '', true);

                render_my_custom_block();
                
                break; // Exit the loop once our block is found
            }
        endwhile;
    }

}
add_action('wp_enqueue_scripts', 'enqueue_my_custom_block_assets');

// Render the block's content
function render_my_custom_block() {
    ob_start();
    echo 'this a test...';
    ob_end_flush();
}
