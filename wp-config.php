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
define('DB_NAME', 'stu3122977_s1');

/** MySQL database username */
define('DB_USER', 'stu3122977_u1');

/** MySQL database password */
define('DB_PASSWORD', 'Su0ZlL9EWk');

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
define('AUTH_KEY',         'EOlQ600nbg#@Yn1kev(TLMmQq6b(eMNF!&Ssxq8lI7p5I4K7v2ytDUIXBeCTTCmC');
define('SECURE_AUTH_KEY',  'pOF1YIOHKyWfCtLyOwpCCGDPm07rG3dSS(fV6%YET@pw%zHYlI!(R9hA1O%PAh3B');
define('LOGGED_IN_KEY',    'qKWKoTLehv5rU%Dx^(1ADPt6HlF7MQk^g!gUb)6MUdXQcMtUjuVPLEXMtTT#AEEm');
define('NONCE_KEY',        'qGe^Mtk5EyPlGusFtjfGFUgUuwPYrqnkqXH&HMTzl2PzZh)lm2FtA1cJK7E8zJ7V');
define('AUTH_SALT',        'JJadLt#JCfFZACgsACNr2P%!!4TMjr)x@J(kFhD(v8uizqIx40d0LsfbEpfCL@8H');
define('SECURE_AUTH_SALT', '!(XJzjYLXU%o7bxFcd)yNF2nwcNuFRSOBeLYpmLG@U5n(CwOkfOPNm1WIHP(BXVL');
define('LOGGED_IN_SALT',   'm0#tHg44M8v8qGWAOq%qi&44seH3N9o7RqNhmx3map#bsx&%mdKch9dpIvVxw4U4');
define('NONCE_SALT',       'QrS&6Jg3e)MLjQoiw8l4Sa!gUc(9t%YQHD7xufDApx!V5MpNaxHM6Y272j6!FPp&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cms_wp_';

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
