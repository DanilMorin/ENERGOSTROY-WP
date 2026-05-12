<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="ЭНЕРГОСТРОЙ - Полный спектр услуг в строительстве электроэнергетической инфраструктуры" />
    <meta property="og:description" content="ЭНЕРГОСТРОЙ - Энергия в каждом решении, надежность в каждом проекте" />

    <?php wp_head();  ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php
    $phone = get_theme_mod('energostroy_phone', '+7 (4742) 71-01-56');
    $email = get_theme_mod('energostroy_email', 'energo_stroy48@bk.ru');

    $phone_href = preg_replace('/[^0-9+]/', '', $phone);
    ?>

    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="header__logo">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.svg'); ?>" alt="">
                </a>
                <nav class="header__nav" aria-label="Основная навигация">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'header_menu',
                        'container' => false,
                        'menu_class' => 'header__menu',
                        'fallback_cb' => false,
                    ]);
                    ?>

                    <div class="header__mobile-extra">
                        <?php if ($phone) : ?>
                            <a class="header__mobile-link" href="tel:<?php echo esc_attr($phone_href); ?>">
                                <?php echo esc_html($phone); ?>
                            </a>
                        <?php endif; ?>

                        <?php if ($email) : ?>
                            <a class="header__mobile-link" href="mailto:<?php echo esc_attr($email); ?>">
                                <?php echo esc_html($email); ?>
                            </a>
                        <?php endif; ?>

                        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__mobile-logo">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/mobileLogo.svg'); ?>" alt="Логотип Энергострой">
                        </a>
                    </div>
                </nav>

                <div class="header__contacts">
                    <?php if ($phone) : ?>
                        <a class="header__contact-link" href="tel:<?php echo esc_attr($phone_href); ?>">
                            <?php echo esc_html($phone); ?>
                        </a>
                    <?php endif ?>
                    <?php if ($email) : ?>
                        <a class="header__contact-link" href="mailto:<?php echo esc_attr($email); ?>">
                            <?php echo esc_html($email); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <button class="header__burger" type="button" aria-label="Open menu" aria-expanded="false">
                    <span class="header__burger-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </header>
