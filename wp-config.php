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
define('DB_NAME', 'audiodea_audiodeadline');

/** MySQL database username */
define('DB_USER', 'audiodea_audiodl');

/** MySQL database password */
define('DB_PASSWORD', 'P@ss0987');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|n5;n{dw~J/-blR?ocT<9e=HF7~tXsn`i;ySyw{):AuuH`Ej.lnjr}zVWnoMZ#Ai');
define('SECURE_AUTH_KEY',  's@V[D=t-&p(:aG<km}5@I!E1,Lf)?]xy[!c`.2O BvO{>B:DZD*Gu*foBw{t|X7{');
define('LOGGED_IN_KEY',    'jjEFOoJ+|4zotgweTUb$}2F)yPNyO#|f~@-]8HplIK<d.^%]cbzD%~>vM].$RIji');
define('NONCE_KEY',        '&h_ra+j=q#J`^))J7r+iv8Q8h7;ng2`XB]m0fzM(&p0rtC26D_c;Z-{DLnOBL1(X');
define('AUTH_SALT',        'jMg4VO,?CH$cP;AYsl?CyS?wZ))+U*__bS5ep8>%Xe+vdQElH 5`HNii@30QD8m{');
define('SECURE_AUTH_SALT', 'ZxzBlPt*#adXaidk?.!UubsKRcb<x>go9p#lfA)]9ENQ.<8 l,NTpOLxj?oK?<@Y');
define('LOGGED_IN_SALT',   'NhU=%eI2nZwy-~! <u3A=NG}:peD^W]:5YS(NuI8^|I6Vc[Xy=eZ&k7X^]A|r9O~');
define('NONCE_SALT',       'q/2n678qvD1M:~JzfUc2j}JHB*=<qd{N(9+$;fr#9V0#dflBv0!x`aT1NVUt>ucx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
