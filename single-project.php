<?php get_header(); ?>

<main class="single-project-page">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="single-project">
                <section class="single-project__hero">
                    <div class="container">
                        <a class="single-project__back" href="<?php echo esc_url(get_post_type_archive_link('project')); ?>">
                            ← Все проекты
                        </a>

                        <h1 class="single-project__title">
                            <?php the_title(); ?>
                        </h1>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="single-project__main-img">
                                <?php the_post_thumbnail('large', [
                                    'class' => 'single-project__image',
                                    'alt' => esc_attr(get_the_title()),
                                ]); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>

                <section class="single-project__content-section">
                    <div class="container">
                        <div class="single-project__content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>