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
define('DB_NAME', 'classybelleshop');

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
define('AUTH_KEY',         'X`B_[zt*lr6A <}z3=@/4;D[? w2+ZJc=|tL,qS{6MlPcG,WA[cqsHS9z21]{g(b');
define('SECURE_AUTH_KEY',  'MLQ_sqa]I^X^;/#koqc(cOJ3C%REd_UTEOu,?0UAde*1vR(m _e``(3GQ30>|hpC');
define('LOGGED_IN_KEY',    '=y[JqUB;8j(@k&+g1PqUD&,c$M|%~d6j|G(E2,UWeG0Tl]W!OHvh/suu`4:gIT@p');
define('NONCE_KEY',        'eY{0!Ylw&rg:mes|_6Ni}-P}o|ho`a{p#:.M;a0H ]pI:130RM^@IE0rJNUDA0s+');
define('AUTH_SALT',        '2zST*&7IZpn_E?- xg7b@n_z5T.YpI[es/5d?:M@3W#X*G!fR}Gi}{G*uTdT7LKr');
define('SECURE_AUTH_SALT', 'lUFD=YHeRQq;d+P[:<k6sJGv^G-pv#+mpZ:cEDp5MhSx<LJnElT[C<d*oD+%*rZR');
define('LOGGED_IN_SALT',   'q=KstL0Y`OX6=b[mK&4Rrj;BjrNuxvSw)>Gi<!._A~rk,6]U/(-r1{dyH&sFe^?`');
define('NONCE_SALT',       'm7vVk}U]T6a[tul^~w-5Gho/ { KYxXx~WRa!_%7A>J_W~)F-#] WuJcaLmDoL+u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cb_';

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
