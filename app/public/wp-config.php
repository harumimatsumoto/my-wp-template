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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'Z6lrdQXbO6aL4ZcBDDuennRMPWnUDRZbOjVy6m0tEO8n2YdYV8SVLqZNI0tf4oRO4/Owj7CAiwlAfnkwVNbNRA==');
define('SECURE_AUTH_KEY',  '4DFflIfBS/NYWhi8gDFws7/gawJi+duqbFaZvB/Q9uNntzpRjM769PQyXsmhs8B8JZQI5hNGGUFr6QD/BBx15Q==');
define('LOGGED_IN_KEY',    'MMqzTiK5keUL5dOnYaMvRl44592hL2+rOBMDWXgjEaeXkt1vIWCDJfCd/qKmR39+ATwi916jU366m9KDXzRW6g==');
define('NONCE_KEY',        'spHgufOtyV1rNG/zuSryPPeb31X/MggLMDRCR9mEsSlQ8OnjtMvi0egujkWMu3dwp/rQdBoDkCGDITDB5ILNTQ==');
define('AUTH_SALT',        '7RT8TNpo30nyLywz8ahjQHlR9A9LCEVZTcpXjHaQ/548MGQMWNNuK8QKeavMgiE40W8mdvELmPIXi61UpfHv9g==');
define('SECURE_AUTH_SALT', 'gJTXbkUoG8ikF6wf8Xe57iPw+GPqz2OU9mTVpBMZHOIJIieqjPDdNqg9pQuGwWa2c1XkwA6NbQTkZ+CJX2aWxg==');
define('LOGGED_IN_SALT',   'yGS9WHNwZtSgpIHvUVuoqxDUNFrECDqF5cagzx7s40UCxJ8kUB+/x+5oFtx1zsu6wnujy3Vsg2wXe4/9MUdrcg==');
define('NONCE_SALT',       'rm4F5KBwJweXdtODxUwaEHr7YjlNSkbGIRpbCOlEEAyMPr1b8ATRcsHhJ1KswJnvo7971A/x8hgqfco8R0rYkg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
