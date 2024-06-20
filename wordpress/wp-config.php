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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('FS_METHOD', 'direct');

define( 'DB_NAME', 'techshop' );

/** Database username */
define( 'DB_USER', 'truong' );

/** Database password */
define( 'DB_PASSWORD', 'truong' );

/** Database hostname */
define( 'DB_HOST', 'host.docker.internal:3306' );

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
define( 'AUTH_KEY',         ':=Ba&GLy>&FsxOjymbf>nu:O*>^_9>Ui} ]P9F(2#s?b86(wY@ieMg3ID[KRA=wA' );
define( 'SECURE_AUTH_KEY',  ' {mhd-Bxea<TH54ckS vijRp+GYi6>HQEg@Z[{Wh#QU`~~:m%O,9ZScMalf)n11x' );
define( 'LOGGED_IN_KEY',    'L>)ck%nEU&I`b 3@6=PkdYI _|Z:lEi.i/45L>vYf t`c W!LI@<BV%A[C9kOJr0' );
define( 'NONCE_KEY',        'JE;|DxhCk]*,18MLY#9[J>r|t3].&S!Q!f.A4Xz%5/^ls6BsZfN*%p![7?~t]_}<' );
define( 'AUTH_SALT',        '<kAp8[W6Aat(H8>Sz2swIwcEweJF{Gg{5[M:u1@ e?r)!I/*@guKz<V4E|eyHl#D' );
define( 'SECURE_AUTH_SALT', '~+X~E];r{u Lh`6Wd60<N|:Krdd*vEiX(!!IqoZtrsmSO^2S}C=Kc;HP5!c8?Zvn' );
define( 'LOGGED_IN_SALT',   'D%no,uiQw>C+)%B|1B-SdcU6Pk]|{o+~c2&w{[Hc+HRM*-CSBbO5Q43,QmL &E&H' );
define( 'NONCE_SALT',       '{U{rSq~i0AMJ3bXdWg@; Q_Dp[a9m;qSVtH}f%F!?0E|CZ2a3xuuTI1jM# /Np^X' );

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
