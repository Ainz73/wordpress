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
define( 'AUTH_KEY',         'vi^yxj^QO<;+[nC^^L[L|0;==qv_(2cm{/$Ax ZAwK-8QB1 9V>`a1@b[3$p9Jq(' );
define( 'SECURE_AUTH_KEY',  'sE/35,]vBegF`?}M!ZQE$=)cs$;*kDU?eGUh%r%j,%n2J]+<~GjCGGa?$]:[qMqT' );
define( 'LOGGED_IN_KEY',    'QD&kF~u*tl]r/|jIkXc!By#`5mk]L9exn:34d6K(=03>+gCaN=.+=x),%gmH@/[6' );
define( 'NONCE_KEY',        't:zsv;qX%$x[wPd@6?1!n]3YrvLdVae|-8YEiiNj)kL7yO8F!:)jfJ9)<_BiHL/3' );
define( 'AUTH_SALT',        '|a?~w@_D`AY>Jf]f88Q)&:Z:J.-5Md8w&r>SqY!=^Oxr;-<eYCK0Ap09P`tu(D:^' );
define( 'SECURE_AUTH_SALT', 'Fprz$v:ZPLlRJ:<KZX6F`yr*q+FL:XIb%oWIKJ+{h_L9o_O4oVgWwN:7aj@;7q`M' );
define( 'LOGGED_IN_SALT',   'aY7oM?*+98G*=DD5gq!`zP d7)q|3KGTD?KfZ4S6U_jVk^FHD:z#fs&tQX5k [K^' );
define( 'NONCE_SALT',       ']0y]n=%O(Sx*_KWyGM?YG}:W @adzE-k~j1`1T0+Ck&mt5gbV$lhG9;m5oP(uF=?' );

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
