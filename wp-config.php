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
define( 'DB_NAME', 'print' );

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
define( 'AUTH_KEY',         'nR@K,Cl$1Z$.NL?)euKhBFcw>QVcXA2r?r@/8:wN>c[L>*9+ID| aRT8z!Kb5]DQ' );
define( 'SECURE_AUTH_KEY',  'gK%!R^4E+qhL<Xl|r)j/y:J~V`ov8&xsqNIupG:CA?^vE2Gp<<8=yAfHS{FKcu<A' );
define( 'LOGGED_IN_KEY',    'r#NAwXq1N/l>7s:!S$X{d@ref5 Kcc*#)8jd8P|ood=_3m=%KCc@Jlf%PrZ0JdII' );
define( 'NONCE_KEY',        'ZT?~_cXdW ]%enC~H7+Ur7+7ua[?x#6GSb5wC_O)de$b,oI_5IHh$T5s$(y[t*Vs' );
define( 'AUTH_SALT',        'nLkP2(%`26jhm9<(n@&V,hnUmfU`Kvxo%!g/cU7$F$d+U%YrFoL>Vs`Q 6k$V)Ii' );
define( 'SECURE_AUTH_SALT', '$joUO23%)_)hzD<;f.ea0A&OEQ]pcm}LJfa8MMqH4p~E}|t]xbG>5-KJAo,)Q7(Y' );
define( 'LOGGED_IN_SALT',   '=Wv-^q%Y,!epgeXooIs2U):K@8cVS$;i:oNXYVtC(82p`p9!~@%FqaDq~*&&.HK&' );
define( 'NONCE_SALT',       'C,cEmf,3ZJuGkPfRFs+:w-NV{ebp;_nFe+n8QrC<s_w$@MA@.^uK:/v-# G(@hS3' );

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
