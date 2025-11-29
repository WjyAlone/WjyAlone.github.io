<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', 0755);
define('FS_CHMOD_FILE', 0644);

define( 'DB_NAME', 'repiece_top' );

/** Database username */
define( 'DB_USER', 'repiece_top' );

/** Database password */
define( 'DB_PASSWORD', 'sBSR9pt5jBzpkRMS' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Kmmx=jsJCuQbiC)L?6G?Re+>ndxi:/Aa]7eb},<h<8;4#RoQS)IP5K-U0q0{,E2<' );
define( 'SECURE_AUTH_KEY',  'J3[I kwd^20CJsRo2Mm68}1ObymbP4#hTYlcSN0y}4AjVWj->@:AK^/1&K~8P@KS' );
define( 'LOGGED_IN_KEY',    '6Z]M),e$*s.cyzX4z9v7,Za5?eAlhFMLY3F1@n1F>C,mB$mQ%cG#z4v^XS05i$6A' );
define( 'NONCE_KEY',        'X@N~$5=`<4kdg,SA|Z#.*TKF:3?(xR7cE~(pQ;u|;Fuh^k4frT>)Lg%yVfQ(`jf_' );
define( 'AUTH_SALT',        'FJSWimQe?M.U 7,STQQ<@dDnkfE0krXr<;QdlEedG~RUoqyw`h>a Z>K]w>r`{~+' );
define( 'SECURE_AUTH_SALT', '|-nY@8_5DB3SK5@]-d6#%SK=i}Sfo.G^4V~N>w@G!-2[_Yb2Rm+Q{bnZ9>8H/KF_' );
define( 'LOGGED_IN_SALT',   'YMVFqh.V%t|yV,k}0KTn*hZtO*KXgM%fRY>t6(bs~t~hUbTCriz#fG4vpZ`:SEa.' );
define( 'NONCE_SALT',       'q|URyE/>P<F0X WLS8W`)!%kE{j5Dl.Sstw9(mmv),?A(0Q;Gu:!JV?O&;NsHOD3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
@ini_set( 'upload_max_size' , '64M' ); 
@ini_set( 'post_max_size', '128M'); 
@ini_set( 'memory_limit', '256M' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
