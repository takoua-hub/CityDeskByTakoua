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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '&O~6lMD@NN0`%7o>w[WJG5>_(E1bz`^uL.LJ?_4]X}-dr9Jt = |2^<9&e&}4}Qs' );
define( 'SECURE_AUTH_KEY',  '41|VJ0p_0wRER;;/Z`r${~k8C_A:~;h`+4)9unT~]dY.)dpOIyx81Y^qs0.l}BtM' );
define( 'LOGGED_IN_KEY',    'x)7<+`B<-J7*i(?(Poy7:{r#!Y~>7ipg-]8hyDYG|LA,p7g_b}3[`8z7a=glV0d_' );
define( 'NONCE_KEY',        '`|=>J}|+&S!@^V*$ ~Q)tf_:nVZo9ns^$k^JnXXo(wIj|j>SdA&r;;1P`+L<M,f>' );
define( 'AUTH_SALT',        'Xa=^mr4Xc96YTkNK7 VCXo#DxcUHQoK|PQq.|`%R=`5#$]ch=W+;ISZTg5wk$Q~$' );
define( 'SECURE_AUTH_SALT', ';(=]ev#=4aw31&%vVFm+~)ldV+~@wC,}tCX9ADZ_kjSoWYW0E]tY<klWv+d|oF]7' );
define( 'LOGGED_IN_SALT',   'fJ*HS J[vJ}l?YPC{60Gpm2~bC(wc1Z2xrQq%^iF}m|z%UGs6.V(q7wuFLKnjDD4' );
define( 'NONCE_SALT',       '&E#/Xr+NgE:s/~lIWpJX60Nufyi(3<bXr{?uS$y-X(uRoq^Nb]A#R,RT%)p3K]_=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ex_wp_';

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


