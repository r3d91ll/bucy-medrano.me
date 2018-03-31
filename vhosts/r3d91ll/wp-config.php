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
define('DB_NAME', 'r3d91ll');

/** MySQL database username */
define('DB_USER', 'r3d91ll');

/** MySQL database password */
define('DB_PASSWORD', '1luv93ngu1n$');

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
define('AUTH_KEY',         'w</FJ|/27Z~6d[nW|!q:y2{~Brd7@tGOZ{wGPa2Vb _?P=Ke{wci%H@fNQX<W.0S');
define('SECURE_AUTH_KEY',  '<V6<|wX--dIW`)vXHmW-%v<%w`$nY@Nv<BUHn}(a=0?^i`xJ_`MY_Wq/1pz9@BR-');
define('LOGGED_IN_KEY',    '6n6`or%Hu[>NT0|4v13^!86)kr2rzFi@lv]dedb,j}7*V}2A?2Xo(<O@=pgFOQ>c');
define('NONCE_KEY',        'U?2KMOKKW18UrKj9/67`o]02$Yc`i=e9xE0aYppoJBn)PiKA2BNDa%wOSi5n22|r');
define('AUTH_SALT',        '6RNG$+Z`@s9@TWfwbG!x;%]~zik4@x n!!qCL10V.]=xjR6e7/f~_6$=-^G2w>xg');
define('SECURE_AUTH_SALT', '!,?GYuz3=zw%mS2?-R6]JCV~SA$fQ={+J[48rp1)M_6UihC,}liuQ<wM1%f9):1n');
define('LOGGED_IN_SALT',   'LkfC3z>^As}bqn2i1T?ee)Zls^vR@hCEXRrYO[M}qD+:eadidR?X8D~}HX9>6IPc');
define('NONCE_SALT',       'fhJ?W8)|qa|Upc&nQl(C%XDhFZcARGrWAa,YLNYh&|6-(RCf{<OvprnSl)Rr!h 9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pill_';

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
