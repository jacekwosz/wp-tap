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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
$filename = "/bindings/db/database";
$handle =(fopen( $filename, 'r'));
define( 'DB_NAME', fread($handle, filesize($filename)));
fclose($handle);
//define( 'DB_NAME', strval(fopen( '/bindings/db/database', 'r')));

/** MySQL database username */
$filename = "/bindings/db/username";
$handle =(fopen( $filename, 'r'));
define( 'DB_USER', fread($handle, filesize($filename)));
fclose($handle);
//define( 'DB_USER', strval(fopen('/bindings/db/username', 'r' )));

/** MySQL database password */
$filename = "/bindings/db/password";
$handle =(fopen( $filename, 'r'));
define( 'DB_PASSWORD', fread($handle, filesize($filename)));
fclose($handle);
//define( 'DB_PASSWORD', strval(fopen('/bindings/db/password', 'r')));

/** MySQL hostname */
$filename = "/bindings/db/host";
$handle =(fopen( $filename, 'r'));
define( 'DB_HOST', fread($handle, filesize($filename)));
fclose($handle);
//define( 'DB_HOST', strval(fopen('/bindings/db/host', 'r')));

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e?9G>OyCE+M([VT,+!?Ay^Qs1>BS Rlw;62uVMU.P5Tox8lxn[<RUHY4!zlBfjcO' );

define( 'SECURE_AUTH_KEY',  '`8{?>q7i#}`^VC,<r5`C/;,9}BKjqzi#G`mjSL+ZXMSu;Mvb4$E_~-!?D[rU`8Y' );

define( 'LOGGED_IN_KEY',    '4(Ms(#w(J+!LH:`4cLO)fw0#95N/!8 UhI`{.:wCa,AvJ4#wtmH%R]YS%1;$p4c6' );

define( 'NONCE_KEY',        ';xp$Utjlcm,!OHMmQ,Wn-ax10:wjPS2>OOZjYgO:usM4UJZd2;41|e5NKg_^h;yE' );

define( 'AUTH_SALT',        '.`HC*+?~XU`Ih|x#]9Xa5[*1nE$1%q`-}LrgA<4IG(@1sNbUg<t#MWw]WE]Ggz-=' );

define( 'SECURE_AUTH_SALT', '~=Igj5IhSzd&}aAoF52%&$^Y)lpvkG=+gm$(pFW3|E%o<KKnUYS6]0Xxa80F@8o=' );

define( 'LOGGED_IN_SALT',   '{gXyE$H3Yy>:L^/t~S(?[Q9{4<&1ghE=l<FCX+MbWtuzAA ?py}at4y@m9<mEJRE' );

define( 'NONCE_SALT',       'T^+^0{eFWh&F6hb!`Gafz![mhaHqTNDt]X37D#7pK)cHaXHl({*oO!B83f3+hL<@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
