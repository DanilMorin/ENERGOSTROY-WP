<?php
//настройки темы
function energostroy_theme_setup() {
    // Поддержка миниатюр
    add_theme_support( 'post-thumbnails' );

    // Регистрируем меню
   register_nav_menus([
    'header_menu' => 'Меню в шапке', 
    'footer_menu' => 'Меню в подвале', //footer_menu — техническое имя для кода, "Меню в футере" — название, которое будет видно в админке WordPress
   ]);
}

add_action("after_setup_theme", "energostroy_theme_setup");