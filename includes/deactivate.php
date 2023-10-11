<?php
function block_plugin_deactivate() {

    $deregister_blocks = get_option('dynamic_blocks_registry', []);

    // add block name
    if (isset($deregister_blocks['flexiimagetext'])) {
        unset($deregister_blocks['flexiimagetext']);
    }

    update_option('dynamic_blocks_registry', $deregister_blocks);
}


