<?php
/*
Plugin Name: Wordpress dashboard Menu Hide by User ID
Description: Hide specific admin menu items for user ID "--"".
Version: 1.0
Author: Hosh Ario :)
*/

add_action('admin_menu', 'custom_hide_menu_items_for_specific_admin', 999);
function custom_hide_menu_items_for_specific_admin() {
    // Only run for the specific user ID (change 5 to your desired user ID)
    if ( get_current_user_id() != 5 ) {
        return;
    }
    remove_menu_page('edit.php');                        // Posts
    remove_menu_page('edit.php?post_type=page');         // Pages
    remove_menu_page('plugins.php');                     // Plugins
    remove_menu_page('themes.php');                      // Appearance/Themes
    remove_menu_page('options-general.php');             // Settings
    remove_menu_page('tools.php');                       // Tools
    remove_menu_page('users.php');                       // Users
    remove_menu_page('edit-comments.php');               // Comments
    remove_menu_page('index.php');                       // Dashboard/Home
    remove_menu_page('upload.php');                      // Media
    remove_menu_page('elementor');                       // Elementor (main)
    remove_menu_page('elementor-app');                   // Elementor (some versions)
    remove_menu_page('edit.php?post_type=elementor_library'); // Elementor Templates Library
    // Add more menu slugs here if needed
}

// Add plugin meta link to plugins page
add_filter('plugin_row_meta', 'custom_admin_menu_hide_plugin_meta', 10, 2);
function custom_admin_menu_hide_plugin_meta(
    $links, $file
) {
    if (strpos($file, 'custom-admin-menu-hide.php') !== false) {
        $links[] = '<a href="https://hoshario.com" target="_blank" rel="noopener">Designed &amp; developed with ❤️ by Hoshario</a>';
    }
    return $links;
}
