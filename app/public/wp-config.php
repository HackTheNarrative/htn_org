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
define('AUTH_KEY',         'WEqJixDaYjLWBedAkGIjp4JGYtYP4/+fTihzP+cbxrpiklD35toTTfbymjtHsw0URUUtKNqrTeF79eKnLd/Z2w==');
define('SECURE_AUTH_KEY',  '51qQPlofdxlDdrrJugy5Cig/rqDyO16ttd/BRVjhXgEjsfC61JR3NcE3Sy6XagKEn/034ZDWApTTLWUMIg/7eA==');
define('LOGGED_IN_KEY',    '2b4Nm9V5ekDztqN4j+/mMUHm93YfOL+B0TNCK9elux+CSHRZrVo1NcIAGGEI/HmlA6p/YcQp8KcoXXjWpUfPcg==');
define('NONCE_KEY',        'KxdpfU/xOfjBK2NLL1x5FdIc3QstEo0VY7gOouBxp1ZB8IcLY9CNmETy7jY7C7cXzRueS2ceAtv+QmwoM3AScg==');
define('AUTH_SALT',        'Od8t/4bToBEJ3xwj6pbcAWnfbfGxqqigq4R/t3/rX7B/1qruyqzxIMpvJngpM9o8a9tN1THnzq3r5mb6I/DFAQ==');
define('SECURE_AUTH_SALT', 'MG4dR6eEW536Dz9W+061RwxIlg+jBwgSldNarrzLx92gvmjVhCHqVKmNNghCbE4Y4/jf5AwlgPy/brLt3S/Vog==');
define('LOGGED_IN_SALT',   '4H9qWp5xYYzKrXglyAwIqJuBkZQFKJMaaMGtQFjL64cVs7nJjpTgnrJJ4/olJhla6Sw4LwuVXeA/z4EisCTGjg==');
define('NONCE_SALT',       'yG/gLM/mB3p/AsLgJw3LDLhhSG76+pCmOHasIwod+qFACw15yzMt5oAuLzNdNUY+zCjtieMiOQwQQ+c5ofSyHA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ay4uq8t8eo_';





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
