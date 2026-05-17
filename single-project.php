<?php get_header(); ?>

<main class="single-project-page">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="single-project">
                <section class="single-project__hero">
                    <div class="container">
                        <a class="single-project__back" href="<?php echo esc_url(home_url('/projects/')); ?>">
                         &lt; Все проекты
                        </a>

                        <h1 class="single-project__title">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </section>

                <section class="single-project__content-section">
                    <div class="container">
                        <div class="single-project__content">
                            <?php the_content(); ?> <!-- Выводим полный контент проекта, который можно создать в админке -->
                        </div>
                    </div>
                </section>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>