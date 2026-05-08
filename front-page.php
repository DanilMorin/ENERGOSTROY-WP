<?php
/*
 Template Name: Main
 */
?>
<?php get_header(); ?>
<main class="site-main">

    <section class="hero">
        <div class="container">
            <div class="hero__image">
                <div class="hero__content">
                    <h1 class="hero__title text-title"> Строительство и монтаж<br>инженерных систем под ключ </h1>
                    <p class="hero__description text-base">Выполняем электромонтаж, проектирование и подключение объектов с гарантией и соблюдением сроков</p>
                    <a class="hero__button " href="#contacts-id">Обсудить проект</a>
                </div>
            </div>
        </div>
    </section>

    <section class="service" id="service-id">
        <div class="container">
            <div class="service__title">
                <h2 class="text-title-second">Спектр услуг</h2>
            </div>
            <div class="splide service-slider" aria-label="Проекты">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="service-card">
                                <div class="service-card__text">
                                    <h2 class="text-slider">Проектирование объектов<br>электроэнергетики</h2>
                                </div>

                                <div class="service-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project.png" alt="Проектирование объектов электроэнергетики">
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="service-card">
                                <div class="service-card__text">
                                    <h2 class="text-slider">Обслуживание&nbsp;трансформаторных подстанций, электроустановок<br>и кабельных линий</h2>
                                </div>

                                <div class="service-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/electricalInstallations.png" alt="Обслуживание трансформаторных подстанций, электроустановок и кабельных линий">
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="service-card">
                                <div class="service-card__text">
                                    <h2 class="text-slider">Строительство объектов электроэнергетики</h2>
                                </div>

                                <div class="service-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/constructionWorkers.png" alt="Строительство объектов электроэнергетики">
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="service-card">
                                <div class="service-card__text">
                                    <h2 class="text-slider">Пусконаладочные работы<br>и электротехнические испытания</h2>
                                </div>

                                <div class="service-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/CommissioningWorks.png" alt="Пусконаладочные работы и электротехнические испытания">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="about-work" id="about-work-id">
        <div class="container">
            <div class="about-work__title">
                <h2 class="text-title-second">Как мы работаем</h2>
                <p class="text-description">Прозрачный процесс и понятные условия на каждом этапе</p>
            </div>
            <div class="cards-wrapper">
                <div class="card">
                    <div class="card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bell.svg" alt="">
                    </div>
                    <div class="card__content">
                        <h3>Заявка</h3>
                        <p class="text-card">Обсуждение задачи</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wallet.svg" alt="">
                    </div>
                    <div class="card__content">
                        <h3>Расчёт стоимости</h3>
                        <p class="text-card">Фиксируем стоимость до начала работ</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wallet.svg" alt="">
                    </div>
                    <div class="card__content">
                        <h3>Договор</h3>
                        <p class="text-card">Работаем по договору. Выполняем работы под ключ, контролируя сроки и качество</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wallet.svg" alt="">
                    </div>
                    <div class="card__content">
                        <h3>Выполнение работ</h3>
                        <p class="text-card">Используем проверенные решения и оборудование. Работаем с поставщиками и подрядчиками</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about-id">
        <div class="container">
            <h2 class="text-title-second">ЭНЕРГОСТРОЙ</h2>
            <ul class="custom-list">
                <li class="text-base">
                    Наша команда объединяет высококлассных специалистов с многолетним опытом в строительстве и реконструкции энергетических объектов. Мы успешно работаем над масштабными проектами, обеспечивая надежность и качество на каждом этапе
                </li>
                <li class="text-base">
                    Для достижения высоких результатов мы непрерывно внедряем передовые технологии и расширяем наши технические возможности. Постоянное развитие и накопление знаний позволяют нам решать самые сложные задачи и находить эффективные решения для наших клиентов
                </li>
                <li class="text-base">
                    Мы гордимся нашими профессионалами, чей опыт и экспертиза являются основой успеха компании. Вклад каждого сотрудника помогает нам уверенно расти, осваивать новые рынки и открывать новые горизонты в сфере энергетического строительства
                </li>
            </ul>
            <a class="hero__button " href="">Проекты</a>
        </div>
    </section>
    <section class="partners" id="partners-id">
        <div class="container">
            <div class="wrapper">
                <h2 class="text-title-second">Наши партнёры</h2>
                <div class="partners-logo">
                    <div class="partners-logo__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/megastroy.png" alt="">
                    </div>
                    <div class="partners-logo__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/energoarm.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts" id="contacts-id">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="text-title-second">Контактная информация</h2>
                <p class="text-description">Остались вопросы? Свяжитесь с нами!</p>
            </div>
            <div class="contacts-wrapper">
                <div class="contacts-wrapper__item">
                    <a href="tel:+74742710156" class="text-link text-title">+7 (4742) 71-01-56</a>
                </div>
                <div class="contacts-wrapper__item">
                    <a href="mailto:energo_stroy48@bk.ru" class="text-link text-title">energo_stroy48@bk.ru</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>