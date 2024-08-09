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
define( 'DB_NAME', 'pulse_tester' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '.m!VhX:p^mp7Js&k1JK4wVl$@=*|f@2!JU?k)w fNcs<!Li7m?sSEX*cT?+@2`(%');
define('SECURE_AUTH_KEY',  'xGV(9qd}a+-o6k}A|O.eex&Q*4k$r+M4{fd([<Do{  Z< VlD6iX.km~1I-]p~o.');
define('LOGGED_IN_KEY',    'vwCFcCU]Wv]>4F6PsZ$x-eG:78;-9N%6v]O.f=ou D^-p^|r`&-Lrt?~ztG(dY9W');
define('NONCE_KEY',        'dtvX-Djuk_}Q+acS Ip$BFNULX5tTL|-d66Fo`2p#QOoOCm/0 n=2F)rk|zSnwCL');
define('AUTH_SALT',        ',6sxFgk|z$z$2CT+P|hT#noKdAgo*[)*0hcG3^(92]=$4LO V/h|y:G8Y9<Q!,?)');
define('SECURE_AUTH_SALT', 'Wj6>.JWIXqM9sJ>P4$CdB#|Z,|x;<-L&hhNc>qPF$ev?&yT68eX}39$ObjYN|kCn');
define('LOGGED_IN_SALT',   '-;>aX/GY<sCl7)?<cy<x|):z8}{y.7;KC&WH)/^ivOBM-v<B]K A|{k2!a`>4Vhf');
define('NONCE_SALT',       'uMf0#j[w-vFrI>Nc9+U`gf4*a>>FjY9H?V2w9RCUn:ff4ic-3/7Nd3#^0WAFgT[n');

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
