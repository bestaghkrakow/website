<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'michalg8_best');

/** MySQL database username */
define('DB_USER', 'michalg8_best');

/** MySQL database password */
define('DB_PASSWORD', 'xWsyBVaF');

/** MySQL hostname */
define('DB_HOST', 'perfectlevel.pl');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'd=b&Gc?@%0ua4X(l@jQ{/%f$W+[pc0}pIN<^~2=%w$7uz7|l+uOK0}eScNQm%+iE');
define('SECURE_AUTH_KEY',  '6E{-_zeP3|7SgSbg><^8Mh0@V@ctMt%E_<o2>}lClX$h/s{KA+L+fdh9,^bh2?+e');
define('LOGGED_IN_KEY',    'JE.{FbT;YA1`bGmO<<!-Xgle?S0xTg]Cm1|!r,mp)UY/U&$B#Gk_:(qWa*&--T?J');
define('NONCE_KEY',        ',?$rgh_}a I,X_n3LDj-r=~}i(R<EyP|mXCtw)6xiic+(O9nb(R|5$~Dy)NYI=BS');
define('AUTH_SALT',        '*v)z4%bmRS{yNlxzV~MBk+VXWnKQM?iyE@YIar7xN/E^bXdlT}#u%~:cVQkTbPf%');
define('SECURE_AUTH_SALT', 'thWAk37K1o`mm]YdwY:F;=yM0P.Rq)QNlh+KQ4H.KW-5-OaOmB?@M6~;{^l(kCIL');
define('LOGGED_IN_SALT',   '4x[o7X8jG|mLrORQl`dOi<q6$,vZp#om/./_@[uC,XesK;N.Y0IU+;H-5z4@@NwV');
define('NONCE_SALT',       'xBA+(z|05USt2d<cBuaY@D5.4@o5988,d?vB}h5&HN;$mm!ji|Xv*LSdFBg5I?$q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
