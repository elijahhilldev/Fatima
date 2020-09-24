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
define('AUTH_KEY',         'SNyd/arHVJATjFV96rNzOKJMidYv67xE04mZj2/jlWcpFPrCjMCrNw3inzpNfAUSuriPjMQHNww0Z/h3RkGWkQ==');
define('SECURE_AUTH_KEY',  'ISnaNPlUAzJgS0RrT2kQe+rZehPevi6ifhXza5RwLS564fOoYod+ebdLCxlIT+MwBSQbfBxHY2TrmPucAVpmbg==');
define('LOGGED_IN_KEY',    'Qm0UZXjngRFB5LTEVLOD56P8vsXmhq/Z5Dz7EslwyNWgpvOluArBzsYaedHn8daD1+wfax88RV3OqisbGO0yYQ==');
define('NONCE_KEY',        'jP0qC09vo5uf3utaGrcSpXfPMaSSq+susyBy7qXHoV43UL7N8lBrEeIqx1f903/+bmEa3pxNxlYhpEkbbuXl+w==');
define('AUTH_SALT',        '12ZmgtQoRmcNVxO0G40R+9GcCL0n2RjSrvrhsj/jav9Ri5witQj3pibAtMqoll7qSs0U4NL8Cs6AR7qwIJaJUQ==');
define('SECURE_AUTH_SALT', '9mq0Uc1jaZ+Z/zmSGSbbqzUKSoQctAT6kDed3R7vac9Vokjl6RMcwnhvWPull3hABU3ay1yjjVJCY5PrgSTfBg==');
define('LOGGED_IN_SALT',   'Nke9KuqkB5OHXR23mk6ywzX8hM2Vv3eth9G8nsWiXISJGvOujtiKEBCvMOZYBa2HnrhkpCzu1IeIztSFI5nQqw==');
define('NONCE_SALT',       'QLsfX6KaUlA/RbZajOBveyFXrKut+1wV+3nA83JPG82VOEx3AOO/clGabJRY/AajhLRCu6IisfMm3pZ63mEk5Q==');

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
