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
define('DB_NAME', 'haodt');

/** MySQL database username */
define('DB_USER', 'haodt');

/** MySQL database password */
define('DB_PASSWORD', 'maiyeubaxa1994');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'm6e^%h;{bpyDRwsupGy%?=,$zb0LX7#|d7_IgOc~ BRM4eYO@U.-Lp5!8e..^:Q3');
define('SECURE_AUTH_KEY',  '*>x0|WAv0DzbojPy%W)BZ6/qE]UIQ]vhS=rN[P@*Px{$Gfo~,2^f9M?K*C90w1yb');
define('LOGGED_IN_KEY',    'YqB!k3?&^W*Va~oGq[,pBqFR$YWW``o$37iYy^QUO91`tuvXL#*IhFL/pT06dhQB');
define('NONCE_KEY',        '5:=zxcblS- Mvmp(O7(gz9V/?j>IAkrC&wNpQ&No?pQvBi~LT[k8AWOrf>([Z7R8');
define('AUTH_SALT',        '&zDO8zZ t$WX=4$@+DE920Wo[fd{M[P}JT.N~ceKq>I^_lm#El-aiY_OHpB>5_no');
define('SECURE_AUTH_SALT', '-@LB|LP*qmu7}b{G[JF|vCwFW~ZS)U*K8M%eOBgT.(_:jJJK-dRcxZY-Nd?)2yCQ');
define('LOGGED_IN_SALT',   ':csl?i(A@|jehez`Pa^R?yD2UiGA^`afI!d_09qlB4d^n@/hHKY38!V_stlcKEJf');
define('NONCE_SALT',       '0+xVFpN2;LMMW*HWr]diM6RrQqFY=(GO[hKIJ }:,}@#(-=`ByHAtD(tS_j1H$m!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mm_';

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
