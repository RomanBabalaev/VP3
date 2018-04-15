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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '9#k0.*7,tJ)_GlQpuD,CJ2w9?,Y/LzJ_&OOrbiR9~ZS=igFrxQuP]kCzDP;8T<ux');
define('SECURE_AUTH_KEY',  'TMNy_6ZT+z^ab~+f >[vlJ~hFsypc4uWm>#</OFIA(cW /n4_80[)j@98:|mJu3;');
define('LOGGED_IN_KEY',    '_LI<b@:]/6d=s7jC9_9=W58v?/cmXks!*&b7Xa/<O3k_7P/lB`3D@TCkDE]Id&=u');
define('NONCE_KEY',        'iL-%CH}&yu6P`(r(u4`!Hu,[&:k}Vc}<$Pjo|$t*36iab_UW.6j&W%6LbOR{~,{P');
define('AUTH_SALT',        'mE7<~C^IY_#B{wBReQGxQ>-4_PW.5sQFYn_1-b*RFk.pMA9K)>~(Jh/ygJX&,?&2');
define('SECURE_AUTH_SALT', '+6OX6l//w8S`(XVx4] bEs99?mEQ$p6a?c_UW4e&Qqs}.;2QgL~NmN$gzfDo/Rgp');
define('LOGGED_IN_SALT',   'b[z5{Boz~jAvA8c~z ^gerr8p|MZU$h4&p,x~%id8*YOy2_RDWrkII ;9#ky,F*{');
define('NONCE_SALT',       '%9Ze``lscnw[82R3+trgDST(*+bVxYWp?ML@!$4d8wmBaRJ8>Fq~6DL{}:6RD4hZ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp1';

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
