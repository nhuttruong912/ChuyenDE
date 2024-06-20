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
define( 'DB_NAME', 'polyshop' );

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
define( 'AUTH_KEY',         ')5B*oCl:2Np}}yk+Q&~6HL.3&Lcpg|3~iEtp [eAAdi d0:>.8<]>%v#o&d!$WyI' );
define( 'SECURE_AUTH_KEY',  'rKmTqp9SF%DhxBAozX0]kcU8.y*.g,7/t~gVu6n]Gb5%4qi]LQ$$zHil;@!*$2Yq' );
define( 'LOGGED_IN_KEY',    'ba-C<Z_N[yC:P,X/@RBM&]Hpt|)3q_B,HHtIC5nalpwqIz[@NcY1u~`*b4ZnbKEw' );
define( 'NONCE_KEY',        '5]dCH)RttQ 3IjT|[k4sX?$2Q&EH?<a+0^5:;CJ|(Jr=:#By#]]*#%O/lI4~JMH_' );
define( 'AUTH_SALT',        ')Y[t:qdMZQXm{~>`W(K!^_z}n|J6jqQ}Lg?w89I-w^|},LxWxRpIh/LK8onnOo{J' );
define( 'SECURE_AUTH_SALT', '+ncv[ONN=HJV[P/V;x,G|}`r#N-Z9IHDvVi/m[W3<iJkFy;m[@{y1j!W7`pcNL!^' );
define( 'LOGGED_IN_SALT',   'wgBAUd%%jfK% 9;h/ yjCAz9`#jvZ{5B$|>E;7%QW{R`@43wDu-$,gQxWuH<I$tF' );
define( 'NONCE_SALT',       '8w*<7?:H5Zmc&;0}A9?D1 jTIu=a7K}_S k;?Ov1Pyfclx5PgWk|SVB{eWI2Xp[o' );

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
