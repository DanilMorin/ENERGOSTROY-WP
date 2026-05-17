<?php
/*
Template Name: Privacy Policy
*/

get_header();

$site_name = get_bloginfo('name');
$phone = get_theme_mod('energostroy_phone', '+7 (4742) 71-01-56');
$email = get_theme_mod('energostroy_email', 'energo_stroy48@bk.ru');
?>

<main class="single-project-page">
    <article class="single-project">
        <section class="single-project__hero">
            <div class="container">
                <a class="single-project__back" href="<?php echo esc_url(home_url('/')); ?>">
                    &lt; На главную
                </a>

                <h1 class="single-project__title">Политика в отношении обработки персональных данных</h1>
            </div>
        </section>

        <section class="single-project__content-section">
            <div class="container">
                <div class="single-project__content">
                    <p>Настоящая политика определяет порядок обработки персональных данных посетителей сайта <?php echo esc_html($site_name); ?>.</p>

                    <h2 class="single-project__title"   >Формы и аналитика</h2>
                    <p>На сайте отсутствуют формы обратной связи и не используются системы веб-аналитики (например, Яндекс Метрика или Google Analytics).</p>

                    <h2 class="single-project__title">Локальные шрифты</h2>
                    <p>На сайте используются локально размещенные файлы шрифта Oswald в формате WOFF2. Файлы шрифтов загружаются с сервера сайта, а не через Google Fonts API. При загрузке страниц данные посетителей не передаются в Google для получения шрифтов.</p>

                    <h2 class="single-project__title">Контакты по вопросам персональных данных</h2>
                    <p>По вопросам обработки персональных данных можно обратиться по телефону <?php echo esc_html($phone); ?> или по электронной почте <?php echo esc_html($email); ?>.</p>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>
