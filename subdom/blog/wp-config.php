<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'd98737_wp');

/** MySQL database username */
define('DB_USER', 'a98737_wp');

/** MySQL database password */
define('DB_PASSWORD', 'petr8018');

/** MySQL hostname */
define('DB_HOST', 'wm83.wedos.net');

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
define('AUTH_KEY',         '9l1/p||:$kJ3[4eY/v@4K[g~QgR4A@?u 4)TZV]Od;UDup)ozy+$)?H,e>46xk70');
define('SECURE_AUTH_KEY',  '7yOEj 8^{1SU+3mStTxj,f+!cv==VB >|(v -:Ay/KQKy26s&%ubmhMbs^.edL|x');
define('LOGGED_IN_KEY',    'As~Dg++FA>LbC?5k*&2f%Cj0#Sv.-D]P`~o?8FH:A`_~Nn#Eh*RiI|{U^D-b|^5*');
define('NONCE_KEY',        '|lQ:c_yf9SLcbn>$]rWjoKjkr<!PT=u@wtH)x|aZ~U[8MZx*/ReR5KY^6WJFUU{K');
define('AUTH_SALT',        'X-Qi[HEnw{n=W6qG/wqdDUg^]?(YJdeXBd$bkk,yP(nR}:YWT+LhC7d*(Ho Eny@');
define('SECURE_AUTH_SALT', 'EiX6M9D[4U[y2G5:yo`g}.7KE/yh-/;tse|vKIe<LI|y=i1S;8fi|?y;pKP`i`js');
define('LOGGED_IN_SALT',   '-Cpkh+goXQj+8:.t6F7%/ :<aV#}c[HF`MF!ROwg}#SvaTcwE?e(T`I|)L-cYh$.');
define('NONCE_SALT',       'k:YYj(.b4#>xz35/&LAlGOe?*DK|F/G4%i5p,KuT=o..+52LTBGQ!->aYdW;M(s9');

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
