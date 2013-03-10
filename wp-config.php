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

if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
  define('DB_NAME', 'lakshya');
  define('DB_USER', 'wordpress');
  define('DB_PASSWORD', 'nhSdQDNc');
  define('DB_HOST', 'localhost');
}


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
define('AUTH_KEY',         'i9@S$EVN34=SL#5kI?|5tXuvI~Aqb*G];@@8l%Jguw&|RHe+%_+dC~N;BVWINEwU');
define('SECURE_AUTH_KEY',  'Fgb#7iCVd+x_vK!;0:spgsOJ8e|nb2TbPE3KOY5~t,-+ryzX8 kV7[hC0~UmSGN_');
define('LOGGED_IN_KEY',    'b}[s uXDGmu>6NQk|n;|qhAoPT`+=`v(-@Ia,czK-9Xu7:y8+31WOaz>]5*Ah:5>');
define('NONCE_KEY',        'n|@d 3q~)mTDSV(Y-Mj+YSk,s:5N)5@f*}+S(5)j}M|$4)gjf[+B3;f_t8^m=BG,');
define('AUTH_SALT',        ',PjnRKR#d78CrhKI1?Fxw<Tj/_ag9-G-#sT$WKC|2jPP:A^BO&>?)@ 1q(Xac=#>');
define('SECURE_AUTH_SALT', 'r-{O42Y):VS,0Lc.Pr@{+3P>@|!RgF]O=IV@.`4-1T0ks0%K@MI)n{7a~S01[-&@');
define('LOGGED_IN_SALT',   '%(,|23l2pM%RR8r{-dVi,gXE$XX4+eg-R/R1:Mkk906R:NmRL[)ewdaQV+zDfqDB');
define('NONCE_SALT',       ')$AXG4bj8QFt*Y6.Pj2{AzR2Z-PR)Gh=]&OI]fmQ;0 bh!nWf|Cd~:3@j|?|SXtr');

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

// define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

