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
<div class="swiper swiper1">
  <div class="swiper-wrapper">
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/ct-icon.svg" alt="Иконка 1">
                <p>Использование передового технического оборудования</p>
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/scissors-icon.svg" alt="Иконка 2">
                <p>Эффективное лечение без боли и операции</p>
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/calendar-icon.svg" alt="Иконка 3">
                <p>Быстрая запись без очередей</p>
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/doctor-icon.svg" alt="Иконка 4">
                <p>Квалифицированные врачи</p>
            </div>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/money-icon.svg" alt="Иконка 5">
                <p>Доступная стоимость услуг</p>svg
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
                    <img src="' . get_template_directory_uri() . '/assets/img/services-' . ($index + 1) . '.jpg" alt="' . $title . '">
                                        <div class="overlay"></div>

                    <div class="title">' . $title . '</div>
                </div>';
            }
            ?>
        </div>
    </div>
    <div class="swiper swiper-video">
  <div class="swiper-wrapper">
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<div class="consultation">
    <h1>Клиника эндокринологии, суставов и позвоночника</h1>
    <div class="consultation-content">
        <div class="consultation-text">
        <p>Диабет, ожирение, патология щитовидной железы, надпочечников, половых желез и другие эндокринные заболевания. У нас хватит времени и желания качественно объяснить каждому: <span class="highlight">как нужно питаться, как правильно измерять сахар крови и как принимать лекарства.</span> Для желающих открыта платная школа диабета на базе нашего эндокринологического центра.</p>

        <div class="services">
            <div class="service">Консультация специалистов</div>
            <div class="service">Процедурный кабинет</div>
            <div class="service">Ударно-волновая терапия УВТ</div>
            <div class="service">Магнитно-резонансная терапия MBST</div>
            <div class="service">Электрофорез</div>
            <div class="service">Электросон</div>
            <div class="service">Озонотерапия</div>
            <div class="service">Электромиостимуляция</div>
            <div class="service">Гидротерапия</div>
            <div class="service">Массаж</div>
            <div class="service">Физиотерапия</div>
            <div class="service">Внутривенная лазерная очистка крови</div>
            <div class="service">Косметология</div>
            <div class="service">Вызов врача на дом</div>
        </div>
        
        <p>Все наши врачи постоянно повышают свою квалификацию, участвуют в международных медицинских научных конференциях и, конечно же, имеют огромный опыт лечения. <span class="highlight">Быть здоровым - это не сложно! Мы поможем.</span></p>
        
        <p>В медицинском центре «DiaMed» можно получить консультацию эндокринолога по вопросам диагностики и лечения следующих гормональных заболеваний:</p>
        <ul>
            <li>сахарный диабет 1 и 2 типа</li>
            <li>болезни щитовидной железы</li>
            <li>заболевания надпочечников</li>
            <li>гипофизарные болезни</li>
            <li>остеопороз</li>
            <li>гормональные нарушения половых желез</li>
        </ul>
    </div>
    <div class="consultation-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor.jpg" alt="Доктор">
    </div>
</div>

    <div class="therapy-container">
            <h2>Лечение суставов и позвоночника с помощью магнитно-резонансной терапии MBST гарантирует вам результат, потому что действие MBST-терапии:</h2>
            <div class="therapy-grid">
                <div class="therapy-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bone-icon.svg" alt="Icon 1">
                    <p>Активизирует восстановление хрящевой ткани суставов, способствует уменьшению стадии артроза</p>
                </div>
                <div class="therapy-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/muscule-icon.svg" alt="Icon 2">
                    <p>Активизирует восстановительные процессы в связках суставов, улучшая подвижность в суставе</p>
                </div>
                <div class="therapy-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/knee-icon.svg" alt="Icon 3">
                    <p>Эффективно способствует устранению боли в суставах и воздействует на причину заболевания</p>
                </div>
                <div class="therapy-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/spine-icon.svg" alt="Icon 4">
                    <p>Активизирует восстановление ткани межпозвонковых дисков, способствует уменьшению размера грыж и протрузий</p>
                </div>
                <div class="therapy-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/runner-icon.svg" alt="Icon 5">
                    <p>Восстановление эластичности и плотности костной ткани</p>
                </div>
            </div>
    </div>

    <div class="appointment-section">
    <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/call.jpg" alt="Doctor Image">
    </div>
    <div class="form-container">
        <h2>Запись на приём в клинику эндокринологии, суставов и позвоночника DiaMed </h2>
        <form id="contact-form">
            <input type="tel" name="user_phone" placeholder="Номер телефона" required>
            <input type="text" name="user_name" placeholder="Имя" required>
            <div class="button-group">
                <button type="submit">Записаться</button>
                <a class="whatsapp-button">Записаться в WhatsApp</a>
            </div>
        </form>
    </div>
</div>


<div class="custom-contact-container">
    <div class="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A139e072944c26fe7ea936793fa5e1f16449f232df81f09b7134cc73a52dfc907&amp;width=100%25&amp;height=100%25&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
    <div class="contact-info">
        <h2>Контакты</h2>
        <ul>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/phone-map.svg" alt="Phone" width="24">8 (061) 041-08-43</li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/geo-map.svg" alt="Address" width="24">450096 РФ, г. Уфа, ул. Я. Зорге, д. 24</li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mail-map.svg" alt="Email" width="24">diabet@t9n@gmail.com</li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/calendar-map.svg" alt="Working Hours" width="24">
                <div>
                    Пн-Сб: 9:00 - 21:00<br>Вс: 9:00 - 16:00
                </div>
            </li>
        </ul>
        <button>Записаться в клинику</button>
    </div>
</div>



</main>

<?php get_footer(); ?>
