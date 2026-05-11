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
                <a  href="<?php echo esc_url( home_url('/') ); ?>">
                    <?php echo date('Y'); ?> © ЭНЕРГОСТРОЙ
                </a>
            </div>

            <div class="footer__column footer__column--contacts">
                <a href="<?php echo esc_url('tel:+74742710156'); ?>" class="text-link">+7 (4742) 71-01-56</a>
                <a href="<?php echo esc_url('mailto:enerenergo_stroy48@bk.ru'); ?>" class="text-link">enerenergo_stroy48@bk.ru</a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>