<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pahura' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',ug9BRdt*dInjpb+ID5LB*#^.*%*lCab *p?z;*s9[U09wryEQo}|XR>y0WK#Zqm' );
define( 'SECURE_AUTH_KEY',  'l%1Ul}nd.p.p(K/d8d9ZnjV=n,8L}1!%vO0)$YmhPv=[bjMz}[lH|Q{z.%6L6Q>4' );
define( 'LOGGED_IN_KEY',    '7OR>-9K7O4f%f|?.r2#:k<8_6<HS!%{b|ex_132x0IO`kJUoKF1>[ZKJ2wL&jGyV' );
define( 'NONCE_KEY',        't;zsG}YDO~]zA,!qSB]YRD1ozs-y3Db 8HUXyS~KB3C6a@)!8*,?A~;X|7M0eh3p' );
define( 'AUTH_SALT',        'uop1Vz=--rQ%w<&FcQ8@+q3@?Ph3q@:yu1.{XAg(5lS;[6):+88qZaKky3*3MiQH' );
define( 'SECURE_AUTH_SALT', 'UB$mE3X<4v;f|x2=2xn:58wC]g)4Y*1#:@<xN15)?<:|#+f,TWT0l=fG4*}i{M:L' );
define( 'LOGGED_IN_SALT',   'u ))4n=pbn3pL4HL%)!:F1ko$O,9MnJa3ZAps)zUF^lJG&bncio+wagf@{.TC?x:' );
define( 'NONCE_SALT',       'Hh)HuE 01zHd}:>$S9t5yUVVQt`M>u*-Z??0sXy%.ttXhcdaTDZ(UqSnI,#xpf82' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ph_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
