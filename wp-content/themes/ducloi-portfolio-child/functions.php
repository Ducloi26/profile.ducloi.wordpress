<?php
if (!defined('ABSPATH')) exit;

function ducloi_theme_assets() {
    wp_enqueue_style(
        'ducloi-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=JetBrains+Mono:wght@300;400;500&family=Plus+Jakarta+Sans:wght@200;300;400;500;600&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'ducloi-main-style',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/css/main.css')
    );

    wp_enqueue_script(
        'ducloi-main-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'ducloi_theme_assets');