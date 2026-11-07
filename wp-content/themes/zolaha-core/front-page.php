<?php
/**
 * The Flagship Front Page Template for Zolaha Core
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary" class="site-main" role="main">
    <?php
    // Introduce the studio and its products.
    get_template_part('template-parts/home/hero');

    get_template_part('template-parts/home/bento-products');

    get_template_part('template-parts/home/tagline');
    get_template_part('template-parts/home/philosophy');
    ?>
</main>

<?php
get_footer();
