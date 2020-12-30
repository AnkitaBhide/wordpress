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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'u.%  [&G1u$?Ka$(O;vyNEK}f@JFFDY2*VCEeu}d?Yzr1ez7sdBh$,2,J)jDl8Bx' );
define( 'SECURE_AUTH_KEY',  'vWSi;^Ej8On).H{-S;G!=jwl6]v| PvqvOVJBS95?zB-n0xj*XDz!(_5{_Ts5qe{' );
define( 'LOGGED_IN_KEY',    '7GtJ@.eNw!t|YnW#^4&3EB&BD!s>||S{*waTq@d~Qn>vlzW5d}X72z$MDl#(MC!]' );
define( 'NONCE_KEY',        '=n_4&}oh$>j[BTg}!KWp%1`~RU9+1,RAI29=X}coN-?fsT6d!xiXh8{RbkSrWf7v' );
define( 'AUTH_SALT',        'scX~`UHH[2HX[7$A0LXO$H=>LD+|C2g&2Zn7$@4|}BpXIQfIzG*T+!GDJtFsKG4_' );
define( 'SECURE_AUTH_SALT', 'cE${qcK*^8[Zf)JC){&veuWC-Qh+$*E]R2nits8iw$jnWT.#R36Pl6^k+1nO}f,%' );
define( 'LOGGED_IN_SALT',   'TH,Z]evP]yu_?bP^vy-2Xf,MbFf};4%tzQ<364Ms=bmj!J9Esa@6d2h.1WFw1:Rt' );
define( 'NONCE_SALT',       '+5w:65^Y2^].5n}Tc;3!myq29{dUXg*$mg23-f{ve5!B$3WLjf(xIo*iKmYpm.g=' );

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
