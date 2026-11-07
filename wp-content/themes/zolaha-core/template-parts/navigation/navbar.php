<?php
/**
 * Modular Header & Navigation Template Part
 *
 * @package Zolaha_Core
 * @version 2.1.0
 */

defined('ABSPATH') || exit;
?>

<header class="site-header" role="banner">
    <div class="zolaha-container">
        <div class="nav-wrapper">
            <!-- Brand Logo Mark with Grasshopper Tag -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-link" aria-label="<?php esc_attr_e('Zolaha Home', 'zolaha'); ?>">
                <?php echo zolaha_icon('brand-logo'); ?>
                <span>ZOLAHA</span>
                <span class="brand-tag"><?php esc_html_e('Studio', 'zolaha'); ?></span>
            </a>

            <!-- Desktop Navigation Menu -->
            <nav class="nav-menu" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'zolaha'); ?>">
                <a href="#products" class="nav-link"><?php esc_html_e('Product Suite', 'zolaha'); ?></a>
                <a href="#philosophy" class="nav-link"><?php esc_html_e('Philosophy', 'zolaha'); ?></a>
                <a href="#story" class="nav-link"><?php esc_html_e('Origin Story', 'zolaha'); ?></a>
                <a href="<?php echo esc_url(home_url('/llms.txt')); ?>" class="nav-link" target="_blank" rel="noopener noreferrer">llms.txt</a>
            </nav>

            <!-- Action Area: Dark/Light Mode + Mobile Menu Button -->
            <div class="nav-actions">
                <button type="button" class="theme-toggle-btn" data-action="toggle-theme" aria-label="<?php esc_attr_e('Toggle Dark/Light Mode', 'zolaha'); ?>">
                    <span class="icon-sun hidden"><?php echo zolaha_icon('sun'); ?></span>
                    <span class="icon-moon"><?php echo zolaha_icon('moon'); ?></span>
                </button>

                <!-- Mobile Hamburger Button -->
                <button type="button" class="theme-toggle-btn mobile-menu-toggle" data-action="toggle-mobile-menu" aria-expanded="false" aria-label="<?php esc_attr_e('Open Navigation Menu', 'zolaha'); ?>">
                    <span class="mobile-open-icon"><?php echo zolaha_icon('menu'); ?></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Dropdown -->
    <div id="mobile-drawer" class="hidden" style="background: var(--bg-surface); border-bottom: 1px solid var(--border-subtle); padding: 1.5rem 1rem;">
        <div class="zolaha-container" style="display: flex; flex-direction: column; gap: 1rem;">
            <a href="#products" class="nav-link" style="font-size: 1.1rem; padding: 0.5rem 0;"><?php esc_html_e('Product Suite', 'zolaha'); ?></a>
            <a href="#philosophy" class="nav-link" style="font-size: 1.1rem; padding: 0.5rem 0;"><?php esc_html_e('Philosophy', 'zolaha'); ?></a>
            <a href="#story" class="nav-link" style="font-size: 1.1rem; padding: 0.5rem 0;"><?php esc_html_e('Origin Story', 'zolaha'); ?></a>
            <a href="<?php echo esc_url(home_url('/llms.txt')); ?>" class="nav-link" style="font-size: 1.1rem; padding: 0.5rem 0;">llms.txt</a>
        </div>
    </div>
</header>
