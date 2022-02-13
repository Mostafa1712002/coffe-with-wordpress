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
define( 'AUTH_KEY',         'ESbbaco6+(lV#77!!$s|I@uYrtA<L{i_igC)6l)ihh4FHNtYwPMi/fNR)|O!>;?0' );
define( 'SECURE_AUTH_KEY',  '>=^=:Ar-8R@zPbW/jo_v?0zW68BSRM^tI,j%vm0#7,iE;.[uM5=4 ^SfzYgjLbWn' );
define( 'LOGGED_IN_KEY',    'G@+ft},BS}1}*u?|5t*L9_`Q~Wjtm-hYNqRfT8V=7*[ey:VHVYF}SAdZ&[cm:*]y' );
define( 'NONCE_KEY',        'Bt%,3b7du5kP>3WVHHfcJZ,$Fis3aW;{_CLoF*pvakTkhtq#`a,IAc_nP)>5[?]h' );
define( 'AUTH_SALT',        'LicEq2)@xKf5eF]deP~)KRwf}&F6ek7yP~{lUJv}H_&CVKf~AuNmr5`j7Hn,7Oie' );
define( 'SECURE_AUTH_SALT', '[N*<Hc^/Sg!SC<?sxI3Lf?&MBB0/84eOMhLD,/~?EJi[ioMQjA)=oq7.>aT$rg4u' );
define( 'LOGGED_IN_SALT',   '0H3F$#W`jy~P6P97aDY9DfZ_oA;^+Eo,TrxEyBa|8h&ME]9w%&5l=vvqH]02ECj0' );
define( 'NONCE_SALT',       '/G-;i1*,;9Onn,<-&X~,XUDTF]O]r,g?Vl#fA[yMmhWR)W]g)[U:<MV(%r.gSS;w' );

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
