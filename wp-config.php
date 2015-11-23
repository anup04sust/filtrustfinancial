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
define('DB_NAME', 'wp_filtrustfinancial');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'CeKKL;_OX3iJ&l|m2h$&o~M(-#zj8jg`.l;BrX%KYd3-skKZ9aJ)J5I1k.w(s.#k');
define('SECURE_AUTH_KEY',  '4-%2KLrX@HAH>09 _IoJ%GPbmI+g}GRF|0[[SYM+kW)I~6a|FHN`S_S$/1~2;02g');
define('LOGGED_IN_KEY',    'r:Q*f+(-M|%B5]+lj#_3B7OtqT4xDQm=CuhZAc_fL !toDVvd]Op<F.~A~]-cv-+');
define('NONCE_KEY',        'GqO::!Gx*[&>-[NB7%/9|C&jVxtv1T$6 ENff)|07%~OH6)c$Mv~strg%MoI|oE+');
define('AUTH_SALT',        '>8%R>z,{O;~i=SU%qX?B>3- AG29nL^^)aeWo)U[YJPSer~jGJ#Z$}*-y^3tzET8');
define('SECURE_AUTH_SALT', 'TqdVHy+|t!iQh A~AMG 92YiB;fB9B1Z2ti*{^:4^+jQ`qZ+#fV<@7SG*ADxQ3mq');
define('LOGGED_IN_SALT',   '}-4x?1HYdSQ([psKs3UOSfQdrfh!C}z{<[+36z:}[@oVn)!(vZN*/Mzi?WQEsYe]');
define('NONCE_SALT',       'f=BfV;]b(S.NB}jh8>%y&mqJy0P;y+6/:O$A ?ruj],7tT3C$(iO}Jni&`0d:u}p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ftf_';

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
