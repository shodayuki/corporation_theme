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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZC+Li8+78T8ZsPyxZStYzmhsQZlJ4Lj0KvAnQqxsZQpNKKiiQHHz44xjNCF5N1GSX8eRaKWeOdSEbp+wNH714Q==');
define('SECURE_AUTH_KEY',  'mQ0GU1/8dlQFMfPDslmHDZZHgvHx8h61solkkzLniv6TxybcE7vprHtDqrMGBrU+H++unlDjveHX5Lu41ydzYA==');
define('LOGGED_IN_KEY',    'm3/HO/NyDbD5h7wZ3OaeZ1n2EPAbRwIv2EOMXUzll4HgHMa0DL4zU5jJOqAcdKMtuIoqPkcFcUl7HmDnxhSwvg==');
define('NONCE_KEY',        'SRxWqm9r4q2sVxk53F/G2Gk0K1rd3fLlb13XRWeE7ZdzzPAwNNpvSt/bzVUQkY7xNjD3+JPaeW41TIIyEb3sNw==');
define('AUTH_SALT',        'osg0GDf8aLA6mSyl171yho+R5NlHFcG9DUOCSOQClQF3AhwgO1Wv2BH9U2OHeXwjVNwWmWnKK2g7WCu7kWHw0w==');
define('SECURE_AUTH_SALT', 'vH5NVx9DtcViJ6dzX0MWnbZA4IJEs2pxhdrqSJW5Yi0uItcJWfnf+755UP9gqBS3JttJpcMZsq3NxsjuJMkAFg==');
define('LOGGED_IN_SALT',   'p9cdEFlK80sdvvtiAWoKkjEFEWf7wDPD+YmRW4lScItBji39iPZ3tRAxs6kIawGV5AUwKF7ROGDnt3PfqZfdAQ==');
define('NONCE_SALT',       'zDn2eFoALyVTYlRrkW6Y5Nj5KYBbbycJ4mSTF2z/Z2chc/5RzOZxuZl9vTQ7H5Lgy4lexv5yxRIeNCCpORxClw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
