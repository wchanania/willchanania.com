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
define('DB_NAME', 'edenfa5_wchan');

/** MySQL database username */
define('DB_USER', 'edenfa5_wcha');

/** MySQL database password */
define('DB_PASSWORD', 'JengBul1985!');

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
define('AUTH_KEY',         '>q]ve1Pa0gI*0(-K!%57]l}(((s,_4Ab=gs=E$_By&VL34% S:E%=aW z]D(D{#Y');
define('SECURE_AUTH_KEY',  'y~$9O]Z#`VkO](&TJyYznS,Li7Gi. V/W22*%M.&9uhcpO*DHP*_U9!oij*B?w=H');
define('LOGGED_IN_KEY',    'e77C3GmR%DThWtDao.Q!?!~$S5eScVRJEt]$f[,;y{3I~E7Af&1#e:NVG*KbWF;@');
define('NONCE_KEY',        '3>68:yB!G&%Iv_>Fh9tR{ffz^&@{l>&9@w4ZlS,No#rm0L}4%qN1%E~p1k:vT1BA');
define('AUTH_SALT',        ':WzwHw(<:4mR&mU$g;ic8co&SQ5D#/qP6ME&PJdCy%:.1nwC9f).BJ,Lud!e,S9k');
define('SECURE_AUTH_SALT', 'bCa?C48PfV6]-Y;WHau-atV6l(}rV:Eu@0[<)#wc1]^<o%eDN0$XkBO.05N:gypr');
define('LOGGED_IN_SALT',   'rs3kpjwECLS?SPQJVEKS![Kidt?6Jo9Y=*4T)7qxDIN0}]Q{BRiB]KcTWeaWtr6$');
define('NONCE_SALT',       'EEm@5I]qpxIo)UrQb_& YZnS#2*N4YbBs1M4Ar)]GIE.4PWSJrT5XQA@3ibn[nj6');

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
