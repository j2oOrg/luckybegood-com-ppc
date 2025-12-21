<?php
/**
 * luckybegood theme setup and assets.
 */

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    register_nav_menus([
        'primary' => __('Primary Menu', 'luckybegood'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'luckybegood-google-fonts',
        'https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'luckybegood-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
        [],
        '6.5.2'
    );

    wp_enqueue_style(
        'luckybegood-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        [],
        '5.3.3'
    );

    wp_enqueue_style(
        'luckybegood-site',
        get_theme_file_uri('/assets/css/site.css'),
        ['luckybegood-bootstrap'],
        $theme_version
    );

    if (is_front_page()) {
        $front_page_css_path = get_theme_file_path('/assets/css/front-page.css');
        $front_page_css = is_readable($front_page_css_path) ? file_get_contents($front_page_css_path) : '';

        if ($front_page_css) {
            wp_register_style('luckybegood-home', false, ['luckybegood-site'], $theme_version);
            wp_enqueue_style('luckybegood-home');
            wp_add_inline_style('luckybegood-home', $front_page_css);
        }
    }

    wp_enqueue_script(
        'luckybegood-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.3',
        true
    );

    wp_enqueue_script(
        'luckybegood-main',
        get_theme_file_uri('/assets/js/main.js'),
        [],
        $theme_version,
        true
    );
});

add_filter('body_class', function ($classes) {
    $classes[] = 'nova-shell-p7q4';
    return $classes;
});
