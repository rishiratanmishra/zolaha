<?php
/**
 * Product directory
 *
 * @package Zolaha_Core
 */

defined('ABSPATH') || exit;
?>

<section id="products" class="section-spacing products-section" aria-labelledby="products-title">
    <div class="zolaha-container">
        <div class="products-heading">
            <div>
                <p class="section-eyebrow"><?php esc_html_e('The product shelf', 'zolaha'); ?></p>
                <h2 id="products-title" class="section-title-large"><?php esc_html_e('Tools for everyday tasks', 'zolaha'); ?></h2>
                <p class="section-intro">
                    <?php esc_html_e('Pick a task to get started. Products still being built are marked clearly.', 'zolaha'); ?>
                </p>
            </div>
        </div>

        <div class="product-discovery">
            <label class="screen-reader-text" for="product-quick-search">
                <?php esc_html_e('Search tools by task or file type', 'zolaha'); ?>
            </label>
            <div class="search-input-shell">
                <span class="search-icon" aria-hidden="true"></span>
                <input
                    type="search"
                    id="product-quick-search"
                    placeholder="<?php esc_attr_e('Try photo, PDF or image', 'zolaha'); ?>"
                    autocomplete="off"
                    spellcheck="false"
                >
            </div>

            <div class="quick-filter-strip" role="group" aria-label="<?php esc_attr_e('Filter products', 'zolaha'); ?>">
                <button type="button" class="filter-chip active" data-filter="all" aria-pressed="true">
                    <?php esc_html_e('All tools', 'zolaha'); ?>
                </button>
                <button type="button" class="filter-chip" data-filter="exam" aria-pressed="false">
                    <?php esc_html_e('Exam forms', 'zolaha'); ?>
                </button>
                <button type="button" class="filter-chip" data-filter="pdf" aria-pressed="false">
                    <?php esc_html_e('PDF', 'zolaha'); ?>
                </button>
                <button type="button" class="filter-chip" data-filter="image" aria-pressed="false">
                    <?php esc_html_e('Images', 'zolaha'); ?>
                </button>
                <button type="button" class="filter-chip" data-filter="business" aria-pressed="false">
                    <?php esc_html_e('Small business', 'zolaha'); ?>
                </button>
            </div>
        </div>

        <div class="product-grid" id="products-grid">
            <article id="product-exam-photo-tools" class="product-card product-card-item" data-category="exam" data-search="ssc upsc cgl chsl photo signature thumb impression exam form image size">
                <div class="product-card-top">
                    <span class="card-category-tag"><?php esc_html_e('Exam forms', 'zolaha'); ?></span>
                    <span class="card-status-badge badge-live-emerald"><?php esc_html_e('Available', 'zolaha'); ?></span>
                </div>
                <h3 class="card-headline"><?php esc_html_e('Exam form photo tools', 'zolaha'); ?></h3>
                <p class="card-paragraph">
                    <?php esc_html_e('Prepare a photo, signature or thumb impression for common exam application forms.', 'zolaha'); ?>
                </p>
                <ul class="product-capabilities" aria-label="<?php esc_attr_e('Exam form photo tasks', 'zolaha'); ?>">
                    <li><?php esc_html_e('Photo sizing', 'zolaha'); ?></li>
                    <li><?php esc_html_e('Signature sizing', 'zolaha'); ?></li>
                    <li><?php esc_html_e('Exam form presets', 'zolaha'); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/formcraft/')); ?>" class="btn-card-launch">
                    <?php esc_html_e('Open the tool', 'zolaha'); ?>
                </a>
            </article>

            <article id="product-pdf-tools" class="product-card product-card-item" data-category="pdf" data-search="pdf merge compress redact documents privacy">
                <div class="product-card-top">
                    <span class="card-category-tag"><?php esc_html_e('PDF and documents', 'zolaha'); ?></span>
                    <span class="card-status-badge badge-dev-slate"><?php esc_html_e('In development', 'zolaha'); ?></span>
                </div>
                <h3 class="card-headline"><?php esc_html_e('PDF document tools', 'zolaha'); ?></h3>
                <p class="card-paragraph">
                    <?php esc_html_e('A set of tools for combining, compressing and redacting personal PDF documents.', 'zolaha'); ?>
                </p>
                <p class="product-card-note"><?php esc_html_e('Not available yet.', 'zolaha'); ?></p>
            </article>

            <article id="product-image-tools" class="product-card product-card-item" data-category="image" data-search="image webp avif compress convert media">
                <div class="product-card-top">
                    <span class="card-category-tag"><?php esc_html_e('Images', 'zolaha'); ?></span>
                    <span class="card-status-badge badge-dev-slate"><?php esc_html_e('In development', 'zolaha'); ?></span>
                </div>
                <h3 class="card-headline"><?php esc_html_e('Image conversion tools', 'zolaha'); ?></h3>
                <p class="card-paragraph">
                    <?php esc_html_e('A simpler way to reduce image sizes and convert files to formats such as WebP.', 'zolaha'); ?>
                </p>
                <p class="product-card-note"><?php esc_html_e('Not available yet.', 'zolaha'); ?></p>
            </article>

            <article id="product-business-tools" class="product-card product-card-item" data-category="business" data-search="upi qr invoice receipt payment small business commerce">
                <div class="product-card-top">
                    <span class="card-category-tag"><?php esc_html_e('Small business', 'zolaha'); ?></span>
                    <span class="card-status-badge badge-dev-slate"><?php esc_html_e('In development', 'zolaha'); ?></span>
                </div>
                <h3 class="card-headline"><?php esc_html_e('Payment and receipt tools', 'zolaha'); ?></h3>
                <p class="card-paragraph">
                    <?php esc_html_e('Small business helpers for creating payment QR codes and simple receipts.', 'zolaha'); ?>
                </p>
                <p class="product-card-note"><?php esc_html_e('Not available yet.', 'zolaha'); ?></p>
            </article>
        </div>

        <p id="product-search-empty" class="product-empty" aria-live="polite" hidden>
            <?php esc_html_e('No tools match that search. Try another task or file type.', 'zolaha'); ?>
        </p>
    </div>
</section>
