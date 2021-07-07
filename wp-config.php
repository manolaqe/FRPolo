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
define('AUTH_KEY',         'iJn8U5g2kzge6Rzw3hOZYIqmVEc7SwmJ1Jj/XmqUxv5INKKnPatx6Ds0rBIrz8HNjhIkTOHZnYR9B2BHqsw/RQ==');
define('SECURE_AUTH_KEY',  'diGVQ+Fvbtdw24ykMa03UsdvsudFifPzRqhFuPNp7MGjTogkG9gywId4+Cc5cVjGjZ5dnbtpJg82wtK4ZMyRjg==');
define('LOGGED_IN_KEY',    'GqNM5iWtYeJptmSIjh5XxzJ7Mn6QitMn4HKlQIyy13Cu/v3OfCVWg3UFHG2vt9icsn9oeM2pvLjWRDXJXkApwQ==');
define('NONCE_KEY',        'SXqZDsYZdtpnkCwEROwifgBtftoswiuq76ySb9HNemD/yDpKXkYxZJFkw0yXcb7W70coZq2ueIkwP405hJrYew==');
define('AUTH_SALT',        'K+17foDcW5X/zH0ScdGPKnIlnuoB6CKKxOQ8LYMgsWVUcHZ5EGwZwPmzc0iWElRDJTeZT3Xx5sUUphCidtLJ3g==');
define('SECURE_AUTH_SALT', '2z8J+fPR568lmuo3Bz3XPQhPX6x8uwro7ThJ6ocKgrh0G/6CkPpLrqvxV1iVti0MWMwdtSaQU1F5IIolKTxwRw==');
define('LOGGED_IN_SALT',   'QUoUROiR6PNJGN8zRumq4bmPYAjRRCklteHHx7sO4dfvV8xn0fkXaz51JCab+vm8j4ps3VAInk7/vD1qlEOwjA==');
define('NONCE_SALT',       '/bYsxw9nKF32wg36LLkymGtxflX6DC0XalGq1XccQFoRb1AXj6zIKDN7IXxh6uGbgXpDlk5BtFAKOuwoixhqrg==');

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
