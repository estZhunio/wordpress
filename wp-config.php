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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'pB:fN;EM`ds7FT)3]rMW@ Fe30Lld&y_:NV9>sYOzm?1v^_G2N)0:%/nbs<rxL5$' );
define( 'SECURE_AUTH_KEY',  'k18`.&DG9Vy*+o~HXy5Q+R2>GQTC;to.B95;w-H1>]%U&o!bH-jFZ~Zozi5msVo%' );
define( 'LOGGED_IN_KEY',    'TD)Svq{?B6U0&|O<QVyaUG%FUM2T-<NoT`U/>]sIA9[lo#Am^*bh=oR(4_%2|?rf' );
define( 'NONCE_KEY',        'otQ5hd3i AN$SOh~ao@S`{ZKWiP }:&& KCzS(ZbSE^ioBwunr{QA06~;>,Ypcg2' );
define( 'AUTH_SALT',        '2=7`PM,L`8,^-sgfAh(8XX: Y+|}^WAm?7@:=TtEsW/wCgMf8Gv7BFhBpxBn0lY;' );
define( 'SECURE_AUTH_SALT', 'P=G)F)!9x!}|0.3F0Srna0+}^/c5&-T:LLzb:Y4Zp]ha&y|zd13))98.,,, 8pr2' );
define( 'LOGGED_IN_SALT',   'h1{/ai&i,p{-Kjp4O*66VPtaA<Og2B3ogXlK/WKW:$pDFdvjhhi>ws],e)1XX0<3' );
define( 'NONCE_SALT',       '#F?JrH4*[?AC-hk|tA0Uzw3W9VO2?,dnpwiXu.ful1c4@D}e$8T@,:Ee t+h3=29' );

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
