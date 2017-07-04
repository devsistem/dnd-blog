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
define('DB_NAME', 'dnd_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dnd2017linkear1722');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '!G6K/IzX#X^#nac,czwW|WJbQcGSe/K-Frp0oaxc.HwIOq;+#Caxy2C]|[s=j=(K');
define('SECURE_AUTH_KEY',  'G 1Iz$e@>kVY3q!Th]F>f1F:h,Imi_Rg`m6V/z=TkCX5ZKxJXx[|7zByIYody:eu');
define('LOGGED_IN_KEY',    'U|ci+PN]fA/o4oJ<6+i4vk}p+S 5D$`0br},5b[R#pv^)6.(Q=e;~teRnHM4KFoo');
define('NONCE_KEY',        ',x4OGX &ob&l|fyJb.YYH~sVt=<@eOD,`~u%g5W;DW6QNrS,F*kpQq:.gKSbQtg}');
define('AUTH_SALT',        'i|s~a 9;}]RQ4_dxlOpNFy{ Ftpi%f&?aH>|1q+gXDE=hDE&47FF_C7`rY#7.p,h');
define('SECURE_AUTH_SALT', 'Ym3y}:B^.IRQuYDi7)raxX8o(+fxyVK^luIBjU]Of9R_1XT1H$T.;}eRdUsy_82c');
define('LOGGED_IN_SALT',   'bB!;1mQc2si)sGV|j/U/pE-_H6=t|g}%ga$<*BlQ< D9fP>kiFCLM[?2fds7[7[v');
define('NONCE_SALT',       '?gvFZPn}NQP6EAvt?g8H(Xc*-X*N,UZ1lv{8TX|Le8jw0[{%)8f2h|pFY;-y?8O]');

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
