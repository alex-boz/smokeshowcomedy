<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_smokeshow' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a()8s[yTtJ_l-PJt.ox }Snf[%ZUg?k|!1i]{I19z,@GF[g9/<0p|>/PnaM*k>U,' );
define( 'SECURE_AUTH_KEY',  '14dsOyBIcOSP.&<A!Uqb]Mo7-6T.)-hbH`4yJO;$_$KjcWeJHdr2kOrYPAT4|N54' );
define( 'LOGGED_IN_KEY',    'fvyqV3t2oG3Qcjp@`bjsrE/;zL(i/fss$E!-lo_ kya@hWG:I0@ -M,OU58n%W8`' );
define( 'NONCE_KEY',        'xXCI`oX(%oCo%:>&5/Z!uw|3{1c+xavC+vv>Su0<*Nd[^I~wFz}%`B_0OO^:tpVQ' );
define( 'AUTH_SALT',        ':UP5$[VC <>An#%n(,uI^H8[`P3McszB3if?I^EyQMUnzjd?A!7`HDoL5|9BO]sv' );
define( 'SECURE_AUTH_SALT', '%1ZJFZJ5Ex$X|.3sM7CX)%YxqI<KCb7&r;NQZCqLQ`Q}dKK=A2Dp=vmNqk^iV9$-' );
define( 'LOGGED_IN_SALT',   '#2<Cg-c]zUo[2)12Ryu53{!)}2n3xY}nq^O:Lc|nI`pCS=Y-<=R9 T&TL)X0rUJ/' );
define( 'NONCE_SALT',       'n-B#mslIfpi$34gq[+ms:=z;IgN7b K)<@,[pDR0aZsIFPiEPpd5-.CdKV0*#[cX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';