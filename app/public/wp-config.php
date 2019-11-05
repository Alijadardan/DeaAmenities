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
define('AUTH_KEY',         'Uy1cqrmIZcyPsmQhe6q5Bt9GhJYERRVm6in1uK0aP1A5/qHFapYC8dl03ga+cb8lRHRnnWse1WoJSlNBbVkwXQ==');
define('SECURE_AUTH_KEY',  'ZLWlKza1IO4aO6ecTZJgUA18lEDsXFvBW/sZYd1aOiSC+aGyVuBft24Z7EmFyHwcfF+Okr7mLE8vnEwPQT0KYA==');
define('LOGGED_IN_KEY',    '0O8ecAgzKsbT7Di7wUw/Txl04xwMHLOLQ3VrGNAOe77a0BRAZNqVwcfztrwD0dhKUDB6hnj7zoB1eagS6kZ2BA==');
define('NONCE_KEY',        'zWZzM/WEvxhDyIJCP3vGGD/V3klVY7u9OZnUEjUkfZ2kozR/mEGKjLdcIpA4zHv2J1OcinI/U8hyuBpFg2XIDw==');
define('AUTH_SALT',        'JzcIpx9DK8sBv10RbQob0DAjszZX6qK1AtFIzUR2wyq8uekLEBRcxkaENyH0fBpD1VwuBAjA/SPYXHkJ3AZNGw==');
define('SECURE_AUTH_SALT', 'dPDV/MdAtAGaCrchb7Q+IPkcJCRnzlCplQ5+R07u9RAcMzQpkOpVmT6nQImneaOu+/53WjDgtfxZwqSMv6XgvQ==');
define('LOGGED_IN_SALT',   '9ZTGz18YwbdT/cH6Ry9I+OBrPjhXTWPL+jAHE+VgXMDlcnwE7g38P3mBeKx6yZJS+llT+nat1nNMrfbLaEu3zQ==');
define('NONCE_SALT',       '0srQLSwKrVzQbz5kWAxhIYhh+WVE409IiZJqCdI8ircL2zwAGK+wAPa3abT4GAzHTf2EjTnuinp2TjTirUWCag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
