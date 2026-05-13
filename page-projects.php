<?php
/*
Template Name: projects
*/
?>

<?php get_header(); ?>

<main class="projects-page">
    <section class="projects">
        <div class="container">
            <header class="projects__header">
                <h1 class="projects__title">Реализованные проекты</h1>
            </header>

            <?php if (have_posts()) : ?>
                <div class="projects__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="project-card">
                            <a class="project-card__media" href="<?php the_permalink(); ?>"> <!-- Ссылка на страницу проекта -->
                                <?php if (has_post_thumbnail()) : ?> <!-- Проверяем, есть ли миниатюра -->
                                    <?php the_post_thumbnail('large', [  // Выводим миниатюру с классом для стилизации и атрибутом alt для SEO 
                                        'class' => 'project-card__image',
                                        'alt' => esc_attr(get_the_title()),
                                    ]); ?>
                                <?php endif; ?>
                            </a>

                            <div class="project-card__content"> <!-- Контейнер для текста и кнопки -->
                                <h2 class="project-card__title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?> <!-- Заголовок проекта с ссылкой на страницу проекта -->
                                    </a>
                                </h2>

                                <p class="project-card__description"> <!-- Описание проекта, выводим либо из отрывка, либо обрезаем содержание до 100 слов -->
                                    <?php
                                    if (has_excerpt()) {
                                        echo esc_html(get_the_excerpt());
                                    } else {
                                        echo esc_html(wp_trim_words(get_the_content(), 100, '...'));
                                    }
                                    ?>
                                </p>

                                <a class="project-card__button" href="<?php the_permalink(); ?>">
                                    Подробнее
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="projects__pagination"> <!-- Пагинация для навигации между страницами проектов -->
                    <?php // Выводим пагинацию с кастомными текстами для кнопок "Назад" и "Вперёд"
                    the_posts_pagination([ 
                        'prev_text' => 'Назад',
                        'next_text' => 'Вперёд',
                    ]);
                    ?>
                </div>
            <?php else : ?>
                <p class="projects__empty">Проекты пока не добавлены.</p> <!-- Сообщение, если проектов нет -->
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>