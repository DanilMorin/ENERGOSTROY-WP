<?php
function energostroy_enqueue_scripts()
{
    $version = '1.0.0';

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap',
        [],
        $version
    );

    wp_enqueue_style(
        'energostroy-main',
        get_template_directory_uri() . '/assets/css/main.css',
        ['google-fonts'],
        $version
    );

    wp_enqueue_script(
        'energostroy-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $version,
        true
    );
}
add_action('wp_enqueue_scripts', 'energostroy_enqueue_scripts', 10);
