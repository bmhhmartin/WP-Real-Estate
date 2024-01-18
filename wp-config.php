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
define( 'DB_NAME', 'wp_realstate' );

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
define( 'AUTH_KEY',         'N-*p3X=NBXv~Gf:M,g6Y2VSJM?4i#I+3Q]FrP~=Q#0%dwl}sIF5HtUBvl=srbY^u' );
define( 'SECURE_AUTH_KEY',  'ZcNp e++K<-Ep$e:niLjo?$.!UvMoj.I.%&D4fKn_aC#>J5&fJ8u_{ 1WonqBmRc' );
define( 'LOGGED_IN_KEY',    ' PC-T4Nd(U+dO:U5DqjR-dG,U9t|]SU(?5~}Ll7DNB]QqJgTmv0<0<uDH9?[=;UQ' );
define( 'NONCE_KEY',        'g>}$8;u,7S B~7,2Q)p*4db)mzTl)&eM.V>2xWnSmnr1%Utn%}APrZavyDLD,t-/' );
define( 'AUTH_SALT',        '>{s4B?bEB)1ez0t((aiJ`Kyk:`H>faLW;#K;:!,Tu%:pL#IQn!rUq~EeQkcZv_8!' );
define( 'SECURE_AUTH_SALT', 'HnZc~QKZ,a+v%:+%du)N:P=kynZR!&{Wd_^42hz8L^nT;V!sdl/*!U>Xa)&yMhG+' );
define( 'LOGGED_IN_SALT',   'Ef7v(%__[_{J7Pm=~a?n%o,m1zMLo(Bi|=#6KsWPY3&e:T;MJ1#SL*Cd]0|9H6.6' );
define( 'NONCE_SALT',       '2^*O*6uhJq]?+ESKfEQ78u~zW[`Sxw:Pm++f9h&rW/n/qZJg{/t,uQ^T^|GeeXNU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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
