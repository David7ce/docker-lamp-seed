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
define( 'DB_NAME', 'dbname' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'test' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         ')Nlv+e8|m| :vEc2SX8z-o~#iYE[q*6/H]j/e!!,4&XDUj<O+$?;RulhXRNn;@aj' );
define( 'SECURE_AUTH_KEY',  ',0r9LvEEjzCt#|z!XQgzyyQ}$1FfDRzgVv&vQVgWg6_t,w~ s+PaBsg^:8:Iw/;C' );
define( 'LOGGED_IN_KEY',    '^3)j]vCX[lj;P3e:fHmg[=C#v<7a73tI9 RlE{~$Y~<{<H2uY(zo~]cN]etJZUMr' );
define( 'NONCE_KEY',        'V4$WC8P~,VY)?z8YV.!x7R;Ms Q:8p;,33?,f1&&3kA7)zFur]_1dKtk:FbR~w+)' );
define( 'AUTH_SALT',        '.2u~&n./2}@wyMFeZYrpX)}7Z2^dqb.#yb}`l>}+8kcvW1[8wDC%]N{[qA.GA5]D' );
define( 'SECURE_AUTH_SALT', '-%(!1MP2^ellX.%WP: gY8=zI( ksG/o%dZ/icg1R4?[8Ynuz)1lQgC^haQ.+wZI' );
define( 'LOGGED_IN_SALT',   '{5TP}-&0w/Qm2c R5!H&I+,[hd/Ad]c9-wATF82w;4xB[x ,-RB,.~0>1jYwNz#e' );
define( 'NONCE_SALT',       'Yw)|fq{:}^MY.njjghbg76+>3qsX#|F$EY{84)T%`=X*}iMZ!8iyPs54BK.U}VY&' );

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

define('FS_METHOD', 'direct');
