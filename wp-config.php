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
define( 'DB_NAME', 'anitaflorist' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}

//

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
define( 'AUTH_KEY',         'AGUeDmKMnK46v60r965p6tDaWIfPnxA5708YoLbk51RxtA5XFSxmXuCJz46GZEfa' );
define( 'SECURE_AUTH_KEY',  'QrEZgetR9nVQKE4w56huifiGaZxE8ltZVmdd3R8WNpw4pcxigrQvVsLfYBRNuVfv' );
define( 'LOGGED_IN_KEY',    '6Etu9ocdcZexkduDA4MJP57N4TQVlF1Hx3MW2UTHrnvi1mYORPprIORrwkNC15SK' );
define( 'NONCE_KEY',        'fmhLNDpV6DlrB8dSKODSVfamrnNtdnweUgK8P0575hVPmdMYEG2XM7TykKR5u3k7' );
define( 'AUTH_SALT',        'hKIMSgfNLFTXN01C7WgwqXRuakEHhhoSCxTe4Cu2HKh5316EG83zcVbg0rtmd8fW' );
define( 'SECURE_AUTH_SALT', 'hkNIygeso24SdXzJ2FlOMMXLI0HmSYANVkQPS0IOkR7Ki3vcLJqIHoMCJHrRftN0' );
define( 'LOGGED_IN_SALT',   '3N6lNNsbi0E782JPK0IYEzcAgevUmxN79MGOcdyv1yq8yqXDmHmf5yTtckikLaBr' );
define( 'NONCE_SALT',       'D9FC45tQWZglb1JNdBihNZu8ZEoyA6FNiNudxBrAGr9EJZ3tgr4qTUzyrO4PQgtB' );

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
