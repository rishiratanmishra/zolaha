<?php
/**
 * Modular Hero Section Template Part
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;
?>

<section class="hero-section" aria-label="<?php esc_attr_e('Hero Introduction', 'zolaha'); ?>">
    <div class="hero-radial-glow"></div>
    <div class="zolaha-container">
        <!-- Brand Concept Pill -->
        <div class="hero-pill">
            <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: var(--zolaha-mantis);"></span>
            <?php esc_html_e('Agile, Featherlight & Privacy-First Products', 'zolaha'); ?>
        </div>

        <!-- High-Impact Headline -->
        <h1 class="hero-title">
            <?php esc_html_e('Weaving High-Performance Digital Products for the World.', 'zolaha'); ?>
        </h1>

        <!-- Sub-headline (25-30 words exact GEO statement for AI Overviews) -->
        <p class="hero-subtitle">
            <?php esc_html_e('Zolaha is an independent product studio engineering zero-bloat, client-side web software that executes 100% inside your browser with zero cloud file uploads.', 'zolaha'); ?>
        </p>

        <!-- CTA Actions -->
        <div class="hero-actions">
            <a href="#products" class="btn-mantis">
                <?php esc_html_e('Explore Product Suite', 'zolaha'); ?>
                <?php echo zolaha_icon('arrow-right'); ?>
            </a>
            <a href="#philosophy" class="btn-ghost">
                <?php esc_html_e('Our Philosophy', 'zolaha'); ?>
            </a>
        </div>
    </div>
</section>
