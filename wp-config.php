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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'tiI% 55R}(r45oW~4~PQ2F[~h!&?bgmVGavFs[@!vyPw_#M5E#)G)Z%;JU&)XOWk' );
define( 'SECURE_AUTH_KEY',  'pI}^Q]8y-H0Vv1~z>h14`?n<cN~k3HJ-@fDgj1j+U-lj}Y/>0ZFP0m]HqvoaHnPO' );
define( 'LOGGED_IN_KEY',    '2=/|mThwZOhW)7l6*8>_S:V}`V-_M0KHlesdTo8lki=3kR<(IH0`E+WQ-$Ji<!71' );
define( 'NONCE_KEY',        '7f6?-F.#nsq^TSXw%v3/QgILa(YFx}M&O/OS!rPfY;Ip#B2Ga{S?n<^vInZjIsAz' );
define( 'AUTH_SALT',        '50NrQ4(%K2v2Wgonp$PcUjwGte4)j#Nd)3D;/1.iFG~ll]8$E}c$![q&ORO72Z-x' );
define( 'SECURE_AUTH_SALT', ')F2S.QD):<HYMFYJ~Z(QxIdo[MJxtY@7Iri%{l^,M^1.iFg4;&3Yd-C~/_a_893R' );
define( 'LOGGED_IN_SALT',   '_P89E:O{,80omRp[Z!C0Zf-!t<bPGN?eCeXP_eo!#Ynn9k;4)Y.Bn)kbwQ+KJc5?' );
define( 'NONCE_SALT',       'OPbG*E79)xf/T>%B@8`|5y%$9zz)jx9L.sS6GZA9NWQwNP]cToytnic$=8g[9.Az' );

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
