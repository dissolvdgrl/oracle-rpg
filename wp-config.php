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
define( 'DB_NAME', 'or_rpg_wp' );

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
define( 'AUTH_KEY',         'm5#?PeDqeYl=w:R_ydJ=X@y4swi2AMw&N+hA!Edt^{bK@YQ!Pt05kv43x>*d/A8w' );
define( 'SECURE_AUTH_KEY',  'he0m+Ie(IhIeo$OLpD![`>0-.NOO.d8tNW(<`&*OEfN29hdMzR@!LRycTa liNqp' );
define( 'LOGGED_IN_KEY',    ')C&^T*f&sl)FyO/%V4JR]43Xt=Yph?K%iDSX%A+nO8U2>`r-F0%xnK;K,|[&N&`o' );
define( 'NONCE_KEY',        'SiALuT~sPDj:o_6#C?yh)`vluM$i?].Y~g`q5G*-iDYBx023p=Q?uoRs!f.>Cz/,' );
define( 'AUTH_SALT',        'pde:Z0N4J^*j_5pqvM(F13Ugc3<(1!2dv!Sm&95O[%5{+k>8T`|L}V?%oKc!<]wz' );
define( 'SECURE_AUTH_SALT', 'eheGW.z9R*Y6Y[i8)MN]b*QJsbK*mND]CK_[8R}-} o[9Mlj:6tB:tgLM7G]g~d{' );
define( 'LOGGED_IN_SALT',   '$Bf9n~4t4=!]Xs i/BXUw[`G;*p.D(rUvR%f|RXgc9c9FD{SgPZ!9z>zL`@fyW=W' );
define( 'NONCE_SALT',       '^2I-oU2tp*ElC:hqbob7eeT*!Y#{]-03)KD6o&I|B[]6Q;Z!sbH yddAd:t3(4_V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rp_';

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
