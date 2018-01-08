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
define('DB_NAME', 'daniel_rivera');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'c-_!><~WzJ@GS*Fv{,P|K8;XL%nN-&[R lQPNlI~a,2!xT2YB237Du#hX^6=2i<b');
define('SECURE_AUTH_KEY',  'gyurHS:VAy6FbnbA.1} =rE*a0P34x{+_ Ne6LkpEBU 2=A}R_,*. . n+0Iq )Y');
define('LOGGED_IN_KEY',    '#J8SoTl2ox$d.M{jZEk|P#~LnP0!>aR*`3yqjFGJQS-h9Qj:9D0eMH+s;r}jFVpR');
define('NONCE_KEY',        '2TjfE DmQPsfU|W$5$~3q@z>UWs}vx2A*#eRMZhpU{t?2P6kzy3!Kx5|_!3/Bqh5');
define('AUTH_SALT',        'j+.FsDG,<0}Nf,!YErFNdJ/oR)ro%SJ;IQy*4nB0c-4`*$YN&[m$,yv5||g6egG`');
define('SECURE_AUTH_SALT', '`lt*,a}!^^<xJBZl`G=Y7;Ioif9`T0N*9/2gJ>X[lkXp;{}8}.[mBp1PyXI^<P7b');
define('LOGGED_IN_SALT',   '}J*81#.U2}y:sp4cj?QDR4hy>r572^!-j,+s//,Y0b-!--1F-V M3,Tbb^K,Xp.+');
define('NONCE_SALT',       '`U45fS2*9VO|;LUgAY#ge-lc;^`~HuYBFZ[WRA1Z1h]T.GnP:<hXn:HxI@bKd7_A');

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

/* Multisitio */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/app/wp/one/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


// Solucion memory size exhausted
define('WP_MEMORY_LIMIT', '256M');


