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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~-Jv+#o2.owbzi^5.gCsa(?sKsE!3+.88<A]j,I_BPlc[aX2!#vHCnOxDXm4(g-+' );
define( 'SECURE_AUTH_KEY',  '@7sPe5I:{b5/:-}B6<D!ajCC~.jML<#+%7fhNj421yZ+K*rD)YJZHk@jpBP+IwI1' );
define( 'LOGGED_IN_KEY',    '$Jhy0Tt2IXnK6?}dsu.Z<uA}088-nt.!W||B{{0GM[DH{G[{{gAZSLvT-pk_R|+@' );
define( 'NONCE_KEY',        'r7Y8d&;i:{Hl-:`k87IA?1~4cu~%wOu$qeadT.V5/lPTl[A|bt ).yHJ7`WN[Q24' );
define( 'AUTH_SALT',        '{ =&uF@|igc:^CK4zl6rM2]8~LM80;k^O(DJ]*-vxA[k#hg]!Zj}yU>YE6oI&$F(' );
define( 'SECURE_AUTH_SALT', 'S/Ro;DJU;SgMHDMS,PCk@Ep2lOdTV`~@e{l2K)~OjeFl(KvT$p:SMh:E0pxiECl7' );
define( 'LOGGED_IN_SALT',   '.w9KH,Jb$!<l-mB7Z!e,[$,2%&C2)Wg.^xq 4]J#3YY<g1%j%LXuc3U%sfKBwR=)' );
define( 'NONCE_SALT',       'gSbZFUWn_slE6*_[{ZpQ3WaO{DcIDh@,LVYbo);J[I$$$rD<r@UJ-ADtl,imfV&P' );

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
