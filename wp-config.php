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
define('DB_NAME', 'wp3_photography');

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
define('AUTH_KEY',         'nt5%f}t0:teU!>0Ki9N9px*(v]m.`Q-HW]55N$)m4!&C]q]xaU6@`|wS(6-()h]c');
define('SECURE_AUTH_KEY',  'EG5M8:*dLI!d[#9gCQh!HK1gqdeb4 Y8w69E5yz.}nX7 l>#-I|+9lLXQ6rg5lKw');
define('LOGGED_IN_KEY',    'qTFMs0D(k}pP<*YE%v]>*s[09b[w`dNfVKcc}XAo4Rq!H36.GGnqq.M7RQvycHU!');
define('NONCE_KEY',        'FR)OKRJ(Z3Ti||;Nv4OCxm(N|dI1wZLhY?wN&eQD5g*H[F!`+L_F?EyO/50c^|nA');
define('AUTH_SALT',        '?oClGc]1@+hF]mvEUa`SLhgtjCRpomWlH+UJ},G~ffqQcbu7zoxI%l#1v^<;8-fI');
define('SECURE_AUTH_SALT', 'T$#L53<I9G8sw{[]9f!= @+eE^F/mauF2SlJFuiw6Py:RJSATVmda[C$3ozK$%{K');
define('LOGGED_IN_SALT',   'V7d3/mxnav=%Ve>O)ulGz|Eb[wQd y3aJ@:NcIRan4)/+p>#)1_RbYl,it4rm!MX');
define('NONCE_SALT',       '5M- VO9W#@Ucor4SI?f=Q5W.6]Wb5J2[jbZ.x0=rW~mT^wVg#$Z@cS^`Ev,5#>(Y');

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
