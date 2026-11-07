<?php
/**
 * Zolaha Linked Knowledge Graph & Schema.org Engine
 * Target: Google Search Console, Gemini AI Overviews, Perplexity Citations
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

/**
 * Output Unified JSON-LD Knowledge Graph in wp_head
 */
function zolaha_output_schema_graph() {
    $site_url = home_url('/');
    $site_name = get_bloginfo('name');
    $site_desc = get_bloginfo('description');

    $schema = [
        '@context' => 'https://schema.org',
        '@graph'   => [
            // 1. Organization Entity
            [
                '@type'        => 'Organization',
                '@id'          => $site_url . '#organization',
                'name'         => $site_name ? $site_name : 'Zolaha',
                'url'          => $site_url,
                'logo'         => [
                    '@type'      => 'ImageObject',
                    '@id'        => $site_url . '#logo',
                    'url'        => get_template_directory_uri() . '/assets/images/logo.svg',
                    'caption'    => 'Zolaha Technologies'
                ],
                'description'  => 'Zolaha is an independent digital product studio engineering agile, privacy-first web utilities and software.',
                'founder'      => [
                    '@type'    => 'Person',
                    'name'     => 'Rishi Ratan Mishra',
                    'jobTitle' => 'Founder & Software Engineer',
                    'url'      => $site_url . 'about/'
                ],
                'sameAs'       => [
                    'https://twitter.com/zolaha',
                    'https://github.com/zolaha',
                    'https://linkedin.com/company/zolaha'
                ]
            ],
            // 2. WebSite Entity with SearchAction
            [
                '@type'           => 'WebSite',
                '@id'             => $site_url . '#website',
                'url'             => $site_url,
                'name'            => $site_name,
                'publisher'       => [
                    '@id' => $site_url . '#organization'
                ],
                'potentialAction' => [
                    '@type'       => 'SearchAction',
                    'target'      => $site_url . '?s={search_term_string}',
                    'query-input' => 'required name=search_term_string'
                ]
            ]
        ]
    ];

    echo "\n<!-- Zolaha Unified Linked Knowledge Graph (GEO/SEO) -->\n";
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
add_action('wp_head', 'zolaha_output_schema_graph', 2);
