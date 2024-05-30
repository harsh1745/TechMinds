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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TechMinds' );

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
define( 'AUTH_KEY',         'HVHKG?0)ZzV?y(plz+6AX=-)j~-n7>h=KJ($KkcJ9>`{YS_S-f/3!(ghe?8L==kk' );
define( 'SECURE_AUTH_KEY',  '{Aq,-8>EFDmk;!6;z<~a;tJ<kpC$,WEcoS!Gr&)CwQYaTOTBF_3*cKnU[hew2~|l' );
define( 'LOGGED_IN_KEY',    'TD6,VQ=kKzws2j8&p,^+lYYX6keV+d5+vPpbES|{}~/3+D$D%ZR^r~V9y+vA0j 6' );
define( 'NONCE_KEY',        ' n=Hziy9;D2D-HC7OgN5HilsI9Z!jm@*Nu:fEoaOdJ;pVM0+yo#h}Xhw?R8 &ARP' );
define( 'AUTH_SALT',        'DI>uPPeoWr>2({}vX4+<p|EY+6ba(/?PNXP<gkPUD|-2&VXL{`Ol!H{(A4fa=VPg' );
define( 'SECURE_AUTH_SALT', 'xOXbK[8;xptDnbiP=W8e&j_F1@/%qY/R%pv47r)2p4wQz$N[%RKSwlU+}z)ES<(T' );
define( 'LOGGED_IN_SALT',   ' qJC}:4%/V%Bl/hPs+x-qoEA_>d@xtNJ6{IhUN-T:lv1*`.|6Sr,12r+6T<5`~fW' );
define( 'NONCE_SALT',       'Pxv#CHsOBf&8k([g[mNT_/{J| -*:jZ,XM^HWNCMW_+LPY4i/dJO_Z/|TjFR8eY ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
