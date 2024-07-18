<?php get_header(); ?>

<main>
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    }
    ?>
    <section class="clinic-section">
        <div class="clinic-block">
            <h2>В нашей клинике</h2>
        </div>
        <div class="clinic-content">
            <div class="clinic-about">
                <div class="clinic-text">
                    <p>Врачи стремятся предоставить каждому пациенту лучшие условия для жизни. <span>Мы стараемся поставить на ноги пациента с болезнью любой сложности.</span> Специалисты нашей клиники предоставляют гарантию на свои услуги, так что после прохождения курса лечения с заболеваниями опорно-двигательного аппарата пациент отмечает улучшение и чувствует нарастающую положительную динамику в течение года.</p>
                    <p>Мы сочетаем <span>научные достижения и технологические знания</span> с инновационными потенциалами в области медицинского оборудования и решением некоторых из самых больших проблем со здоровьем современного общества, таких как:</p>
                    <ul>
                        <li>Артроз суставов</li>
                        <li>Межпозвонковые грыжи и протрузии</li>
                        <li>Травмы связок, мышц и сухожилий</li>
                    </ul>
                </div>
                <div class="clinic-buttons">
                    <button>Записаться в клинику</button>
                    <div class="button-about">
                        <button>Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="clinic-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clinic-image.jpg" alt="Изображение клиники">
            </div>
        </div>
        <div class="clinic-icons">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ct-icon.svg" alt="Иконка 1">
                <p>Использование передового технического оборудования</p>
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/scissors-icon.svg" alt="Иконка 2">
                <p>Эффективное лечение без боли и операции</p>
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar-icon.svg" alt="Иконка 3">
                <p>Быстрая запись без очередей</p>
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor-icon.svg" alt="Иконка 4">
                <p>Квалифицированные врачи</p>
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/money-icon.svg" alt="Иконка 5">
                <p>Доступная стоимость услуг</p>
            </div>
        </div>
    </section>

    <div class="services-block">
        <h1>Клиника эндокринологии, суставов и позвоночника в Уфе</h1>
        <div class="grid">
            <?php
            $images = [
                "Лечение грыжи", "Лечение суставов", "Гирудотерапия", "Ботулинотерапия",
                "МВТ-терапия", "Невролог", "Диабетолог", "Плазмоферез",
                "Массаж", "УЗ кавитация", "Прессотерапия", "УВТ"
            ];
            
            foreach ($images as $index => $title) {
                echo '
                <div class="card">
                    <div class="overlay"></div>
                    <img src="' . get_template_directory_uri() . '/assets/img/services-' . ($index + 1) . '.jpg" alt="' . $title . '">
                    <div class="title">' . $title . '</div>
                </div>';
            }
            ?>
        </div>
    </div>
    <div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

</main>

<?php get_footer(); ?>