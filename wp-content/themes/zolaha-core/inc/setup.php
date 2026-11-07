<?php
/**
 * Zolaha Core Theme Setup & Security Hardening
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

if (!function_exists('zolaha_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function zolaha_setup() {
        // Make theme available for translation.
        load_theme_textdomain('zolaha', get_template_directory() . '/languages');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]);

        // Add support for core custom logo.
        add_theme_support('custom-logo', [
            'height'      => 60,
            'width'       => 200,
            'flex-width'  => true,
            'flex-height' => true,
        ]);

        // Responsive embeds support.
        add_theme_support('responsive-embeds');

        // Register Primary and Footer Navigation Menus.
        register_nav_menus([
            'primary-menu' => esc_html__('Header Navigation', 'zolaha'),
            'footer-menu'  => esc_html__('Footer Legal & Links', 'zolaha'),
        ]);
    }
}
add_action('after_setup_theme', 'zolaha_setup');

/**
 * Enterprise Security Hardening & Attack Surface Elimination
 */
// 1. Completely disable XML-RPC.
add_filter('xmlrpc_enabled', '__return_false');

// 2. Remove WordPress version info from header and feeds.
add_filter('the_generator', '__return_empty_string');

// 3. Remove unnecessary link tags from wp_head.
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');

// 4. Disable REST API User Enumeration for non-authenticated users.
add_filter('rest_endpoints', function($endpoints) {
    if (isset($endpoints['/wp/v2/users']) && !is_user_logged_in()) {
        unset($endpoints['/wp/v2/users']);
    }
    if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)']) && !is_user_logged_in()) {
        unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
    }
    return $endpoints;
});
