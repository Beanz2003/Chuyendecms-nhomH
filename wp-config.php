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
define( 'DB_NAME', 'wordpress_v631' );

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
define( 'AUTH_KEY',         'KxU8W4?VHaDw.^l%cPZM`aw4kNxJMyT]xZRhP#Aznt?gH=cI){s4gN?sqE^sMwAU' );
define( 'SECURE_AUTH_KEY',  'GfJtDRe-N=on_O (<#q8GCSGMoL0!uR:WDlR}guRj;7^xb`)dM,m?R}bA*O5jLPL' );
define( 'LOGGED_IN_KEY',    'jOxg#1~jI,yc@9x89KPn$Y)}I||#f[vPCNLr>y>]I?J4EY;4z.kB,XG(wecaFiBY' );
define( 'NONCE_KEY',        'Mw?,C&?w1E%/<h]ITlyvYFhKab@&Z.:TK4#g)9K,JSy[^Zt6KZ$GN?af*)YqoZ6N' );
define( 'AUTH_SALT',        'b@`y7I$T.jX>u,jO9<,.0$_e.TI@VK-G$ >L}8vN2/me>pe,5rX&|,;s$8i[DR,?' );
define( 'SECURE_AUTH_SALT', 'q&R<3i#OzGk+8<U(,2F7;?QP=e>wOp_*|=w$XC4: RUf;eu|)(4QSv>LZr}d[uY#' );
define( 'LOGGED_IN_SALT',   '|ea7S/BM:jhhJ-`V&L^O/XNYedD8Szi<;27T1M:Q[H.mEuOsc5C#M.81)RUXb*rm' );
define( 'NONCE_SALT',       'Pe%eWpStpVU>}OY=?7%<1Km4i*X=Ehi),<KHK,)(:Jf=4)eZ%7L@J$#7|a7AwBd}' );

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
