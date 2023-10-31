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
define( 'DB_NAME', 'lorem_ipsum' );

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
define( 'AUTH_KEY',         '3W!;N@zlbIB]ns}ETQp8;X_%}>ML%Vs-&q:^/g5 !&#-{bVqX9Km8qL_<dxj=T6[' );
define( 'SECURE_AUTH_KEY',  '{2q+)[f<07(}za<`30,4{zZ)YRKO#EbN%@rbg8-]&;aO_be>oX,|o|/8C%S<8}iB' );
define( 'LOGGED_IN_KEY',    ']xibG]59su&z6-)We@8Y?<PuC&m6c+*{JjNeDu%b4+A9bV6vA]UkH=wXOcX[j6;3' );
define( 'NONCE_KEY',        'rR4SX;=<vLs*a*#(WjU`tqKL5,EYd*0kC-$e!q$Cu(V^(d8*B+sAJJ]h]:52|W6]' );
define( 'AUTH_SALT',        ',AyLz/J&5DTi4]v|O%g},7/9Zm6Md@EN@d~gxVwIsUKA#Q^$Z2U*[JBOSILi@jh.' );
define( 'SECURE_AUTH_SALT', ',z]PMEu29{=q%/6VvoR _?OS{O(,&;Wn:$LC45:`.O$GzePy9SkPhk8%?W~fmBdp' );
define( 'LOGGED_IN_SALT',   'UhV9ZB^M~<!c-{SXPS6q>W-M{IzQ)+K]P1*0]F>g$i7`eS;i;D3hE^pKWyNtIQKw' );
define( 'NONCE_SALT',       '#q-$9BSe|GFbBd)Bw02&t$IGnXK{#OshqvE{,I(1B{C$1(%~fPECF!1vg|f`8[1.' );

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
