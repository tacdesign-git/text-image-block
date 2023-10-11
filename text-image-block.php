<?php

/*
 * @wordpress-plugin
 * Plugin Name:       TAC - Text / Image
 * Description:       TAC Design - Text & Image block
 * Version:           1.0.24 
 * Author:            TAC Design
*/

// Activation Hook
register_activation_hook(__FILE__, 'block_activate');
function block_activate() {
    require_once plugin_dir_path(__FILE__) . 'includes/activate.php';
    block_plugin_activate(); 
}


// Deactivation Hook
register_deactivation_hook(__FILE__, 'block_deactivate');
function block__deactivate() {
    require_once plugin_dir_path(__FILE__) . 'includes/deactivate.php';
    block_plugin_deactivate(); 
}

// Uninstall Hook
// register_uninstall_hook(__FILE__, 'your_plugin_name_uninstall');
// function your_plugin_name_uninstall() {
//     require_once plugin_dir_path(__FILE__) . 'includes/uninstall.php';
// }

// Load Admin Functions
if (is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'admin/admin-acf.php';
}

// Load Frontend Functions
if (!is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'frontend/block.php';
}


