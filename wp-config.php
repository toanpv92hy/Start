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
define('DB_NAME', 'start');

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
define('AUTH_KEY',         'wX_DDkT3~bt@&AGb3y|eTJ!W&kw ATX0{/42Q7=Vi4-awMU}8*@/9=a8^Gk~j@Xn');
define('SECURE_AUTH_KEY',  ']B2GP_~)AwmH[6>9 3.s)-<|>/=c,*s09{YRNZ9|@hI*GHDDq_.jA{nS/lV[X[$g');
define('LOGGED_IN_KEY',    'X+&D,G1kc07e}PL@$yzw)&4XzH>:;dv6H%&Kogm/u-G+q$@F-SF*qiKF* nEzDd!');
define('NONCE_KEY',        '<Q^CRT=GtOz9[%?>u9eIg-EWgR|{.=..4jK7sRg1]F1?aLrWU f?wS7|R!V0`#93');
define('AUTH_SALT',        'CN!mQ&Sz#rN&y@n~-xA[Qw,hE[!rpv8+Z4!&ZK2-?OiF<a-/ra;Qt%V.[ODz[un>');
define('SECURE_AUTH_SALT', ' 5Nf*?v1/2x85yvw|4^LP[27cisX1As_IS9V4-wfJ]je3:*+GRsr%usJtI_u_&<A');
define('LOGGED_IN_SALT',   'i|&.a*toh|>L=eio+WYMwi66iU6VHAxR#|%mT+E@Fwf7~fq+Q5^0>buE9HZ>ejHW');
define('NONCE_SALT',       'w-=A?+ ]!zC<4s?kJFTLM_%0;mTOnqOO nbhh;{+?:`K@G./j#sUy+K_<B$Rd^v|');

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
