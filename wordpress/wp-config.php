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
define('DB_NAME', 'wp01db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-R#d 1dt3H{F#cG}vw_=lYsd[_;C(?apR3`v6sH$Iq7|8|O~}cAU#uBy^c*B_+=N');
define('SECURE_AUTH_KEY',  '`zdM3N-u+X@e )sS+HN:?kN;kRETPJszrtYj%jp_7lvIN}e-3 02%YKydTtXVVoH');
define('LOGGED_IN_KEY',    'W33n>&8nzo9{4#bi<A]ZmusF{osTmaViCgBh4N+UZIRA&3`7o`{X8(3J|4^3RLMx');
define('NONCE_KEY',        '[S*w/&5v#Cjgmr#!k,IEq ^AF&!.KzLvp#Lv(1uiePWeM-E` w<SQ]CXrUoO2@Ud');
define('AUTH_SALT',        'ta2FNpBPW3H]0zKR2%Y>Nb[my#Cp?Z-9cEF3Y/6)O;Xu_;PGMz|{l%{BSGbld25n');
define('SECURE_AUTH_SALT', 'aIH+n^ZJ-QK-yc<=-*e3v`,`q_A<SR%:|PNC?7[TQOV-Shp/zUeQ[EVjKil!hc4{');
define('LOGGED_IN_SALT',   '(]WAE5m]:V=EsJ;SG+)z$qM&vLU|3h-9-{tXW^&*%baKh#[eKHv0U )W}PNnQS61');
define('NONCE_SALT',       ',zwR[MQudEB+I%CFqkUzQ-y`w[XY4db#`<CyRZ`1To,tr3zVu6Sq(TYOr!LZo4uH');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
