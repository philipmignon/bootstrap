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
define('AUTH_KEY',         'SW@<TR?k+2YLporQF`fC2Q0H} I6P>d)CE~y|YuQ>/KSN?yN+msokDo+0L%) w!)');
define('SECURE_AUTH_KEY',  'ry-;&Yw??(KC-j+dr$-];Zl/,.Q4{K _a1-yo;A2t)M{]R@s+Q>,-pgP2~%pNBHl');
define('LOGGED_IN_KEY',    'wy V{O>N(t7s|XW1?[ve+i@}+lX0bW,bUn-ft[_U~`+aY3jzk+)EL})MMyY]1kF+');
define('NONCE_KEY',        '%G[%|>h|t3hgn#/khW3IS%EP+U>lmCLBr[l1Q:*e>UCB@&DNRid[v@^RtEwb`T=*');
define('AUTH_SALT',        '1{xIo?cQd7mVzrBb >|/[4-5i(O|&H<N5RG>*JrAme2t+Km-VH>_J-~!DVGpz[Wy');
define('SECURE_AUTH_SALT', 'k$ZrX1|;LlV+6-+iO`TZY|kZ|vG**UG9Njy&Sy[gyk62V|,[Mr Tbc(Lc|[eDcrB');
define('LOGGED_IN_SALT',   '>LRWD95C-9A[i66&M;9aJWt6krA!9Xrs|1c.{c3T.x}!L8~7!L-F0*P|$:e;w%Rd');
define('NONCE_SALT',       'NKB<cRCNd6%?j==-$@-!T9R_p|;4&F.WaSG!m2+_c5NIu]3uxC-,EJh,S,(gR|&m');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
