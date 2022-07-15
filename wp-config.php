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
define( 'DB_NAME', 'ilyaveregi' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'ilyaveregi' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Root_root2' );

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
define( 'AUTH_KEY',         '0D{i9V:?={`^02?LgX= )@RVCXc^M#^mud)TvSBF8fUl,EC=,:mTaMS}Dh(irBd<' );
define( 'SECURE_AUTH_KEY',  '=36u}I()vSf@!aK{9Hsi@MESfCh0YKF Np6#Eb>mg1znS[40,Rta0NK+#V:i?J4h' );
define( 'LOGGED_IN_KEY',    'KGr(OS,kn;ZLVSLx]kDzY.C29{[yrFc*&&Yf.y[9x.+;d3xG?kV9Jq~<y%tSR-$S' );
define( 'NONCE_KEY',        ';0}/8D=%IW?>x~kss;hqWTYqKX9RXy6=9>,bjja 3O/DmxQySq=}o<Mfu6n##BYu' );
define( 'AUTH_SALT',        '1BTLbY}xS!k! (i)LtOP]]`,2}6|CtZ*Bd=Ov#2D>OflLs_ZN}cFC{6k?LZ[Xw@b' );
define( 'SECURE_AUTH_SALT', 'o1!G !D&+Np;?rwBL04|A GZDVBucAK1jwNw][!zl$ISZ4<u-,FenNKq>T(7phEa' );
define( 'LOGGED_IN_SALT',   'cHO^pEjye^B)7/lJ7<?oSW|/R3dVO)20z/s,-6%&~_O(<LVh`Be}[-[TTBFO:2-c' );
define( 'NONCE_SALT',       'h<C][8WA=SIQ> 2Zy$Sh9H()-G6i834VRl;;lE*BCPPV:i#!W82W&F*|q_)>70e)' );

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