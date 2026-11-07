<?php
/**
 * The Standard Page Template for Zolaha Core
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary" class="site-main section-spacing" role="main">
    <div class="zolaha-container" style="max-width: 820px;">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('page-content-wrapper'); ?>>
                <header class="entry-header" style="margin-bottom: 2.5rem; text-align: center;">
                    <h1 class="entry-title" style="font-size: 2.5rem; font-weight: 800; letter-spacing: -0.03em; color: var(--text-primary);">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <div class="entry-content" style="font-size: 1.0625rem; line-height: 1.75; color: var(--text-secondary);">
                    <?php
                    the_content();

                    wp_link_pages([
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'zolaha'),
                        'after'  => '</div>',
                    ]);
                    ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php
get_footer();
