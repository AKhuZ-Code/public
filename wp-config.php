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

if (strstr($_SERVER['SERVER_NAME'], 'khuz-life-personal-blog.local')){
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'local' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'jasonkhu_khuz_database' );
	define( 'DB_USER', 'jasonkhu_758c_cg' );
	define( 'DB_PASSWORD', 'UNSWzpass#0001' );
	define( 'DB_HOST', 'localhost' );
	// lmao what
}

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
define('AUTH_KEY',         'GnHrxNASEYeE0vijNdK/DDLPMPPhcEgHGjNwYBTon8IXmGKKWMpWCWkmkUiZStWQuMARjelr7B1rsfI+oHK2Mw==');
define('SECURE_AUTH_KEY',  'VnOTqjjktH565M18QjrQz8ZhCLPpTTK3h78Vw8DnFh5St2YtGaXQ/JDNMynzxhMOFPLkuvj81Pys2QNgi7Hk7w==');
define('LOGGED_IN_KEY',    'yDT31GJR2fw31UUvfs7/ZQAiTGMUCsIrAG+zxLlfkTwPR4LItoyhhwtCIDVrwQPNK7k8joQecZOvlwGh0U2oSw==');
define('NONCE_KEY',        'BOwrh5Q5M6EXejNgB0wliRN7pLrF8QQ5PoRZnCnuImJBLv4xA6hxQSSw6eh9JyYHbcjVH7g/zyHeS6ysfIIPOw==');
define('AUTH_SALT',        '3hipQePdX4/OC3ZmFd8neYFol5LJSZayEkWf0uIaH6BODpgCTKidej3rQk4prs9TIZ6rBY9EQbeSNNLcaBvmdA==');
define('SECURE_AUTH_SALT', 'k/bmG+UF/2wCBUAo1AJlq/2jXC3Iz8rMd9vm06aB85sAiH5YyNHEJASs8oARoUOXZ24MFbqi66dHVJARk19tGA==');
define('LOGGED_IN_SALT',   'nAScJm4PrAaMysEKjLkzCC7h2G7hg563FieCTxpj9A7+VYf3NQTSjOZ+CSkZAhkewamYh8C7cPIzwFUKOpF9xQ==');
define('NONCE_SALT',       'BkLSQ+OEQfoSqJ5V+Ey4zIUPNkmRgVVeL9Eepe8bIU1lTazxHUJCyEgNT0Ug52xOfqGUPVhWcVcPt1f1FhMVMQ==');

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
