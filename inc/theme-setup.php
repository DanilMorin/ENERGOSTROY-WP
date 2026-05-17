<?php

function energostroy_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале',
    ]);
}

add_action('after_setup_theme', 'energostroy_theme_setup');

/**
 * Определяем, кто может загружать SVG.
 * По умолчанию только администратор, но это можно поменять фильтром.
 */
function energostroy_can_upload_svg()
{
    $capability = apply_filters('energostroy_svg_upload_capability', 'manage_options');
    return is_string($capability) && current_user_can($capability);
}

add_filter('upload_mimes', 'energostroy_svg_upload_allow');

function energostroy_svg_upload_allow($mimes)
{
    if (energostroy_can_upload_svg()) {
        $mimes['svg'] = 'image/svg+xml';
    } else {
        unset($mimes['svg']);
    }

    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'energostroy_fix_svg_mime_type', 10, 5);

function energostroy_fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{
    $ext = strtolower((string) pathinfo((string) $filename, PATHINFO_EXTENSION));
    $is_svg = ('svg' === $ext) || in_array($real_mime, ['image/svg', 'image/svg+xml'], true);

    if (!$is_svg) {
        return $data;
    }

    if (energostroy_can_upload_svg()) {
        $data['ext'] = 'svg';
        $data['type'] = 'image/svg+xml';
    } else {
        $data['ext'] = false;
        $data['type'] = false;
    }

    return $data;
}

/**
 * Базовая серверная проверка SVG на опасные конструкции.
 * Это не полноценная санитизация, но заметно снижает риск XSS.
 */
function energostroy_validate_svg_upload($file)
{
    $ext = strtolower((string) pathinfo((string) ($file['name'] ?? ''), PATHINFO_EXTENSION));
    if ('svg' !== $ext) {
        return $file;
    }

    if (!energostroy_can_upload_svg()) {
        $file['error'] = 'SVG можно загружать только пользователям с правами администратора.';
        return $file;
    }

    $tmp_name = $file['tmp_name'] ?? '';
    if (!$tmp_name || !is_readable($tmp_name)) {
        $file['error'] = 'Не удалось прочитать SVG-файл для проверки безопасности.';
        return $file;
    }

    $svg_content = file_get_contents($tmp_name);
    if (false === $svg_content) {
        $file['error'] = 'Не удалось проверить содержимое SVG-файла.';
        return $file;
    }

    $unsafe_patterns = [
        '/<script[\s>]/i',
        '/on\w+\s*=/i',
        '/javascript\s*:/i',
        '/<iframe[\s>]/i',
        '/<object[\s>]/i',
        '/<embed[\s>]/i',
        '/<foreignObject[\s>]/i',
        '/<\?xml-stylesheet/i',
    ];

    foreach ($unsafe_patterns as $pattern) {
        if (preg_match($pattern, $svg_content)) {
            $file['error'] = 'SVG отклонён по соображениям безопасности. Удалите скрипты и встроенные обработчики.';
            return $file;
        }
    }

    return $file;
}

add_filter('wp_handle_upload_prefilter', 'energostroy_validate_svg_upload', 5);
add_filter('wp_handle_sideload_prefilter', 'energostroy_validate_svg_upload', 5);

function energostroy_get_upload_limits_kb()
{
    $limits = [
        'svg' => 2048,
        'image' => 4096,
    ];

    return apply_filters('energostroy_upload_limits_kb', $limits);
}

function energostroy_get_max_upload_size_for_file($file)
{
    $limits = energostroy_get_upload_limits_kb();
    $name = (string) ($file['name'] ?? '');
    $ext = strtolower((string) pathinfo($name, PATHINFO_EXTENSION));

    if ('svg' === $ext && !empty($limits['svg'])) {
        return absint($limits['svg']) * 1024;
    }

    $filetype = wp_check_filetype($name);
    $mime = (string) ($filetype['type'] ?? ($file['type'] ?? ''));
    if (0 === strpos($mime, 'image/') && !empty($limits['image'])) {
        return absint($limits['image']) * 1024;
    }

    return 0;
}

add_filter('wp_handle_sideload_prefilter', 'energostroy_check_file_upload_size');
add_filter('wp_handle_upload_prefilter', 'energostroy_check_file_upload_size');

function energostroy_check_file_upload_size($file)
{
    $max_size = energostroy_get_max_upload_size_for_file($file);
    if (!$max_size) {
        return $file;
    }

    $file_size = (int) ($file['size'] ?? 0);
    if ($file_size > $max_size) {
        $file['error'] = 'Размер файла превышает допустимый лимит: ' . size_format($max_size) . '.';
    }

    return $file;
}
