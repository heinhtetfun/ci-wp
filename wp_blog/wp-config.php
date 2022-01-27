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
define( 'DB_NAME', 'ci_crud' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '*+/=vD1UC[o-89|`YJot`-jZi>e,9ZwUl,)WEM42t$gQ1u(04hvwrryX!1>r^ja~' );
define( 'SECURE_AUTH_KEY',  'kKBO+ 5DQ$7-IENfulka2},BCj6pRdr>$[l|_4>;kab!de)YQqT&i=I}=o@14Ur@' );
define( 'LOGGED_IN_KEY',    'Do3&s)-^03K[=2k#R?!:h4J@>*TUx/n#ne[s/Hy:B^Iq@XS.H,[n]^]n#KE8_(r8' );
define( 'NONCE_KEY',        'l1Gni.=~yG&}#V}>-lqlIWCP4u#gh^)c}n9F $HGZg(Y0zyG]60sv)-WP:xA>rE2' );
define( 'AUTH_SALT',        'JmOi4~_ofmw_4%/>2!!aDMXk8J^[Fueei9e.FFhrduuBcP]i @{H!BJz0o7)YcX4' );
define( 'SECURE_AUTH_SALT', 'L)`8dEW)%$|U[v`ctCQiz*HXF:y+~,i1(xb<osXuIxB]b E!(&4q5#9Ls#Gq{P}e' );
define( 'LOGGED_IN_SALT',   'B_!byap?*xrRAZvvTR[q,YI;Xyjn,Z5$,qyE6D&A25XR0j+$i?JCx57sB`&]5BuJ' );
define( 'NONCE_SALT',       'N$fbAcDHkk|tM=sGT[#PZ}B!X~rc/%1flU(&6!D^Rz<i)/<U_soTzH8YFR1-qo/7' );

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
