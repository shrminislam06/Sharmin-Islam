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
define( 'DB_NAME', 'sharmin' );

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
define( 'AUTH_KEY',         'e4js;t[Tlp]jo}[0odW5_LiyZ WIGGsAeeoOt}Gs+VF|yN>T[K Wbvc>am>siHo?' );
define( 'SECURE_AUTH_KEY',  '13QGD4g~Y|=elt~|7vD7YZ>}`b+mU{pEx~A)7RGI$0,b_)X%s3o-`bX+:*)<r$o(' );
define( 'LOGGED_IN_KEY',    'PpczYws(y%AJDp3e+h?=EyWF4+XOeN,eOxJHPAVuf5-;o/}3yizR9}V0-$:G$ud;' );
define( 'NONCE_KEY',        '4e.R/B*[4!s}RW[Z6fT O[xiJ8#ukZZIV1j+/INF#1GYj3#q17-6y7g =JlIX5%Q' );
define( 'AUTH_SALT',        'VtXWy;OOh@Nxy)d|&Tr0)wiX$0W4&S6BG>N&Vmn#3l3.;m-TIx=Dt~(hvec,D(bi' );
define( 'SECURE_AUTH_SALT', '%IN6R3,xA|n8gY2ov*5;LVNuh*C1pIw=CJP4XQ6/d._zJc@dZ(L-cHXkY;b+W9wu' );
define( 'LOGGED_IN_SALT',   ')gX1_uZyTs vdN5PO`2=7eU~0I:iEh3})6&lxq7u.y//HXS6UdpQg,Tu[.^S*v#^' );
define( 'NONCE_SALT',       'vrl0.RV%k9w8xwT2%dLHk3r9e;~SSvhNNY*H[ozISN*w)f+?;}i!Ua(3[5@PH%Gi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6_';

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
