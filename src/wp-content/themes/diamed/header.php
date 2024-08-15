<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-header.svg" alt="Логотип">
        </div>
        <nav class="main-menu">
            <ul class="menu">
                <li>Услуги</li>
                <li>Обучение гирудотерапии</li>
                <li>О клинике</li>
                <li>Врачи</li>
                <li>Статьи</li>
                <li>Цены</li>
                <li>Расписание</li>
                <li>Контакты</li>
            </ul>
        </nav>
        <a href="#appointment-section" class="header-button">Записаться на сеанс</a>
        <div class="menu-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/menu.svg" alt="Меню">
        </div>
    </div>
</header>
<div class="overlay-menu">
    <ul class="overlay-menu-items">
        <li>Услуги</li>
        <li>Обучение гирудотерапии</li>
        <li>О клинике</li>
        <li>Врачи</li>
        <li>Статьи</li>
        <li>Цены</li>
        <li>Расписание</li>
        <li>Контакты</li>
    </ul>
    <div class="contact-info">
        <div class="contact-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/phone-blue.svg" alt="Телефон">
            <span>8 (961) 041-03-03</span>
        </div>
        <div class="contact-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/geo-blue.svg" alt="Адрес">
            <span>450059 РБ, г. Уфа, ул. Р. Зорге, д. 24</span>
        </div>
        <div class="contact-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/mail-blue.svg" alt="Email">
            <span>diabetgn@gmail.com</span>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<script>
    document.querySelector('.menu-icon img').addEventListener('click', function() {
    const overlayMenu = document.querySelector('.overlay-menu');
    const menuIcon = document.querySelector('.menu-icon img');
    const body = document.body;

    overlayMenu.classList.toggle('open');
    if (overlayMenu.classList.contains('open')) {
        menuIcon.src = '<?php echo get_template_directory_uri(); ?>/assets/svg/cross.svg';
        body.style.overflow = 'hidden'; // Запрещаем прокрутку
        body.style.position = 'fixed'; // Отключаем прокрутку
        body.style.width = '100vw'; // Чтобы избежать горизонтального скролла
        body.style.top = `-${window.scrollY}px`; // Сохраняем текущий скролл
    } else {
        menuIcon.src = '<?php echo get_template_directory_uri(); ?>/assets/svg/menu.svg';
        body.style.overflow = ''; // Разрешаем прокрутку
        body.style.position = ''; // Сбрасываем позиционирование
        body.style.width = ''; // Сбрасываем ширину
        body.style.top = ''; // Сбрасываем сохраненный скролл
        window.scrollTo(0, -parseInt(body.style.top || '0')); // Восстанавливаем скролл
    }
});

</script>
</body>
</html>
