<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ally');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'aDL9@pdk|cgHMgJ1={v,uLQ;ciCJB!+!P!@Q cRW0VB9L4G[k?O6 :yjSQj2aJD=');
define('SECURE_AUTH_KEY',  '8cuR|C#C++w8EE5s%=dexMHSWI;Sd49qnF%:?aF|_bEy3x.8{fLs,z-+E8z-|SxU');
define('LOGGED_IN_KEY',    'n  c{HFG(FRro&}5OA~&MCkoy=&SP>Yly4P` $l]O5n1TDL,u:|Kkcs[A);U@|0U');
define('NONCE_KEY',        'loYp[g?EGP@[aPz$@j.aE!:2]Ir_%b|(YiNB!|1.<Vv*%K]{p%Z+ebcEdUkQ]]D{');
define('AUTH_SALT',        '@JX=796Tt&x$&8KZxWgQxyfFu@7nlA14WYb@@1qD?gOn%He]a9z*f.+y-*X*trDk');
define('SECURE_AUTH_SALT', '~Yy)zU9}ihT7_kdZB&5UvNE[$QQd=2V)EZ7=As=[Uz@]P^mNDl`3I.NJe(/H@E!}');
define('LOGGED_IN_SALT',   'i.2e,cXukr>s#Q~j?Zc3h{>pP^T<ii@&Du38Tf;q96ar*jF#_^lt5}S1P,a9EYj`');
define('NONCE_SALT',       '{,Fb:Db:G.4@7REB}o+?qhk9^V 8*#aX(H|p5`wg,A^&7b*@nOBb*AV4gfJi)b+;');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');

