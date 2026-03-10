<?php
function energostroy_enqueue_scripts()
{
    $version = '1.0.0';
    
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $version
    );

    if (is_front_page()) { // если страница front-page, то подгружаются только её стили
        wp_enqueue_style(
            'front-page-style',
            get_template_directory_uri() . '/assets/css/front-page.css',
            ['main-style'],
            $version
        );
    }

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap',
        [],
        null
    );

    wp_enqueue_script(
        'energostroy-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $version,
        true
    );
}

add_action('wp_enqueue_scripts', 'energostroy_enqueue_scripts');