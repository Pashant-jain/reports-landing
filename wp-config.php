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
define( 'DB_NAME', 'webllisto-erp' );

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
define( 'AUTH_KEY',         'mAkB0&XHekuh!+v6X]+)qt0JKmg#v/C@_WbQGa2kn}p%s;5rufCrXkbC0PUO??=0' );
define( 'SECURE_AUTH_KEY',  ',[5cz*W9TJb0_ KRw,Y=u4sW9!N-r]^x3*%[K)u2WLMIG@1+OQI/Qf&a`+?FqE20' );
define( 'LOGGED_IN_KEY',    '~k/`;#aKru[n-wjzjHKaoM?$+}+m@Nix5YW5$3IG|SD]t[@`IOg3,E&o~?fH3K5f' );
define( 'NONCE_KEY',        '0OrX4Hj2f.Az:XGSREjD>]Ga5WfxM8<S]b)|?|H>t=2RWeAsF`EIWVlFpHl;<;rs' );
define( 'AUTH_SALT',        'P^FJKJ-.I:R^zK,ehKox@-!]POcuz><LXwP]%,znX:2E|^x=F/u{?^R,$b4S4on{' );
define( 'SECURE_AUTH_SALT', '2L(4]`H8QUdm3=X/kk&lohX[*)2cNXZ^Rf!IZsUNoG?H,DbbN tutb> _h`6js4Q' );
define( 'LOGGED_IN_SALT',   'TOlqh%(/e6jt39bUU>Hmzz{bPKSs2df*4G6|j%FV%5(bc qRxclJu%NrAv.Z9K|t' );
define( 'NONCE_SALT',       '247mu)#Eu,r6f_{/7)xa]Nj+r{QEF@eLNwcfU^17HrBb__/Jf 65rZHc}-}D[K|q' );

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
