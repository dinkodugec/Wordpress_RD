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
define( 'DB_NAME', 'bazawp29' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7zR P,VZ&Acf]PhwD4pwo|HZG+].hL6:DeX }5xZr/`i@mR@uiiC>6EQ y>eSc*s' );
define( 'SECURE_AUTH_KEY',  '/R:;ns7b -H;sY[:I<(&yb-B931CsXT/x6ec8K)dAW(?jw$L6R;[9OhCVyxlT$(1' );
define( 'LOGGED_IN_KEY',    '&pcSD>yL*rgGK}vWooyk6HZM9!zicf|.#nQrd%L34xn{D{aC[A`f5=TwA?t#3/PH' );
define( 'NONCE_KEY',        '<8Fj-6]2&@n=jFtxcLd8-+F/*n6RE}Ocfe*`O+%|h7U=);R<HUlCPt%]o:TKW,*-' );
define( 'AUTH_SALT',        '5W3[AxhC&pE1U8MjIW7FYIWh2B8+ fNGk!uZ_;gr{yNNe+i%49lX/Lo(CC@cAXgH' );
define( 'SECURE_AUTH_SALT', 'BSh/K]!&M)TGk/xPcgMmnv;1LRG7ip~6-@5*1dt[wGCpAbx5X^N8g;@fiSRNP)nm' );
define( 'LOGGED_IN_SALT',   'ZNf8V;%VrN1OeBv&R5m6Bh:KZyQ]5Ld`@j#SF3ey(x)qTP/GoRE9h5L4.h|N%,-a' );
define( 'NONCE_SALT',       ')iL)w0pgN~FF8>r9Ae~1U=z2zRh,5f!-cI||^I7J&]^RNf@r9YmNYVW+<#&AT*BG' );

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
