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
define( 'DB_NAME', 'luvtee' );

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
define( 'AUTH_KEY',         'm`[J+TqdwX^JD?Z *^ZlH/]$%L*9x%(xp|^bX1RIdUrpM5PV5m(2B2SOkZLk%:ph' );
define( 'SECURE_AUTH_KEY',  'bu9VDPqabAj.$8%msG-4?/[`vRa1eUS65V_y[AAqi .4+JlR0Gd]Mta-!@T.zL6R' );
define( 'LOGGED_IN_KEY',    ';d3!{PRlKBb<o W39%W2VR=1AP.$,?#R>=1o%hn)haRG)=#H4*$mEmkNyKJ>&YW;' );
define( 'NONCE_KEY',        '}a5=/QC[in&s.oF&IB(^wc[73|^F<l<>5wLZ4tJmA^yB!4m@Nx,,F6yI[75P2=g*' );
define( 'AUTH_SALT',        'T/kXO?WVz&b<&K:+pQMeG)i3o5;k:rPnI.B7ja@QN,C |V;J(jzE*mA< (:?hvyH' );
define( 'SECURE_AUTH_SALT', 'Ood0IZlJC2>R?IwGr `|21,k |3[2|xk02;b}HafRP0sQie!6^gi.4LZI0Sk=VNs' );
define( 'LOGGED_IN_SALT',   'z@CJp=G/VXO+,zGwzjviOO<nYaV~B,7gD2nv[O_G[)&mc<}E55MWZHQ)GyvKCvew' );
define( 'NONCE_SALT',       'X7!d=9+Blk+^<>L<XBC.P#9S]vmIvOjU ?4IDsa#A@l!Q-%G{d]9xW3+-Sg,pP2L' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true);
define( 'WP_DEBUG_LOG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
