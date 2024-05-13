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
define( 'DB_NAME', 'universcity' );

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
define( 'AUTH_KEY',         '6<T>A}th#pkv](OvdK@atV2[@GV^qT;+|yQy]|SvEN /UO%<UlW.8wTn`lF0(Gy*' );
define( 'SECURE_AUTH_KEY',  '&MIns9uit)HdxJojhCk;ZXmS6Hs43MiF 0LR2y?jp48T2doMa7;9E9eJlOW+i)wV' );
define( 'LOGGED_IN_KEY',    '/n2Xk2_AfKD|=7N]P8secM`Zju(H4F/!%YBetuv_#][rEI-Wg#$ll7aT7rpLZ~=u' );
define( 'NONCE_KEY',        '{uK!W!bV]~- /C@i5Z.bFkxq)v7A:naKtnno}.#^-(7!h(G)I)P}[aej^0#R4>(:' );
define( 'AUTH_SALT',        '}6`LwA.lmJ+To2T%E^tF7zU@{*YLuWvlY~#Iixy8K~e@pYD!V6h$Z&/QjLyt(~q{' );
define( 'SECURE_AUTH_SALT', ' #)G5tO>Dad`,&UTaR5X/;?It5EtxjL1q8wp,7)z+<hgqSEO3gl!:c2V(Upr&w~n' );
define( 'LOGGED_IN_SALT',   '|[3i?=|56O?BskHlOv}X$.,KvcOY~}^Rt4{j6$d$/3mz(kD1(7wqufJ_PgFbu&43' );
define( 'NONCE_SALT',       '2;H&b_3;AAaO]Y[9/naQoHw~>mmA9R/r JVbcNLNW;f|nxk2kVoBUcIl?,4 tDZD' );

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
