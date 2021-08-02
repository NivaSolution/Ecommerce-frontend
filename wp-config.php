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
define( 'DB_NAME', 'ecommerce_db' );

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
define( 'AUTH_KEY',         ',|2R^]<)~_rEge6N$2HZY4VlExd1]avdG/Lp}>.0e1>PJHW`FJbCle*V;BPT3A<H' );
define( 'SECURE_AUTH_KEY',  'XUoxk~Ho1_1]!p(<sZbH,Z-F^aDv/../yLbHW_-iN$oet#zt9UU.xD*7&]$w0%[~' );
define( 'LOGGED_IN_KEY',    '^h9]>  7} ]D;~hiC>O7vqbp0@13$~yUwV9GsNoxV$_+5nyid!(}j><!z$/{zuiy' );
define( 'NONCE_KEY',        '!A4y;3/iu&GIiw->2Ve0EFc{kYG$kgYyi}>+Zx4Yc$$jawx0Fw6KvVX$wA/h/*JZ' );
define( 'AUTH_SALT',        'SN{/jFl*K;Fl_`A<6hI4DZe-gh^9GwnDdw-x,@< z`s.CRJSaFpypG$teQx@f{Tk' );
define( 'SECURE_AUTH_SALT', 'P,ej,2cuvKMOA#9-&?CO1FD/70?#R-@Y:nDg93wp=FHB(nzy&C=DEpz^t(qe,j/{' );
define( 'LOGGED_IN_SALT',   '>BvM}-6fQ_fe&<VzoFZsdSk)} wb ; y>6[A(l=^A)S|:8URg6%dgUH4KkI,jvkH' );
define( 'NONCE_SALT',       '(50.dVwWNQd(6|Tl,h>Q%2h&m@G1(]|-aXw;)P#wUd_bg:Iy?zc{s(L!e+iK6o26' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ecom_';

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
