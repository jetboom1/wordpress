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
define( 'DB_NAME', 'my_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'bSBn%faTo{|nt,}whzj>_8`OFGHbRjjnXvw?c6:SN_/N)VkZHZ2Dpm^7LnXLS-u(' );
define( 'SECURE_AUTH_KEY',  'f L3E3v ]d4e=GdN~lco23n`/ }F<ttvtR]8*J:+PQ0:o?@n4!NGta5b-7Jmc!9D' );
define( 'LOGGED_IN_KEY',    'cwJtEkP0:wTj>EB_KLsPl CU:5vw0a1# w^A2uv9RW#_w~.POAUBU,p3XHsvS1Y`' );
define( 'NONCE_KEY',        '~6#Hp:iza8<!tQ}koBR::J|{O427B(j{tZ6lA9:s9, <x9.t F1>0C6JsJlGIyb!' );
define( 'AUTH_SALT',        '@Az`Hk,+J5p_#&Bm.)8{qG-SA}/5H:Q_.sG)|@`8jDO G*}*Be[^Ih6;C3ta%cZt' );
define( 'SECURE_AUTH_SALT', '$8l}^jimk*mW?Xms3{*b21yNB*^lowSyLBL8FA.T]v~Vf>EgO+XneBx9qX8<CaT2' );
define( 'LOGGED_IN_SALT',   'h=p8~R:F!|?#nb:cp[fg~=3y5QWH:.SJ~TMHzzHHOJe$8Pd?0h&2T.#t2(dT ?Nf' );
define( 'NONCE_SALT',       'VA>TdftQnJH9]fQQ?CNb:, Yg~aRV?MU$~I1(~O;nwpo%;ji;J:X7zq1lFE(Ot{R' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
