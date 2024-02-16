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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alburaq' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'test' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'hXnm7/J^^j5>aO_S-rzE5&XKK.E;,Id%N**|-bfR+mzXqED]<7oVd[acme9M~8iR' );
define( 'SECURE_AUTH_KEY',  'gOBh$(,Evj]~[h!dw#h;&%E4ex+lBr<8#]xWn}.czF9pY2%>~{pFm?TUGBc*9Ub$' );
define( 'LOGGED_IN_KEY',    'Om= id=&l{OSEQ_)6b3E;H0THfuG6,UvFO+`#|]Z(:Kq;_Z.Mzi}2-[t@(iLJOyg' );
define( 'NONCE_KEY',        'd4P.!<)UqK1rZ6*Da$5AM(3@(U$Hu={rhkAEvCBWqWC4#4lc:g=uRF,xK(f(r3Tk' );
define( 'AUTH_SALT',        '#xp&%w:o+Qc)$=iEMO1m1t9h MaR1orhpTN)ywP,G8Cbd9lB~2I6mPKh9e={Ou6V' );
define( 'SECURE_AUTH_SALT', '8r5!v~ghd1JgV gG=gDL{LkuFDZ/t,uL[T9`*RDqR0rhK=cU;P5S`?ELZgxqldsC' );
define( 'LOGGED_IN_SALT',   'DGByz<KOIo~b*W2/)eN o/5,S:c<q!chTBDb&tZs11RC6!m4TZ(.%E?VV$&<s_yW' );
define( 'NONCE_SALT',       '*fFy>RrX#>|}&IN_{;KA}Yz6v1O!!e85_|_g,?jBlU:w_=m4G/e/])3v;Xc8V0nP' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
