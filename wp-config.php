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
define( 'DB_NAME', 'testproject2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234@Abcd' );

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
define( 'AUTH_KEY',         '0glwcrwbsfjwi8rxwtygi0xrjhc1dlnzbdtjxemk1n0dfglomas5yxdfjqowbcvt' );
define( 'SECURE_AUTH_KEY',  'nwpzmbykt60mnrxo0h0qk64jqmrbnlsbqxbk8cusqkrfdixvgmpoviwtiwiiuqvo' );
define( 'LOGGED_IN_KEY',    'zo4n7xvapjs6rmffhe80hg6mgaufmxciuq5p7hv8kpcatlfvqororfumgspdr2qe' );
define( 'NONCE_KEY',        'dutndlpqbhmgdqvzvabfxkqlldly39ccdmrjqiyuze17uqgztgwfbrret033jbos' );
define( 'AUTH_SALT',        'pjrdjmao0e1yrkfhph0exqt431ui3z8v4hnyqjueit0cppxsjhhntmwg75zh0wzx' );
define( 'SECURE_AUTH_SALT', 'ax9hdfhpiwb7qsoxdsfpwvaytwuxs9jyjc4amjjacopmdrcnphr6naaat9dqu5xr' );
define( 'LOGGED_IN_SALT',   'wzmsl8t9zwmvqxglo4n2pxgyhbdoq62yo43zlng5vv3mkgshdh9amajkhpwwygk0' );
define( 'NONCE_SALT',       'qioex48duchpaqf6veddwmx1tptnsdnkfyh36uwd2i0am4cruqgrtmxlsrwbxuu2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnc_';

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
