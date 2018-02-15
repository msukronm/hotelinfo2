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
define('DB_NAME', 'hotelinfo2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'SQi/HKd*Tc->K_H3S!W}t!@EUx8r.tJ@$vtIz:acx!Ra]l,z{< QNw2RmA3n~r/I');
define('SECURE_AUTH_KEY',  '{imQ@~Du9t-*=)akrHSv7z}*V`/gDYm*+8N1UpYu$`/Hynm~AIg3t/%@G,L3)jB)');
define('LOGGED_IN_KEY',    'y_I8sk+M]2cZ8OQ>hPZ1m;M>LRE)zFVBPPT;l2<Fw|B7o2F> mL+Uz7NYvX`09hg');
define('NONCE_KEY',        '8O3qk*c8H?M,.#?4G7O^fY1DYM/O=,b&TmdXZwsIa^EfI*6N[JE,J4/k}Nkc.8)b');
define('AUTH_SALT',        'y9:VjkXGY+=JAl5:r3U|q1LAe83c+{&9KM~TBXt+nD=rlk0=p4t(-AL*d>@jyTRX');
define('SECURE_AUTH_SALT', 'hUQQScV|>,a@v+;o}&<!y/c4HD@itlY3nk%5;s)/5d;`EtGXL6y%bn2vXYX#}<39');
define('LOGGED_IN_SALT',   '#H7 pyO-7XvXmuh14/CVd9! H>RZ07R,/?84dIVdm<n9Ps-kKSXm!>0G=$Q$D&xH');
define('NONCE_SALT',       'RIj(^]:M;Fuzr<iG(_ad2nr+kq$!QR{.Mf9V 96r.l 7i{,;6ulQ]$O=JuX5<V^?');

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
