<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
<<<<<<< Updated upstream
define('DB_NAME', 'aabc3_wp');
// define('DB_NAME', 'db151025_aabc_wp_2015');
// define('DB_NAME', 'aabc3wp');

/** MySQL database username */
define('DB_USER', 'root');
// define('DB_USER', 'db151025_garrett');

/** MySQL database password */
define('DB_PASSWORD', 'root');
// define('DB_PASSWORD', 'h2osurf1');

/** MySQL hostname */
define('DB_HOST', 'localhost');
// define('DB_HOST', 'internal-db.s151025.gridserver.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf-8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_HOME','http://localhost:8000/AABC2wp.dev/');
define('WP_SITEURL','http://localhost:8000/AABC2wp.dev/');
// define('WP_HOME','http://www.taabc.org/');
// define('WP_SITEURL','http://www.taabc.org');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}`o8dgx`Cx7jIKWQJ+wnz79XvB+Q.!^/PLFf!Wln}Y^+`^J$9%XD`>07UBj8ht*Y');
define('SECURE_AUTH_KEY',  'Hp*bRDBLfYLp6 8th+<B*0N/31|3@>L@N-V=BnNYFHx*@]9W0xp0:GP]rM,u6.#r');
define('LOGGED_IN_KEY',    'K(ohd:v~F{87UlMpi_7+>q.D&?;gq8dX]..>4+B$9=+T{x|-#GBP#bi+E&Hu42IJ');
define('NONCE_KEY',        'C3l+xGkK7|U`zO`&HEC5Kk4Oq]o3K((|/hIZw:r1=v/]lsS-D>S0;2&+{KHa3_W:');
define('AUTH_SALT',        'w` 1Z+4G;d-=3Jr]VH_mMw%Kyi^V{Gg<DZ%nbX~1<T;^^-;3bY@.M!(6FxGaMEg8');
define('SECURE_AUTH_SALT', '+GW307-UF^.!;,T4O+)m]sm52@-L|Gv- =M-ahsN^*B/+&#y=p[>EeySehiy!Qa/');
define('LOGGED_IN_SALT',   '_X{@Dzw,9%;xkGb3z9Ku,(Qm3Rs@eC*Q+ElnA[C5vxbI2(+RdhUN0`dE<-j.Oaih');
define('NONCE_SALT',       'A?yE.TG+|@v)+}$7mHXJ{KE@gW~R*jo!)I%x-}8kJ,FUY1yU@JEwv%<M7pDl9|$<');

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
