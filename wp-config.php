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
define('DB_NAME', 'SitoSocialMonkey');

/** MySQL database username */
define('DB_USER', 'Mik06');

/** MySQL database password */
define('DB_PASSWORD', 'mikinter06');

/** MySQL hostname */
define('DB_HOST', 'localhost:3307');

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
define('AUTH_KEY',         'Im]VZ*)S4.a3T?-*e!(cbT1vf%#m/+7}7BiAHz-xx_Tme(&R(}8N]F5M!lS<zib+');
define('SECURE_AUTH_KEY',  '~LESi#]z=eQl`NZVuS#Y*{bF;O0 IU?n1Wey`tAG|DB#{JJ4t6o7|qK)d7-gr,0v');
define('LOGGED_IN_KEY',    '2X,|(06Rr$tu!D<qa;F.pj&%l@uG|cMa{9)O8VfS|.h+:Z&tg7~:k f;,x</t;1Z');
define('NONCE_KEY',        'pQ|h=4BQ#Xyi5=}DC-P!d*U|:=g/2UJ9Z9>rqv,TxIa=;-mLH ]&G+|([a`95%4}');
define('AUTH_SALT',        '|`z#e+N_K57[K#ga@O4&_`F`Kzr2jR(=f]iq,}vz~O-jy,pQN[wEqI[B0WqNA&^`');
define('SECURE_AUTH_SALT', 'z1|y|$5Z F)9^2 &-`p4Br314*p`{TEYp,3j9GLCH_|o-Gmxza=z!ED_Z^yI*?`1');
define('LOGGED_IN_SALT',   't]$p<J<=r|}^d>Wqr92lIHsj-lxp- _k=zW;X11[3XnTq_RJ>_8 b_m9u{hoQX*2');
define('NONCE_SALT',       'FaOje8SG%UiPj(%HN<GH+DX5S$A]=E6~w<~;kH:`XV^ySlJu]Ie&>nxJ|g(#$8XM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
