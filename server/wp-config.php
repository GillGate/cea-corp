<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'bhx20158_cea' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'bhx20158_ceacorp' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '47h3PKJj^H{IoSJE3qZsuJJ%' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-b3ccn6]tO|1VW@K@`EqF2{J3R-Q#5H#mn*?3,&thI`o8=j ~T~skD+N+y6[h;IA' );
define( 'SECURE_AUTH_KEY',  'W%yOi?7mb.3F)C1m}sW0$DL=}^!Gt|qisVMmj-4p$]M~zEcJNM9Y hsP}0_InpX2' );
define( 'LOGGED_IN_KEY',    '@M^aH&SS5juIstuQ@zm=_1VqtZz(M9@UZNDqY6;IdX)$<S43$b``:^Xu|<WKMb-y' );
define( 'NONCE_KEY',        'MV=Fr%qhfDu%cLZinR/:&dU:pQvAXD:+`uR&Y/Q]V+>o;eFpaWU[w&w{Im*H-ypK' );
define( 'AUTH_SALT',        ':]dwBk&%`@J5 3:GJP73Kax/`DqlH5u{Vm-~veIj*UD)A*S^`RzdjIGccjUqO2ai' );
define( 'SECURE_AUTH_SALT', '&!)Vb({6F@HqE{S{28gOp@%(cKw3aS@_W/YVUwjK$pxvoA+-HWo7YC.NHLYI:iid' );
define( 'LOGGED_IN_SALT',   '^DIc_(yi#Fu9WpYw.5vkycguk[HgAvv7hT#^]S76fq)Lwhl|Ck{L.-T5lzMCX4GJ' );
define( 'NONCE_SALT',       'WP$8|Fw/j*$S$msN/3D(xL[&t]W8929H>]bg;_~&5a)JwP/i(22.c0hHp<C/;;7 ' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
