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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'magnata_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'r6bl4)QcKw<58R;+,Z[qeAA!~KSvbq~/j:qc&GPFjF?Ys0K!2lR=xO49RMG*N1E*' );
define( 'SECURE_AUTH_KEY',  's>8;z8]wt#62U4#+,SKRwTfz([x(;*cIhJ,95>.WEL! y=gOe~2hnhtl2|CJYOh~' );
define( 'LOGGED_IN_KEY',    'jR249/:?_[F.]#38).-Y=i+ZFhLw#f7<q$uItM&%iK,Y;H&aBc.qQc5$}eFq{(.3' );
define( 'NONCE_KEY',        '^9OXF6MmyS=;#,d&n#eE4*g(?$?2l|?x_%G}).uGb1{_nbGjjY3Ws,bs~E&jBpg>' );
define( 'AUTH_SALT',        'K6EY#Y9hJTUv`D/,NEio<>`>[8a&?lqv~29eJco8#]KM.oeO(GO1SlHQ9z}Qp&{P' );
define( 'SECURE_AUTH_SALT', '^Ytn37.-Z#.sH|-QZTq7arRWUAcF|T%4^0y%t]AFWE0.BJMjH~BKN6<L1k[OoA()' );
define( 'LOGGED_IN_SALT',   '~cHV@Dya2:oh/L@>dp|cUD5@zaiM-)HJfTZp1pYaOYCIuVA}lvt*{E3AOL Xkof!' );
define( 'NONCE_SALT',       'cBkNjFxP4vv;KN+b;aR;?VO0Y&a$&x{8bm-^=.}PtXfQT2DQl]+I8y<<YT)gb{3m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
