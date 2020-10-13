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
define( 'DB_NAME', 'wordpress_api_2' );

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
define( 'AUTH_KEY',         'OP0TDiO1#.,8IRahA[d@#o|z}pbn!8kqhpr6#0wQsn)*fUrzPaUnw!b(-M<iAsAw' );
define( 'SECURE_AUTH_KEY',  ',Db:f,>1.Ds(L/UH>|]/w+;0uQR[|}`G$RCs _YOqxj-s}ol<L@dW9;1y(iW;K%Z' );
define( 'LOGGED_IN_KEY',    '(hfg}6eVk9xgh HjT/78Gv(bso[.}K>z8[x%~m.~Ijn*h(HWw@FKw1:t_SKFMVzI' );
define( 'NONCE_KEY',        '[M?4,rUT9u>zZ/PLc{}.X~p(iv/{WT-N6fAouR8Lr.>Z6VM50NDt^qj^w7?0F+S4' );
define( 'AUTH_SALT',        'w5K(N#=j#Qy,Kv/bOtq^DfEfijN2|+Lg>fP_Robk^om8#[Pq4e^5TA%R]%}z*`=e' );
define( 'SECURE_AUTH_SALT', 'nU?Js2*A/|JWaP^j~Knq=re5/m~6&y,_&p>f8?$@F[pE~WG% pM`y1%V2{]5!J>V' );
define( 'LOGGED_IN_SALT',   '1S4Om.t^vDiCIftAu-X{MrbiW(cFJZ7?$G/@jPN8K?E4.{58%W73RM2TArfU9;#.' );
define( 'NONCE_SALT',       'zf$-u%R&rAJ,NU.&>V5~qD+<Rv?GpN = MFE)t@,; ej6c3F`j{6IS<1^x5o2QGL' );
define('JWT_AUTH_SECRET_KEY', 'secreto');
define('JWT_AUTH_CORS_ENABLE', true);
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
