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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp' );

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
define( 'AUTH_KEY',         '69f:w~#48iGA/H;GSF)^PXt`sY@NyW.Ym4X8R<#diLUM9$}G2=nP<<5dG#}G0h~D' );
define( 'SECURE_AUTH_KEY',  'sb>P_0#T+#Dj]<kl(B,T}[Q6xzu$H+@#jRXT_^/!fg@Ltnm@!E,.U^EjO.?wJR{v' );
define( 'LOGGED_IN_KEY',    '^+yd}SzCUL]0aqX]%nx?}%Yeq+%;+h5AIJd@-tcU!^.9b0sDq1DHmo+_L%QQ}wa$' );
define( 'NONCE_KEY',        '4~4c?Z#}=`b*(d4{W7/=7|a*IX97::]p$@unNGI0$4+n%a>P~)[ jMVp63o8u7h}' );
define( 'AUTH_SALT',        'd<U$(S<GO5VHSCpALfp56_Pe,0w*aR8}BlJDTs!${ NTHF?j&021Dy;5Ya~-Qf6<' );
define( 'SECURE_AUTH_SALT', 'x/&kk`pYf`(@/%<~RlOJ d_T8W=QS0t,WrE/YwQUi8}(D(ne9S/r]Wf]G;i<ptc5' );
define( 'LOGGED_IN_SALT',   '78CbsEcQ~~0kgId VPBmx*jZ,DDrh3UH!(LG{xP8G=R&AIpX:GINpx)3$9-u4HQA' );
define( 'NONCE_SALT',       'Jh/|LHaUN6#wr3/-?ub*J9Lh]GX8#(BDO;oswJPfVFOSr@.TRp,G<L9*: sMA+D6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
