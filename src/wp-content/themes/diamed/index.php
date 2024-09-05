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
  <div class="swiper-slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slider1/slide-1.jpg" alt="slide1">
    <div class="slide-overlay"></div>
    <div class="slide-content">
        <h5>Магнитно-резонансная терапия</h5>
        <h1>Лечение суставов и позвоночника</h1>
        <a href="#" class="btn">Записаться на сеанс</a>
      </div>
</div>
  <div class="swiper-slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slider1/slide-2.jpg" alt="slide2">
    <div class="slide-overlay"></div>
    <div class="slide-content">
        <h5>Гирудотерапия</h5>
        <h1>Пиявка, постановка, перевязочный материал</h1>
        <h4>от 300 рублей за одну пиявку</h4>
        <a href="#" class="btn">Записаться на сеанс</a>
      </div>
</div>  
  <div class="swiper-slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slider1/slide-3.jpg" alt="slide3">
    <div class="slide-overlay"></div>
    <div class="slide-content">
        <h5>Магнитно-резонансная терапия</h5>
        <h1>УВТ пяточной шпоры</h1>
        <h4>5 сеансов 5 000 рублей 6 000 рублей
        10 сеансов 10 000 рублей 12 000 рублей</h4>
        <a href="#" class="btn">Записаться на сеанс</a>
      </div>
</div>
  <div class="swiper-slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slider1/slide-4.jpg" alt="slide4">
    <div class="slide-overlay"></div>
    <div class="slide-content">
        <h5>Гирудотерапия</h5>
        <h1>Обучение гирудотерапии</h1>
        <h4>Очно, заочно и онлайн. Быстро и недорого
        курсы от 6 000 рублей</h4>

        <a href="#" class="btn">Записаться на сеанс</a>
      </div>
</div>
<div class="swiper-slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slider1/slide-5.jpg" alt="slide5">
    <div class="slide-overlay"></div>
    <div class="slide-content">
        <h5>Эндокринолог</h5>
        <h1>Консультация Эндокринолога</h1>
        <h4>Кандидат медицинских наук
        2 000 рублей 3 500 рублей</h4>

        <a href="#" class="btn">Записаться на сеанс</a>
      </div>
</div>
  </div>
  <div class="swiper-pagination"></div>
</div>
    <section class="clinic-section">
            <h3>В нашей клинике</h3>
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
                <a href="#appointment-section" class="scroll-button">Записаться в клинику</a>
                <a href="#consultation" class="button-about">Подробнее</a>

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

    <div  class="services-block">
        <h3>Клиника эндокринологии, суставов и позвоночника в Уфе</h3>
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

<div id="consultation" class="consultation">
    <h3>Клиника эндокринологии, суставов и позвоночника</h3>
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

    <div id="appointment-section" class="appointment-section">
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
    <div class="contact-menu">
        <div class="contact-info">
            <h2>Контакты</h2>
            <ul>
                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/phone-map.svg" alt="Phone" width="24">8 (961) 041-03-03</li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/geo-map.svg" alt="Address" width="24">450059 РБ, г. Уфа, ул. Р. Зорге, д. 24</li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mail-map.svg" alt="Email" width="24">diabetgn@gmail.com</li>
            </ul>
        </div>
        <div class="contact-time">
            <div class="contact-time-header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/calendar-map.svg" alt="calendar" >
                <div class="contact-time-title">Время работы</div>
            </div>
            <ul>
                <li> Пн-Сб: 9:00 - 21:00</li>
                <li> Вс: 9:00 - 16:00</li>
            </ul>
        </div>
        <button>Записаться в клинику</button>
    </div>
</div>



</main>

<?php get_footer(); ?>
