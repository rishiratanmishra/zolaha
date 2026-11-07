<?php
/**
 * Modular Philosophy Section Template Part
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;
?>

<section id="philosophy" class="section-spacing" style="background: var(--bg-surface-elevated); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);" aria-label="<?php esc_attr_e('Our Philosophy', 'zolaha'); ?>">
    <div class="zolaha-container">
        <div class="section-header">
            <span class="section-label"><?php esc_html_e('Core Tenets', 'zolaha'); ?></span>
            <h2 class="section-heading"><?php esc_html_e('Why Zolaha Exists', 'zolaha'); ?></h2>
            <p class="section-desc"><?php esc_html_e('We reject bloated software, forced logins, and intrusive surveillance. Here is how we build.', 'zolaha'); ?></p>
        </div>

        <div class="pillars-grid">
            <!-- Pillar 1 -->
            <div class="pillar-card">
                <div class="pillar-icon-box">
                    <?php echo zolaha_icon('feather'); ?>
                </div>
                <h3 class="pillar-title"><?php esc_html_e('Agile & Featherlight', 'zolaha'); ?></h3>
                <p class="pillar-text">
                    <?php esc_html_e('Named after the nimble grasshopper in the Purvanchal dialect, our software is built to leap over friction. Zero bloat, sub-second execution, and zero unnecessary CPU drain.', 'zolaha'); ?>
                </p>
            </div>

            <!-- Pillar 2 -->
            <div class="pillar-card">
                <div class="pillar-icon-box">
                    <?php echo zolaha_icon('shield-check'); ?>
                </div>
                <h3 class="pillar-title"><?php esc_html_e('Zero-Knowledge Privacy', 'zolaha'); ?></h3>
                <p class="pillar-text">
                    <?php esc_html_e('Your photos, documents, and credentials never touch a remote server. Everything executes 100% locally on your hardware via modern Web Workers and Canvas.', 'zolaha'); ?>
                </p>
            </div>

            <!-- Pillar 3 -->
            <div class="pillar-card">
                <div class="pillar-icon-box">
                    <?php echo zolaha_icon('bolt'); ?>
                </div>
                <h3 class="pillar-title"><?php esc_html_e('Zero Login Friction', 'zolaha'); ?></h3>
                <p class="pillar-text">
                    <?php esc_html_e('No email walls, no verification codes, no subscriptions for everyday utilities. You arrive, get your work done in two clicks, and move on with your day.', 'zolaha'); ?>
                </p>
            </div>
        </div>
    </div>
</section>
