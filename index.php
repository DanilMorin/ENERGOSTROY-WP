<?php get_header(); ?>

<main class="site-main site-main--fallback">
    <section class="fallback-content">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php if (is_home() && !is_front_page()) : ?>
                    <header class="fallback-content__header">
                        <h1 class="text-title-second"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <div class="fallback-content__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('fallback-entry'); ?>>
                            <h2 class="fallback-entry__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <?php if (!is_singular() && has_post_thumbnail()) : ?>
                                <a class="fallback-entry__thumb" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', ['alt' => esc_attr(get_the_title())]); ?>
                                </a>
                            <?php endif; ?>

                            <div class="fallback-entry__content">
                                <?php
                                if (is_singular()) {
                                    the_content();
                                } else {
                                    the_excerpt();
                                }
                                ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <?php
                the_posts_pagination([
                    'mid_size' => 1,
                    'prev_text' => 'Назад',
                    'next_text' => 'Вперёд',
                ]);
                ?>
            <?php else : ?>
                <article class="fallback-entry fallback-entry--empty">
                    <h1 class="text-title-second">Ничего не найдено</h1>
                    <p class="text-description">
                        Похоже, здесь пока нет контента. Попробуйте перейти на главную страницу.
                    </p>
                    <a class="hero__button" href="<?php echo esc_url(home_url('/')); ?>">На главную</a>
                </article>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
