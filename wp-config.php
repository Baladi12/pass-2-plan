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
define( 'DB_NAME', 'pass_to_plan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'fc;NDv`T?*QOO)RGz_:%@+Jk;Pl8us#y.&u:s:Y8p2cOMLoIZ@#1+DR/>@;C+Nn5' );
define( 'SECURE_AUTH_KEY',  '3 xX~{Xu5stS[ww>FKSZHwtLEahKB$ii]VZcy]p|Rqpwerc>4:qIQs:GsrGwK=mN' );
define( 'LOGGED_IN_KEY',    'yI<xoQ_*GI&IXAEFZyV$2D/>jG*1gpfqqpy+(&dmFu?1<[WGH*(Zr=m)&vlds&,]' );
define( 'NONCE_KEY',        ']}cz;BTzn80/c/F6A!Dtz/-I>KorjYUs0qFi-CG%`En,_M#$:H]EXqfx_ <4lphZ' );
define( 'AUTH_SALT',        'r,K>>2dqFP4lF_b}Lwc#>ofay-nt,.E(nz[oT+-D.+%PTw-!lr6zgve#6e_UsKhA' );
define( 'SECURE_AUTH_SALT', '^d,=w$u6)>26b6q<S6;8Z,/rV8hr|[BBE^cb-}BH.)c 0K|_QKvi(/O80k]%(2~}' );
define( 'LOGGED_IN_SALT',   'kXt|qTJhY{gnz#>5G$E-ppy`D2hr!DV >0##*)Fe^HejysIOo]bDbrGFDW5QTVG,' );
define( 'NONCE_SALT',       'ZU2W9kVHlwA@*Z[h0@H*9zU~5$sHJu$gdIl`12Ez?~64s7>%eORBeTx*RiKl~_L0' );

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
