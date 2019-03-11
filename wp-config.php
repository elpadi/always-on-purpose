<?php
define('WP_CONTENT_DIR', __DIR__.'/wp-content');
if (isset($_SERVER['HTTP_HOST']))
	define('WP_CONTENT_URL', 'http://'.$_SERVER['HTTP_HOST'].'/wp-content/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aop');

/** MySQL database username */
define('DB_USER', 'aop');

/** MySQL database password */
define('DB_PASSWORD', 'aop');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X:8ke@20dM|iZ%&prO OC-/I,1%c8PvQC*<Y#MJBTyy0l.B!OgL;<x,-48leYn-=');
define('SECURE_AUTH_KEY',  'JAj`s.]1E^;</4cRM4iDx-gJZ:V^D=}(.G~`K@PUuOn%+Vf|8&;Ul[aI@:>n5te:');
define('LOGGED_IN_KEY',    's}HmRQs#:PohP)d3YSZReiem;vjxb;+|:p39qf8+f>~l;HTwkV48n>S3B,e~#h=m');
define('NONCE_KEY',        'SMWafK%?fGEdSKpNpPLlBG>faUxLEa+!Pc&}9<< <w?O1  4VK:k>E)vjZI/Tf-W');
define('AUTH_SALT',        ')>2|&,KC:Q|Kx;z*/Dz Az`]R#pLu&/Up$y5f ;T;-@|34.u}xMs=/mV=1+;|[]*');
define('SECURE_AUTH_SALT', '%D&#+#{W)rbd3+:`nSJ/r_!c%WXA+YX#wsL@O;%ND:7z|q6_/XQQ$.$8np%d$v;a');
define('LOGGED_IN_SALT',   'VSnI>|EBpIoh@8[fu@kgC>P%V.6+)30+H4+}ST9T3MqL1g)>TCt=%3jQ_bOduieT');
define('NONCE_SALT',       'RJ19PSp4,Fi:PBJ0rU^A:2-DEPz/x||bqNepe;nm!Mh1Iy_o&,r-=v3{n~x6,B$m');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
if (is_file(__DIR__.'/vendor/autoload.php')) include(__DIR__.'/vendor/autoload.php');
define('IS_LOCAL', isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'localhost') !== FALSE);

if (IS_LOCAL) define('WP_DEBUG', true);
else call_user_func(function() {
	define('PRINT_ERROR_TRACE', FALSE);
	$DEBUG_VAL = 'wp_debug_cookie_value';
	$DEBUG_KEY = 'wp_debug_cookie_key';
	if (isset($_COOKIE[$DEBUG_KEY]) && $_COOKIE[$DEBUG_KEY] == $DEBUG_VAL) {
		ini_set('error_log', __DIR__.'/errors.log');
		set_error_handler(function($errno, $errstr, $errfile, $errline) {
			if (IS_LOCAL && strpos($errfile, 'update.php') !== FALSE) return;
			if (function_exists('dump')) dump(func_get_args(), PRINT_ERROR_TRACE ? debug_backtrace() : NULL);
			else var_dump(func_get_args(), PRINT_ERROR_TRACE ? debug_backtrace() : NULL);
			error_log("$errfile:$errline (Error $errno) $errstr");
		});
		ini_set('display_startup_errors','1');
		ini_set('display_errors','1');
		error_reporting(-1);
		clearstatcache();
		define('WP_DEBUG', true);
	}
	else define('WP_DEBUG', false);
});

if (IS_LOCAL) {
	define('AUTOMATIC_UPDATER_DISABLED', TRUE);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wordpress');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
