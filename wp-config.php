<?php

define( 'ITSEC_ENCRYPTION_KEY', 'cWMqU0BqPyxoXU4zJXgtaFh5S21TLFskLFQzVWxHK2NPb1E2JH5UPXlGSXJUZiRWKzB5VGZWWHQyfEgtQT07aw==' );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'cct,9H.2X;O^3qgVmN$=FsDaYY)BNzUSxj=8OKa(L(I8n#$U@xj&E@VML<_[@ `y' );
define( 'SECURE_AUTH_KEY',   'Y,q?;)ir)7c:oQ]:lkABE9|*623F+(OLW^#*N@lVe.7GOR)?r]gm.mskM#YLAO /' );
define( 'LOGGED_IN_KEY',     '7<pFCjf=^G;p`rx10|7A9QN8VW3;+ Cj`vmMbF>*c40p5%37QJ?(7{o@o2st!Gg?' );
define( 'NONCE_KEY',         'a DQ,DuR-m(%d9MBpTFVzo=EMUgSH:R9GHQ:9vN2htTC=wNGJ$|nNesnejbY&LXV' );
define( 'AUTH_SALT',         '=^w<HzOuWWJWFBn)6{o%r>p$%vi8dGyB~=}47p`O~eu[Bs;_WHeawis}VZ${f;1A' );
define( 'SECURE_AUTH_SALT',  '`SsbWT!{Z{uG0X@|D*M]==Q0E]D9tFK}bzOjB]JLMlfr07}`P6A:wQfZy7q26,:M' );
define( 'LOGGED_IN_SALT',    'rcYSB/kbXDH{VVffG>r[@Ds~O}F{)p(+q4GD+8e,>FpdQ1vDF`oDp61q 56M@8_7' );
define( 'NONCE_SALT',        'hl8_Knk3urvvMS]k`/eOd!;8tW0_a0Xxf^ ZcZKd)fjzA][Gcj4.~-6=$%;LzZX+' );
define( 'WP_CACHE_KEY_SALT', '%TtC8k~sv 2,w6u%G[zoSqjea:UH,0KldIZBgjAA>##Cw&q8TR.y{W@X|Z:/{]P$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define('SCRIPT_DEBUG', false);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

define( 'WP_ENVIRONMENT_TYPE', 'local' );

define( 'WP_MEMORY_LIMIT', '512M' );

/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
