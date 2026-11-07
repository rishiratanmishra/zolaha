<?php
/**
 * Modular Bento Grid Products Showcase Template Part
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;
?>

<section id="products" class="section-spacing" aria-label="<?php esc_attr_e('Product Suite', 'zolaha'); ?>">
    <div class="zolaha-container">
        <!-- Section Header -->
        <div class="section-header">
            <span class="section-label"><?php esc_html_e('The Ecosystem', 'zolaha'); ?></span>
            <h2 class="section-heading"><?php esc_html_e('Architected for Speed. Built for Privacy.', 'zolaha'); ?></h2>
            <p class="section-desc"><?php esc_html_e('Explore the independent suite of specialized utilities engineered under the Zolaha umbrella.', 'zolaha'); ?></p>
        </div>

        <!-- Bento Grid Architecture -->
        <div class="bento-container">
            <!-- Card 1: FormCraft (Flagship Span 8) -->
            <div class="bento-card bento-card-8">
                <div>
                    <span class="product-status-tag status-live"><?php esc_html_e('Flagship Vertical • Beta', 'zolaha'); ?></span>
                    <h3 class="bento-title"><?php esc_html_e('Zolaha FormCraft', 'zolaha'); ?></h3>
                    <p class="bento-desc">
                        <?php esc_html_e('Automated exam and career compliance engine for 100M+ Indian aspirants. Auto-formats photos, signatures, and admit documents to exact government portal specs (SSC, UPSC, State PSCs) in seconds.', 'zolaha'); ?>
                    </p>
                    <ul class="bento-features">
                        <li>
                            <?php echo zolaha_icon('check'); ?>
                            <span><?php esc_html_e('Calibrated 20KB-50KB auto-compression and aspect-ratio locking', 'zolaha'); ?></span>
                        </li>
                        <li>
                            <?php echo zolaha_icon('check'); ?>
                            <span><?php esc_html_e('100% in-browser HTML5 Canvas processing — zero server uploads', 'zolaha'); ?></span>
                        </li>
                        <li>
                            <?php echo zolaha_icon('check'); ?>
                            <span><?php esc_html_e('One-click presets for SSC CGL, UPSC OTR, Banking, and Police exams', 'zolaha'); ?></span>
                        </li>
                    </ul>
                </div>
                <div style="margin-top: 1rem;">
                    <a href="<?php echo esc_url(home_url('/products/formcraft/')); ?>" class="btn-mantis" style="width: auto; padding: 0.65rem 1.25rem; font-size: 0.875rem;">
                        <?php esc_html_e('Launch FormCraft App', 'zolaha'); ?>
                        <?php echo zolaha_icon('arrow-right'); ?>
                    </a>
                </div>
            </div>

            <!-- Card 2: Zolaha Vault (Span 4) -->
            <div class="bento-card bento-card-4">
                <div>
                    <span class="product-status-tag status-beta"><?php esc_html_e('Document Suite • Upcoming', 'zolaha'); ?></span>
                    <h3 class="bento-title"><?php esc_html_e('Zolaha Vault', 'zolaha'); ?></h3>
                    <p class="bento-desc">
                        <?php esc_html_e('Zero-knowledge, offline-capable PDF and document workstation. Merge, compress, and redact sensitive documents without exposing them to cloud servers.', 'zolaha'); ?>
                    </p>
                    <ul class="bento-features">
                        <li>
                            <?php echo zolaha_icon('check'); ?>
                            <span><?php esc_html_e('Client-side WebAssembly engine', 'zolaha'); ?></span>
                        </li>
                        <li>
                            <?php echo zolaha_icon('check'); ?>
                            <span><?php esc_html_e('Safe for Aadhaar & Bank Statements', 'zolaha'); ?></span>
                        </li>
                    </ul>
                </div>
                <div style="margin-top: 1rem;">
                    <span style="font-size: 0.8125rem; color: var(--text-muted); font-weight: 600;">
                        <?php esc_html_e('Available Q1 2026', 'zolaha'); ?>
                    </span>
                </div>
            </div>

            <!-- Card 3: Zolaha MediaCraft (Span 6) -->
            <div class="bento-card bento-card-6">
                <div>
                    <span class="product-status-tag status-dev"><?php esc_html_e('Visual Studio • In Development', 'zolaha'); ?></span>
                    <h3 class="bento-title"><?php esc_html_e('Zolaha MediaCraft', 'zolaha'); ?></h3>
                    <p class="bento-desc">
                        <?php esc_html_e('High-throughput media and asset transformation. Convert, quantize, and compress images to modern WebP and AVIF formats in bulk directly on your device.', 'zolaha'); ?>
                    </p>
                    <ul class="bento-features">
                        <li>
                            <?php echo zolaha_icon('check'); ?>
                            <span><?php esc_html_e('Parallel batch image compression', 'zolaha'); ?></span>
                        </li>
                        <li>
                            <?php echo zolaha_icon('check'); ?>
                            <span><?php esc_html_e('Clean social screenshot beautifier', 'zolaha'); ?></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 4: Zolaha MicroFlow (Span 6) -->
            <div class="bento-card bento-card-6">
                <div>
                    <span class="product-status-tag status-dev"><?php esc_html_e('Micro-Tools • In Development', 'zolaha'); ?></span>
                    <h3 class="bento-title"><?php esc_html_e('Zolaha MicroFlow', 'zolaha'); ?></h3>
                    <p class="bento-desc">
                        <?php esc_html_e('Lightweight commerce and workflow utilities for modern creators and small businesses. Generate UPI invoice receipts and quick payment links in seconds.', 'zolaha'); ?>
                    </p>
                    <ul class="bento-features">
                        <li>
                            <?php echo zolaha_icon('check'); ?>
                            <span><?php esc_html_e('Zero-friction WhatsApp billing generator', 'zolaha'); ?></span>
                        </li>
                        <li>
                            <?php echo zolaha_icon('check'); ?>
                            <span><?php esc_html_e('No complex CRM subscription needed', 'zolaha'); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
