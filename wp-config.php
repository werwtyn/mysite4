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
define( 'DB_NAME', 'mysite4' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'R:QJmvY@Zr,.blw2`a!T8hnEy%suVd_(6R^W?G~8E%E{BEVLm=#:^K3P?J=,O,]{' );
define( 'SECURE_AUTH_KEY',  'gNn9IK*1BI,i!k<<#0V[K|Q#A=tM*-<oW!(hl]=0P^1?f!=ppR-w#^q~p,!>zQOF' );
define( 'LOGGED_IN_KEY',    '5CP8|zt9A9.7WA-H)6m>lVCOWO(Bw<<|}BYa7pL0NPg(`AS|?F:F POiEWEYSaXq' );
define( 'NONCE_KEY',        'K901<UeFx$nppaD&:m!+WOdoq4scELa[cA|(L.IVykOG$e5H`-Fhm&F/*`z6KIu}' );
define( 'AUTH_SALT',        'a!IgRF*Gr*zb#?9KVRXw:]nrw6--Qeu~54AWP!}t8jC/?%.Z|k+9>2D$L<=#4xiU' );
define( 'SECURE_AUTH_SALT', 'Qrjaa|ryyw;,Mf4y8!yVV*`H[;L yZ|>C#9daSt2>(H%6hw`>/j/&Bk+T,M2pRR3' );
define( 'LOGGED_IN_SALT',   '|U{SFU:*6Fo@)vXJ;x`Ac6bnx|?`|{SFTKWUi1d9o]!hy/jL+W_MvWz]vp0 OxMY' );
define( 'NONCE_SALT',       ':e{mtb#RFt:[^3!G3k_?r;:0pX&#`$&G1zuN;tT(*1:aRj:K]B!oBz{ge/nxvW(Z' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
