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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Y Aa4 6`W3)j)B8~+EUR~n2fWuW8$Ecb)iwo&7#<S(yh/kNmo;-})p(Xy2`A*&33' );
define( 'SECURE_AUTH_KEY',  '|H;]2$=)jS50q(f!#OPXAGL0|NrVk[x7x] iTiF8FdNfWVI61$CqT ZtzFD|>AVi' );
define( 'LOGGED_IN_KEY',    '(#>WpB^i0<330]lj5Ff@)kF.Ii<OuVZc{D5}-cfnob;]F_5uL*ssA9D 7Is2haz|' );
define( 'NONCE_KEY',        'zt*/+$/&bHsIKwd1(aQ&htQZG.G^ <_;|d+!DOT]Fz,UGB9F|F5+Bdcg0s^m:ZiD' );
define( 'AUTH_SALT',        'YSHG},Lc[yup bw##tS)~.XT9:GhiiPS-}P}@Np&!GG]MGv0GTM<W9il{cbi#T.H' );
define( 'SECURE_AUTH_SALT', 'KJTAfYf@!Co6 GeVB({{GwF;MX,TI-.DmCmIV,i%nhm9C^;%{U!mVsnwTWh>gR,6' );
define( 'LOGGED_IN_SALT',   'OcT8^-Kgs;_5bDTB.V%Si)k5 43+yM[]U=?uuf^mq4(JV3LC9.1l{[Sr,`Q[oXy4' );
define( 'NONCE_SALT',       '*U^W*{VCB2X|mo4E:nkKD02H84h|/Y{6h7flk^eoqq3nmGRn,Q+d@2<@zhi(8yCx' );

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
