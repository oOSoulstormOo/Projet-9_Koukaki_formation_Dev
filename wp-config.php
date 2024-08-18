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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '0~ Cy}DoKDh{yMcyq/DLjw[K0;&XeE9V*/R]=.He++_iLGt~RRKi%^od**[be~j%' );
define( 'SECURE_AUTH_KEY',   '4|?+>u{gXGejx9R uOj toP&HUEb+%yx(6]i]$@oRuey+NA(upNf %Uv`d:Kw2j]' );
define( 'LOGGED_IN_KEY',     '@g<y10:uXZ_>p&g*LOl:e 5&cpPne:lPE>fv=Vy|7U+Xs`wd!mJD)Pp2+G}Wo>}x' );
define( 'NONCE_KEY',         'HUZ%!*f)5jyLTE0,x*1`oK;~h$$;oW;sk@q{FBH^&v*]Rs1Fk}o():_?[b/*UV%M' );
define( 'AUTH_SALT',         '^R+V&n1V=aD}.[wfaJ+9PNJ?E!H6X>YNE7Ac<W+HMI)Y%h?b*NN=pk?@eVZRV$!W' );
define( 'SECURE_AUTH_SALT',  'F,oVusw0/OE~M65&Q$j8^@m&$:%)L{5G{avA]@xE]B.:.vI(p3vKsu%BiDmPfWbi' );
define( 'LOGGED_IN_SALT',    'm^*~r;B</%t$[i+PO6t~YvNgJ{(S+<a:}l$k=4IUvY-:#)|E|k+yrx~J1mYn8(t.' );
define( 'NONCE_SALT',        'a]11~;(VTsory~Rth]4}[BLwvfN;(|N7{99n,8x$[UILg>+;ExFtQ*4&QgA:4]Kg' );
define( 'WP_CACHE_KEY_SALT', 'i4^53ASyHw^$MG,uAl^BDN,Aqf1ig!By_ecn,RN?~#vAXwHB]v,7eW#86n/+]b8{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
