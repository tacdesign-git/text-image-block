<?php
function block_plugin_deactivate() {

    $registered_blocks = get_option('dynamic_blocks_registry', []);

    // add block name
    if (isset($registered_blocks['textimageblock'])) {
        unset($registered_blocks['textimageblock']);
    }

    update_option('dynamic_blocks_registry', $registered_blocks);
}


