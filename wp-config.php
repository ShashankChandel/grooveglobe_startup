<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_34960312_wp105' );

/** Database username */
define( 'DB_USER', '34960312_2' );

/** Database password */
define( 'DB_PASSWORD', '96Spp!O6[E' );

/** Database hostname */
define( 'DB_HOST', 'sql113.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'h6ovl8fix8ck7t4faevvp1sgaqufhyomi4vnmywsgs01rtynzqombpvehlllqqeh' );
define( 'SECURE_AUTH_KEY',  'cpacpolba5vkannvv7tywj5ytlpsl5yumoagbfzg2xqgiplav3zoykv3iokhrogg' );
define( 'LOGGED_IN_KEY',    'x4uh7sgomn9ks3jw4gmlw8k337fe6le20mrvzz8arug5gcgy0vgn3kxcnbxarxwe' );
define( 'NONCE_KEY',        'lsemd3vzhjfpjrg420pr9bsobakbnwtnafdtz1jdr8v0scboeew70blvmhy0xs5l' );
define( 'AUTH_SALT',        'bbnmadpot2iqqyevnvl8a2dm82ekhgkndjdiexxwruawazxssajswcxaf09ikluf' );
define( 'SECURE_AUTH_SALT', '9hiytzxsu3rj8jalhcqpeu947ikye5nm78nzilrnugpm4stcrbmbkkf230uvi1us' );
define( 'LOGGED_IN_SALT',   'akgw8kooxom2bdcp7ayk86o6c0uja4awsdfnddrsghcxvlh44umtptxdkd7z0b2g' );
define( 'NONCE_SALT',       '89fuvcmzcz0kbizwo6hskotdfyzotfuhmyzrspsmtlft7u2kv66c9vzasvu1konr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvu_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
