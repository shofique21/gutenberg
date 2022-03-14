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
define( 'DB_NAME', 'my_blog' );

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
define( 'AUTH_KEY',         'tED,%=a|A9c<<h_3-9E?6?Q_OT*@W!kL#|q f0sW:`{s[s1GUZ:IO$x0Ed+s_=%B' );
define( 'SECURE_AUTH_KEY',  '}4U.xi~(X1Aj^;;S02L{.jiBMNx~L1)q65:HVOO8!8uKTv8B`?N@lCo0^I=QafSv' );
define( 'LOGGED_IN_KEY',    'Td%3$Jz Ru?r;NV+H{v#hQ&6aTkOBcwABB%^a Q/Q(he/cKS9?Wz{ri`[]j@b5Q7' );
define( 'NONCE_KEY',        'p#V%DBVG>XN~!Z#o)_.*R3M24>/6K+U{iL97#lBQ8)s0q0^O1>S;I}%t{~94G.2x' );
define( 'AUTH_SALT',        'd!|{0p-u-~mhJu/lP[vw|-~}#$QAM]:PXKYm@qgHhdzl2z)4|azgF]~^4{:i)pDv' );
define( 'SECURE_AUTH_SALT', 'GI;xAjO.-q}D)#|~I*$L*X&$:)td@8t,]-}f;M.h|PaF^@&~Stzx7ALJ:SW+~].o' );
define( 'LOGGED_IN_SALT',   'S#u%2XqfK40?vv_Uy1U|_#X6F+){/P291/2h|S?7tqjJx6o3~&]oqgW-gqwug)JD' );
define( 'NONCE_SALT',       '` /Og.Lq4N&q@O{K-WfuHu)r,4o(gUK%Kr0of5=&f!^|Ioz228-fpaz?I2wWfWGw' );

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
