<?php
// If uninstall not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}

// Remove options added by the plugin
delete_option('display_posts_category_display_link');
delete_option('display_posts_keywords');
delete_option('display_posts_output_format');
delete_option('display_posts_wrapper_class');
delete_option('display_posts_wrapper');
