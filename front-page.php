<?php
/*
 Template Name: Main
 */
?>
<?php get_header(); ?>
<section class="hero">
    <div class="container">
        <div class="hero__titles">
            <h1 class="text-title">Полный спектр услуг в строительстве электроэнергетической инфраструктуры</h1>
            <p class="text-description">ЭНЕРГОСТРОЙ - Энергия в каждом решении, надежность в каждом проекте</p>
            <a href="/" class="btn">Подробнее о компании</a>
        </div>
        <div class="hero__img">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main.png"  alt="ЭНЕРГОСТРОЙ - Энергия в каждом решении, надежность в каждом проекте">
        </div>
    </div>

</section>
<?php get_footer(); ?>