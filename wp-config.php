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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pklp2d3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^%?60v}_Kw9h6PB-,ZB&Mr,MZ:/cik7&62_-sa)kgNNfLcx%di@9aS|cjDk^5C:2' );
define( 'SECURE_AUTH_KEY',  'V62qCY25{oykJ.%,ro6BYD|US-CQr,Rf.BsJol|&~4w&R%8AzGA$]*l^R4w5}jgn' );
define( 'LOGGED_IN_KEY',    'n[0Cc_sjp?d&{:V5{j]o;X+Sz5Wlv5!Ymqg)%;qhu+pnrXeZFH>=]vn+pP54,5vv' );
define( 'NONCE_KEY',        'pZ8@zzMb?/Sl<Ea.m`|9d^gd%:s>tnfh<2T%7D`a_w_i>UpZ_n-Oj#sJ$c!$_vfh' );
define( 'AUTH_SALT',        'ctCyWz70:$oDW-;-eNMXG(nw?=$MMbL`U47w|s=yd}x|Q.NvX~0B[LJ04x&AM/?d' );
define( 'SECURE_AUTH_SALT', '$d8{Lae.8]?lNZZ6;;__Z|e$rt)vffo>1V]j0G&:)!Hu[rF4WZN6fW)=o,;C}Rzt' );
define( 'LOGGED_IN_SALT',   '~ZzFI:4uv:lTlK~9eecHcg =;LndJC`<Obv2S!pNoY<reaVz}|/s@%zfh,byW4ln' );
define( 'NONCE_SALT',       '(H#w5K//pN~)q6g;P#=gJWk`*XD%+:0wo!3T`~z;$B.$c p@`6]V],(nQwq#&{FD' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
