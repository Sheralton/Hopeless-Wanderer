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
define('DB_NAME', 'p2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ak%YTs;0:]@eKcpD%z/2V#rh1;>o/WY|b`V<h|AQWzDg?=o$bq,S.Uu-jl>i)HG)');
define('SECURE_AUTH_KEY',  '0&?oMMK~-0jJjpgT)3jrjwv^hT_%VDU#<9E%np^/|1X&I3nOQ|,![5HBFjc1`)cZ');
define('LOGGED_IN_KEY',    '+9]3C=]j$,mgx^+mj5h*;l!/k%Q]fV:V3=JqVCX$Wp$@tjmjV1:M`JG(Q6vl^mv(');
define('NONCE_KEY',        '`07 +XVAC9gG^f4.GbYl2|(aJiTi1DScb{I*/% U)A<W&geF,LkJKaDKRM1FcQ/*');
define('AUTH_SALT',        'BrP~S~#L[7i/_$Wt:pwz3W p:Gcc{$8KyWgOlgkLo_ns`aCi)ojv+b{&+;9BBIdt');
define('SECURE_AUTH_SALT', 'D+[yBfEe/+e*5~A@):;VlFp]*2Qy#$h=$(%N$k>I[^y-%.YxtX]9d0CBG_BkPE.~');
define('LOGGED_IN_SALT',   'C=b+mH;i}&;PJ!&{R:MNP9x&W7,?Td<}3?mnpFabENI=72kZaV]9;BF3(X_p(bvX');
define('NONCE_SALT',       '~ltRo?~?%GR?Vs|M>u)I$IO4`ES1?y)v/FRS.lA$1P+BbDDLDy]&sk4t_gq..I;;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
