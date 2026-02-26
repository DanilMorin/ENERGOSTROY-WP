<?php
function energostroy_enqueue_scripts() {
    $version = '1.0.0';

    // Подключаем main.css
    wp_enqueue_style(
        'energostroy-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $version
    );

    // Подключаем main.js
    wp_enqueue_script(
        'energostroy-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $version,
        true
    );

    // Подключаем шрифты
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Oswald:wght@200..700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap',
        [],
        null
    );
}
add_action('wp_enqueue_scripts', 'energostroy_enqueue_scripts');
?>