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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bootstrap5' );

/** MySQL database username */
define( 'DB_USER', 'locspoc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'saturn' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '@qU&I=1n{c_CwM-O dydw!*4ft*&!]`V)m]G-x!~.P,pRs!^|YF:>4qU^U,WX.Mb' );
define( 'SECURE_AUTH_KEY',  'U1uR.AeY@Qni>LpU%H66BeE%ubIU{gwXV2/g}0dYMslmllUj`pRF|?(qqZI!)%`S' );
define( 'LOGGED_IN_KEY',    '&_IS28Ihm=V9]LU3iJ|Kp4x0*q5 .ON<Ys)6<Udu1w_I}#D0o<G69Yx$OsPn6)h;' );
define( 'NONCE_KEY',        'jqXNzWk(xM4,ia%lwtf2p9e &f-/S$c~O=o?]y3hrsAp*vW`}oD%^)!(eS)ov#KF' );
define( 'AUTH_SALT',        'OSG8VD,[e[ K{:BVbppYJU&lv{?5Qe0=ca_s6<U$_~jYyfO7!=0om.iD-X=V>$_*' );
define( 'SECURE_AUTH_SALT', ';]?mo*J}(:;:3D~HxW:)y-sb%^}|r-5zLBL7%GBjHasCJw!:`R)kb#~e`t%o#|%I' );
define( 'LOGGED_IN_SALT',   'A~7`FLCJ2;bu8W/4J[m}U~0G(ER/~087F>Y|7nE.-vr}p>.&OhbFS,Fos~o:8|/&' );
define( 'NONCE_SALT',       'PvyY ={6ucv|Fjyz,_~hIT2ATQaD=4A>.[kRIw%my)i#ROuJ|G3OHI%*}sHN~K v' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
