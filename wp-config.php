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
define('DB_NAME', 'pearcsqa_wp879');

/** MySQL database username */
define('DB_USER', 'pearcsqa_wp879');

/** MySQL database password */
define('DB_PASSWORD', 'U5S9.AN0-p');

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
define('AUTH_KEY',         'hha7azae3v2agls90anjiycrjd7zbe0ikyugxfncedza9b3goghkkghyuqhsaky9');
define('SECURE_AUTH_KEY',  'm4yj136ss0a2buqgxdmetqcy2b0em14ongewlg6yrphmh31g0umorvssr13r133k');
define('LOGGED_IN_KEY',    'izrvuylnmelsnfl4ovcylbvetzfxnq8gsv1jmdg1zasvzj8aro6hqnuu9txucm4d');
define('NONCE_KEY',        '7vytdoa0d0uupmvpgtx1oloqezkdiazo1azsf5uiuuot6upg2ove4jb4ru3bhj5w');
define('AUTH_SALT',        '3zhda5zo6zttvooaxbwi3zvbmdejf3qg9tctyauq2hcb3sc2fks95txd4hru1irx');
define('SECURE_AUTH_SALT', 'sjwz28gn5r93ybpbqibxwvgasm8ikfrnmauews3zvzt2mtcsy5lgw0nkwd4cryh6');
define('LOGGED_IN_SALT',   'gdmpqljqisvltws9xmu2ldtdabj520qztzvixaxauv6ilzptukud6uzrpmobr272');
define('NONCE_SALT',       'jpteq3pnpgwtubqpfg84bk9ycisqhp5i7qwpktyhq8zxatviisssfmjoxwi6hah3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppj_';

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
