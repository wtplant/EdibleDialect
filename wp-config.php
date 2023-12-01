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
define('DB_NAME', 'db653512206');

/** MySQL database username */
define('DB_USER', 'dbo653512206');

/** MySQL database password */
define('DB_PASSWORD', 'Admin@12345');

/** MySQL hostname */
define('DB_HOST', 'db653512206.db.1and1.com');

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
define('AUTH_KEY',         'ces*k{#nrztTTq1_sot$v:S1F&ao~`|kOL{JW+K,P%a*w+v4TrTRsx#B,`,=h>8r');
define('SECURE_AUTH_KEY',  '~K!4|Cyxtk9F<fH5b;{vR#^cPx}eBO7UgmI(J-+JLy-4K;j$~j0z39nE#P@H&43Z');
define('LOGGED_IN_KEY',    'IA[KQHly5B>Uxm#2}Ai<a.!lAK@(=m7PO3@,BU2z2Tu|YFSLBYdQ=3Vedz?nC,FT');
define('NONCE_KEY',        '.1coS$A(:4Dz>} M82q(-dkk/ AKyjD:ntI`KUiR0MFx^kBlHFaMTI_3~UZnrlTs');
define('AUTH_SALT',        'c|0OrP?IJ/LH0w}XRd7ni SmO=y|yG8Jf/?1O903%Ti sL=WsGXwpe.,# {A;;BA');
define('SECURE_AUTH_SALT', ',fRr/&.rY{D[FSi/A$wD]EAFrL/yH8A&sQV_ U?$*C> )KctNqx8kS*o:,:B;p=2');
define('LOGGED_IN_SALT',   'PT`ra`49^*.])$yh4_tzf(~|=Zw4>U`2;I-yTt,D6{E^k/mozz?UH>>Th?^w^9~U');
define('NONCE_SALT',       'd.>[d7k{1^YHy>%dt?`K`>/K5{)y$40{/(_o&Nms{g@<,{/6)LZv|QUn wC=z-00');

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
