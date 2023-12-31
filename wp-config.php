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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin2' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'i?;jM5m)UDAmNU>pz_1YbU.heB[#p$vLd=1bj|x`C,Xhm5FOz)MXBVP-vGCF7L<7' );
define( 'SECURE_AUTH_KEY',  'L51+f*g.aXe1ar+:Y6Nk_dnYXqSwLl&*/QsI=oafgPo1E6 Y#>@h3 XxSq4i1W[z' );
define( 'LOGGED_IN_KEY',    '2V_zx;Rwrp&dnf%vn7 @o!?r+/gnUMy/#Ibx(L.I-PF>>r8&nwF][veg!*+w~aV[' );
define( 'NONCE_KEY',        '&L nEwSow-y.}~!nwMC8)hF$wsSu+3ys.y] HUzk;kHk=1ipO>$o(W$AibGtV);W' );
define( 'AUTH_SALT',        'gg|4wJ!DiXy71YpfAv8&T87l=L<H!=)lEJb>m@l(><<8<N*ZT2N+7fLV}L6N#/_h' );
define( 'SECURE_AUTH_SALT', '}G~q95nw24`Nqx|pucv4C*#~hEBBjbdal$Wz ,)L-y)e@d6>*bjhA&]EOd(g40f!' );
define( 'LOGGED_IN_SALT',   '~ad3^HaHfg]j-m|1( vLs?`1Bmn37=)%TuE:!pGc}~QFHE;{14o=JDy2Tt~vcLQD' );
define( 'NONCE_SALT',       '!Cpy%H7]L55h5/q{YUrWR;,p(0=)3[I]Le$2mbb&7}bUIH]?CQQ@<iE5i*yP4+%t' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
