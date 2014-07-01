<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'beautybyestelle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'HraSvhl GAj[gNGInWGpb8N9=3}1F(N}tD6_/EnV<[X(uYBG]_0 )]z*1-Hj:bvl');
define('SECURE_AUTH_KEY',  'qq&?de|lJ-@,f}]A+d T[T0Hc`t|y~~|t+y}dO(.]BBh+>IlMfM/|NE=Unbz+2UG');
define('LOGGED_IN_KEY',    '(}YSoBD=x]zA-uvhEtT-tQ+n*|DeByl/LY*HW @2N+h7#od:+rX`Tnzy;+h-J=^Q');
define('NONCE_KEY',        'MXY2/^!R;!hx0`&^xHnP{ ]/-!yJfJg2u9iG?fhs7esm*+PZpN+/=<g6D=2f<fuA');
define('AUTH_SALT',        'E6u=pe-{`hT<Ec3b (2GsFX4?0$q1,-4 k|oHccSy&;qC,nU$ TpD@f@$Kls5/W3');
define('SECURE_AUTH_SALT', 'R$>oTU09|whZ<w6N8|hd^HunhW^j#qc{jaKU8Rs+?(|*;V}X-EvT{)#tp!lVC-e6');
define('LOGGED_IN_SALT',   '-`;@}xT^-pci%[p? +8P*QfFQEP%`UG)8m0&BIAu/H/9=Vy,tN|e{tDJZ-> mc&7');
define('NONCE_SALT',       'LqH1C?|1zD_Ba3:u_Oj|;8-(lL%P7UwmG.qmj`yA+v&8m#_h6f$UKV1vR#-9.8HE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
