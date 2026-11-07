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
    // 1. Hero Section with Brand Value Prop
    get_template_part('template-parts/home/hero');

    // 2. Bento Grid of Flagship Product Suite
    get_template_part('template-parts/home/bento-products');

    // 3. Core Brand Philosophy (Privacy, Speed, No-Bloat)
    get_template_part('template-parts/home/philosophy');

    // 4. Authentic 2020-2026 Origin Story & Founder Note
    get_template_part('template-parts/home/founder-note');
    ?>
</main>

<?php
get_footer();
