<?php
/**
 * The Main Index Fallback Template for Zolaha Core
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary" class="site-main section-spacing" role="main">
    <div class="zolaha-container">
        <?php if (have_posts()) : ?>
            <div style="display: flex; flex-direction: column; gap: 2rem; max-width: 820px; margin: 0 auto;">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bento-card'); ?>>
                        <h2 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div style="color: var(--text-muted); font-size: 0.875rem; margin-bottom: 1rem;">
                            <?php echo get_the_date(); ?>
                        </div>
                        <div style="color: var(--text-secondary); line-height: 1.6;">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div style="text-align: center; padding: 4rem 1rem;">
                <h2 style="font-size: 1.75rem; font-weight: 700; color: var(--text-primary); margin-bottom: 1rem;">
                    <?php esc_html_e('No Content Found', 'zolaha'); ?>
                </h2>
                <p style="color: var(--text-secondary);">
                    <?php esc_html_e('Please check back later or explore our products from the homepage.', 'zolaha'); ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
