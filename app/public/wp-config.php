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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'xxDKeFEfsWyrcveYCVVo++Hab2pn20IsDZo9JYv/dgDgDYRsu1wdXrjYTBRX+xyJ+dElzI/oHqKcRGBcHAvB1A==');
define('SECURE_AUTH_KEY',  'wf/pe7bXNa83weZLcekFCB1M4EErxAsg43t4cmZOr9kuThQU7e08EIbdIp+vQq3uBYAzqSkeFLfn4cca4wv7IA==');
define('LOGGED_IN_KEY',    'l9qlI3Cc82u3wkqqkRLEdQvsHYRKiraicU2KRgb5rgd6CTZbQkbimlyzxDS6dylBjJvUBaywucI5yMd5mFAUDg==');
define('NONCE_KEY',        'ItVGwY/XjPCF5ifw8KmYCuEphHtv0X/z+chjoIurWa6Xo/7e2rH1qQQvoCzKBDonG/v1enhIyQ0fSqUPE/YK9A==');
define('AUTH_SALT',        'uJL6qlCd6X2bnWkVxFm0PbzjX0+ILeSnZmyeCUktg3ej8N/yuK/joZtu0UYVrcuRVYybz0R40V2A1BjVvb5UIA==');
define('SECURE_AUTH_SALT', 'b4kg15mY1SwO1BrPUz3vHJlc/kefYx1XkhCKzQZthB2F1s21YHztCzZasIrPN7PsIQtv9MhvmaL2pKNLpdKcBQ==');
define('LOGGED_IN_SALT',   'R3Bpc6m2J1/FP3EuZ9/GhSHvPDmXGKRHyPUcOUy/WikB3SeA5RnIMunftiGW8rTjWHouxvK+TvHhRsvVM8Klgg==');
define('NONCE_SALT',       'bcLcdxNukx61rkMX9L8xVLlQNpyZd+jLXs7qZqmSNsSIgd9XiTlli99/3rbm1J29ZhROjW65k2nXDK7/WuLIjg==');

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
