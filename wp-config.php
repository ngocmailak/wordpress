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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'pm54iEwaasKHJcYAHBdlJz9xsr/0jbuDgQWb37Jg2LMSULMvARqKWqrnIh881/ig4Y7U7AMuzJ8HAlcGHtAIsg==');
define('SECURE_AUTH_KEY',  'Nj/AywatuDfP9alpwqG5lGlSpd5PvrU82e5sKGCTAU2c4qNDJAGagZB5zh3bjepduG+Lc+GhcN6CTUVYZP48wg==');
define('LOGGED_IN_KEY',    'e365pRvJWV/lBSLaSouenaFDS53G+igkT8jqXxWogmHWh2kNYNMYS4LOuUxldnobWwDf5wVDSxZmw9QFs+FnlA==');
define('NONCE_KEY',        'x3diSmdW1yY74Qdzn2WCg97CVfoHbp6i6VVyBmLmliJFe+/CoxJhCLj+kJ33xfO/6hXA3ORUh/kryB/jWWRr0g==');
define('AUTH_SALT',        'Nu7uG3hjLShrevOs17WOvbR2ttmFLo4HqNcX/j38jY2alhySsaYc1cHsnxwVQG3WiQvSJk2wQeaRoIX55Kh+gw==');
define('SECURE_AUTH_SALT', '6HS17SXagF1+3BN3UXYOw800AO69Llep040bM1ujiSSCoqCf24MhEJ5NV6rIVXftG+5HlSsKJJ/bMbt77gv75w==');
define('LOGGED_IN_SALT',   'ftj/29YAHdEUqhUjnbkaFvD3GsOJihPKej8l9/CeG+0JUVVwEr+WKhBsssUG21kSv3G8PlGS/CzyXaKZ7mQJJg==');
define('NONCE_SALT',       'PUTL0Lk7Twz86EqpfzupGpikD+m1ZlxcNvHr+jXqV3/2N3bgbPzzzEw6JEmr4uXclMYPYqaIxuCOJdZo4THgsg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
