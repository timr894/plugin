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
define('AUTH_KEY',         'pO+62JuUdB9BIPuP/R/7CBK11BTElZY2w1FuWQU+n1TxZCUgH3TmCh17OZOZ9/Vu3hFyzparP8dQw9Gb+5Gd/A==');
define('SECURE_AUTH_KEY',  'EhTzIE7TBXhMIHjFzV20oJ3ZZfOzpHQHbYb+bYgzxSakCQt7g09IZYLxHxZOQgP0fwZWgH8zk5pyg/HrSrV1vw==');
define('LOGGED_IN_KEY',    'EKqkXzM2AA+PVwYkRFdp3g6SHDOVyuQCzXpigA7bQG9D/xww86pPFQkcMXgdz2KNTrAoYZfmBc9/wTfO2M9p0A==');
define('NONCE_KEY',        '9RtUrwsUAwcVpL6Aeh43x3+p1P/UWCK6Rsl9OfJ82EhoJaLA8H4pB7FbRqKSS2v70CKirKJ7BQL4aW5a5FALrg==');
define('AUTH_SALT',        'Cv/jfZIefFoeglH2ny+1IBNffvqUbCD4NyBmF5RAeJMUzBIn2M2p7u1rc+nxOn6WiskqOWvUn8ktxjwBkZR0PA==');
define('SECURE_AUTH_SALT', 'oQaoV231S1Fuxzvv5cJRf2/hF1bnJSp2YPigROwWwwKBhEFNfQdilYl6RTEZistPU24Yj2PTfsJ4hZpENz2vcQ==');
define('LOGGED_IN_SALT',   'H+qTYnB6aGHtc1kfyb7i4iL5ES8uFFcW9bQ0ZCADKjAzKgtKR4vQNk5to2EUFFw5srl/GcCf4HIdw5ZoDf0Abw==');
define('NONCE_SALT',       'rttTMKSr7VbPJfxfIv9R7zfHVliypcJt6LbcuSM7jzFHrjI6Sf0Y41yQiy9/qD8yDhL/Q8op7ZclWqsf6oIUBw==');

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
