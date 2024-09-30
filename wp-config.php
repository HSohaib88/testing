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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         '>5D+c_xNMs Co-m:TeX.NprEPH2NJw-bV#dl@Uq|ld5*U]v43HpTe=O+}pI4scK_' );
define( 'SECURE_AUTH_KEY',  'h9xh#_Zee&*,fpb4)S1<*`A/6VBsb?DcE[g1#}PV5~k1%aNCh&ci^T^,#Xcoov>8' );
define( 'LOGGED_IN_KEY',    'yJwfV?F3`65YKqUw&:/,fC+O?16aG2NbnO5p |e?Cx4!eo>8*In<wLXY<C4.89Z-' );
define( 'NONCE_KEY',        'f0i*aM3b#fMR3y}PzB`Io?$6GxLeyA<HjFOX^V^<nIN)AKoq2Un5K<[_WuJrJdn_' );
define( 'AUTH_SALT',        'VU<t=:a&lOo6oi>ywB&IqoGQ{&<bnHexFh<zC?K=>j>EA$SK:`wg,/m]61{*&[PQ' );
define( 'SECURE_AUTH_SALT', '>8 &tZ5^LBW`!q}<nWX.rmJ2me{`7bR=xU`XAb_446[.01ow4p2rd;JkT=5.T@; ' );
define( 'LOGGED_IN_SALT',   '?&7u7730qT,ol{PhuS&sn1-Dl~eoRx`mW%a|/-lOVb$U]B7zBW!?IhH:[_f[f]tg' );
define( 'NONCE_SALT',       'f9E^nm(n>)/rCM3~LT,0?UlI^<p3j6YcKZ:q.|oP mHM@5f}P$<@+MEvN0n7yr I' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
