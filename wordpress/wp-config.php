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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'M~l]PyLpY#hA=WmytCi5w]@[KfSZF)|B[$8Cd{A(</mQ~UIu{r;L8g~s8aHFyKXi' );
define( 'SECURE_AUTH_KEY',  '}hG,3^4=Q KtA)0/s4JjqAH_=(@ 4f7{^SgZE+4dXHS,nKIsdmT_&Wb[`0Mn5K~M' );
define( 'LOGGED_IN_KEY',    'VIbs!Y}Nl$I/kyf7b9!7lOZ/gLvkE@h@P89.K[z;v^3Wb!F+$=Exv%W/do?N[j7/' );
define( 'NONCE_KEY',        '`vHP`~ygLP!7rV8M3](8NEH%cDxl}N(CHF-z2QSGyb.jjj ksR~CDR]OL1o3K;10' );
define( 'AUTH_SALT',        '/W7y@Ize{dX.c=+iz];]TSn=t|ecAEj+%mQc#/Kl8v1U?vvwO-m0dhAX{&SfGs31' );
define( 'SECURE_AUTH_SALT', 'wgf~9Si~w!/]DeTuc*cl7<L33A!-pBO%!u.V~>;R3FM/@cP[A-O-j^arq`l9Q_T(' );
define( 'LOGGED_IN_SALT',   'E/HU[|VdiMR^H c}Oz4H.&!pM#SgQ=Vd0#/c-KDE9jv_q--|Ssx=4Ic6:{9n&y*B' );
define( 'NONCE_SALT',       ';A$A_./TwmT6.cFm_wBIj&yI0?wDN8nqoXEA?0Pn@XyurRl?+quJHXggq`>{]|)1' );

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
