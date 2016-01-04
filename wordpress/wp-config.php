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
define('DB_NAME', 'marfape_wp_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rootroot');

/** MySQL hostname */
define('DB_HOST', 'wordpresstest.cyzzbkmc8kww.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'KKJz|OykGBX7uuifY:aj3rrS$8{x7Taf//`YR%xBd%;&gb2F+^jp>S?S_;Ut?V=}');
define('SECURE_AUTH_KEY',  'aaCWDtn~w c1r_^Q`%XQGPc_i#0C=Jw#B@=HT9^j]x]KB]t8)):5n?zLuhe`z].1');
define('LOGGED_IN_KEY',    '3KuS` @^rm0{UHgy;0b?0m*SW1gwEoB#1G*T{GBx7uBXjqRv;EUYJZ,Mms7!dAUA');
define('NONCE_KEY',        'wx(U7cHjzO2l:)_$qTEKn4hr1kdW,,Bf& h.c4)^g5f#IrxD@l,Zce<cqx3^Gw_2');
define('AUTH_SALT',        'x;X8p2X[0L}2J1#M~C_VARpKqkRbm|(v{zItF~H/N)5&Mr*NUFt9y4jS2KfT9CK$');
define('SECURE_AUTH_SALT', '0jkmK@vsI n2}_[9{2:{LcjJ8%##<aj_#hvx<YAA+fnOJtTeDLlvX-I#!R~iJf>$');
define('LOGGED_IN_SALT',   ')/PT?1YQ397_ZyTcef&+87%FO1@|0]Bv)/X16)|tRwVas:<@6h*%)52[8ut8R.Q*');
define('NONCE_SALT',       'teW{h:44=pqR:gkd.JKjhhz;0{PmOIGhuCEFSA}`)W+9#g;|`M#!.vr/? )5a,/W');

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
