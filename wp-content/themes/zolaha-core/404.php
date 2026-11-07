<?php
/**
 * The 404 Not Found Template for Zolaha Core
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary" class="site-main section-spacing" style="min-height: 60vh; display: flex; align-items: center;" role="main">
    <div class="zolaha-container" style="text-align: center; max-width: 600px;">
        <span class="product-status-tag status-live" style="margin-bottom: 1rem; font-size: 0.875rem;">
            <?php esc_html_e('Error 404 • Page Missing', 'zolaha'); ?>
        </span>
        <h1 style="font-size: 3rem; font-weight: 800; letter-spacing: -0.04em; margin-bottom: 1rem; color: var(--text-primary);">
            <?php esc_html_e('Lost in Space?', 'zolaha'); ?>
        </h1>
        <p style="color: var(--text-secondary); font-size: 1.125rem; margin-bottom: 2rem; line-height: 1.6;">
            <?php esc_html_e('The page you requested does not exist or may have leapt to a new location. Return to the Zolaha headquarters.', 'zolaha'); ?>
        </p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-mantis">
            <?php esc_html_e('Back to Safety (Home)', 'zolaha'); ?>
            <?php echo zolaha_icon('arrow-right'); ?>
        </a>
    </div>
</main>

<?php
get_footer();
