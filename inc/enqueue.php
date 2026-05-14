<?php
function energostroy_enqueue_scripts()
{
    //РІРµСЂСЃРёРѕРЅРёР·Р°С†РёСЏ CSS-С„Р°Р№Р»РѕРІ 
    $theme_version = wp_get_theme()->get('Version');
    $asset_version = static function ($relative_path) use ($theme_version) {
        $absolute_path = get_template_directory() . $relative_path;
        return file_exists($absolute_path) ? filemtime($absolute_path) : $theme_version;
    };

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $asset_version('/assets/css/main.css')
    );

    wp_enqueue_style(
        'reset-style',
        get_template_directory_uri() . '/assets/css/reset.css',
        [],
        $asset_version('/assets/css/reset.css')
    );

    wp_enqueue_style(
        'footer-style',
        get_template_directory_uri() . '/assets/css/components/footer.css',
        [],
        $asset_version('/assets/css/components/footer.css')
    );

    wp_enqueue_style(
        'header-style',
        get_template_directory_uri() . '/assets/css/components/header.css',
        [],
        $asset_version('/assets/css/components/header.css')
    );

    if (is_front_page() || is_page_template('front-page.php')) { // РµСЃР»Рё СЃС‚СЂР°РЅРёС†Р° front-page, С‚Рѕ РїРѕРґРіСЂСѓР¶Р°СЋС‚СЃСЏ С‚РѕР»СЊРєРѕ РµС‘ СЃС‚РёР»Рё
        wp_enqueue_style(
            'front-page-style',
            get_template_directory_uri() . '/assets/css/pages/front-page/front-page.css',
            ['main-style'],
            $asset_version('/assets/css/pages/front-page/front-page.css')
        );
    }

    if(is_page_template('page-projects.php')) { // РµСЃР»Рё СЃС‚СЂР°РЅРёС†Р° projects, С‚Рѕ РїРѕРґРіСЂСѓР¶Р°СЋС‚СЃСЏ С‚РѕР»СЊРєРѕ РµС‘ СЃС‚РёР»Рё
        wp_enqueue_style(
            'projects-page-style',
            get_template_directory_uri() . '/assets/css/pages/projects/page-projects.css',
            ['main-style'],
            $asset_version('/assets/css/pages/projects/page-projects.css')
        );
    }

    if (is_singular('project') || is_page_template('page-privacy.php')) { // РµСЃР»Рё СЌС‚Рѕ СЃС‚СЂР°РЅРёС†Р° РїСЂРѕРµРєС‚Р°, С‚Рѕ РїРѕРґРіСЂСѓР¶Р°СЋС‚СЃСЏ С‚РѕР»СЊРєРѕ РµС‘ СЃС‚РёР»Рё
        wp_enqueue_style(
            'single-project-style',
            get_template_directory_uri() . '/assets/css/pages/projects/single-project.css',
            ['main-style'],
            $asset_version('/assets/css/pages/projects/single-project.css')
        );
    }
    //РїРѕРґРєР»СЋС‡РµРЅРёРµ Р±РёР±Р»РёРѕС‚РµРєРё splide
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
        $asset_version('/assets/libs/splide/splide.min.js'),
        true
    );

    wp_enqueue_script(
        'energostroy-script',
        get_template_directory_uri() . '/assets/js/main.js',
        ['splide-js'],
        $asset_version('/assets/js/main.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'energostroy_enqueue_scripts');



