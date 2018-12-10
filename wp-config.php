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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R-;>1[yX_:6oOC>pN;JiPJy=[lp-R6=G&P{o5wj_sgH6:Xu[DD=]p85^Pm:*RF}]');
define('SECURE_AUTH_KEY',  'Xa};^tc>)|y]&ON_*c4:/U+U:X4)m$y_;`c6;h>5n0tgU|.V9%;HhWzfaK&3n?Zk');
define('LOGGED_IN_KEY',    'qmGC65uBIQrC*Uj OfS/>U,G2aa,Lh8w?_4r2o9D!1Q9%h!7pk[>9GQUz{N|IA{|');
define('NONCE_KEY',        'Yh3(N|Wi-jwNu#&dn9monn7rqQe,yHv~e}`we@@t@_I9&c`uij|wYVMmD,Q*-Yvh');
define('AUTH_SALT',        'o}]Ve_c??~c(a5zcn{<T%dAAPN0!.$;8kf4?FeY1dUEyK|..hoM6/,SJolZh}Muj');
define('SECURE_AUTH_SALT', 'n}Si*BV^{Da$7)l7j3i+vCpajt#m&mWt]][q_2gF`XbF~:O[1-d-b3Kv,<P| 5pK');
define('LOGGED_IN_SALT',   'Fc<YSGN)X B4?Ew(7O|J`2AsIV%0X/F5yc+&e6*T]T!%^w9$UAG{~y+aL{it`[T ');
define('NONCE_SALT',       'Qs57^N `q>4rzJ96Aja|JN1+_XvGPE]*Qb8qyhxD*V`Yg<GH7)v,`xq{O<DNj:):');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define( 'FS_METHOD', 'direct' );

