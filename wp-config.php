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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lab3' );

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
define( 'AUTH_KEY',         'PfzU,<14]orUY.:-7h{>r(F5N:7a:_wue0j;??8OvWEz;cMt=yJi%:u63 @FDx8+' );
define( 'SECURE_AUTH_KEY',  '47eBt:!DFK/{W9pMv Q@?|)%@:,PX[~6>Ru[>1aFA7uE`6lXp98u/9+4PAC@`Ng1' );
define( 'LOGGED_IN_KEY',    'myW:Dh8:Gw`/5$Gcs:6ylXYaK!N@ f7P.mvw_J]vlA)+Qc)Rl/#^ww[p^i%il^}1' );
define( 'NONCE_KEY',        '5fenm]KEJ(-VFsO_+ab#.B2Xb1dt>`I&c0}s3]%{|nwo{pwJG_*;IAZQ:+U;g5!n' );
define( 'AUTH_SALT',        'C:wOsvqhU`@<Rk`d}BT#Ka@c2L^cd)JETMma 8lp%=q$&kj6xnHu,ZgO*a,0^HyE' );
define( 'SECURE_AUTH_SALT', '*48yIiVd.1pKmC>|LLis G_L_-9+q#J4qQqT]4oD|3}kK*)I%xoMGx B|sZ&5HJB' );
define( 'LOGGED_IN_SALT',   'm%>7SY>L:-u1YEpx^FNk=s+7D&T$s|K:!@5c)vx1#K?jSi$y[k^J&/=6kJn{QbfL' );
define( 'NONCE_SALT',       'Vha+^(Wm.qfHqCIDNz3#{S>?0m?vY?h/8P:`.5SUgkiYwDhkW 3<&(:s]:xkMN&c' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
