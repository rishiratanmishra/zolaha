<?php
/**
 * Zolaha Core Asset Pipeline & Performance Optimization
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

/**
 * Enqueue scripts and styles.
 */
function zolaha_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');

    // 1. Preconnect & Enqueue Manrope (Google Fonts)
    wp_enqueue_style(
        'zolaha-fonts',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap',
        [],
        null
    );

    // 2. Enqueue Core Theme Stylesheet (Tokens)
    wp_enqueue_style(
        'zolaha-style',
        get_stylesheet_uri(),
        [],
        $theme_version
    );

    // 3. Enqueue Production Compiled CSS
    wp_enqueue_style(
        'zolaha-theme-css',
        get_template_directory_uri() . '/assets/css/theme.css',
        ['zolaha-style'],
        $theme_version
    );

    // 4. Enqueue Production JavaScript Engine (Deferred in Footer)
    wp_enqueue_script(
        'zolaha-theme-js',
        get_template_directory_uri() . '/assets/js/theme.js',
        [],
        $theme_version,
        true // in footer
    );

    // 5. Pass Environment Data to Client
    wp_localize_script('zolaha-theme-js', 'ZolahaConfig', [
        'ajaxUrl'   => admin_url('admin-ajax.php'),
        'homeUrl'   => home_url('/'),
        'siteTitle' => get_bloginfo('name'),
    ]);
}
add_action('wp_enqueue_scripts', 'zolaha_enqueue_assets');

/**
 * Preconnect Resource Hints for Zero-Latency Font Loading
 */
function zolaha_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = [
            'href' => 'https://fonts.googleapis.com',
        ];
        $urls[] = [
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        ];
    }
    return $urls;
}
add_filter('wp_resource_hints', 'zolaha_resource_hints', 10, 2);

/**
 * Defer non-critical JavaScript to achieve INP < 80ms
 */
function zolaha_defer_scripts($tag, $handle, $src) {
    if ('zolaha-theme-js' === $handle) {
        return '<script src="' . esc_url($src) . '" id="' . esc_attr($handle) . '-js" defer></script>' . "\n";
    }
    return $tag;
}
add_filter('script_loader_tag', 'zolaha_defer_scripts', 10, 3);
