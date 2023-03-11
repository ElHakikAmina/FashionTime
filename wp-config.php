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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'FashionTime' );

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
define( 'AUTH_KEY',         '{YirfYSB|MqfCg/xp.HM]v8P;|EP`U2zXbfDVK/Wq?7:p$=D8T/yt&>?8c(6x7y^' );
define( 'SECURE_AUTH_KEY',  'k:H2]]nC@r,L(Id;Z7dt;t-w%Q3<b,|2V4j=f~+b(~F:P6[<6+#O??30]!T E(S|' );
define( 'LOGGED_IN_KEY',    ']l4Xs/Ahq/k/P^B7,qA_Fa1B*i]Pzi!>m*@AE=7Y{>jO($DNpM=mUd_v{<S@u^2G' );
define( 'NONCE_KEY',        '5K |qLf>57aNt?-% ]2AB7kCoMmj{--Cq{MY71f Q:y;|qLn2.o#)0(mtG<4Q@M_' );
define( 'AUTH_SALT',        'A&H17vi[B=,?^|lUPMD4=W0H6)6S0AALAU[3yZesv$3^dT9^3 MWOr-DoGp%eas/' );
define( 'SECURE_AUTH_SALT', 's)9l-s3ANo?~YNw~c/k+f5l?k8T:ZrgC+vqvdS[GEvRP<P6<*I@3n`y7<^=al925' );
define( 'LOGGED_IN_SALT',   'GnSmgW6@>F9Fe6_.tP#`5T9NDFqf,9vY@9igkJ&%h^{B~Q#:]kn;>!{C)^msbh//' );
define( 'NONCE_SALT',       'PJqs*W_!G2X=58J>%qbGol]5W,a-hya$eg*ELg}beUMig}@{d&)|!@~fZ5Ywv+Pd' );

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
