<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// web-dev-docker
define( 'WP_DEBUG', true );
define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_ENVIRONMENT_TYPE', 'development');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

/** Database username */
define( 'DB_USER', 'website' );

/** Database password */
define( 'DB_PASSWORD', 'website' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H8!50`L# q`*uF{Tx7V|/y$e(|0~h];&a2zpo|bI.?Vk=<gVC]qF^7w2z%v/+bR(' );
define( 'SECURE_AUTH_KEY',  'Irv*x/5ju=~aYc*:,Nb7-m+p,1pfBPBwmf[*GYB>a|!0UzbPwA1[txAcKW/n@?AC' );
define( 'LOGGED_IN_KEY',    '4_A^jd>M-|kgm,g`s_PAie!>1Yu sf;5SE+35*&j.TEq{AISSv^YkrdD+`2QZQT^' );
define( 'NONCE_KEY',        'mds15}E*GSYttFonU+jk@OSi[[qKt=5X2M0j}SB)NLNDz_nvY^>  ,DR%G~+taH[' );
define( 'AUTH_SALT',        'w|3 USKu?y$N_@P.vw_vyqwV8.3IherpaaA9(]sPr0V8ruVv$#75 pRr{Cbdjlu ' );
define( 'SECURE_AUTH_SALT', 'pL+4dB~K:OHAF,G-(I:~>Xa5MZ]dNmZ&@UU9Cso%)z@{@XJ}~mCo&OTh]S hNLPa' );
define( 'LOGGED_IN_SALT',   '4nn1vSM>;KRm1ADgatV_A )^xJ K*;NPaDFRQ%kmMs#<dri+4/uO]jjqZ(*3_O?i' );
define( 'NONCE_SALT',       'wTv}m,CL3SLRbCX/X0ryK-<PUCGEv0c?Q8a7$5B$Gg]|ukE+>.7w!{3TY,s[f0FV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eksd8_';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
