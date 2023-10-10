<?php

/*
 * @wordpress-plugin
 * Plugin Name:       TAC - Text / Image
 * Description:       TAC Design - Text & Image block
 * Version:           1.0.2
 * Author:            TAC Design
*/

// Activation Hook
// register_activation_hook(__FILE__, 'your_plugin_name_activate');
// function your_plugin_name_activate() {
//     require_once plugin_dir_path(__FILE__) . 'includes/activate.php';
// }

// // Deactivation Hook
// register_deactivation_hook(__FILE__, 'your_plugin_name_deactivate');
// function your_plugin_name_deactivate() {
//     require_once plugin_dir_path(__FILE__) . 'includes/deactivate.php';
// }

// Uninstall Hook
register_uninstall_hook(__FILE__, 'your_plugin_name_uninstall');
function your_plugin_name_uninstall() {
    require_once plugin_dir_path(__FILE__) . 'includes/uninstall.php';
}

// Load Admin Functions
if (is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'admin/admin-acf.php';
}

// Load Frontend Functions
if (!is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'frontend/public-functions.php';
}


