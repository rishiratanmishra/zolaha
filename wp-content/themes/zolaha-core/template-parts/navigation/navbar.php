<?php
/**
 * Site navigation
 *
 * @package Zolaha_Core
 */

defined('ABSPATH') || exit;
?>

<header class="site-header" role="banner">
    <div class="zolaha-container">
        <div class="nav-wrapper">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-link" aria-label="<?php esc_attr_e('Zolaha home', 'zolaha'); ?>">
                <?php echo zolaha_icon('brand-logo'); ?>
            </a>

            <nav class="nav-menu" aria-label="<?php esc_attr_e('Main navigation', 'zolaha'); ?>">
                <a href="<?php echo esc_url(home_url('/#products')); ?>" class="nav-link"><?php esc_html_e('Tools', 'zolaha'); ?></a>
                <a href="<?php echo esc_url(home_url('/#philosophy')); ?>" class="nav-link"><?php esc_html_e('How we build', 'zolaha'); ?></a>
            </nav>

            <div class="nav-actions">
                <button type="button" class="theme-toggle-btn" data-action="toggle-theme" data-light-label="<?php esc_attr_e('Use light mode', 'zolaha'); ?>" data-dark-label="<?php esc_attr_e('Use dark mode', 'zolaha'); ?>" aria-label="<?php esc_attr_e('Toggle light and dark mode', 'zolaha'); ?>">
                    <?php echo zolaha_icon('moon', 'theme-icon theme-icon-moon'); ?>
                    <?php echo zolaha_icon('sun', 'theme-icon theme-icon-sun'); ?>
                </button>
                <button type="button" class="theme-toggle-btn mobile-menu-toggle" data-action="toggle-mobile-menu" data-open-label="<?php esc_attr_e('Open navigation menu', 'zolaha'); ?>" data-close-label="<?php esc_attr_e('Close navigation menu', 'zolaha'); ?>" aria-expanded="false" aria-controls="mobile-drawer" aria-label="<?php esc_attr_e('Open navigation menu', 'zolaha'); ?>">
                    <span class="menu-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>

    <nav id="mobile-drawer" class="mobile-drawer hidden" aria-label="<?php esc_attr_e('Mobile navigation', 'zolaha'); ?>">
        <a href="<?php echo esc_url(home_url('/#products')); ?>" class="nav-link"><?php esc_html_e('Tools', 'zolaha'); ?></a>
        <a href="<?php echo esc_url(home_url('/#philosophy')); ?>" class="nav-link"><?php esc_html_e('How we build', 'zolaha'); ?></a>
    </nav>
</header>
