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
define('AUTH_KEY',         '56aVtqkqaeFhqov9KoOp/S+8vPbYMPVDeXE2O9ibafDSCrRRQ8yDvoisOspcLGe6JKqi7v7bbP0jwR6VGZbXWg==');
define('SECURE_AUTH_KEY',  'y76FA6pb5tiTw3JLFe2hxObpr66hxykasbn1SceizXjZACrSklAxnFHGab2gCPJPGoudskW4EoPPq+2wmYNSXg==');
define('LOGGED_IN_KEY',    'auFpUhZYwx7nmtD4My6OQzRL8nV+eypxmLwK3bMpENdERcN5inEVEGn28Q0dcjYAlW6IXDnBo6xWVZWY95l25g==');
define('NONCE_KEY',        'Yu+1nLQMJBwuBexEMB9gDfDZQPS+yw+IezCTfixXL776OoURO58YqmXHhFN0cum5EJk8LJtKZioQucDAWF48bA==');
define('AUTH_SALT',        'l+pDm4IMNM03TFWRXXJesZunzAMlsuJ7hxIDjpU7frnS/yfEM7m2GcljVv4a5NKZp/fSvmsqj0JWKDjhXqxC2Q==');
define('SECURE_AUTH_SALT', 'rWGEKqgRmp9bIP8q4e710ckEboZlp2HdwUas6OVS6zZs6eyEvQs4Vw0uoYKmnCdvLbDRY2YdNWOG72LYoGC8ag==');
define('LOGGED_IN_SALT',   'daZjSMSyuOw6r7AsF35sVd0fl8HSw4IQizU8kyfSklzbiGzmK94vYNOsS1buTv4L/gkHVVe5OR/B7sQkKqFz9g==');
define('NONCE_SALT',       '0fSTtOdkEQKzYnmZK8R6ldKE/KGpxo8gdkgYloyzb92cLT7ylZ5FvKxXn2CjCN7np4sCN1I6j3ld5xq1aAQGjg==');

define('WP_HTTP_BLOCK_EXTERNAL', false);
define('ALLOW_UNFILTERED_UPLOADS', true);
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
