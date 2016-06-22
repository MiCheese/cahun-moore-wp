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
define('DB_NAME', 'cahun_moore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'TqTc9g=_Z8A=Pz&Q*A9#-R*@Ild-IxPqr>+A{I_Iy[aFDr/D5I9rkK0_mr|c#!wf');
define('SECURE_AUTH_KEY',  'ms1^R?f4f1:c.92Z#|39Vt&]*)M4pk[`u!.;j-N;4vjsA&j-VskbKP|zI:RnhrDi');
define('LOGGED_IN_KEY',    'm{iRpsH|i]JgD6sq)<e69+AKG[*Gd~{!eAJ#W]a^.Ooib:KK|dd&59w$P#f(Jbam');
define('NONCE_KEY',        ')i`Jb[;p(*(p:ZX#9@Iz#0n4u`[FI!OM&m)$bCmu4#!lc#BfDT5XeyV4hXqazq$}');
define('AUTH_SALT',        '_q>;sB@$c_w}RB+9 _qS&#CjPrT+sbH7PvS_J)L*f[TmBE*a$G5QYjEyD:@n^&n>');
define('SECURE_AUTH_SALT', 'Gz_L3JNQRI]/NU%Nksr#W1iDG_!vG4/Fw;Y$( hiW-w?%m2=>MjT5om9c6Kx@>.)');
define('LOGGED_IN_SALT',   'a9Z~iONNGoI/VxV65p 7c L_Kf@$?{k{Dr?FO}_u*Ew?TIJs9ajC[-kY?8yi+o|J');
define('NONCE_SALT',       '5PnMgLJ-}9sPsA8bds&BlzB^(`SQQvK8h3wPJaX65U|H]0[[C_Q&%2cv|L!h0<Ig');

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
