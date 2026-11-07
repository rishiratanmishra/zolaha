<?php
/**
 * Modular Enterprise Site Footer Template Part
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;
?>

<footer class="site-footer" role="contentinfo">
    <div class="zolaha-container">
        <div class="footer-top">
            <!-- Brand Column -->
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-link" style="display: inline-flex;">
                    <?php echo zolaha_icon('brand-logo'); ?>
                    <span>ZOLAHA</span>
                </a>
                <p class="footer-brand-desc">
                    <?php esc_html_e('An independent digital product studio engineering agile, zero-knowledge, in-browser software for the world.', 'zolaha'); ?>
                </p>
            </div>

            <!-- Product Verticals -->
            <div>
                <h4 class="footer-col-title"><?php esc_html_e('Product Suite', 'zolaha'); ?></h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/products/formcraft/')); ?>" class="footer-link"><?php esc_html_e('Zolaha FormCraft', 'zolaha'); ?></a></li>
                    <li><a href="#products" class="footer-link"><?php esc_html_e('Zolaha Vault', 'zolaha'); ?></a></li>
                    <li><a href="#products" class="footer-link"><?php esc_html_e('Zolaha MediaCraft', 'zolaha'); ?></a></li>
                    <li><a href="#products" class="footer-link"><?php esc_html_e('Zolaha MicroFlow', 'zolaha'); ?></a></li>
                </ul>
            </div>

            <!-- Company & Standards -->
            <div>
                <h4 class="footer-col-title"><?php esc_html_e('Company & Standards', 'zolaha'); ?></h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="footer-link"><?php esc_html_e('About the Founder', 'zolaha'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/privacy/')); ?>" class="footer-link"><?php esc_html_e('Zero-Knowledge Privacy', 'zolaha'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/terms/')); ?>" class="footer-link"><?php esc_html_e('Terms of Service', 'zolaha'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/llms.txt')); ?>" class="footer-link" target="_blank" rel="noopener noreferrer"><?php esc_html_e('AI Context (llms.txt)', 'zolaha'); ?></a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div>
                &copy; <span id="footer-current-year"><?php echo esc_html(gmdate('Y')); ?></span> <?php esc_html_e('Zolaha Technologies. All rights reserved.', 'zolaha'); ?>
            </div>
            <div style="display: flex; gap: 1.5rem; align-items: center;">
                <span style="font-size: 0.8125rem; color: var(--zolaha-mantis); font-weight: 600;">
                    <?php esc_html_e('Engineered with Agility in India', 'zolaha'); ?>
                </span>
            </div>
        </div>
    </div>
</footer>
