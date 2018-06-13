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
define('DB_NAME', 'wpkwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'sl0O@Ae4cni@10sd59-E4UGC[OjgDX](y)X7842p&H ?5/}wK@^g(0Tor6qU05Z5');
define('SECURE_AUTH_KEY',  '&qo3#Q(cpC;9zu5])<4:M:%Ro3x$K Z93wh,wpcW*OoFTho<_U]X[215#VzvOJRA');
define('LOGGED_IN_KEY',    'FT}n+OHZ4(MDv-+]b*Z>l9V@}33l wf3+`|-YJb*@_1i V3kg~OT|Kh@t=mySj:e');
define('NONCE_KEY',        'X6u^3uzjO*|Ns^K/Qa3cl=hdiXCRit!]y)k=IpW2T(`z8~N|!VA/V8{_+-jftfj|');
define('AUTH_SALT',        '&R D4cBE$KZ]~Z,`1{O8~$o[Fp,u6sNDdJI2O9%ngY>I_]WRQskz>kmV/vHBg8EC');
define('SECURE_AUTH_SALT', 'xa<HsSh-A;;2]3<mV<fpMlTu}kIW[:h;f]q`uAb{/o9tIH72yptQgGe^0OOjH(yj');
define('LOGGED_IN_SALT',   't;iX0?:,Se{,*?yAEdv-tXH;7w:|/X$]}(IY--9T^g|i@jsMX%3&>jK%:x)9EOB~');
define('NONCE_SALT',       'V]BB|r^aQdqpS-_{WN1djSE-^O/}cReeauc+|h7+rC!$[+T04RifFve-]u}M99KK');

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
