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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'aihiaobg00');

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
define('AUTH_KEY',         '^oe].;fu,w9tDo;dKO%@s_@qn7oOIh%s N+ii7^.5}I<r!41$DrwuD-oT-uq+YZm');
define('SECURE_AUTH_KEY',  'mv+q:`&|I1Il-xP`czdP[E1mUG{|;O3?+G{*>^fZ-/9AA^=!FfpR5qK[tbr^k3e4');
define('LOGGED_IN_KEY',    'kB^L1YiBg_+pmn*pG>.1`+QMWay)xT{&AXF[I1yJ-xi{nVt`8|2sy!VBbII?eOJ-');
define('NONCE_KEY',        '&rMH){<_h_UJB:W%V)kpjk(f^KDM3MV,c7IM2!>Cc3E;Ii]A.I|e=&NAGbqz6D@n');
define('AUTH_SALT',        'TuU@aW+{q[0&O_&-0AKw|R@Qhv!cDua[~O^ixS|6Gd<zNxR|wb2@&fa*eJjsE0mP');
define('SECURE_AUTH_SALT', ':-P;1v<#}G+dRT`e*lnpi#u@7x+P8f-=2P[Y3o7O3vKcUihuZ@sO#K%|[kYl1:4k');
define('LOGGED_IN_SALT',   'RJq|4!C$-&$!?/?gE.hjz!:f#hzS{w<GR(y$TDqWm0lk-#C@Gh401H-7SNma8c<6');
define('NONCE_SALT',       '.YV{hd&1^Por:znoYZDUe+SYv48^$JhlP|(Ve!yDZa|-1/D$0rPw|+Thol+_VMj@');

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
