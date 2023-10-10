<?php



function inject_custom_content_block($content) {
    global $post;

    echo $post->ID;
    
    
    // Check if the current post has the specific ACF layout/block you're targeting
    if (have_rows('content_blocks', $post->ID)): 

        while (have_rows('content_blocks', $post->ID)): the_row();

        

            if (get_row_layout() == 'flexiimagetext'):
                ob_start();
                echo get_row_layout();
                $block_content = ob_get_clean();

                // Append or insert the block content where you want it relative to the post content
                $content .= $block_content;
            endif;

        endwhile;
    endif;

    return $content;
}


add_filter('the_content', 'inject_custom_content_block');


?>



<section>
    hello.....
</section>