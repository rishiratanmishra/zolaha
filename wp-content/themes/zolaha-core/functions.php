<?php
/**
 * Zolaha Core Theme Kernel
 *
 * @package Zolaha_Core
 * @version 1.0.0
 * @author  Rishi Ratan Mishra (Zolaha Technologies)
 */

defined('ABSPATH') || exit;

// Define Theme Constants
define('ZOLAHA_VERSION', '2.1.0');
define('ZOLAHA_DIR', get_template_directory());
define('ZOLAHA_URI', get_template_directory_uri());

// Bootstrap Core Architecture Subsystems
require_once ZOLAHA_DIR . '/inc/setup.php';
require_once ZOLAHA_DIR . '/inc/assets.php';
require_once ZOLAHA_DIR . '/inc/schema.php';
require_once ZOLAHA_DIR . '/inc/helpers.php';

/**
 * Injects Zero-FOUC (Flash of Unstyled Content) Theme Initializer
 * Runs at the earliest possible stage in <head> before rendering DOM.
 */
function zolaha_inject_theme_bootstrapper() {
    ?>
    <script>
        (function() {
            try {
                var storedTheme = localStorage.getItem('zolaha-theme');
                var systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                var initialTheme = storedTheme || (systemDark ? 'dark' : 'light');
                document.documentElement.setAttribute('data-theme', initialTheme);
            } catch (e) {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
        })();
    </script>
    <?php
}
add_action('wp_head', 'zolaha_inject_theme_bootstrapper', 0);
