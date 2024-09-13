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
define( 'DB_NAME', 'weather' );

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
define( 'AUTH_KEY',         'eWU-qgbY,b`)ZM*NdZaX*y r4d^S NhOZZq{3dpg..a]Dx%8l;G>1&yPO}R]~@i-' );
define( 'SECURE_AUTH_KEY',  '7y/])OfkrcvJ`J`/A{Tu[&&whVTnQ#4Zu[QDxD[(V}Xn3c15HtiLKI{1pY%2OWVk' );
define( 'LOGGED_IN_KEY',    '*kd9I}TbmyH;vd6w]XmA6&p|QT+7gStGddqA-P5b/ftd*.A5e^ EWgUK}Yli&`4T' );
define( 'NONCE_KEY',        'D7!/O0,RnW|S{0AkN|L(9vJOb0T3* C}pY@zGQ@lrlYKcC_YN`jq971sp<sjgS%}' );
define( 'AUTH_SALT',        'LVj?0tb3-RcDf)q(k8 |a~O[BPTphIAn4}7@6]Cr4u#]r ,3SP2SW.9@T)]t3qTH' );
define( 'SECURE_AUTH_SALT', ',Zqy)[UPu%K{(yFt7NC#WdITF]f,Ey}rX42)~]!T37k=mBuZtq[#DMGh5fQP>0Nm' );
define( 'LOGGED_IN_SALT',   '4+xjNIJQNvf=W5KD}a;CdLARcl/?^iU=bHO|yV:CD%}BR7)nW3+lD^asKj(JU5w$' );
define( 'NONCE_SALT',       'iB%<f4m#d-L~(@iw78}BjdT~!s~O4 0Q32KxK]^#~Qsw.% cf,X91&CAkUcty:*c' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
