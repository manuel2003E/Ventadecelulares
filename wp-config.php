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
define( 'DB_NAME', 'ventadecelulares' );

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
define( 'AUTH_KEY',         '8ZyM#|iZ,^(i|eKIgKoAE5P{c2*o^MrQqqY:xI+,tC^i;V ..vu`}yWkLAB3Aaw%' );
define( 'SECURE_AUTH_KEY',  '7bhFC*}t^d+~qjN?u*f(c} ~)%=k+SZ,0a (*!PuhD4LJ3{|?+a:=hw>iSg5<r_M' );
define( 'LOGGED_IN_KEY',    'g-^_;}h_0/8<XUAFeXfXFG_{wmYTx3&J>ncVLH;kt~w$@6,FFfYSwQ9{JMXA.HNa' );
define( 'NONCE_KEY',        '.q fp{d_Ie`ns{?W` s.d&9dfvgUG5(B06dK<tli/#Y()udbN[(6C8+8g>j]7)jA' );
define( 'AUTH_SALT',        'v70Lj[$LU?6Dd.@s,Bmu1<gSbAHOjHoDi*tRytP#or[)c9@a?>),O>y@=),Xy|AT' );
define( 'SECURE_AUTH_SALT', 'NrS>Rds>iCh!Q]DU]ig:3l</d<iV^Ae@J[fym);`-0a9wo A@Z)3vjV?1ml-6z6o' );
define( 'LOGGED_IN_SALT',   '=b5$P(wR9VJt6{yQIMUs`!16kFk}3q~mh96Z.7/ >!~zAB<@ B|VUspJIW7j9Zi%' );
define( 'NONCE_SALT',       'ZLa1pGET+8:%$xB5eU_%,3|?<IeG?sPa(900=M@?<2Bk@jK*E5VOlbS#PlJ*wALk' );

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
