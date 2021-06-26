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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hfO5SBd*rX>FKX]l/I{SV&a3=BmXiZ:l&+~zO`Mh=F(<e3/Z1215UTuBa*6sjf5y' );
define( 'SECURE_AUTH_KEY',  'ys$Iy6}/l,:c*xjTTH!Dw:Aui<`8!1K<j2U3I#N)nF|kCLb|AJKm:a {OHVwhuTh' );
define( 'LOGGED_IN_KEY',    'a6vS}Y6vU?Jfh;&5UP3N|`3A:<d8WzKON)o0srvbWXS67lc~20;(hrFWqKbHo;^r' );
define( 'NONCE_KEY',        'T#Bm5(#)s-c2)]A2+(!bjgZU.L(q$.^B6gNga.H*cMTw#kG& ^,%`B>]0C6LlEGI' );
define( 'AUTH_SALT',        ' U&ZyT[;k;DOexdn*Am%b9T.~cpZxoqiU_+<iID,|38N@pB% 5z]As^&8[V*zmX^' );
define( 'SECURE_AUTH_SALT', 'GOqm}QGL@rR^Q^KDR;:hh-JQ11`46Lt9m(q^EYGlF*&EyCVQ(x4D}<g$|lI8#S61' );
define( 'LOGGED_IN_SALT',   'fW$+BCNF>I2/@Ezh}N.7{bCA5#f}YaDjN>[zQlNfPoH9MQ.{#Fzn=Kx:d[~f={FC' );
define( 'NONCE_SALT',       'QI5{H|#R`@a_I#@8%zNwf7jTmoE93I@SRWis/=6%1)v*&kL|jB0:<gkXdRgzOR^9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
