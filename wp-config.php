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
define( 'AUTH_KEY',         'I#*y!8~V`)4FMG&L.5(>UtKj>Pl7?^Vz1}X52B;lG}^70cM2b958#U~L-:oI2?|f' );
define( 'SECURE_AUTH_KEY',  'xWy EdU@`kL.)ez$_v^cIA5gFe}E+C^,$ABg%2~g%ACiP(bs|f.Q)8SMS3n{q{H7' );
define( 'LOGGED_IN_KEY',    'ce9-1N#|[+RIl042/m6/_iV7-6/+Hf!-lK,_>Sio^mkslM+Vqnie/UBKcXJlr*0F' );
define( 'NONCE_KEY',        'l1Ixfs|07}u.#22!y$,/q%6MYh0bv3{8+DqyKWzB$+?M&Mbd;Fwi &g[*NKpt%k4' );
define( 'AUTH_SALT',        '[Y6^UP!`{@4(sj72?SSFL3P8KIF~w#f1z+Drcc <AV4PP;36aQvP3L<zDzvIHd)+' );
define( 'SECURE_AUTH_SALT', 'W$u>&s$CLp.NBNJ[.3kg9y{}%<51=J{`!j}<mdnG%a@E>QIE%P8wUKO:nt@,.}f~' );
define( 'LOGGED_IN_SALT',   'tZ?o-C@bz&7,0RV e+R8@Xm81s+ciwsXQ`wcc-&z%p4>c|]1;C;|Pq1:5k6%Ph.8' );
define( 'NONCE_SALT',       'Fb0Vqn&5veZ <}&26pD=XW/!Ja]m#gN{EJ[@$10&ood^JE/8{B73*=wou.8R/ZQu' );

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
