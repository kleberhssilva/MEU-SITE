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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          's#Vc=X2|$;m=TPM=1^Nsj<]YF$?!l2]u,o4_WtLv-:G@m1 t|<Y|{nRg~_D+am/H' );
define( 'SECURE_AUTH_KEY',   'jC1h9k6gXI+cYfw)_4+ yu?=]gyPRnq+2^!3#aM3KB(]/I[:?S`o|PT$?jJzI8nN' );
define( 'LOGGED_IN_KEY',     ']Q|@,q-dccQb4e-?L&{Q=LiQKIJKPXl1R=0NY*yiGmS7>f=vM,5~=?7:Q2TU%D;Q' );
define( 'NONCE_KEY',         '9!?j~,*drbJb9UK*uVnS)&>*UYI5p/Q`b)Y:4NgVyPh]#?^}lDfK$Hh.$^u P}19' );
define( 'AUTH_SALT',         '[c`[Er}WMouh+(n=c$z<0Be?guz3?OVCnrhfPGR(FKkEA07YY6r+VG.?;_U1oGJI' );
define( 'SECURE_AUTH_SALT',  'P5R~4eWy1NuIOtN%@bEHLM0(j>M$LRR8nJ7Wu7X G6vPruiYJ&Zx9gK-MC|p8!YZ' );
define( 'LOGGED_IN_SALT',    'a>!1HC+4)o~}>EWMrzWRcba)Alk96oysYoJw.j2Mpb+{2S F#y|MJm`K8NVr[q4n' );
define( 'NONCE_SALT',        'Yv[m08^ToA; Iv;b?6)Aqc.1mwy]YLnCf#9tPAJk<t3`3Fo^)Y&ge bZIkKsC`iH' );
define( 'WP_CACHE_KEY_SALT', 'E8Z`N6q[`Ak+Jc@o[/nM04^I&Q_ e:QvZ(0tfSXGNNMY?EY/A2!6PIFI=Do&z^V*' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


$_SERVER[ "HTTPS" ] = "on";
define( 'WP_HOME', 'https://MEU-SITE.kleberhssilva.repl.co' );
define( 'WP_SITEURL', 'https://MEU-SITE.kleberhssilva.repl.co' );
define ('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
