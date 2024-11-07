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
define( 'DB_NAME', 'wp_muziek_site' );

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
define( 'AUTH_KEY',         '-mT>*#&s9%|0=hzS.:l{g7EfXz,{gBSi)uFF}[_wP~-I}f/2s|ES#y7{?e-^/T?x' );
define( 'SECURE_AUTH_KEY',  't.3tYA lBI8y?x,KrR#&%9w8x5ODmV*pKgQy]@^cMw)6E0o,#F@*q0Yq5Tdc#sRU' );
define( 'LOGGED_IN_KEY',    '3<Gxo:/}k|PQ~`r!:B?hxc}I`pH/Zk;X5Us71f2}!he@7@qSUg4V>z7gLK&C9Zn0' );
define( 'NONCE_KEY',        'MF7.2oo7GwBT3xuz4kh1)N&P(g+g<rPhT/I-~=0n@L^F~bz#1mB^q@]WuuJP=(el' );
define( 'AUTH_SALT',        'JU|$V 8}H{Wb$p!<x`^pH+B;MJA~qg9D,<m1u=Qm@6^^!Tm_os`rlqja)O;{MDV=' );
define( 'SECURE_AUTH_SALT', 'LkQWM:?>OWCJqML4K7(zKv]5Xk/R1Gs#cDHj=wi r.cd(9$_Tf?O5G|<LRFL(PWe' );
define( 'LOGGED_IN_SALT',   'Jg![S`_.GvMkRnfLI]V$n6~41s[~9:HUCn2OE%.J1ay=#Qi7{N00rW9dm?S-!3;3' );
define( 'NONCE_SALT',       '*VjYMr}^t`V$s(6_hTly*ny!h3Kh7m|.:AAQG8ggUP:`5/ hGOyAa~/EF&g*]Kz@' );

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
