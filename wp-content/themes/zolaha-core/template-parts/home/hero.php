<?php
/**
 * Tier-1 Enterprise Hero Section Template Part
 *
 * @package Zolaha_Core
 * @version 2.1.0
 */

defined('ABSPATH') || exit;
?>

<section class="hero-section" aria-label="<?php esc_attr_e('Hero Introduction', 'zolaha'); ?>">
    <div class="zolaha-container">
        <!-- Live Heritage & Sovereign Architecture Eyebrow -->
        <div class="hero-pill-tag">
            <span class="live-pulse-dot" aria-hidden="true"></span>
            <span><?php esc_html_e('ZOLAHA // INDEPENDENT PRODUCT STUDIO', 'zolaha'); ?></span>
        </div>

        <!-- High-Impact Typographic Headline (Eliminates "Weaving" / Julaha confusion) -->
        <h1 class="hero-headline">
            <?php esc_html_e('Agile Software.', 'zolaha'); ?><br>
            <span class="headline-gradient"><?php esc_html_e('Sovereign Privacy.', 'zolaha'); ?></span>
        </h1>

        <!-- Sub-headline (GEO-Optimized Definition & Grasshopper Metaphor) -->
        <p class="hero-subtext">
            <?php esc_html_e('Named after the nimble grasshopper (', 'zolaha'); ?><strong><?php esc_html_e('Zolaha', 'zolaha'); ?></strong><?php esc_html_e(') in our native Purvanchali tongue, we engineer lightning-fast digital products that leap over friction, execute 100% in your browser, and keep your data strictly on your device.', 'zolaha'); ?>
        </p>

        <!-- CTA Actions Group -->
        <div class="hero-actions-group">
            <a href="#products" class="btn-primary-mantis">
                <?php esc_html_e('Explore Sovereign Suite', 'zolaha'); ?>
                <?php echo zolaha_icon('arrow-right'); ?>
            </a>
            <a href="#philosophy" class="btn-secondary-glass">
                <?php echo zolaha_icon('feather'); ?>
                <?php esc_html_e('The Grasshopper Tenet', 'zolaha'); ?>
            </a>
        </div>

        <!-- Interactive Utility Quick-Launch Engine (100% Real Interactive Filter) -->
        <div class="quick-launch-card">
            <div class="search-input-shell">
                <span style="color: var(--text-muted); display: flex; align-items: center;">
                    <?php echo zolaha_icon('search'); ?>
                </span>
                <input 
                    type="text" 
                    id="product-quick-search" 
                    placeholder="<?php esc_attr_e('Filter tools by task or format (e.g., SSC, 50KB, PDF, WebP, UPI)...', 'zolaha'); ?>" 
                    autocomplete="off" 
                    spellcheck="false"
                    aria-label="<?php esc_attr_e('Filter product suite', 'zolaha'); ?>"
                >
                <kbd class="kbd-badge">
                    <?php echo zolaha_icon('command'); ?>
                    <span>K</span>
                </kbd>
            </div>

            <div class="quick-filter-strip" role="tablist" aria-label="<?php esc_attr_e('Category Filters', 'zolaha'); ?>">
                <button type="button" class="filter-chip active" data-filter="all" role="tab" aria-selected="true">
                    <?php esc_html_e('All Tools (4)', 'zolaha'); ?>
                </button>
                <button type="button" class="filter-chip" data-filter="exam" role="tab" aria-selected="false">
                    <?php echo zolaha_icon('crop'); ?>
                    <?php esc_html_e('Exam & Career', 'zolaha'); ?>
                </button>
                <button type="button" class="filter-chip" data-filter="security" role="tab" aria-selected="false">
                    <?php echo zolaha_icon('lock'); ?>
                    <?php esc_html_e('Privacy & PDF', 'zolaha'); ?>
                </button>
                <button type="button" class="filter-chip" data-filter="media" role="tab" aria-selected="false">
                    <?php echo zolaha_icon('sliders'); ?>
                    <?php esc_html_e('Media & WebP', 'zolaha'); ?>
                </button>
                <button type="button" class="filter-chip" data-filter="commerce" role="tab" aria-selected="false">
                    <?php echo zolaha_icon('receipt'); ?>
                    <?php esc_html_e('SMB Commerce', 'zolaha'); ?>
                </button>
            </div>
        </div>

        <!-- Performance & Trust Telemetry Strip -->
        <div class="stats-strip">
            <div class="stat-item">
                <span class="stat-value">0 KB</span>
                <span class="stat-label"><?php esc_html_e('Remote Data Storage', 'zolaha'); ?></span>
            </div>
            <div class="stat-item">
                <span class="stat-value">100%</span>
                <span class="stat-label"><?php esc_html_e('Client-Side Hardware WASM', 'zolaha'); ?></span>
            </div>
            <div class="stat-item">
                <span class="stat-value">Zero</span>
                <span class="stat-label"><?php esc_html_e('Forced Logins / Paywalls', 'zolaha'); ?></span>
            </div>
            <div class="stat-item">
                <span class="stat-value">&lt; 50ms</span>
                <span class="stat-label"><?php esc_html_e('Local Execution Delay', 'zolaha'); ?></span>
            </div>
        </div>
    </div>
</section>
