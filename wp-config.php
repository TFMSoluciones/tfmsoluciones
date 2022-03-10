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
/* Nueva BD en local */
define('WP_HOME','http://localhost');
define('WP_SITEURL','http://localhost');
/** The name of the database for WordPress */
define( 'DB_NAME', 'u285418770_RCDVv' );

/** Database username */
define( 'DB_USER', 'u285418770_w9w6M' );

/** Database password */
define( 'DB_PASSWORD', 'pgmlHZtDxu' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'TC1{``c`_CzY{cxgp;*>||.N@v<$s$u{TwvR,A1b-g=#9JzA03wFrd&ehE4UBqvj' );
define( 'SECURE_AUTH_KEY',   'Gq+qJ8r.sva`EE3;`fhHvyh&KRe*I>?0S;&cvDDK<4{[zH.oGk4v$dQnSDn-6{H^' );
define( 'LOGGED_IN_KEY',     'QOPK</o}&R8z~oOJeE6zxE tHG^ Ge`+=6|uV1+.Nr^;q,8=^aNEzmU];x6<^Cj`' );
define( 'NONCE_KEY',         'DA76)x_($4WxStC;DGsw:&.ujOAM} XYP ^#v0*P5A)l$ssrQ,uxGQj=Gjz6Le(Z' );
define( 'AUTH_SALT',         'eZL5/[mnXt7Fb@pPbv)uqLs]yOGz-x9a0muu[Dwl_Uds$#*[ByiV-z3 >9tffjj&' );
define( 'SECURE_AUTH_SALT',  '&pBgTMy`0U#s%o0WbUI[Vi{|xtzCpR%HT3y>?GBgEnW/+nLp`CJ]Glbk%Otf`6P[' );
define( 'LOGGED_IN_SALT',    '`_NM$xdtGR3L3H*r1*q:[Ok{;-+tCUA/[7(,ETavRdx>8-ias9gA$k9%a0]E:,Dg' );
define( 'NONCE_SALT',        ';cTP9VaY/6OVYC1,r~Z?f0d0Y%7Q]ZZ(`x}Oq`_MP78ehFiH/VJY@fLZtw2*V_<<' );
define( 'WP_CACHE_KEY_SALT', '[)!y6sNW_6L,]yojNE}X6PRbx-RVeA)vB5Q_UoVDQivNz@;5bH^:wq/jD9G=:IW>' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/* Direct saving */
define('FS_METHOD', 'direct');