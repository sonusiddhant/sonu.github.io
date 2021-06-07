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
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uC$Y&,8 rt>B3p-$i8:+?[Y3)V, 5`Yh[GXZ( 9z{B/lN^FEmAa&n#FAT$>ZG]x9' );
define( 'SECURE_AUTH_KEY',  'QVMkbhFMB_KhKcp#,.kk^nIg7Jk}MVOOd>UU3w<C Jyuq.Gpy`2ovU0Xt*rqB$GJ' );
define( 'LOGGED_IN_KEY',    'hc!0M8gj=LlQ[66eUZm2Hy_~+hlbXA{K^ZeY(wT2~Ze6hV<0qR/(C+xn@z~Vsi8J' );
define( 'NONCE_KEY',        'KxF1p|$t>Wxh;nM1$R2a.Gvm]q$A N2cyfWJV```h{wMEdKbp7Au3Wlt!)&&;MW,' );
define( 'AUTH_SALT',        'AGkot7$CzWNK5QY|gl^#S09=4a_(naKe~Vm6/8^`NAQ71TEzmdrdQ`Mq2qDKT=*_' );
define( 'SECURE_AUTH_SALT', 'mYSOW1Aq2RQHQR:ztXb|HYt!p<,}+Qmg},@tk1,&hQOpD8+-G0;u[fd+^)C EIt@' );
define( 'LOGGED_IN_SALT',   'UaxCX,WY}?:F6FQ]JwJ>~Q_&};y$Wcf y^N)Yw8Om$PgD`Xg;A21};8/.M3X(E~/' );
define( 'NONCE_SALT',       'O3]Eardn$_z`#6!=}yF#<oMs^_g9%7A>092]-[r3q,53)@1#_4BpSY+P8*EDeBfW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
