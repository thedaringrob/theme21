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
define('DB_NAME', 'work environment');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'KPp2R(SD@h-W)V@ZNm36a)#;T`<TbK)tmz!2;a`v/*:1pov.i((.A=+i?0xuxnc?');
define('SECURE_AUTH_KEY',  '3;LXSl6%#jOq2@RP1*AgU~C4RCr*FOmj_vYC<(GD1,AAPrp{]T_1WyM),ech_.MS');
define('LOGGED_IN_KEY',    'p@lkRUpN.drhvQzMv9/XH}iJLZ$tr+[w^|nkp[M981zZ`(zEgt`nVxI>$O3eC/y,');
define('NONCE_KEY',        'rNwR>?y;[HY?i1LUMffXog4pgrz0f2oe4aSG%%19cbMo&BZ0+[$}f;9t:Awh]Fc3');
define('AUTH_SALT',        'Sjfq<QNph08qRq?*pN$KzTk#}(sYF#4 pB$%1|{$QL$<L]K%z%m ]p]z^Gy(2j#u');
define('SECURE_AUTH_SALT', 'MivfPc*DqOJQ--8M|7}-o`p}uzZJ,rw17;w2NE/~0RSqAO33wW/.wBJQa?8.OPT$');
define('LOGGED_IN_SALT',   '8YJ5B8,+YBRT$>UA]u^MhAn=Fiz5C&XNpWB*LM4S#z#WHrTQT{[;|;$#]Y/~N7L}');
define('NONCE_SALT',       'b CY->^`x-I.yKLZ3c!4QlUIFq@kP2]$3d{dq2>%KJL[[:ms<1ScQv(Bl?e0r<~P');

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
