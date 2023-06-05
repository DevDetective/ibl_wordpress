<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Thefoxjumped@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );

/**#@+••••••••••••
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'El8~XxCI93nMj6:y{Zi*Tb1@+]H/kV+qE.MFyzo6P5V3x&fpz}a6d=nZBuH$5`Bg' );
define( 'SECURE_AUTH_KEY',  'WBEz~E+yVp#p7,?eG$l&VelsGe&KC1X-FLUy$MTD_]ASN!q`M3D2DaU?6m|Yn[>:' );
define( 'LOGGED_IN_KEY',    'AmD)bS:dYc~+P57d*p ,56%3&0fH$TM}DM{jP@aB)+B2/LW5@H; ,4-x3RZ z$&Q' );
define( 'NONCE_KEY',        '3J[uGua(uv]Zg2-+ZzQ`s^kcwU dF=[%78|nr|IMeWb}r{yBf{lJK v+G&12=O. ' );
define( 'AUTH_SALT',        ':tMF90^^}b{S[t>YPZ<US2=Z2)QHO@/Hi{lC8Zj=32`h9rZP6]v-XcUsk#tpyzyW' );
define( 'SECURE_AUTH_SALT', 'LKK]W^h2:Y64Te*KsUg5GXU%`iBCHI}XaM`^ H@hMap1Jbn-)Fxp/`p/mv&0yW4?' );
define( 'LOGGED_IN_SALT',   'QwQ)RH>P96,cLR7+avlMnYK*];kRELs::UXnscfPuVhz GQDe*@BaG~8iGU+}P-5' );
define( 'NONCE_SALT',       '8Nvc<*c5dVtT5a`J[sqH``;hU5m++P~^TiY &r d/WVy$8Z}+5Kcs&][&tS}meoK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
