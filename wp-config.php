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
define('DB_NAME', 'axisbusiness');

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
define('AUTH_KEY',         ']Kp5c**+GOs!kB:@|^B.p8M60+?-D?P?Nte3$A}X5=UdH3x=!%d7$d0oihg([~(U');
define('SECURE_AUTH_KEY',  's;Fk?Jh3i^/UAtKP?J^eyJ!?6kS j#e:t~tAS@uwm^gE_u0S439vl.lz>S]U5wmw');
define('LOGGED_IN_KEY',    '<Tw}-.u+wwbQerp+uf/6 9/1=l^Xr{>qZyBM]7]PfmS!B*q~kY-J.<1X .]rGWKX');
define('NONCE_KEY',        'do&N&DJv$xXTB{W#r.mNz+>n>H>XVDQu<0H@8#<HM6GBtI:z2khExOSLAec;W[De');
define('AUTH_SALT',        '&lM+aX1$E1`:pQbqBc_4XElN8326p#W0E!231!4 ?T 3Y|p |r<vbDKe}[kYS|[4');
define('SECURE_AUTH_SALT', 'Xh 7C~K~;5YED=XE+4)Z_6_Wuux4In=vN$cP5|RVc]_9P8f%bc(h9PRZ4lN%cn)Z');
define('LOGGED_IN_SALT',   'Isee[v?>v;2Imh/STUA.Xp/e4GVV22(jz-qgYaSM$X>z;q:zq}$T}na2C<zbF`.K');
define('NONCE_SALT',       'Tu :U%O>-a<ftsn4|{9-9)7p1t4OUrL9:||#a<#2H_*mG]2N,-Pe_I%!%|C?{.F!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ab_';

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
