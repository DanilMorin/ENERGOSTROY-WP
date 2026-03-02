<?php

require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/acf-fields.php';

function my_theme_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts','my_theme_styles' );

wp_enqueue_style( 'front-page', get_template_directory_uri() . '/assets/css/front-page/front-page.css' );



