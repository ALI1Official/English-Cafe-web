<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecdatabase' );

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
define( 'AUTH_KEY',         '|mDo,U`0/91t%Y3He#~Tv*OTQaLz^z,:G=Ed-hV@Cqr9y?!}MsNuW$aJ|HhDpMA.' );
define( 'SECURE_AUTH_KEY',  ';xCL>Xg[olypcwEYQr&#]b|O$tCvn{KAM5#<e~`MF/6hrP/ymC/M p>5}V$f>K1#' );
define( 'LOGGED_IN_KEY',    'J.khm#6|`#/syWd7fG~pC+>p=OIn|i{&.;Q/DWxXvhdNBt ?]K&]XlXgoRWS.mKB' );
define( 'NONCE_KEY',        'SnB|c*@{(_=!ex)7Wa:_w9n+@mT;lxIPQKKft0 $u]%J1Px0oMepr`Uo^G2N0_M:' );
define( 'AUTH_SALT',        '8:n8rYg1~[.9l*S[XmQ^fgcD19.>-Tj1s4915Q EEpfqLB)wOz8ZfiCAbpHdLN[M' );
define( 'SECURE_AUTH_SALT', 'U+6+%`=BA=N8<|1*:#b@2D,pC6:+ NdNYOR*PvA%JQbuc#[K(0i<EP6FOe|q6#ux' );
define( 'LOGGED_IN_SALT',   'mLg$HKzp}vZ_Ee41f/F6H,bD@v<|iOV$2TB r-/qDX3%tz%xZ3^tU/kW,nP&wn?&' );
define( 'NONCE_SALT',       '!n.Rvw<7 )^la}Kvm>$IOkfm/xOgi]&_*v3xifCI(i[;nC{_YYSqIp+BM`*o8a;e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
