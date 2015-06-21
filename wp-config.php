<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wp-db');

/** MySQL database username */
define('DB_USER', 'wp-user');

/** MySQL database password */
define('DB_PASSWORD', '$1mDigdugdog');

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
define('AUTH_KEY',         '+$t0PU8|J`6-iWqvQZ87EXR9=k]h8gFoFN_)bLYl[M||YU(/v ?uI5ejZuzi}&SJ');
define('SECURE_AUTH_KEY',  'TO-2sD {,U= :,a;1KwR/`8)AUg7IMTa+JEei}j|W}o[6=zI(E><yTXNTJ+u+.49');
define('LOGGED_IN_KEY',    '&P >p,iuH1rvPo*sE;.Zs*,gvA<#/c$|R.l<Z+EA!#z.{|)yeV%<L~6 na?eT0U%');
define('NONCE_KEY',        '<:7M-~X|=P%qgkgL]MW#PrXgz@e_bEqX_4pT1#JY7{VD4;H-~[-fj3x^w3)$y,`!');
define('AUTH_SALT',        'U,]GX^0 7:lxES-``=bre66O`[UB^_8]4=~<aJK)0,4T/|_E![}QLuTfa}.B%=Rg');
define('SECURE_AUTH_SALT', ';_en0{A*9oz|ui&8@:{haCvH&hLe%qlNy-W-yvPTE# oq$4e,CM$x&;W/RX@qHe3');
define('LOGGED_IN_SALT',   '/+Xbvk|Se5kq |a#[dFu#<aSIZO9y6pyfb&l$%14@%+<6Y{LPERJw+xP<V9/}a>e');
define('NONCE_SALT',       '2SM4+YbSP>]X-Ac9`{)c7}D1._aU.LO5`Q,(fo0fYi;AxpD%F&7Bn>H^)Y/Aaxa.');


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
