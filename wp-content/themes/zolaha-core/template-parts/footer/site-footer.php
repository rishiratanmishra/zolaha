<?php
/**
 * Site footer
 *
 * @package Zolaha_Core
 */

defined('ABSPATH') || exit;
?>

<footer class="site-footer" role="contentinfo">
    <div class="zolaha-container">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-link" aria-label="<?php esc_attr_e('Zolaha home', 'zolaha'); ?>">
                    <?php echo zolaha_icon('brand-logo'); ?>
                </a>
                <p class="footer-brand-desc">
                    <?php esc_html_e('An independent studio building practical digital tools in Ballia, India.', 'zolaha'); ?>
                </p>
            </div>

            <div>
                <h2 class="footer-col-title"><?php esc_html_e('Products', 'zolaha'); ?></h2>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/products/formcraft/')); ?>" class="footer-link"><?php esc_html_e('Exam form photo tools', 'zolaha'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/#product-pdf-tools')); ?>" class="footer-link"><?php esc_html_e('PDF document tools', 'zolaha'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/#product-image-tools')); ?>" class="footer-link"><?php esc_html_e('Image conversion tools', 'zolaha'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/#product-business-tools')); ?>" class="footer-link"><?php esc_html_e('Payment and receipt tools', 'zolaha'); ?></a></li>
                </ul>
            </div>

            <div>
                <h2 class="footer-col-title"><?php esc_html_e('Information', 'zolaha'); ?></h2>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="footer-link"><?php esc_html_e('About Zolaha', 'zolaha'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/privacy/')); ?>" class="footer-link"><?php esc_html_e('Privacy', 'zolaha'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/terms/')); ?>" class="footer-link"><?php esc_html_e('Terms', 'zolaha'); ?></a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span>&copy; <?php echo esc_html(gmdate('Y')); ?> <?php esc_html_e('Zolaha Technologies', 'zolaha'); ?></span>
            <span><?php esc_html_e('Made in Ballia, Uttar Pradesh', 'zolaha'); ?></span>
        </div>
    </div>
</footer>
