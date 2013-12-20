<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '-)?__&6[;`p]gQFOT&:?ZDWX-lllEGp]ZUoNXe`*q-}n;cY&>c+?QU.?|k@=3z|r');
define('SECURE_AUTH_KEY',  'mx4N~D==Pk^4RS9|3R{Z2MG+o4/0z@$DY[=3# D=F+GH$FFJ~kD]%R+pRx`HVnjc');
define('LOGGED_IN_KEY',    'LS`IAeR&j(y6Q0woVM&j:cKJ|y^KU,.hrXA@NTW%xca)/ddp[P_,~|V!y;27JP|M');
define('NONCE_KEY',        'qqeFJ &_>%72rl?JR cCe:;|-.*ExZI-Z(3#p]z?5>`37z1rlW-l=*--P-V&}@Gj');
define('AUTH_SALT',        'fup`*RH@sw),TRL]W ,#<[n&scV#KU;_n|eC2&@@=7{.g8NMQk|g,g?2(DIJZl]Q');
define('SECURE_AUTH_SALT', 'Ne4B1S2zMrGK-Ono-+`sm|~+%>C#x0P;74L4>oC2!) !`q}+OQo5TR}J~;aQ0i&X');
define('LOGGED_IN_SALT',   '.jEy-hu|J;KMt0?!nDa=<K38bMk^<4>G|-Q)qSE$IG|V7j7NC#X!)<ExEiWH;|9N');
define('NONCE_SALT',       'uCK.5{6f3ZAr:`~4+QP>(2a3 ic#7p{B*sd~S*fB[}:](44F7tXFo&;]cAc]:~Rx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpWPP_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
