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

    wp_enqueue_style(
        'reset-style',
        get_template_directory_uri() . '/assets/css/reset.css',
        [],
        $version
    );

    if (is_front_page() || is_page_template('front-page.php')) { // если страница front-page, то подгружаются только её стили
        wp_enqueue_style(
            'front-page-style',
            get_template_directory_uri() . '/assets/css/pages/front-page/front-page.css',
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
    //подключение библиотеки splide
    wp_enqueue_style(
        'splide-css',
        get_template_directory_uri() . '/assets/libs/splide/splide.min.css',
        [],
        '4.1.4'
    );

    wp_enqueue_script(
        'splide-js',
        get_template_directory_uri() . '/assets/libs/splide/splide.min.js',
        [],
        '4.1.4',
        true
    );

    wp_enqueue_script(
        'energostroy-script',
        get_template_directory_uri() . '/assets/js/main.js',
       ['splide-js'],
        $version,
        true
    );
}

add_action('wp_enqueue_scripts', 'energostroy_enqueue_scripts');
