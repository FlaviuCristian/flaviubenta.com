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
define( 'AUTH_KEY',          'shgaD=HKrWJx S,xHD Fd 0bfs>%?tW?0Uo)sq=*KmCC*xcOTT~MmvY{G2+rWtc1' );
define( 'SECURE_AUTH_KEY',   'C3@1Z}MH[_lG#cn|dyhQ;I`4,:_kB,E/NI|IIt;iSPD3ebEPf]O^J_vta_WEc8>=' );
define( 'LOGGED_IN_KEY',     '_rK0*d)}x ;lH~cDovs*y9eT%*E)CR(`1&O`1k-wp $Q)juuUAJpOHG[@z])b:o%' );
define( 'NONCE_KEY',         'V1=5jZ&Mi^A|?[_ L#gHrBr)r!9[yV|a[R;N+;_|poJ8 Z.eX61*lKW41k|{0$X[' );
define( 'AUTH_SALT',         'ccR@1m=Q +1NvL`%0nDhEH@jR^iSm_j?%<qyQsy/4UI%9cZFw+[YMdFtN^tVuTVK' );
define( 'SECURE_AUTH_SALT',  ')YHHOE:=C-z+FY/Kq0X0Lqmrobd+Dh6#zX$(i<T@%Yy7,85uS_Sc:|8.zP1v{iL5' );
define( 'LOGGED_IN_SALT',    '<^CTK;Z&o)T;hax~-(%_P<6~u{5l#@F|9WTjgIP.}P1Do0:/U,;n:L+K;Vv2`D>/' );
define( 'NONCE_SALT',        '$;{pc3>p&05 @hCN0iCDCj=RJMjK/!Br<T:c%-HGO>ZNv6=4JMdsN-$lvrA_8JAL' );
define( 'WP_CACHE_KEY_SALT', 'EDU3c$l8;Cv22BvB%bybe#~a*:O:BuR,|H{@,%5a<UA7Zo.Fe#t1i&-uWqO.e|Kl' );


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
