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
define( 'DB_NAME', 'lycus.github.io_db' );

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
define( 'AUTH_KEY',         't?u=}~Pqdp(mcv}z!?bgIJHvc%|eCJ7LyHk1ZGSv~nER-V?.nytUt_xDc-{-.}J[' );
define( 'SECURE_AUTH_KEY',  ':$M3{Q;YsHJ;`(zqFc!:!^q%bnYO1pAW:.ax t^oD3OqO7IL[~~*9+1cqOpZ/D!T' );
define( 'LOGGED_IN_KEY',    'Hm.Wu4KA|E5KZ>|8SMMu)b3NNI(!D6&kuymW57MkYN*v_g`G(4[AP4Om&G_6g7sM' );
define( 'NONCE_KEY',        'l{PdM&Hs,)2/aH;M[Lh*`5gk,V]5@<>/+43jwi$Vki0]3t:$E2H=6)GNB|#&w?Zi' );
define( 'AUTH_SALT',        ': vBspkPwL}i^/EQKiWmG~4>{1od!IG#Y.U=2.nG0Ax7zQ#!,[riulS>1@b![Fyy' );
define( 'SECURE_AUTH_SALT', '{s+l<s5B=sqZFaQ]?laAIYxhXafml&tN{6gIr`reZ(MY(rZE7M{){/*z= OeIx3r' );
define( 'LOGGED_IN_SALT',   'a#9, ]zHTDxm<dz=8a_$U@xznf;P|=a@Mv NtW/lqdn4DtEjrC5mmP$;~P l+iZK' );
define( 'NONCE_SALT',       'TzE$>}bO+1rs)fi]u5/ziU(8n)p(/5)p`rFD[X*7kCTCt{#;I1DSu]dkjp<dJG`^' );

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
