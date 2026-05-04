<?php
/*
 Template Name: Main
 */
?>

<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main.png" alt="ЭНЕРГОСТРОЙ - Энергия в каждом решении, надежность в каждом проекте"> -->
<?php get_header(); ?>


<main class="site-main">

    <section class="hero">
        <div class="container">
            <div class="hero__image">
                <div class="hero__content">
                    <h1 class="hero__title text-title"> Строительство и монтаж<br>инженерных систем под ключ </h1>
                    <p class="hero__description text-base">Выполняем электромонтаж, проектирование и подключение объектов с гарантией и соблюдением сроков</p>
                    <a class="hero__button " href="">Обсудить проект</a>
                </div>
            </div>
        </div>
    </section>

    <section class="service" id="service">
        <div class="container">
             <div class="splide service-slider" aria-label="Проекты">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="service-card">
                            <h2 class="text-slider">Проектирование  объектов<br> электроэнергетики</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project.png" alt="Проекты">
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="service-card">
                            <h2>Слайд 2</h2>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="service-card">
                            <h2>Слайд 3</h2>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        </div>
       
    </section>

    <section class="partners">

    </section>

</main>

<?php get_footer(); ?>