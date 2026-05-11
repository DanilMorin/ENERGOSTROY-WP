 <?php
    $phone = get_theme_mod('energostroy_phone', '+7 (4742) 71-01-56');
    $email = get_theme_mod('energostroy_email', 'energo_stroy48@bk.ru');

    $phone_href = preg_replace('/[^0-9+]/', '', $phone);
    ?>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__column footer__column--nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'container' => 'nav',
                    'container_class' => 'footer__nav',
                    'menu_class' => 'footer__menu',
                    'fallback_cb' => false,
                ]);
                ?>
            </div>

            <div class="footer__column footer__column--center">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo date('Y'); ?> © ЭНЕРГОСТРОЙ
                </a>
            </div>

            <div class="footer__column footer__column--contacts">
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
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>