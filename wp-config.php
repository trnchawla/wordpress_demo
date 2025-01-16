<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u384771567_0gryn' );

/** Database username */
define( 'DB_USER', 'u384771567_8tMyV' );

/** Database password */
define( 'DB_PASSWORD', 'cqM5upBhC5' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}EsvXW?0<*SIAfxOEo<wrs ;l7DTEb3nzv1-#==tFc2$.^B;Q^I?*QJ}?xoLIoBE' );
define( 'SECURE_AUTH_KEY',   '+mxZXlSnt Iq#$E,bDo/F?:s.>GZWj>kPq9Hw$J_g^5yj7,w$+i#@PZa:M+8h:.W' );
define( 'LOGGED_IN_KEY',     'HI0VxYL l`P;NKy:Md=qAI_T4[.*?JVX>Rpy<8!$nV DklkQ0_fc&o0aI63X(jH^' );
define( 'NONCE_KEY',         't1w$4~>YOwdVVR9/Ltn6@oK[@#!9E#:bSB h{@bD2_x,Deau8N]J_3*`x-m&1>@?' );
define( 'AUTH_SALT',         'O]XM5|! tX/$1:~Z2C^|${wswsx6e1*]<Zj>0N1&).8[S3:}fBp`Yz2@J-y-Q89z' );
define( 'SECURE_AUTH_SALT',  '$L7<U9,<>C)Rviq9ysE!$a:~Fpyg01 *@5%jmV*irVMlz0a3!Cq34vulGt2hV,#P' );
define( 'LOGGED_IN_SALT',    '`+W2t$V,1[8nOgnS  X#Cc(EF~T6_)Q~B-6t;h~1&$9~lRX[aw{cCeKvJV=?&1rK' );
define( 'NONCE_SALT',        '`Suh+Jx@RC*A45[H=5T%-JSZ` `UM(K:rk*OJ0JnwT#QT;.KUQMTOqN.1$F#/4)@' );
define( 'WP_CACHE_KEY_SALT', 'l2B!sH`.xZ.i4s3/Q7$q>rN|B>)A>*B`pliS:XD ?[%x&$;qA#*zBzXC=eM4zsEU' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '106f3aed0b8ac550dba71ebd9716ac28' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
