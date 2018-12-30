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
define('DB_NAME', 'ID280887_cmswp');

/** MySQL database username */
define('DB_USER', 'ID280887_cmswp');

/** MySQL database password */
define('DB_PASSWORD', 'unxny6199');

/** MySQL hostname */
define('DB_HOST', 'ID280887_cmswp.db.webhosting.be');

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
define('AUTH_KEY',         '-AFyV_,GOf{CpV@JeO[%QzSp}98aT)8$8/rIrjd&A}%S-B>EE?P)Fig;|05Z{Ed7');
define('SECURE_AUTH_KEY',  '!gm RO9MPW<!G?bOBkKkD&}~C3{E%L?I1v`v9Rov0IG!U,DAB?q`HlFP=yo<D.$G');
define('LOGGED_IN_KEY',    '::)4V0~M5]+]Cf1L?vuE6c]Yt{D4^baR{Q ))4{Y.h.XSDZzw?Bf-J1(u=$xM$18');
define('NONCE_KEY',        '^G0m#5E=(`:7y+_0rVT;@I DDd|UZB#LN=d@=!:EFH.Pgc}_v%.|K8U9Q`_.!2|1');
define('AUTH_SALT',        '9hoDf~<@p:dJuI!KD2&OB~bcCZ4x=Ba+&~]<0K0*QlC{I+LF(#VawT8`J}T8D&Gb');
define('SECURE_AUTH_SALT', 'j=X/QLUq[o}~B-K7w;pEIgu)Ar&hWn:p(+(rhbA!@Vx`3^UM)gO1S3a*Be!1Y.s6');
define('LOGGED_IN_SALT',   '`cestJVy,K9{Flzj%l/Lb{bBh8i_WG~X+Rs~C$1]^`]U8O?4,^8=kB&$sh#2QLo>');
define('NONCE_SALT',       '+g8~<wD &wjEBo@<Nt+7~#(N5L?l:^Of>#`+;NiX+!TsrX#BXT!kSfaldwp7?B&G');

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
