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
define( 'DB_NAME', 'naukyr' );

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
define( 'AUTH_KEY',         '}5WU< vt,PZr2Pf_l#nJg)Yr]LLzEPq4|hjTahS:nNhbASpD;Z,=8n=i20wDlIVH' );
define( 'SECURE_AUTH_KEY',  ',JgO+vvv/8D9Ul}W:NF*N&v}RA[4>b@+UtUAzQ`+,j*saQr0U>eFmUMgn((.V91@' );
define( 'LOGGED_IN_KEY',    's1(:{aw_oV&6LU0YL-0@w3v)R+Vk8We{<3yrgtD/ODZjr5S+[Cg74d8s4oc1N[8n' );
define( 'NONCE_KEY',        'j!gEv)@,8JDL`D;]z:pF^EPUE;39Og 6zpznYl|c<FBX<*bw}>O;@[6~|pE7=0aB' );
define( 'AUTH_SALT',        ',S_/IX1mex2P$Cl|FvMjn.S[?HMIOrlQ]ZL*e#B]#<B@m*vz_F78H}7mB%?W&kLC' );
define( 'SECURE_AUTH_SALT', 'sYhU-w@LF4opIDdr2]:Y1[x(Uh{IC5~~0aSbeNFVr:W]Zq;0b[&9fPy9Z8xI=*u_' );
define( 'LOGGED_IN_SALT',   'X16At3TzJLD}+1*yc<96$M@.o+9zAKw49E=u$==2Qw_S*;l KoCCAS>MipTNi9dA' );
define( 'NONCE_SALT',       '^S{AN& L@t{dL>]@:$O&fGuVy9%){{p#4wts6.Lp)+uc3f@NZkQq},&rlSF@ 9Nr' );

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
