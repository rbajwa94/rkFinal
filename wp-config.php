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
define('DB_NAME', 'rkFinal');

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
define('AUTH_KEY',         'WKD0T=[oZQ9<tU-PvC{GDnzlx<[}(+IpG6[S$k~6EqOATif6P(k^!kK9EWEH@Di^');
define('SECURE_AUTH_KEY',  '5ddZiZcDrn<M.WcBjdSNhdHJ-<Xn|4*D~FSzhZwJe!bCGj4QScb.vde=$)|.hFq:');
define('LOGGED_IN_KEY',    '@+]L|?{svx@;.EaWx^Hti_#t1:xx1NLVoR`2 m{Sb ovF*]!>s [%5YnU_V+h--9');
define('NONCE_KEY',        'KT{2(hq8j+1#)~ZCnXgW(*M]J[R?|u)?*SP[l)b+ 4y}Nr0BKfoqcwl(UW5,5OM1');
define('AUTH_SALT',        'r)9Mri2d.wPeshk7?::A^(%^FGk?L`#F6t>mSUlF$hG=K4O0wILJp[BDWwjt> *q');
define('SECURE_AUTH_SALT', 'V$E|$.jxblRrb:x{SMZo4bN&9T=Jk^vWhq|PP9wWggnq^zdfZEY}>Hq(Zr|a}0/V');
define('LOGGED_IN_SALT',   '/OvohAZ:|be5o)^7-!lA/0JrKnOy=NErS;qC3a~R,Lw]>;MV:lT{E2+;WBgL/ijK');
define('NONCE_SALT',       '9i#rU$lu;LjnzCWsh]g=F`#ZiQ5^uI]m_d_i6ia}CfEN2h=%pdF:0f69.u/FEj~E');

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
