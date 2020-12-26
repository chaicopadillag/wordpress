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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('FS_METHOD', 'direct');

define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'code');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY', '][(9;U+o%F e]2g**k6[wjL-zo2mJ=,q&8.tt3oa~#(S1V&*oi_q_$Cl,Ylu t~S');
define('SECURE_AUTH_KEY', 'L3F,i`6#VWW!8/x(S!;9;w&HV;=a}W##BM6NS3`GjpzA2hb&8/bAnQIhgU<>0K{A');
define('LOGGED_IN_KEY', 'VQ[|f%Kb(2wJA0b$F~h[y:jE ,c*YJWSy{Cx.sw)Z=4+-7CfG#3-[e$Uzshv2]Al');
define('NONCE_KEY', 'zy}kz8&dV7 | 9u1|v9^#aNy%,.gxo9yL:C?_rHOW`4uTf_Yn}U%#H:p]EY(ELZJ');
define('AUTH_SALT', 'k7-.h)aJ|L#lJLr;}a{qL`wZlZ$7Euhx@#DBRsP7U&blji[yJS& F$th8IYRkfk,');
define('SECURE_AUTH_SALT', 'S_GMwR%gorB`Cf#?a4@KQX6Cd$E83Q}Y[Nj*1/Xs>0j4=Lspa&v[6%?yQf%!@~)B');
define('LOGGED_IN_SALT', 'Qw-%~8oSGZO=0zW-NtUih|n`z{e&WK!|omrc6E/i-Hgk;;xfi;SJ,hn`IK}!G6w*');
define('NONCE_SALT', 'x<#-.)5?&N,SL_6.A(= :<%sI[cZ5A9N?rM<f{C jLqge5MV,c?MKa?=:Y}%9|rV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
