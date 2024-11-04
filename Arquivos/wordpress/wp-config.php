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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testeequipedigital' );

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
define( 'AUTH_KEY',         'QkR1;sw}PPAn[mTD|&r]JlC{Fr)sY`C;^t*CKZCVCI0b^yV$n]mIw&eW.1pnoD5=' );
define( 'SECURE_AUTH_KEY',  'P=.:rmj$k*b?$^C$:D;PzD1FicrC/rbCihU|#!;{~Ej}6N@WU3.jg0@38T8%Gq+w' );
define( 'LOGGED_IN_KEY',    '.D<:C[.A}mJ?D1PZ oR^eBa%c:; 33~aJot*T:>G.9Y[2bxpg!pdJpEmd9a7G>v&' );
define( 'NONCE_KEY',        '@a]WRQE/O`fpU e&wORj-?Q:[##3j/!asl/4~(SkOvYq#U${+/.<az)|&,SG:wbY' );
define( 'AUTH_SALT',        '%)J34U{ApX_4k^xB(huRrO;;Qu)&{-G21!b*bvf$,_(Co7z4]#U6q_t<}U#qtCpn' );
define( 'SECURE_AUTH_SALT', 'L_xxR*>0w()agi$`Yri>9&bk[|/wS< |Z WlpnQ!CL/ob~FvQd}o,>]xrN7XI9ly' );
define( 'LOGGED_IN_SALT',   'jH=XZsS]m`B[2V3g);bj_BeoU?~RubP9#,}+qQ.%U`Q}q2$3}QuDl@N&hg L|lGi' );
define( 'NONCE_SALT',       '@!f9z`_!/v/|, +V(Joq(fo5eCZ*V@}_K?H0g}j)hdu8k0U}R&;G#+#as!2558mg' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
