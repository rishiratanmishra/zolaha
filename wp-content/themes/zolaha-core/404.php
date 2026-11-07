<?php
/**
 * Branded not found page
 *
 * @package Zolaha_Core
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary" class="error-page section-spacing" aria-labelledby="error-title">
    <div class="zolaha-container">
        <div class="error-content">
            <p class="section-eyebrow"><?php esc_html_e('404', 'zolaha'); ?></p>
            <h1 id="error-title" class="section-title-large"><?php esc_html_e('Page not found', 'zolaha'); ?></h1>
            <p class="error-description">
                <?php esc_html_e('This address may be wrong, or the page may have moved. Go back to Zolaha to find another tool.', 'zolaha'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary-mantis">
                <?php esc_html_e('Go to homepage', 'zolaha'); ?>
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
