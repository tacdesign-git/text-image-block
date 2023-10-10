<?php

echo 'Im stuck';

function inject_custom_content_block($content) {

    global $post;

    echo $post->ID;
    


    return $content;
}


add_filter('the_content', 'inject_custom_content_block', 20);


