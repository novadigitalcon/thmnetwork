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
define( 'DB_NAME', 'thmnetwork_db' );

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
define( 'AUTH_KEY',         '&3hO`@hf?!}6ePv[)=~u[3JH7%!S@l-}2j)@-V,9_zy2!7z2Fz>6-v<.xp{(?%xE' );
define( 'SECURE_AUTH_KEY',  'y-nMCx-`jFJ#cH{sUYaY1D9chs kyKRQ)n]G?XK24&)a)y)`l37O=(VQPVm!8_V&' );
define( 'LOGGED_IN_KEY',    '!8xNmEr n|0,>Kvc1._h8_2akI{o!MkYD;aKl_U5/E=n>sqh]B;4{)`i)d;w|V|4' );
define( 'NONCE_KEY',        'cyz-:cwOX;eW!.d#Ip8q}Fa>66gB7:7pwW&Sl(w@LzZE&SX 4jODUv,60W[G0R~.' );
define( 'AUTH_SALT',        'To=6#2aLG0l,P*aib$_l^V!D(Z{oT|<WD;PH~ydJ Gqq/x2)e3cOSvCaOA;<nzDy' );
define( 'SECURE_AUTH_SALT', '9&A Ov~vA,(b?$%w2Q[=j.^yFoEnaVO 0#BH4fQ,e]Q#[L|ApY8~z^bk0B5dFNjg' );
define( 'LOGGED_IN_SALT',   '=,%%Y~(;<49{r|A_BeLouL[Ag,bX-IVZ%1UZb4,Zh:0!Z25dOtkE>[(*??wAVxR)' );
define( 'NONCE_SALT',       '!fgk-v)ak..I[_2kGwV/~a+GUGx`qu/TbSf{(yR g]V-qNlB 6GPu_iM]V+VZ;?4' );

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
