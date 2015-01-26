<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cupeDB');

/** MySQL database username */
define('DB_USER', 'cupeDB');

/** MySQL database password */
define('DB_PASSWORD', '[tHS5[r86P');

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
define('AUTH_KEY',         'zxzp9jlxwmb1dkbkxb3punmr9cylwadcnrei4uq5aglw0vdhhrbpr8n1y67gxabm');
define('SECURE_AUTH_KEY',  '3d7t2msg2lmxikuvc9gz1xc0xfr6ncxiu6w9d0elzwvatsn7pgx0oywbk9stm9q1');
define('LOGGED_IN_KEY',    '6057nc0o7zakyqxyqpod3xjmhlpsrjyia4xiz93nmhggf3bmuybezb7xehemesku');
define('NONCE_KEY',        'ctxitwuu8004hvrswbie2rvk9jfkgtedrw7pxvkygbmpszanig9efebusrwvbf04');
define('AUTH_SALT',        'r2smtwymqufens1oqk7prfs39dxgvajlgthekgvzia1muwa7fo4t0eyx5gx3qleh');
define('SECURE_AUTH_SALT', 'pcecryfdtxvyhgjonat06emmeswdz6o3umbkugd91wbulo0xwndd9gzcfgzle7vl');
define('LOGGED_IN_SALT',   'glkupaidsl0focyroo6zorkmeb6m1sumxvcbxu4b8xhxonwg6y0rgzpnvb9x2vjr');
define('NONCE_SALT',       'rmwlgin2xr9wgwrpm2nrvp3phzbjojnv4zbd4stwsqibuqseennywevihivbb6fr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
