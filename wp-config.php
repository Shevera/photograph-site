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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'photograph-site-wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S[^ARyW!k4:CD73*BIfrk=}W<P7,[>2ItHL]Bm<s~Cht~_0lp/P^|F7&b9~d=y`y');
define('SECURE_AUTH_KEY',  'GZ6i*So4cs[#tY5|K[!S{{D!9rlEgX8}`}$#N]HD:09PwjZQn@BCr.n6I?UHu!g|');
define('LOGGED_IN_KEY',    'oC@.JMxM7lFZjBmSu8kv>mPczy%gKjxP*-m&LQob#gy,>nqhojU?Yc>);htH,N:%');
define('NONCE_KEY',        'T@u`)M?/Y)E@kip/&4sw|8J8ayGj)iafl(`/Yz,K]0eU%+YhK{Ay;uTIi@NYM]Vs');
define('AUTH_SALT',        'Ij35X!R:&E_ntHzil:hfsgx7PK<NEiZc_Mg5v`)zyo6{0xuj.Nn]92[.+mczhb[c');
define('SECURE_AUTH_SALT', 'anY^E|8Tb]9TkB (g8 z-wy:=$veAM26e[aQ5{;D~xYC[2|M`X>!8Ic&1:?42,i|');
define('LOGGED_IN_SALT',   '0!R*]=m, .^E)$ABW5gEPbdWMM;TQ`bC *kI B8bQL}Kd-<[$Ezn8/z5U5YbTkPF');
define('NONCE_SALT',       'z@]Dy7t0[v+h_`QG,DFd0 y20S*_|v{+l~$WwZXF)<qlD!r)6D(>jV>asGz=CJEB');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
