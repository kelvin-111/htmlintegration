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
define( 'DB_NAME', 'htmlintegration' );

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
define( 'AUTH_KEY',         'tLG(Tj7nzi%nT7n(Vy$%k*LQ E8-$=tVgA2~ceT3{x<C;! t@_IfB](4SX7cw79f' );
define( 'SECURE_AUTH_KEY',  '9Dt6Yjkz9^Wz>9/,tkd$srSVygt1vSVA8h,GC;no;`iA5:.^-MQ}jXkAA<h|1Cn]' );
define( 'LOGGED_IN_KEY',    'sh~|w.hoJb)mx5}8;%ETVmIg,+M4gOV/U4kHmDd-W3uZXk^{eL C+59Wt26Gx;,<' );
define( 'NONCE_KEY',        'Xsf{xI=wj!=,Xo&`Y}1+~P|mC->%n|S7gCnHh-VSg5.o=Jz/<T2o>5=jm/|=L:(M' );
define( 'AUTH_SALT',        'qBT?/i>~Q/MJL)~4FGRoe601KiBM|1@0wv.{[7^a=mKlJDm<?-lEXQQaJ>,*nk z' );
define( 'SECURE_AUTH_SALT', '`yLtrkZ:RKOfsp,o86kN{eZ2iu^qpEv{@gFxdj8Z0i-kvtwNpb(3G?:PR[^7Wb2?' );
define( 'LOGGED_IN_SALT',   'PY2oacCZ03^QXn2vWTd*O@]I,e/@,u&BD$:mvzhpz6i#h`S@D{[fAJ$U}&[bfNju' );
define( 'NONCE_SALT',       '*Q1x5^~7+GM1j5dP}Gav8hsf$8>R|uvL%|F;eUd`_DEblJOW&LfXkc7wMP{4L<00' );

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
