<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'inskynep_wp69' );

/** MySQL database username */
define( 'DB_USER', 'inskynep_admin69' );

/** MySQL database password */
define( 'DB_PASSWORD', '~O-MjOq2^u_b' );

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
define( 'AUTH_KEY',         'b}z*X7&$~llhZfwyIz41`!^7vt0IeF$Lk#i<!QWe[^Hx?ir4;TPP4)H$N9QC(_~P' );
define( 'SECURE_AUTH_KEY',  '(XamSrjTr?`kg]kC;vYPa+!d}wSVx!$W3(l<q*WQJ>n1BhoEN0.dO`e1,1f|TfDR' );
define( 'LOGGED_IN_KEY',    'eYIz}Ze%WAxP[F*MKy>F|d.V1g?T:u;@2#s.Hz=t}n#nkxw|[3zu(J^VAMgd_9*!' );
define( 'NONCE_KEY',        '-|;uSp[:584K^@z#!GA[PQ)0uyJtsbuQC^~E `up-SJIpN7;}D_PfgbCb},:e)U!' );
define( 'AUTH_SALT',        't1Sgc(oZnZqyoee!F3RmABY-~`adY|oP6q/UXjO^3d_|Jj[6:DvZTcW97ZNjH@<>' );
define( 'SECURE_AUTH_SALT', 'R1VPZjAtt/{tzVs4~z`qLjoev%GnbU&x4>ch?Xx:xjOO=KEv0W9y5rx_r_R6-J>G' );
define( 'LOGGED_IN_SALT',   'K9[T}4Q@OM+>#J`(+M;DKiN<d03*~}7PGAO-j@T>k,r/L2W18%aSh/6#Zq__rvnq' );
define( 'NONCE_SALT',       'WXrU)oEp;];*-1RE,-5!$S%b_50PUe]S?!Nt0WdH#>teN-3j]6tO$NxE7KMUK#><' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'isn99_';

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
