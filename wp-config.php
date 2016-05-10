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
define('DB_NAME', 'whoopeefeed');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// custom add
define('FS_METHOD','direct');
// end custom add


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',inn,H4W 3wBc9xNu=C]i1+cQW9uPy^q#|)W<S;#>4`j0ljm0*iX$l,`lp|n{G8T');
define('SECURE_AUTH_KEY',  'z`;^Q_Sl|}aaQzZ86+mnP1]mB6h< m`WMD#Koy:BhN?i&wh5_J19U=oswx>KYJZ_');
define('LOGGED_IN_KEY',    '_/KbKnj}Cvm66`l%>TK[#?4ER>&_5dAC6z$j.(f$caHiBq[r8IRP$CCdH4{z`SpG');
define('NONCE_KEY',        'l[nj2$#+{w;LA!yNrT(d&U%yd/CFT7,t!?ftdBytjG+s.IPl5Sb(eod66Z4~=214');
define('AUTH_SALT',        '$NNTnL|cR65jDN(j3p&3>eJ=yV88TMPRYbtQlz3cYDm-Wwezj2^QhhvTK99i,fvE');
define('SECURE_AUTH_SALT', '@`=_40A%4bVx$AXbU[|b;B)GLXm^4%(7s>ZH/)8=Ux;HuQcECtsTy3 /yBU>+tDj');
define('LOGGED_IN_SALT',   '(%Ymsl=KVofUr/Nx!teFryi=vk7(uGjlE<[-x:.:[sNzL%n. UyJynrGa?H,]jOs');
define('NONCE_SALT',       '}kE},G<tcJxy~L]A#>e|FUu`+xWegboJ6lv^Mw!{eyO-i+|[$BWeEYRbk2>#DZjM');

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
