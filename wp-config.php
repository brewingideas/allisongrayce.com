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
define('AUTH_KEY',         '*w@rt_/GVyeiPb9|L%{c0YwUSB|bt%Mep?dxwEX+Mpl^bHw[Oy}cAjjGCzE,D@~8');
define('SECURE_AUTH_KEY',  'o?Q;!:[| p|Y|0iwEHLNn@;Ga{/ekGj-KiZm<md+FcF3N1XS|Z_|:w6Q%}jX4sIO');
define('LOGGED_IN_KEY',    'r-5ySvNt-S8Vw|*f.WM[0@W9lgJ7vi&gj[?ZPy}1gwvfI;b1kya@*Rns|JM~jY P');
define('NONCE_KEY',        'r$>|hQ_*k:1s$kS!b^_|f-K|B(0V;t|d-4P1;ZBv3j?l,r^6agKt9O N08|q,zCP');
define('AUTH_SALT',        'j6<23E(>Vi)%t]zC-TlYeIt=z[rL>Y{b>hU`:$+d(aWR0@yQS|3}f@T}4J$~C_T~');
define('SECURE_AUTH_SALT', 'E<_K+)@7L#1OU|^LJ7+#$eq<E9{m5(n~C,LsHsi-|^fL(-`n Bpg#(Z?HQs>LNY4');
define('LOGGED_IN_SALT',   'n|-ekcy(ch^c-|U|XXT+/<$IiEKSvDHV-&V@x|2L],L~71j~h3z/fw2E~4w8lMqd');
define('NONCE_SALT',       '(Z^y* kjAkY9FX%YIZGd]hnfv%<o[6MQD!Ne&`]p<C(UBI{$>->6~|L|ph g->Ac');

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
