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
define( 'DB_NAME', 'wordpress-my-tema' );

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
define( 'AUTH_KEY',         'm[?,uwlF^JNMANuSM-ZX-2HKXtF?07|kEi6.Uvlb}nqe ?,>]9XHw}FMC#N&+Mia' );
define( 'SECURE_AUTH_KEY',  '@q=9[.hK0NB!1?`*iO?ZOo=TW5 Vx+Z<TTo0.0On*>+Caxe_zECN={gfV!M.6Pw_' );
define( 'LOGGED_IN_KEY',    'LIjp7t3qN>RO@B>rqJJvz*mQYhfNbwZmaN/eD},6lhb;W[8tY8`MPiPB~?:vWeg+' );
define( 'NONCE_KEY',        'Whj:U/j~wvFVo`&A`?1r}p^xjN@(h@qGfO<&vy|vOE_N3FC/HeO9zlh@8C^wBVK:' );
define( 'AUTH_SALT',        '.C:m2h)bchuD-gxg=l`~i}%c(h&M5~xo7hlR5HvWW K~Y:Y7Nt[gxgOQ2T3ncJ<g' );
define( 'SECURE_AUTH_SALT', ';C[-Px0T*cr_lRZ>I~(CNX&eDr].O4&uw~GaNp{ |3;q[Gv.|+%i:fL3UG89!p|W' );
define( 'LOGGED_IN_SALT',   'y?P^hECT.GnaHaK(T`5clr9G|AoX[sn;{g|i3*j:&qC/Zj?B-2P|TgnvVp{4im2t' );
define( 'NONCE_SALT',       '}$E%n:[0IvRO&JIn:E.16s2I.;^ys[{Dz=O*4Tc:~Mq)Iey3>*Q`;P[yU vs/pn#' );

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
