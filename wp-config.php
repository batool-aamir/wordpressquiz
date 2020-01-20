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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressquiz' );

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
define( 'AUTH_KEY',         '~/joHUStFGpw5$Hw!<DL2eKXrg(4vNkrkYd*`2s,[C<DT4q:YBi[%@Y>rDiu/<Qk' );
define( 'SECURE_AUTH_KEY',  'jU|(K~5y7Z;[IGDaFvh*KTJ:nha7nNJjq1l,FAJ!A> g-lyfFQWMn0ou;P!}Q1qW' );
define( 'LOGGED_IN_KEY',    '{*mT4xUMvn?musv/H0nCaG ;Jx6bisZ-eB|QQ!L4 hq2p3|BUVbt7LWTz|$wF5C&' );
define( 'NONCE_KEY',        'P/XFw,i(.AILz !cX#Hm$(l]#0FJ(cK]dJhO%WZ/t-fu(r;j>c1>p2xUk.S>C_#q' );
define( 'AUTH_SALT',        '9!ftuUtaw8z@#fWrRupHgFL$H5p8?oxTyirsFN6d;oxP4lh,[qlaC4b@Ka5eMAw+' );
define( 'SECURE_AUTH_SALT', '%$X}1Rm8C9&#QAPshY$^)5>+P:^]!Ol_QMJ;aTg:+bH!z)&-s)cd$8X7+WM}2esr' );
define( 'LOGGED_IN_SALT',   'u#(hp0r^oEn/hQl8-E};iH7;KKh/`>V-qV-Y4i<rC?2B (GpWqbM3;g fN$]j^|6' );
define( 'NONCE_SALT',       '|?IpQ>-2[*_faBA}Juw7JkvIQ#xm#JW?kE+_K$0d^zc[!cL;wON(H-L(C,|5!Jjd' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
