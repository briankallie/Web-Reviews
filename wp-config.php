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
define( 'DB_NAME', 'bkallie' );

/** MySQL database username */
define( 'DB_USER', 'bkallie' );

/** MySQL database password */
define( 'DB_PASSWORD', '2pkmgCgkx' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TcK>23=s8}}IEMd{$-_g*Rt(HTwYf=a,bB$U6-C%5cCqm3|[;GT|m6`[SpNMZ9dw' );
define( 'SECURE_AUTH_KEY',  'AY@urHb&qGtmR}h@K92.1)/D|~5`Agm!yJH8+h5l+c-Rv9d)?ry(Q:e2U(xP_F)=' );
define( 'LOGGED_IN_KEY',    'whi5-_%?#VXoHwnHPn7#}swh`A}V}R%q9Su.tf%D[CX#JbZevy,bR|+D0/`6L*-|' );
define( 'NONCE_KEY',        'O{YQT>#u;uidoxdHx2Qs~P;K>5S2G<;E(Dh?P!?_kt|*<w0`d=e(iZEAM~t]YsZk' );
define( 'AUTH_SALT',        '@X6^q{^:hpvs$6,5tpoYDO1gHrtT>^.Bs}{r.uG>8iZY^D#@vDJ {._bSYNQ_B6Q' );
define( 'SECURE_AUTH_SALT', '7A(es0#4:Zpv=aS!U<oP|eq5t6^,+gU6gPWH/Hj~!dUcC,$:WFz27d$~OtSSko6v' );
define( 'LOGGED_IN_SALT',   '$=R+h]PhWEh9=*i&Cf8VWF7XrP;l/l=w3dqdVk%A5$&/X&1 4*g&u}]xj]sRgGe4' );
define( 'NONCE_SALT',       '|QfD6%u$9I=$! C#~ I$#A,&m3S[bk+(8Hyr&#] zb+#.oj5fzm<0Tn^An6,*YXA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wcmd_2208_f_wp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
