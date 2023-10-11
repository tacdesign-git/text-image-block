<?php
function block_plugin_deactivate() {

    $deregister_blocks = get_option('dynamic_blocks_registry', []);

    // add block name
    if (isset($deregister_blocks['textimageblock'])) {
        unset($deregister_blocks['textimageblock']);
    }

    update_option('dynamic_blocks_registry', $deregister_blocks);
}


