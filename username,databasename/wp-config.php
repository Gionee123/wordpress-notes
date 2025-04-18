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
define( 'DB_NAME', 'ws_blog' ); // DATA BASE KA NAME HAI

/** Database username */
define( 'DB_USER', 'root' ); //USERNAME HAI // Ye database ka username hai. Normally localhost pe 'root' hota hai.


/** Database password */
define( 'DB_PASSWORD', '' ); //PASSWORD HAI  // Ye password hai jo upar wale username ke sath use hota hai. Yahan blank hai, yani koi password nahi diya gaya.


/** Database hostname */
define( 'DB_HOST', 'localhost' ); //SERVERNAME HAI // Ye server ka naam hai jahan database host kiya gaya hai. 'localhost' ka matlab hai ki database usi system pe hai jahan WordPress install hai.


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
define( 'AUTH_KEY',         '%qh^gXIA|+rO[,[}}ypS!j^A*e|5e+o{b4@e}+!}U&J|JchI>Gj$W(/Eo+*U]PfY' );
define( 'SECURE_AUTH_KEY',  '@T4GzA~D91p8L^7rKH;)BqN])9dKq6lr.P41]7+b`~pTo,Aqei[?+6a9*sDnsqSF' );
define( 'LOGGED_IN_KEY',    'KNk7_<=K%B^6,u$-GHN^2K)M9^Y*)J#29whGpgr-myE:HFzukLq<`lGZ7fN6S6y+' );
define( 'NONCE_KEY',        's*rzg}wd.fVsM<+90@-$5VFrmxW}!;J5`D8X1G&$s8jfBPK3)i(Ady5`Y%c$1UNr' );
define( 'AUTH_SALT',        'bYh8|`l2nErGR;/I51,}P7MZE.Jx!*L]7j,p:a}a<wCs)CL,;1s,0BC|BB4?AAzd' );
define( 'SECURE_AUTH_SALT', 'Coqag9TU=@I8xFmB<y:t+HjC1Wca-wd7kKtf:jG<Jb_M|YA%$2](f)6+D[Ql1u%;' );
define( 'LOGGED_IN_SALT',   'aBFjegAX4!aIm4-JCB7=0G$+j7XRq?itSIA#Z`,9pH;C%FpNm+_LyQVUn%&#7mm;' );
define( 'NONCE_SALT',       '0mH/mXP|#hCuGJ3eO@by#3FenAV+>72.vpZ$:zKMH41+86#np5*O?)CdNzJr_C9-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
