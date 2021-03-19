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
define( 'DB_NAME', 'livelife' );

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
define( 'AUTH_KEY',         'YXW!=>g6X0#7p|,XOd*[c4hYC](aXixjkh=hJc?^YIu6kVD&]vwxNlAD1feV,EN1' );
define( 'SECURE_AUTH_KEY',  '4z>;A@BW/EOy<UL)i]-mpqw-32J=!8)([aUdo`fB+Y`5N(Kl`)wIjJ?<wWC6rGPI' );
define( 'LOGGED_IN_KEY',    'B+[o5k#&|c4y|llo9QVkB!~{HgQ1e>j|!R?7N,sE5x]W>-2<:2@bF)$ZVoJCE{}G' );
define( 'NONCE_KEY',        'rxX/jb.e)[=,bQ/.ZMPmsMfhOqxM&t:6CT<$uVy-Ps2 S{x^=9XGR#:_&$$<wURc' );
define( 'AUTH_SALT',        'jpT}|dCP/`Ewjzl@P.8$I(h$T3Wr{,HW$WdUHE?;aM7?F#-Af^{9qj3}Rq,$`j;P' );
define( 'SECURE_AUTH_SALT', 'SoQ?n&wUuYtgoUC2)n{?Vg|vnviod,&1*wSx5Ra0`r$Hd`=C~u]|y9/0[HjF91M@' );
define( 'LOGGED_IN_SALT',   '4np1kfe6=Y,<LQEt!8yHE+LWVR7HLmzP{JJA;*=x>sSPmIW.lm!lc`taj}500 |f' );
define( 'NONCE_SALT',       ')xuDBN#F>]Ga{j%%)<{TNt(Bo$#abr1?L71>M=tdkHZA9 p3:yi3yX@oE+k:7GTO' );

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
