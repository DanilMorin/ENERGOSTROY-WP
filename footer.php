<?php
$phone = get_theme_mod('energostroy_phone', '+7 (4742) 71-01-56');
$email = get_theme_mod('energostroy_email', 'energo_stroy48@bk.ru');

$phone_href = preg_replace('/[^0-9+]/', '', $phone);
$privacy_policy_url = function_exists('get_privacy_policy_url') ? get_privacy_policy_url() : '';

if (!$privacy_policy_url) {
    $privacy_policy_url = home_url('/privacy-policy/');
}
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
                <a class="footer__brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo date('Y'); ?> &copy; ЭНЕРГОСТРОЙ
                </a>

                <a class="footer__privacy-link" href="<?php echo esc_url($privacy_policy_url); ?>">
                    Политика конфиденциальности
                </a>
            </div>

            <div class="footer__column footer__column--contacts">
                <?php if ($phone) : ?>
                    <a class="header__contact-link" href="tel:<?php echo esc_attr($phone_href); ?>">
                        <?php echo esc_html($phone); ?>
                    </a>
                <?php endif; ?>

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
