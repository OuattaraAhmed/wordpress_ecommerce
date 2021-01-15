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
define( 'DB_NAME', 'mystore' );

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
define( 'AUTH_KEY',         '7/yNouCS*kX(tpiOfj#Y97,mf| />!yw_wZ_(2UC^!xSAq&S)gxe0BTc*62d|2L^' );
define( 'SECURE_AUTH_KEY',  'A!+Rt?Mc#y=APeuf,/GnW^rlP:RMkl*vl<D${Fj;gCLk%5^}#Kx8lrnv32+!fH5W' );
define( 'LOGGED_IN_KEY',    '6jiI?I{O8^}sxE3HE]9X{s?Tjh#Y/_?:`E:RwRC^=qM`]Im,447TV$7Nk0kFi<e)' );
define( 'NONCE_KEY',        'c=JV9YaYf8h?&=C:5x/#a5m(#?oXLu29M>*(}431*Eh8HL_hYr~&v5g{dz(!0BFr' );
define( 'AUTH_SALT',        'D[dDn3mc6r/FjnNucKcT]O6^)XA~@XGWUsEXCZHkONF@Y!v@+gFT/>,.V8:mHRc:' );
define( 'SECURE_AUTH_SALT', '8j8F7u=(*W=:~or7aULuQQNR5KO3i|C=.Fw{,sp0z.;T3nU]n5S*JswAl*#]sNDf' );
define( 'LOGGED_IN_SALT',   'B](*[`7PP_e(U`0aD}CEG}GU_D9+kDftDhf2eMuiG0u{O4{A.kBUwU7|hTq:9#:@' );
define( 'NONCE_SALT',       'BjjTh8V2mI7{Ea&h:1}20ZE>.*3MP2 LH&p?O=VKQ:mN`?&r)g4^nUd#x:-DrCuA' );

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
