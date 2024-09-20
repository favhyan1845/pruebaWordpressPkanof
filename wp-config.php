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
define( 'DB_NAME', 'wordpress_prueba' );

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
define( 'AUTH_KEY',         'k|@pZJ{2P2+9M;!a5#QsL=Gp,HMf6xOvM$(x:LmZQJ=3c~DnPm92m@VQy,+GClgn' );
define( 'SECURE_AUTH_KEY',  '(i*AA^r1#|JxQSIBdU/FTlhx]X=NBMbg2ztM)`.syw>cdM1d|>RM&4xT,f~7S]q.' );
define( 'LOGGED_IN_KEY',    'YTJb2{sM`Lc;/aq{6^>{;;5ZW^$m&=Q8oigw9|J_5LMC9a.SLAIlVZY&[TeAXXyH' );
define( 'NONCE_KEY',        'VIob|kPdV@cGSJ{S1$k{-LuI.f#RVnV0IM5yGy94;Nm*Y!3+ni^i?J`:Y?U< EA:' );
define( 'AUTH_SALT',        '+V0Grr]W7@jv35VX.E(W<qfyv>*j;u! R=P4<k}fDMz;@~EzwWJkq`BIf#+MCbe#' );
define( 'SECURE_AUTH_SALT', '^w+LgJtS2:xRj5K~,sH`J:Aj(i#CdV,P%#;3*JU):Ft(c]$7y,P3.|s.iaAkLurL' );
define( 'LOGGED_IN_SALT',   'gEmnZ^5Bj}_(Cz.tf#1bb8#!, +aW:o2wT0Xv>6-yc6(2;%6e6le!2eUkILHyT)[' );
define( 'NONCE_SALT',       'jGwJ(lhJP(7g*X0KPwYg(qIyo6K]m?SN6Y/?|]T#&k}.OWCFE/+^]5Jd&/g?SvI ' );

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
