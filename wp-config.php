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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sat' );

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
define( 'AUTH_KEY',         'nE4-bCe3Z>y7yc~U|w] j~89HZ]X^*;ZT;|TCUfNJ8SV5li5omXrI_x1]x:<*1V}' );
define( 'SECURE_AUTH_KEY',  '(1rmfID,m6/:IVKg6uORMdFxOG$(~`p7XQ)}ZU|~`#SCAI;A4<sTrY5+ovN6HG,q' );
define( 'LOGGED_IN_KEY',    'QG<B:_YQd-pETc/xRqs: L,6qVY%pw(h}P!#@Ww&*gebVDx)g!DU{]sfQMd,3>4F' );
define( 'NONCE_KEY',        '4QZ=OaNgb2}%1n3N3}D(U#A]iWk;Jlvw7^]gizdeC6)JO~;z(>8rbJe [S*x,, :' );
define( 'AUTH_SALT',        'ryy#G7Tepx>3K ,}: 6i}l]9GEMMr&X#1d,iX`=79|l>;xg^cg<J`hImX0I9zN_@' );
define( 'SECURE_AUTH_SALT', 'R+5A>;s[sVl6T|x;XspfSSUHIaJ`>D?WzB`-0>5u}JDbxaNZTg|z=i0+xGH_m2oj' );
define( 'LOGGED_IN_SALT',   'yZmadCA{Y%[sqD*C>G7P:>qtFQuA.s],:MWnca!e6f9!S5z[*t(! q$NiV.Paa^Y' );
define( 'NONCE_SALT',       'x|y||>9Nunx09ho-WP!My:G?Y$j{oXh|Q*?%SIOH7X]Z=<of5{7C6Y%lX0&oOoj+' );

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
