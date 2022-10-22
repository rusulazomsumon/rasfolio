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
define( 'DB_NAME', 'rasfolio' );

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
define( 'AUTH_KEY',         'zN#-m2OOz*8lS|:0oelKuSFpub^F#S<[WV/eQz7HK6>uK~2a5`.:Zc7LLyjqp.Qj' );
define( 'SECURE_AUTH_KEY',  'WYtsTVYL]p&r@%_QPU5z< `F,X:[GYI5N~.{GCs5usQ.%L<nmFOr.]6Wl0 N_fe<' );
define( 'LOGGED_IN_KEY',    'Z`rGa>rM_0zQL-;fz[$l[dDbXW52&VmmzT4OFGFVo]z3ZB$|j|nf &gqzjWGx{ai' );
define( 'NONCE_KEY',        'WG4*gb l-ibC74Rc2IN{TL~ bV9.o&XA$YG:+!I`wH;;=xQo+(^S*#PN<A8DW-,I' );
define( 'AUTH_SALT',        'XdQq_~ag_I5-t,^?K3~,u~?% zDu3+xUluS8JoQ=U8E&l0%XB1#y{gxI<PiF,5V6' );
define( 'SECURE_AUTH_SALT', 'u?9Zz7J9T<{za:=X.t&>y+J[2Dvdcmv5~P&sLh(Igv9<I2<}9?%#>y1oiw^iCdAa' );
define( 'LOGGED_IN_SALT',   'Oo3rbiZdt,U0$7T*s}L8?dtqy t ZAJlV*RjNOa`>o8@qt}^OCCQ4{sl[R.rGx[T' );
define( 'NONCE_SALT',       'Ja#s~ydr,.BpK0^4f@N6Sy=VJV%Y}dX-V=`qk!:D[6s)y!F~a:jrPxJ6m4DwD:80' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rasfolio_';

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
