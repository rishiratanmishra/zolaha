<?php
/**
 * Zolaha Core Helper Functions & Vector Graphics Engine
 *
 * @package Zolaha_Core
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

/**
 * Returns raw, optimized SVG icons without network latency.
 *
 * @param string $name Name of the icon.
 * @param string $class Additional CSS classes.
 * @return string Inline SVG element.
 */
function zolaha_icon($name, $class = '') {
    $class_attr = $class ? ' class="' . esc_attr($class) . '"' : '';
    
    switch ($name) {
        case 'brand-logo':
            return '<svg' . $class_attr . ' width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="36" height="36" rx="10" fill="url(#zolaha-grad)"/>
                <path d="M10 11H26L14 25H26" stroke="#07090E" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="25" cy="11" r="2.5" fill="#07090E"/>
                <defs>
                    <linearGradient id="zolaha-grad" x1="0" y1="0" x2="36" y2="36" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#00D084"/>
                        <stop offset="1" stop-color="#059669"/>
                    </linearGradient>
                </defs>
            </svg>';

        case 'sun':
            return '<svg' . $class_attr . ' width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>';

        case 'moon':
            return '<svg' . $class_attr . ' width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>';

        case 'bolt':
            return '<svg' . $class_attr . ' width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>';

        case 'shield-check':
            return '<svg' . $class_attr . ' width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>';

        case 'feather':
            return '<svg' . $class_attr . ' width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.67 19a2 2 0 0 0 1.416-.588l6.154-6.172a6 6 0 0 0-8.49-8.49L5.58 9.92a2 2 0 0 0-.58 1.42V19h7.67Z"/><path d="m16 8-6 6"/><path d="M17.5 15H9"/></svg>';

        case 'arrow-right':
            return '<svg' . $class_attr . ' width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>';

        case 'menu':
            return '<svg' . $class_attr . ' width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>';

        case 'close':
            return '<svg' . $class_attr . ' width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>';

        default:
            return '';
    }
}
