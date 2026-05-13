<?php

/**
 * Регистрируем тип записей "Проекты".
 * Добавление проектов через админку WordPress.
 */

function energostroy_register_project_post_type()
{
    register_post_type('project', [
        'labels' => [
            'name' => 'Проекты',
            'singular_name' => 'Проект',
            'add_new' => 'Добавить проект',
            'add_new_item' => 'Добавить новый проект',
            'edit_item' => 'Редактировать проект',
            'new_item' => 'Новый проект',
            'view_item' => 'Посмотреть проект',
            'search_items' => 'Найти проект',
            'not_found' => 'Проекты не найдены',
            'not_found_in_trash' => 'В корзине проекты не найдены',
            'menu_name' => 'Проекты',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-portfolio',
        /**
         * title     — название проекта
         * editor    — подробное описание + галерея
         * thumbnail — картинка проекта
         * excerpt   — краткое описание для карточки
         */
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ],
        'has_archive' => false, // отключаем архив, так как у нас будет отдельная страница для проектов
        /**
         * Детальные страницы будут иметь адрес:
         * /projects/название-проекта/
         */
        'rewrite' => [
            'slug' => 'projects',
            'with_front' => false,
        ],
        'show_in_rest' => true, // включаем поддержку REST API для работы с блоками Гутенберга для галереи
    ]);
}

add_action('init', 'energostroy_register_project_post_type');
