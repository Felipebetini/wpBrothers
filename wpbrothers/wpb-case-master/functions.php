<?php defined('ABSPATH') || exit('Forbidden');

// Require theme files
require_once get_template_directory() . "/lib/init.php";

/**
 * Disable Gutenberg block editor
 * 
 * @see https://developer.wordpress.org/reference/hooks/use_block_editor_for_post/
 */
add_filter('use_block_editor_for_post', '__return_false', 10, 0);

function wpb_register_menus()
{
    register_nav_menus([
        'primary_menu' => __('Primary Menu', 'wpbrothers')
    ]);
}
add_action('after_setup_theme', 'wpb_register_menus');

