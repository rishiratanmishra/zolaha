<?php
/**
 * Modular Philosophy Section Template Part
 *
 * @package Zolaha_Core
 * @version 2.1.0
 */

defined('ABSPATH') || exit;
?>

<section id="philosophy" class="section-spacing philosophy-section" aria-label="<?php esc_attr_e('Our Philosophy', 'zolaha'); ?>">
    <div class="zolaha-container">
        <div class="section-header-centered">
            <span class="badge-overline"><?php esc_html_e('02 // FIRST PRINCIPLES', 'zolaha'); ?></span>
            <h2 class="section-title-large"><?php esc_html_e('The Grasshopper Philosophy', 'zolaha'); ?></h2>
            <p style="color: var(--text-secondary); font-size: 1.125rem;">
                <?php esc_html_e('We reject bloated SaaS, forced sign-ups, and predatory subscription traps. Here is the architectural standard we build by.', 'zolaha'); ?>
            </p>
        </div>

        <div class="pillars-grid">
            <!-- Pillar 1 -->
            <div class="pillar-card">
                <div class="pillar-icon-box" aria-hidden="true">
                    <?php echo zolaha_icon('feather'); ?>
                </div>
                <h3 class="pillar-title"><?php esc_html_e('Spring-Loaded & Agile', 'zolaha'); ?></h3>
                <p class="pillar-text">
                    <?php esc_html_e('Named after the nimble grasshopper (Zolaha) in Eastern UP, our tools are engineered to leap over friction. Zero heavy server roundtrips, zero framework bloat, and sub-second execution.', 'zolaha'); ?>
                </p>
            </div>

            <!-- Pillar 2 -->
            <div class="pillar-card">
                <div class="pillar-icon-box" aria-hidden="true">
                    <?php echo zolaha_icon('shield-check'); ?>
                </div>
                <h3 class="pillar-title"><?php esc_html_e('Zero-Knowledge Compute', 'zolaha'); ?></h3>
                <p class="pillar-text">
                    <?php esc_html_e('Your confidential certificates, photographs, and identity cards never touch a remote cloud database. Everything executes in-browser via WebAssembly and Web Workers.', 'zolaha'); ?>
                </p>
            </div>

            <!-- Pillar 3 -->
            <div class="pillar-card">
                <div class="pillar-icon-box" aria-hidden="true">
                    <?php echo zolaha_icon('zap'); ?>
                </div>
                <h3 class="pillar-title"><?php esc_html_e('Zero-Friction Sovereign Utility', 'zolaha'); ?></h3>
                <p class="pillar-text">
                    <?php esc_html_e('No email paywalls, no password reset loops, no credit card prompts for basic human utility. You land, finish your task in two taps, and get back to your life.', 'zolaha'); ?>
                </p>
            </div>
        </div>
    </div>
</section>
