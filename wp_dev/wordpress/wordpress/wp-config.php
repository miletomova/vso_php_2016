<?php
error_reporting(E_ALL);
ini_set('display_errors', 'yes');

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
define('DB_NAME', 'wp_dev');

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
define('AUTH_KEY',         'A]sB@0|ov5>h,JohY-k=O]-]SQAa@DXU~d&6M1].X102)p7+:EFYhl(AHZ-z-YBh');
define('SECURE_AUTH_KEY',  '4p GD;eHtR_j{vxQoO?*?!b_Wp~};L9)%@oD{V)#gW0u5UCgpn27<9hW>}8KfDZF');
define('LOGGED_IN_KEY',    '1sMzo nD{v]6|p#QN3zqF)oJbV7FRj{D,]V @f{.kW^~RXpO/}Q/x>|UEk ?0Z{>');
define('NONCE_KEY',        'K?{SnFir5Dw7QSWN%F;$VM.w@)J?5xkgt qS_xTEroGrbt-8l}?0k%/vJc?r^aSs');
define('AUTH_SALT',        '|2vl>}4*qX>aQ2otFQYF>Cp9VS5f48!cBx?Ke4Yo>jxkVZ9eHxUs6oY$e->kpl/%');
define('SECURE_AUTH_SALT', '167>J2]c !XbrPg5gdEzE}10k}r<j/gCCX8yw|DgVOvZnFeDQu iiJRxcup=Yxq0');
define('LOGGED_IN_SALT',   'iogXPw=9Aq*/Vxt,,iYV#af8o8x!/HPM_,zKF~6dpA,Y|xwC|Pn$i~hGvfD]0A]U');
define('NONCE_SALT',       '3*u)E^TjKK?69_m,IJS:p_I7@5/&9Ba,cqa [-EZ20?BV/#y:=e[|mWU/!x:<v:x');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
