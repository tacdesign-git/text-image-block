<?php
global $wp_version;

// Check for minimum WordPress version
if (version_compare($wp_version, '5.0', '<')) {
    deactivate_plugins(basename(__FILE__));
    wp_die('This plugin requires WordPress version 5.0 or higher.');
}

function block_plugin_activate() {
    $registered_blocks = get_option('dynamic_blocks_registry', []);

    $registered_blocks['flexiimagetext'] = [
        'template_path' => WP_PLUGIN_DIR . "/text-image-block/text-image-block.php",
    ];

    update_option('dynamic_blocks_registry', $registered_blocks);
}

// Remove the following line from activate.php
// register_activation_hook(__FILE__, 'block_plugin_activate');
