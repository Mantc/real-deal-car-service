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
define( 'DB_NAME', 'Real-Deal-Car-Service' );

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
define( 'AUTH_KEY',         'G3sXVP52lOVSCmjGWdblLAkqLx94jevd0EKhtwAWq2FECf4cqrOiUGtaIt6iqf48' );
define( 'SECURE_AUTH_KEY',  't237Lp65lXcK2sdsRSAPv1WaJjKTSGhzwrMpkbdhT4FPenSY5ehR4TWpItbCBjvs' );
define( 'LOGGED_IN_KEY',    '1NXpE7nIdQLMCOMgLfRwpsZE1D8zi1nWmOETmh7MgMPabVFXc3NqJAStTbvljrvF' );
define( 'NONCE_KEY',        '6qrN7D2HC6giTJgtvPVIRPcbq3bpxvTupA7b9m5vbXMoLeMOOlkhnqXEahKD3Abw' );
define( 'AUTH_SALT',        'lSsmLvILgOBOoJQUa1nE05axiLEa7pl00a2dg4GwMHTVuWxQGHLQRMSdiBsfFULu' );
define( 'SECURE_AUTH_SALT', 'iu0YGbZ1FXsjxyD9U5B4hBqVaKlCBNMlxmozMiasgr9tHxuPboXr3USU9L9FsT96' );
define( 'LOGGED_IN_SALT',   'n7sFdrC40PmX3F2caXhN57mznIkkK6scvSqMnU7fDWWjnidYHgSnmTo5GreK7ODP' );
define( 'NONCE_SALT',       'FOJmAWaGdQW0T5h9mNcO0pPuSKw20uoFlaBJ62FACVKKfKqyqTAgf0pEtWzDmv6e' );

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
