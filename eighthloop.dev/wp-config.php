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
define('DB_NAME', 'eighthloDB9tflw');

/** MySQL database username */
define('DB_USER', 'eighthloDB9tflw');

/** MySQL database password */
define('DB_PASSWORD', 'CnbQC09D2p');

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
define('AUTH_KEY',         '7cF}C:@kZJ4~shVK8:@sgrfQE3<$nbQ7{$rfUI7<$jYJ7}^vjUI0,znYNB0,zntiW');
define('SECURE_AUTH_KEY',  'nM,znYMB,ygQF3>$rcQFPD2#xmaP9;+qePD2<+qaI6{*ueTH6{*jXMA.ymXLeS');
define('LOGGED_IN_KEY',    'C~hWK5[~sdSG;_xhWK9:_tYMB}^vjYI7,zncNB0,znRF4>@rcRF4!vkVJ8}!vgqfT');
define('NONCE_KEY',        'rQB0,vjYB0,zncRB0,;.xiXLA]*tbPA;.ymXLA<$qbPE2<$qUI7{^ufTI6G5]~pdS');
define('AUTH_SALT',        '93,zjYM7}^nYNB0,zjYM4>@ocRF0,zgVF4[@scRFPE2<ymbPE;$qfTE3<$qbI7{^u');
define('SECURE_AUTH_SALT', 'uI;+fQ6<ufP6^qXI3.qSC:-lSC:tdO5#wdH1_paK1+mSD;+lWYJ4|rcN:@kVF}@oN');
define('LOGGED_IN_SALT',   'Qf>c4k8A<yePA.qbM2.ufE^nXE$jUE^qXmXH;*qWA{xiTA]+bM6<ufP.qbM6.');
define('NONCE_SALT',       'wVJ4[wlVK8:~shVfUE3<$qfQE}^vfUI7{^rYNB0,vjYMB@ncRF4>@ncmaLA;.xmW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
