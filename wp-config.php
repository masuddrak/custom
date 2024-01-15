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
define( 'DB_NAME', 'wp13' );

/** Database username */
define( 'DB_USER', 'wp13' );

/** Database password */
define( 'DB_PASSWORD', 'MSTBO..SE2Ub/2kU' );

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
define( 'AUTH_KEY',         'SYC7o<uBbTx,:goaf;6w01$N::CBX%1:e_XaON,[b~i&%rV3.eIg%OT=OD1*l~]:' );
define( 'SECURE_AUTH_KEY',  'Z. #IN9>YmJ$Xv0]=C=R(:kfk#ue#_=:#?(Hp02`Dj].<.N-$}5[Ok9py{-yO@Wx' );
define( 'LOGGED_IN_KEY',    'KG8CP4|!o/FAhfRlzmQl7tPTx$.cEq_-DiA!AF|5})b*mDUz;+KAK.I{Ymf(_Hb_' );
define( 'NONCE_KEY',        'Qr^Rc~r{Xvq8=}=5!q.,e`F1!-Bc&X<ZV[TB~yR=L+] fN8q+b@RM^:{`N^X0x-t' );
define( 'AUTH_SALT',        'STC.-R.SKGS6WjL|9bhIKfhmT{AY10U5_LXl9O?z8XrSd@9%7^Yc}BiFAmU~WiS%' );
define( 'SECURE_AUTH_SALT', 'jW1n#D?>_%JLaw1@,U>D2QR)4PhavxgC1(?Qz,$5>rw{JtqW7L}r[2|Zyt%v.Sc&' );
define( 'LOGGED_IN_SALT',   'HW7R>/#`(rut[FheM#zBaO^GsJ9Rkdq xrt^?XLr~U[rBFWn>)VR!lbXsF(Dl,%B' );
define( 'NONCE_SALT',       '5.<s3!rIa}J0rwzQo(<`t *c85SU;i {R}XW@,d=_6E4Vd]im-<cJ<A,%(k3c~aa' );

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
