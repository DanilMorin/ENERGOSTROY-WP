<?php

function energostroy_customize_register($wp_customize)
{ //секция куда складываются редактируемые поля
    $wp_customize->add_section('energostroy_contacts', [
        'title' => 'Контакты сайта',
        'priority' => 30,
    ]);

    $wp_customize->add_setting('energostroy_phone', [
        'default' =>  '+7 (4742) 71-01-56',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('energostroy_phone', [
        'label' => "телефон",
        'section' => 'energostroy_contacts',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('energostroy_email', [
        'default' => 'energo_stroy48@bk.ru',
        'sanitize_callback' => 'sanitize_email',
    ]);

    $wp_customize->add_control('energostroy_email', [
        'label'   => 'Email',
        'section' => 'energostroy_contacts',
        'type'    => 'email',
    ]);
}

add_action('customize_register', 'energostroy_customize_register');
