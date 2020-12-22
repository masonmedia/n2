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
define('DB_NAME', 'andre065_wp9');

/** MySQL database username */
define('DB_USER', 'andre065_wp9');

/** MySQL database password */
define('DB_PASSWORD', ']p2A3QU-S6');

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
define('AUTH_KEY',         'ujih5iubwb0z32tiruhc2jwvaoysx7nlhbirkv5uuhpdcqhsjms9fvieuenzmzqo');
define('SECURE_AUTH_KEY',  '4boxsoxastdunsd07vffi12j95hyfsdyz6jcifz1lnzmkqyvmmzjagmqeyaijjo9');
define('LOGGED_IN_KEY',    'i6ydtla97d3y8ran05kswthebrbngnjfsvkt0c3s2iazlghlxqg23ifkxeuicjio');
define('NONCE_KEY',        'zxxfe2mvzwf3fpkahtvwteyvjadk5nw2wfkfodrznrpidmqdjt7s8rfkzubokr5y');
define('AUTH_SALT',        'qytt1k2fwoiie1vj1pne4nzijymoghd1twudnryognfo24toep6m11qrwwqmf0ob');
define('SECURE_AUTH_SALT', '5dvwvo2gi7vp1comw1oazlbkmivuuntzeitvxofw9tmb6b9cyumh43ivklm2lidq');
define('LOGGED_IN_SALT',   'cuy0mkhrjqpxrfagzh4h6lmcqc6ucmys89nqgqfjfzbm0vuadsqsatrschajcp6i');
define('NONCE_SALT',       'qeygt0jqo2eouej9oo4sadx6nncggmy6zsxqh4isvc5vey0jgsiz9lb3asycsnvh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdi_';

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
