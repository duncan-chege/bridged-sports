<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bridged_sports' );

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
define( 'AUTH_KEY',         '(/]_DNgpbYQqb+hQ+^pfc^-qUDT&y61Q.SJ3WPq+kk&i73HSaopuz*[z[K%Rr#b{' );
define( 'SECURE_AUTH_KEY',  'Yu^CY?8A|z$$g~]r-Rz@~<!R_Z36DK=+?zft523_Fy$H H.8|FO1O`;gxGRvi,Lz' );
define( 'LOGGED_IN_KEY',    '~]lV41JkedJ]M0+6V*`p| 7$uEKJ[y2+?BNu(B-n0|ZGk@WSykjGN}!qO^7Zu9ey' );
define( 'NONCE_KEY',        'F+IFs)$T^&Km{Y<D%&s?cl|y/B9.|h8wD.,)NUR4!G}YVaq8He-z=^:2L,@xi>`;' );
define( 'AUTH_SALT',        'H[UmucYSm(Xff</kvpE44MiYA}1~af?=rFF6HMTH,6/cYXy{*~KD$~}hJ8D <}t[' );
define( 'SECURE_AUTH_SALT', '>vjhF`K.Zg>JWGkFU=Izibbz0;u$hU9je(-VDpA?4KyPYu]52`/?f9Edjz]F4Sy.' );
define( 'LOGGED_IN_SALT',   'GqtzjPOe)W1jXY|_!0RD!@6PgM9jo~)_V!C6K~gZ-u#):f=<[{CVo)wsL.e#Y ^*' );
define( 'NONCE_SALT',       'q_K1;V 4IMNi[41$#I},+--LeaG-dA)-PMuA?+Pl#k9FmC1x+d?Mw0jWSWbrkfUi' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
