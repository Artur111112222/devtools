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
define('DB_NAME', 'DevToolsSummer_Artur');

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
define('AUTH_KEY',         'Mb3[>3<+8=T.l>APAe$_z]al=%JnP},fHE_%ihY8:$8=;p(ZiS;rk}A^4YI1vhpL');
define('SECURE_AUTH_KEY',  '&/srU;iQGjkJm~wbh-#(%AW[7GS#S!)I4O`F5Xy#G[7@>x.<Igt]^P,ixW`l ^XF');
define('LOGGED_IN_KEY',    'f1WOFv=8:azv[O!~2tP`TXRv(M^Q@=h58ge*9C;Vs,iZ}gXUy6}eeT*~l55n>`_W');
define('NONCE_KEY',        'xN<Y>+MtwO1k7jMi7F|{,Q!+Q4}VzU}~OFPg5?&nh)QfX{~6VS<%f3|E[1,VNZ<.');
define('AUTH_SALT',        'QA+;-l1zA<s]l(i;L,!]VOWktO?};xp2kT/,, B+hnxK{fL2qy$k&.k<FBwLoIqw');
define('SECURE_AUTH_SALT', 'r?8(e%Fb*gk8~=4ajxu17^Tcc&?_^l->5(dnj:)}`QB/e{_XJQJCiO`W%d#h$ff]');
define('LOGGED_IN_SALT',   'QZlMC0gv@.6pJwOukR5CWq_k7JC&c!K;W1#XBJI)$2~{`<LQ8/xw=qW ,S!SPjP`');
define('NONCE_SALT',       '*>fVZmtkRvi2FfM=}TP]lqq%=Qi.3kSufq4rl I6_`{DVd;>N=I}B+@@KHNfx?=p');

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
