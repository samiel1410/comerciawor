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
define('JWT_AUTH_SECRET_KEY', 'Ecuador@2022.//');
define( 'DB_NAME', 'comercia_2023' );

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
define( 'AUTH_KEY',         'u#;ZM.p#][+WKzh]6#S/<Ze_,~c:gX%+g+%Fm>?;UBB2^9nuta> wQ3SGNn!~B^7' );
define( 'SECURE_AUTH_KEY',  '}NvOa4`^K#l$E+JjD7#qusn*BGb*mjvG+^iIswrQv0dm>.DdW!B8j Q?L685ED4Q' );
define( 'LOGGED_IN_KEY',    'wZgVpQfOi7t<5H}2)c}yVJ&=nc*np+<pnuK+[yy8/D+j*0NEWwR_~UKF?na,vkbc' );
define( 'NONCE_KEY',        'nB8S/$3o($Lxn:V c4eJbE:_:]&~2o`E&UgRNa8k#qHpb>,m)$(XUa >AN_YZAST' );
define( 'AUTH_SALT',        'DE]j3v?6{D0=%ya.`raN#60){kXQ4|dQfe(+giz`L?kA<VOQR9L>z>|b2ZnU(niF' );
define( 'SECURE_AUTH_SALT', 'ONU_rhl/14^a+`N;Qp=zlIehdo5 _Gl@8+@-=Av5<.9M]`k`I_wpK)Lgp? 0NH=2' );
define( 'LOGGED_IN_SALT',   'k!n7H4Vht~lFWy gH|OA|++paXy16zS8M#|4W?zVN$JEG`)gNHdlxcJmONwKn8eN' );
define( 'NONCE_SALT',       '4VK7p^4s3$HvwvZ]`CORVEBC:.? 1q7XO{$Ei<EaZ`)wv<C=fi{lL&|9 t^em%A ' );

define('WP_CACHE_KEY_SALT', 'string');

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
