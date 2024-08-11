<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MedicalWebsite' );

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
define( 'AUTH_KEY',         'GniDwK5V x21EkLKSk46Z]5Q&~qnVwY*J*ZPom ,>w{|6R=9KF]DS)QxyU`~4YH#' );
define( 'SECURE_AUTH_KEY',  'xnb{mIuj /r9f=)W:wg:20*J-m3)>0*JwyR{@W7306hpq!bcw#}6RrLW5?Sqmz#&' );
define( 'LOGGED_IN_KEY',    'a@[{5IvO|Mxn{|*V`X#:|uw)pMkU1>22C=u-+Xg0PPj$Z#o!y(ih*.Z-n]6=F){-' );
define( 'NONCE_KEY',        '%d|v@12,P^b.4|#P7o.ET+JE;{*Vaj)Hq=6kbLEU5w{}1/aaaU=o}L>^CHX=Vk];' );
define( 'AUTH_SALT',        '$Lq/MaFSkU~+3QEm[1<-H{%uyN%9{I98?XL [<`wVQg?)YzniwhT|htqC%wQ{ffj' );
define( 'SECURE_AUTH_SALT', '-mg+A3wN8TBRYr!%L<T_3/J?9Yxq 8Tau,HrO=DEST[dr;Z4.$SdGF1b@W7S^KBX' );
define( 'LOGGED_IN_SALT',   '@LCaj <i_*7&h:wLOeq-V1!%YufKf<(G<XVJp@PSZ%Z&z?K`/HXKr.?Y0cNuH^?X' );
define( 'NONCE_SALT',       'M50L#X,cmI2fX-v;;ALZIW5C!#).$^tt^=IV`DuC:I2pP7}:B /A3LR@21/Do$1Y' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
