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
define( 'AUTH_KEY',         'W@{Fm;Rb:p4>f`>Z59OgLG-m>Jm)}<E8RfnNf-[;*itH-W-$&cEHvFGh^!C_:~D=' );
define( 'SECURE_AUTH_KEY',  'e(:|-w/4 %&%h<4T OvR]|5-xMWEES3=&x*FCGeV3|c(hyM7!d}tmP!ZSVYcZDs=' );
define( 'LOGGED_IN_KEY',    'tBa.;5|q$PcBkJ 4 R84v*ZVefvW4h,uuMzhVsHX qYW?ba%c?t;DrP#H=0.WC?@' );
define( 'NONCE_KEY',        '+~`KJ,+oc9<QxzRGvQ91}GI;)CrQ8_=O3p?1PJlGEa{cG$kH<Q^NFq<4*jE&u4<T' );
define( 'AUTH_SALT',        '6S>[4_2]=uxa,[%2>==#UH}UjN&gQ{Gdp7Qb321STy%D2]$sjxm0d6Jgjr)MovD$' );
define( 'SECURE_AUTH_SALT', 'Ks~itwt7n0Y:`eVvJ3kAa|gs30FDeiO}]5EiE-37o?aAy07GER5eU+EaC<L{UUy.' );
define( 'LOGGED_IN_SALT',   '=l$|z4!/kfO]UYeR~ro{VlcVP<3jLU^M8hk%ac;3qoxwkNcY1I-v;{,~{Pe[Ms79' );
define( 'NONCE_SALT',       '3V{~B6/qBr<NSm:Dvh91-fHZYWQ9mef<C0:f5^O`NM%H$_}_l99zEtwqoF*vg+Zv' );

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
