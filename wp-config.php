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
define('AUTH_KEY',         'fF1osYtzAWiDYgw5qoUhPNu8P1eZ/3ClD3rs1RXGisLszfj/UKI07ix+UTZGBgUuQwib48e7zUUZK5+2Xwo5Xw==');
define('SECURE_AUTH_KEY',  'NjC9bNCu26hVEX74MYqMGwV7yQV8Yt/PNKW0Lc5B6A26bgqySG/78K73DXymQDndKtGd5MpfM0PyeMMqyAkybA==');
define('LOGGED_IN_KEY',    'ZSxBP37ZBvQYmNi6E8QRxZvlleYznnTfh+D71n9laC6z1ALe7SrO0m3PSYCBvpC3gZPhX+coGCZOjIErJQAGJg==');
define('NONCE_KEY',        'tXUBGpBOuBz3sD3Vy2ehCo8Oh/44UQtmoNbbVAFHtYC4PHN55P//+EfiBoGfNoVAzUJxzrWqG+Azar997uRKoQ==');
define('AUTH_SALT',        'K9IGLG7+UJvZhf7hfyJYTWgRSbxMnEjPGEe6k/anxIYYsWnlppkjdLyKhoPXOVg3mAs1x4udf82rhE6XwSTzUQ==');
define('SECURE_AUTH_SALT', '0Irs8seyhlUjfRMphAtH69IhlnM+V0uH2Z0wJ/F6MYMgA46DcppUfxxXOjS7QAfUjcRFpMF1+lmSxzY65hVFmw==');
define('LOGGED_IN_SALT',   '370DDHbYvFwyUOHb88/y7d6ZD2romx8MFcX9No+WP1gQZDfU2CWXIspxmR+XmxDzg4DvopqLHsNTQgzBiAdV9Q==');
define('NONCE_SALT',       'yRM2tNXPjF3IHDD9DnToN+v1vM1T7OxbUF7ebRj4JgjIK1iF9UePxkxqsV2snxAuqUtdt/z1CBbjyGc+T2LEeA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
