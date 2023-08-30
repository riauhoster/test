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
define( 'DB_NAME', 'cv' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '`::Re!eP7&K`R V?b]I3n35BdK>%3PQJQo$FexuDnO.C6aYc|pkgp&7Q0k0~F#,a' );
define( 'SECURE_AUTH_KEY',  'LvU7{A@0|Q1+ P.$^$lx8MGEIpF!gnN64Sg=n#f+EZ$h;L}=Tc}=$HTv$)f2N6yH' );
define( 'LOGGED_IN_KEY',    '4TXOpDv/y<_Jm/p#t2#Z]6_x;+6mwiY?+o/!>zd6JP@j+%]L)@G]CBHe;3/TH$fZ' );
define( 'NONCE_KEY',        'enR62hg|:ffM}8_e Ik{&|p:y[eo6Pr)hq`3>)}6@F{mx7|g<7`7C/1;hLW5m-pb' );
define( 'AUTH_SALT',        '{[4*j1y><3H8m@mB&A&dM6HmrQvXfE*>~$cZT,EO}-wU}rH]`oW4:-i1i._4N1IW' );
define( 'SECURE_AUTH_SALT', 'x/;)o&{H]JKX#L>H@[|ZJ0*q[bNN]h>h{W.SZ;uQ(bDMoGkBK3 zW]*<`:;~YCmI' );
define( 'LOGGED_IN_SALT',   ' 3}$1D?RzB.k~iNbyjc86oeC$kYkU5h6zM&Q:u6Kke2a|`k7g:a_@}XflDkVY&To' );
define( 'NONCE_SALT',       'mlnrYq u?bZfQPf>:[ra~Tqf|R-,UZ607Az[5@vj*Ep{h(50pcZsBvS-TLYX:(y3' );

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
