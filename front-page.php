<?php
/*
 Template Name: Main
 */
?>

<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main.png" alt="ЭНЕРГОСТРОЙ - Энергия в каждом решении, надежность в каждом проекте"> -->
<?php get_header(); ?>


<main class="site-main">

    <section class="hero">
        <div class="hero__image">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mainMob.png" media="(max-width: 500px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main.png" media="(max-width: 1024px)">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/main.png"
                    alt="ЭНЕРГОСТРОЙ"
                    class="hero__img">
            </picture>
        </div>

    </section>

    <section class="about" id="about">

    </section>

    <section class="partners">

    </section>

</main>

<?php get_footer(); ?>