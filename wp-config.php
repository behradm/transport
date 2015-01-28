<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'transport');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&qqqUAwB5JmL}SrV>[q#(F.ON&3/R-`NlKu!t30ZVx**xf}ltomo?nwg:vD3Tz,8');
define('SECURE_AUTH_KEY',  '|}|(paC>pw7oG*Fn-Fo44d.#^#)dx_k~f/@%JzB:v5$|yO~M0ZVo2kSrJ*jlmBP ');
define('LOGGED_IN_KEY',    'j+Wj]1hRy~GkBHK|AlOtelRO3mT|;v.#_[uU)>`4qNB:POM~2.P^5yHzA}}C^=?-');
define('NONCE_KEY',        'f9e~`foB$xC{Cki(gF=5V+?Pyk?o~}*,IOnc$lP>>T^%JdO3 +`yC|2!R]:BF|0z');
define('AUTH_SALT',        '[}^w>U.KT.|Xj?Z{GRuiAdp-:b8F,qXC+w[*{EUi(4W)u$d0Z(,WnapPl(V1^c2%');
define('SECURE_AUTH_SALT', '5_T:8Eul),vx 2<F=,hPD`Ru <eXFv=}JbJ!/=qXA|tIzUhps09]K+pvbP%/bP]x');
define('LOGGED_IN_SALT',   '`AN5|$/Svt5K;lU~4~]Vf2FGx,mlR$da<&1rw#LeKF6`3i|*wp 7{$T[OX.Epk,J');
define('NONCE_SALT',       'G;9u`e8BX<_mU&/sX0z)]0d<m0:zx3~&NM:qP|p_,y7GIpZJg4d8K]?oBn-JM>tY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
