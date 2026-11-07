<?php
/**
 * Advanced Bento Grid with High-Craft Software Viewports (Tier-1 Standard)
 *
 * @package Zolaha_Core
 * @version 2.1.0
 */

defined('ABSPATH') || exit;
?>

<section id="products" class="section-spacing" aria-label="<?php esc_attr_e('Product Suite', 'zolaha'); ?>">
    <div class="zolaha-container">
        <!-- Section Header -->
        <div class="section-header-centered">
            <span class="badge-overline"><?php esc_html_e('01 // PRODUCT ECOSYSTEM', 'zolaha'); ?></span>
            <h2 class="section-title-large"><?php esc_html_e('Engineered for Speed. Sovereign by Design.', 'zolaha'); ?></h2>
            <p style="color: var(--text-secondary); font-size: 1.125rem;">
                <?php esc_html_e('Every Zolaha tool solves high-friction workflows directly inside your browser. No remote file uploads, no tracking scripts, no bloat.', 'zolaha'); ?>
            </p>
        </div>

        <!-- Bento Master Grid -->
        <div class="bento-master-grid" id="products-bento-grid">
            
            <!-- 1. FormCraft (Span 8 Flagship - Career & Exam Compliance) -->
            <div class="bento-shell bento-span-8 product-card-item" data-category="exam" data-search="ssc upsc cgl chsl 50kb 20kb photo signature dimension crop formcraft exam">
                <div>
                    <div class="card-meta-bar">
                        <span class="card-category-tag"><?php esc_html_e('FLAGSHIP VERTICAL // WORKSTATION', 'zolaha'); ?></span>
                        <span class="card-status-badge badge-live-emerald">
                            <span class="live-pulse-dot" aria-hidden="true"></span>
                            <?php esc_html_e('Live • Production', 'zolaha'); ?>
                        </span>
                    </div>

                    <h3 class="card-headline"><?php esc_html_e('Zolaha FormCraft', 'zolaha'); ?></h3>
                    <p class="card-paragraph">
                        <?php esc_html_e('Automated exam and career compliance workstation for 100M+ Indian youth. Auto-calibrates candidate photographs, signatures, and thumb impressions to strict portal requirements (SSC, UPSC, Banking, State PSCs) in milliseconds.', 'zolaha'); ?>
                    </p>

                    <!-- Real Software Viewport: Photo Calibration Studio -->
                    <div class="formcraft-studio-viewport">
                        <div class="crop-canvas-box" aria-hidden="true">
                            <div class="crop-crosshair-h"></div>
                            <div class="crop-crosshair-v"></div>
                            <div class="crop-corner-marker crop-tl"></div>
                            <div class="crop-corner-marker crop-tr"></div>
                            <div class="crop-corner-marker crop-bl"></div>
                            <div class="crop-corner-marker crop-br"></div>
                            <div class="avatar-silhouette-svg">
                                <?php echo zolaha_icon('user'); ?>
                            </div>
                            <span class="crop-dimension-pill">3.5 × 4.5 cm (300 DPI)</span>
                        </div>

                        <div class="calibration-metrics-table">
                            <div class="metric-row-ui">
                                <span class="metric-label-ui"><?php esc_html_e('Target Examination', 'zolaha'); ?></span>
                                <span class="metric-value-mono">SSC CGL / CHSL 2026</span>
                            </div>
                            <div class="metric-row-ui">
                                <span class="metric-label-ui"><?php esc_html_e('Weight Calibrator', 'zolaha'); ?></span>
                                <span class="metric-value-mono metric-val-success">
                                    <?php echo zolaha_icon('check'); ?>
                                    34.6 KB (Allowed: 20-50 KB)
                                </span>
                            </div>
                            <div class="metric-row-ui">
                                <span class="metric-label-ui"><?php esc_html_e('Portal Validation', 'zolaha'); ?></span>
                                <span class="metric-value-mono metric-val-success">
                                    <?php echo zolaha_icon('check-circle'); ?>
                                    Ready for Direct Upload
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-bottom-actions">
                    <a href="<?php echo esc_url(home_url('/products/formcraft/')); ?>" class="btn-card-launch">
                        <?php esc_html_e('Launch FormCraft Studio', 'zolaha'); ?>
                        <?php echo zolaha_icon('arrow-right'); ?>
                    </a>
                    <span class="card-guarantee-chip">
                        <?php echo zolaha_icon('shield-check'); ?>
                        100% Client-Side Canvas Engine
                    </span>
                </div>
            </div>

            <!-- 2. Zolaha Vault (Span 4 Document Workstation) -->
            <div class="bento-shell bento-span-4 product-card-item" data-category="security" data-search="pdf merge compress redact aadhaar encrypt vault security">
                <div>
                    <div class="card-meta-bar">
                        <span class="card-category-tag"><?php esc_html_e('SECURITY // SOVEREIGN DOCS', 'zolaha'); ?></span>
                        <span class="card-status-badge badge-beta-indigo">
                            <?php esc_html_e('WASM • Beta', 'zolaha'); ?>
                        </span>
                    </div>

                    <h3 class="card-headline"><?php esc_html_e('Zolaha Vault', 'zolaha'); ?></h3>
                    <p class="card-paragraph">
                        <?php esc_html_e('Zero-knowledge PDF workstation. Merge contracts, compress sensitive bank statements, and redact Aadhaar numbers without exposing confidential data to cloud servers.', 'zolaha'); ?>
                    </p>

                    <!-- Crypto Terminal Viewport -->
                    <div class="vault-crypto-viewport">
                        <div class="crypto-terminal-header">
                            <div class="terminal-dots" aria-hidden="true">
                                <div class="t-dot"></div>
                                <div class="t-dot"></div>
                                <div class="t-dot"></div>
                            </div>
                            <span>WASM // CRYPTO-CORE</span>
                        </div>
                        <div class="crypto-hash-dump">
                            sha256-e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
                        </div>
                        <div class="vault-specs-chips">
                            <span>AES-GCM-256</span>
                            <span style="color: var(--zolaha-mantis);">RAM ONLY: 1.4 MB</span>
                        </div>
                    </div>
                </div>

                <div class="card-bottom-actions">
                    <a href="#products" class="btn-card-launch">
                        <?php esc_html_e('Inspect Sandbox', 'zolaha'); ?>
                        <?php echo zolaha_icon('arrow-right'); ?>
                    </a>
                    <span class="card-guarantee-chip">
                        <?php echo zolaha_icon('lock'); ?>
                        Zero Remote Disk Retention
                    </span>
                </div>
            </div>

            <!-- 3. Zolaha MediaCraft (Span 6 Visual Studio) -->
            <div class="bento-shell bento-span-6 product-card-item" data-category="media" data-search="image webp avif compress batch transcode mediacraft media">
                <div>
                    <div class="card-meta-bar">
                        <span class="card-category-tag"><?php esc_html_e('MEDIA ENGINE // QUANTIZER', 'zolaha'); ?></span>
                        <span class="card-status-badge badge-dev-slate">
                            <?php esc_html_e('In Development', 'zolaha'); ?>
                        </span>
                    </div>

                    <h3 class="card-headline"><?php esc_html_e('Zolaha MediaCraft', 'zolaha'); ?></h3>
                    <p class="card-paragraph">
                        <?php esc_html_e('Parallel batch image transformation and modern format quantizer. Transcode entire folders of images to WebP and AVIF formats simultaneously using native multi-threading.', 'zolaha'); ?>
                    </p>

                    <!-- Quantizer Meter Viewport -->
                    <div class="mediacraft-viewport">
                        <div class="worker-pool-strip" aria-hidden="true">
                            <div class="worker-thread-chip thread-active">WORKER #1 [RUN]</div>
                            <div class="worker-thread-chip thread-active">WORKER #2 [RUN]</div>
                            <div class="worker-thread-chip">WORKER #3 [IDLE]</div>
                            <div class="worker-thread-chip">WORKER #4 [IDLE]</div>
                        </div>

                        <div class="quantizer-meter-bar">
                            <div class="quantizer-labels">
                                <span>RAW INPUT: 2.4 MB</span>
                                <span style="color: var(--zolaha-mantis); font-weight: 700;">OUTPUT: 58 KB (WebP)</span>
                            </div>
                            <div class="meter-track-shell">
                                <div class="meter-fill-mantis"></div>
                            </div>
                            <div style="font-family: var(--font-mono); font-size: 0.6875rem; text-align: right; color: var(--zolaha-mantis); font-weight: 700;">
                                -97.5% Bandwidth Reduction
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-bottom-actions">
                    <span class="card-guarantee-chip">
                        <?php echo zolaha_icon('cpu'); ?>
                        Native Multi-Threaded Workers
                    </span>
                    <span class="card-guarantee-chip">
                        <?php esc_html_e('Zero Cloud Cost', 'zolaha'); ?>
                    </span>
                </div>
            </div>

            <!-- 4. Zolaha MicroFlow (Span 6 Commerce Utilities) -->
            <div class="bento-shell bento-span-6 product-card-item" data-category="commerce" data-search="upi qr invoice receipt slip payment smb microflow commerce">
                <div>
                    <div class="card-meta-bar">
                        <span class="card-category-tag"><?php esc_html_e('COMMERCE // BHARAT UTILITY', 'zolaha'); ?></span>
                        <span class="card-status-badge badge-dev-slate">
                            <?php esc_html_e('In Development', 'zolaha'); ?>
                        </span>
                    </div>

                    <h3 class="card-headline"><?php esc_html_e('Zolaha MicroFlow', 'zolaha'); ?></h3>
                    <p class="card-paragraph">
                        <?php esc_html_e('Ultra-lightweight commerce and receipt utilities for Indian small businesses and creators. Generate instant UPI QR payment slips and automated WhatsApp receipts without complex CRM overhead.', 'zolaha'); ?>
                    </p>

                    <!-- POS Slip & QR Viewport -->
                    <div class="microflow-viewport">
                        <div class="receipt-slip-meta">
                            <span class="receipt-slip-id">TXN_2026_9841 // BHARAT UPI</span>
                            <span class="receipt-slip-amount">₹499.00</span>
                            <span class="receipt-slip-vpa">merchant@upi • Direct Settlement</span>
                        </div>
                        <div class="qr-code-box-ui" aria-hidden="true">
                            <?php echo zolaha_icon('qr-code'); ?>
                        </div>
                    </div>
                </div>

                <div class="card-bottom-actions">
                    <span class="card-guarantee-chip">
                        <?php echo zolaha_icon('receipt'); ?>
                        Offline SQLite • Zero SaaS Lock-in
                    </span>
                    <span class="card-guarantee-chip">
                        <?php esc_html_e('Engineered for Bharat SMBs', 'zolaha'); ?>
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>
