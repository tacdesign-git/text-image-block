<?php
global $wp_version;

// Check for minimum WordPress version
if ( version_compare($wp_version, '5.0', '<') ) {
    deactivate_plugins( basename( __FILE__ ) );
    wp_die('This plugin requires WordPress version 5.0 or higher.');
}

function my_block_plugin_activate() {
    $registered_blocks = get_option('dynamic_blocks_registry', []);
    
    $registered_blocks['my_block_name'] = [
        'template_path' => WP_PLUGIN_DIR . "/my-block-plugin/blocks/my_block_template.php",
    ];

    update_option('dynamic_blocks_registry', $registered_blocks);
}
register_activation_hook(__FILE__, 'my_block_plugin_activate');


?>
