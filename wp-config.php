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
define('DB_NAME', 'longnn');

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
define('AUTH_KEY',         ';TD2pnk>*{5/f`y~}e23*LQO/k`zutgObh@X`_rsI<^;H!!z~Eoo_}]fdXZLS8xt');
define('SECURE_AUTH_KEY',  'KHSzUh963vNPZ=%q%/runUDF3{eO/uh_>8_Yag$#<%l ^uJp1ae Hl]_5JoJ|:yp');
define('LOGGED_IN_KEY',    'TkyCL$wp-Z4E0[qa-rs]0sBJGSvc9yA?+{*ry=CYJmZT2yQ.]3z+nnrwZA0 =`R/');
define('NONCE_KEY',        '>)BFA?i[62{zfWV[B6m9FoJ.8H*w*qat@>T<ia?H(x}j<C{~z)gZ)_LXxO/}JEcB');
define('AUTH_SALT',        'mpE|iQow|{1&1?#M!vp~gz9LbW0tY_S^>u=WtdCff<vvlg[TVn~[*c.bL1cfHHnn');
define('SECURE_AUTH_SALT', '4/=cyjoszlB+Wje&,]ZMz=#)!p$hI,bcx^~fFB4H=lVS RH^rR%1`!u_OZYF^eO2');
define('LOGGED_IN_SALT',   'F>;/b{li!UiQ!h8D*<`s|Z/Jr^O~U}*EO{T=?d6&z67V&7~BKY1~x*4f$-z:SUs7');
define('NONCE_SALT',       'q~c^*zXBPxna)XE0Z.E`i8*]Z`Ra`@@6m(8&a L]us%bH? 0`Qx^6k#r&O->1n9,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_nam32';

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
