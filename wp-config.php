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
define( 'DB_NAME', 'plugins' );

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
define( 'AUTH_KEY',         'eCTq}Di}?os`WGoZ~Y$qwfd5>2@A0|,r6lIW%u ~wySHZ-T@l!YK.3uqhLzbHmIr' );
define( 'SECURE_AUTH_KEY',  '5=.VCt`x=lo`(Ts)jna8 #K/Kiyavv(mfaJN(q6SiXYU8Sr[4<fsC&~wa2Thl~x&' );
define( 'LOGGED_IN_KEY',    '.a|hT?*8 PWhL4H[_+E`tMLTxuE/*?z?;8OL>W>F!VI$;6QslilMVaWYYan8Aw!8' );
define( 'NONCE_KEY',        '2.ZHsX_{j%5A3FlV5ks5erKK,45x>[ID,gu&I;EAl)hQ>Y8Qc*YNy~WX#k;Zf/lp' );
define( 'AUTH_SALT',        'j$Us~7_/H+,,N$,d8OopLt9GHaQx[c_[yVj a0t{ 0?1H^e!Dvv}gD-ghLj/8Lpy' );
define( 'SECURE_AUTH_SALT', 'Eu<}|[;v22OW1U!!YS{cydy44&!J<ag+Rmm]ZV HQ[-dk4dI0//Xu]qHX{5,)iV/' );
define( 'LOGGED_IN_SALT',   'SRR($XR!-&m:7hA/]kg.2]%4p/}{2`D13,};tlbH9zT^L>mUep8Co4TS!iByCTVQ' );
define( 'NONCE_SALT',       '-3@]K=5m_hzF$93{h.|),xImYL7 %V`vvo|UUB>_]EQ$n4pu9[]|11>P*oZ>0F:a' );

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
