<?php
// Security check: If not called by WP, then exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Delete options
// delete_option('your_plugin_option_name');

// // Remove custom database table (optional and with caution!)
// global $wpdb;
// $table_name = $wpdb->prefix . 'your_plugin_table_name';
// $wpdb->query("DROP TABLE IF EXISTS $table_name");
// ?>