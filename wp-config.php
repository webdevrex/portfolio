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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webwithrex_db' );

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
define( 'AUTH_KEY',         '.fY8FtD9qY&,HmPCc75/@imQLEC~POE[K`,CuuYRNW0WeQ%Y/x6?a:!ryQ&aPz34' );
define( 'SECURE_AUTH_KEY',  'J0g5Y#hmjMi% uAoK([5.@Ic2<<Xi%+*xmP/tMe*?2%6^JEuOhp$FggYy5D{nHg+' );
define( 'LOGGED_IN_KEY',    'R54EfBT@ca|)}_),G%N&Z+li $8yfHIL1wbUgR{MQogtBkMmgCvEu)}r05a%-FRF' );
define( 'NONCE_KEY',        'Y3O];0gJJTOcslKe98G2cidHB)tq>cxH2rfK>i _Q|x:a4SWGQT!QMHR?6[[GFRk' );
define( 'AUTH_SALT',        'kpXej4sF&y5HCA&n_Qul1U)uYhV2Jq.K*8O;9dXfHi&|5S?mAdqT~Q39~RX%ETkb' );
define( 'SECURE_AUTH_SALT', 'm{+ox}^l+GC!eKL}4&tgZ.,i& 6.hc9xX,,pVV<gq`}/rKqL 31)3X{P|5+sX|xE' );
define( 'LOGGED_IN_SALT',   '.ZDC.`N4G![MY:0El=]cws7;yn)9.n+J,&}8gl$BTdn-o8)fc]hWYHt*:?QwFoa)' );
define( 'NONCE_SALT',       'h6k;BhSdmpPO+pP%PzdNcs%1m7-`%EA4::|AYR`7Bc1v[?=YRwh^TWW^LjsL!TGt' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
