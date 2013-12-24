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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

define('DB_PORT', '5432');
define('DB_SCHEMA', 'public');
define('DB_OPTIONS', '--client_encoding=UTF8');

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
define('AUTH_KEY',         'I%Y(:LDsi8ZBu&/haf[,cPw7W~Zr<%a5&OcIAz:Kz(.H~yYNk`.*B|b6@RHq^l@`');
define('SECURE_AUTH_KEY',  'g%!RcY%y|/>xLA_n[5wwsyL<i(g=dIwZ><WTyfAx2.SwiWu6PN(4]Q2*c*Z@kaql');
define('LOGGED_IN_KEY',    'kF}pakz@J#LFRl-0P3[PSW?}XA?AtUSIQ6hBmk]e2`xGX*cTP$^{m!h1AU3m]W^b');
define('NONCE_KEY',        '/<tW9|_?;POz{JEun;&fGcsH3TM,]N!lJq4Q.r^l%~;l.~|eY<1=F J^FmK4GD$)');
define('AUTH_SALT',        'W_GI_gMBH2.IK,k--;>^r%Ey!?wUq2N]8&TG]k ^2P I*68Aa6dzo9*Xa!l?.m7k');
define('SECURE_AUTH_SALT', 'jbvKbuunZFxfC,U:Zly<%RpgV:Gl ;]&aQNd<a!T7gydIrj#CaGIIYhSQoD/1wbR');
define('LOGGED_IN_SALT',   'IwqCKY|q8}kda^a*Tqal~AOO1tDo%vZ-__</P%h315@,vP(7vvXE#eIiiylNrjNP');
define('NONCE_SALT',       ';#n?S]Ms;0[amUAY )jQV*l=N/8_zPjpmE$SaAeG5/R}Lh|;{nE@FiWI/TZ(bD4N');

/**#@-*/

/*
 * currrent database schema, you can have multiple installations on one database if you give each unique database schema.
 * Only numbers, letters, and underscores please!
 * */
//$current_db_schema = 'public';
//$current_db_port = '5432';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
