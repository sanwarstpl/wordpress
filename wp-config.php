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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'for45to' );

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
define( 'AUTH_KEY',         '+{<hA4X9:jt2ED?o^}*G(=%wiNJGI*bnR>$:gP:XrFJ2N{7xf{s-AgC=5@3#PHA-' );
define( 'SECURE_AUTH_KEY',  'lq]?0hK-R?}8W^r.p)~$y&%*3]}Z&gl:~kB)E|:kn02pkiifkeOt[uU//YR9nH._' );
define( 'LOGGED_IN_KEY',    'G-IkcqhgGYy|>o;`juRA<2cK]KGw<xcigIkR[~y*t~;a9&E,]%9p=@rhZYg ANjT' );
define( 'NONCE_KEY',        'g^ue[zcf%J0ogr>9)jcl.tU@DXyujPAU._wrxMorE:NJ-gRlj>PM_;RiHV:_#!9t' );
define( 'AUTH_SALT',        'fPgof|#H)7[nx~JMkza=!D7UlH/U3S$)Uo43[]LJ!!Tfz+Z%&]o4SdA_J;vay-e<' );
define( 'SECURE_AUTH_SALT', 'y=.C5B~Lje<-Y){8fH6`dkCC qxn<ETayAt.}+Z^~2g8jRDF+n.}a#Yr%=gsr7tD' );
define( 'LOGGED_IN_SALT',   '_dbz~w ;qSc.*l25RD,+TKTe8^PnY.kvVfHcclg-+{9xbC#x-Zv0@N!uW<]sk;V3' );
define( 'NONCE_SALT',       'wTsgQ3dQS@Km^0#LS0<e[dSYF2.v1/|^3;HswOmHz(Jg@[q}kA}Yo09`YxMuc_o1' );

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
