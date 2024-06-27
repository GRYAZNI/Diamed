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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-header.svg" alt="Логотип">
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
        <div class="header-button">
            <button>Записаться на сеанс</button>
        </div>
    </div>
</header>
<?php wp_footer(); ?>
</body>
</html>
