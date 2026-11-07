<?php
/**
 * Homepage introduction
 *
 * @package Zolaha_Core
 */

defined('ABSPATH') || exit;
?>

<section class="hero-section" aria-labelledby="hero-title">
    <div class="zolaha-container hero-layout">
        <div class="hero-copy">
            <p class="hero-eyebrow"><?php esc_html_e('Small tools for everyday online tasks', 'zolaha'); ?></p>
            <h1 id="hero-title" class="hero-headline">
                <?php esc_html_e('A little help with the fiddly stuff.', 'zolaha'); ?>
            </h1>
            <p class="hero-subtext">
                <?php esc_html_e('We make practical browser tools for the small jobs that interrupt your day. Our first tool helps prepare photos and signatures for common exam forms.', 'zolaha'); ?>
            </p>
            <a href="#products" class="btn-primary-mantis">
                <?php esc_html_e('See all tools', 'zolaha'); ?>
            </a>
        </div>

        <aside class="hero-feature" aria-labelledby="hero-feature-title">
            <p class="hero-feature-status"><?php esc_html_e('Available now', 'zolaha'); ?></p>
            <h2 id="hero-feature-title" class="hero-feature-title"><?php esc_html_e('Exam form photo tools', 'zolaha'); ?></h2>
            <p class="hero-feature-description">
                <?php esc_html_e('Get a photo, signature or thumb impression ready for common exam forms.', 'zolaha'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/products/formcraft/')); ?>" class="hero-feature-link">
                <?php esc_html_e('Open the tool', 'zolaha'); ?>
                <span aria-hidden="true">&rarr;</span>
            </a>
        </aside>
    </div>
</section>
