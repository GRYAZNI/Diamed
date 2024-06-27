<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'diamed' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost:3306' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N^f)W $oeNLjFu/JR%1PQ+PYOBfW<!3}^9;m+,~(4%dq%FjR$QcL3!EBW@QveU}/' );
define( 'SECURE_AUTH_KEY',  'pSQ&Q{]|<szY@/?.4];Uj=?=[GA}aD3[aKq<L)>f{f54/xC[Q|_!VR`]efdNor_o' );
define( 'LOGGED_IN_KEY',    'X=OPX&?lO[ @r{:p+.mbm-6GUb2_.JQdO#;:9cY0+r1]Rj.`<h1sJTMgk8+WGrT=' );
define( 'NONCE_KEY',        'MW=Q:{fHSfE~?O^*+szs }EeM@-vva*p0rQa`C6]E8+T4PJ<@y<Ms.,h6ja#?Ux.' );
define( 'AUTH_SALT',        'P!|>8Y0#vpCmp)n N-D%s%_@fs:jd&KOtf0lGPK11qJBu!]u2t;3hi;HL3anDXov' );
define( 'SECURE_AUTH_SALT', '%)3tP} g/ s,2wmZu!p4+R_O?>tVe!)IzSzHx|;D3.9l}Sv-(0!1)w/)7A1R:GKt' );
define( 'LOGGED_IN_SALT',   '/ddXhowqh`B|A7sBh|9wznMjoyBYNVw=}nHHfg5s:dpRY[<u(N4+FPsWmh)U?:uB' );
define( 'NONCE_SALT',       '+x}X[-X=OR+{DT5Rb4*Lb-}PJzwFz92jKPH:t[2[w<J3@fEg~:We0ykd}HS{CUvD' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
