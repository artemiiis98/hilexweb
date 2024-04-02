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
define( 'DB_NAME', 'galaxy_shop_db' );

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
define( 'AUTH_KEY',         'aI):nb(M)P*F=e_nZ[A[D$p#yHcr<)a&h8%ldo7,DETcu0JfPreq.-WU768Axe/x' );
define( 'SECURE_AUTH_KEY',  'dY7wf|-f8=hL)9Zzg[F;lZ$){_Z]g.V%ErsG3k+[.Ib:H3$9J*B3e9]Uig:}_w!O' );
define( 'LOGGED_IN_KEY',    '6F?km)QRmGQ*$o:DAzfG4.J<F{sZe=FYIwUNh1M_jn2hE{MFy9NHI!IB~QE!ILTf' );
define( 'NONCE_KEY',        'b:N7k9}eg*YW%@C@`TOAS*u5#W}Vj/lndEM3*Qn)#)B5w&lA&1+g5==]{)zv9RIO' );
define( 'AUTH_SALT',        'kM->VUE7(;qf4BKUefP[[vmV $SW[Hi|?yFGQK.<;WNlN|HXG}uyn]U-mE?@q&x9' );
define( 'SECURE_AUTH_SALT', '?Gz7<vsBkz HA~~Q&zmkJ|#QGN!^t,(nMm,,Vxlxff3>{;#2}?VFh4U?$Co%Q=Q1' );
define( 'LOGGED_IN_SALT',   '0y9YfE}MZ;E7>l&AF#[a-3n%5i2|]!u0{cTlOoMY$XN/;$R!t&PNU/SY,T2H &Ya' );
define( 'NONCE_SALT',       '(Kzxon#vd_Ft&R|:xLL5FBg[co>=rHd=QG=wzK.#1grH[wlm./[@l@e$i|CD(E_]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'galaxyyysh';

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
