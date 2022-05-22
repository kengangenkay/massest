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
define( 'DB_NAME', 'myfirstbase' );

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
define( 'AUTH_KEY',         '^ZC32nq%}km$7K`-O%$we)s&0iY$]xhm{FVxA+.e=NWJRB-72jELc $6#BPvmI5_' );
define( 'SECURE_AUTH_KEY',  'h<u7&7=&gf[G,Lc& BiV}Ne$XO&R z*Ni,n&p~ux7}9a63cJbze:o9k&[Qn2I[;z' );
define( 'LOGGED_IN_KEY',    '%6YAfu5b%mJr*N6(iq[i))Qov2j[!&{$sGBPw5a|Bu#nbBzwF^m6PAHR_u~C~SBu' );
define( 'NONCE_KEY',        '`/rc=xSpkb}8zX=Ym5A3Oe+H]1O?4h4}kZ-{hmnmNajJAI2@(uQPvD.QW%g/Bxe4' );
define( 'AUTH_SALT',        '^YwzI7~y-] n1D,&2lQ53x<iaaU>hO?`p XTFnUQG<H.)e/;lF=K_5W{0wwg7G_2' );
define( 'SECURE_AUTH_SALT', '3CNr*|1t.kioT^VKUU>P1!Y4;1|{*1c^Ax;/F~7q Q6v`>{2;>%^f>d_*beTj;cD' );
define( 'LOGGED_IN_SALT',   'n#Q7t)a(}yA,cU5W4jY}msxVj_V1/nr,KUn_&V@Pv4as@L,bw$>YQWH{.Ba|.;`O' );
define( 'NONCE_SALT',       '@jf7NN&pS4XYQDlR{#lMR ais=J~oq?o:O;SlyFpyy?w3YV[f0:lZB]2V1Kn7Wxe' );

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
