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
define('DB_NAME', 'i1920681_wp1');

/** MySQL database username */
define('DB_USER', 'i1920681_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'T(](r6OChYUi^^3H#B.03@(8');

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
define('AUTH_KEY',         'wVGjLxGNLvR3C3F5mefAWilk4amHmuu6w2Gj32F7VAbBlBIlZbXoBnvdZy2g2oXF');
define('SECURE_AUTH_KEY',  'OwS5NoVQakiN1FrpmQd51IoYTfAviQrGZyziRbffbKo7aTmQeaPbu0LDlpIm8DfV');
define('LOGGED_IN_KEY',    '5JgAO2Sg53u3naPLWr2UWy4nKPJzCCgJUYaJHKN0hDyjyDLcHIBGIUwKsWxdZf6H');
define('NONCE_KEY',        'wCZqt26QmihSRfVdbvS1Oe7PXglOPi931npjm8qFxZmt1EWvSti9Nw9rH4OUixW0');
define('AUTH_SALT',        'rIkT7562cOLV8W80HCWHDsyEOw5IV0FzSt3Hc0XZ6xybwpeimXCTu4VuJjRrDXPr');
define('SECURE_AUTH_SALT', 'q1TroT7cEzU4K7AneViVNeMh00ZYM8vGcpzqOteByvROqCrW6nDlHrASfZVzjFqN');
define('LOGGED_IN_SALT',   '60xnFfBVErj11s0bYkFjSNelw7gz2iFtymUcL0IGE9L8ucnO9kN21fF2lQUpIKLp');
define('NONCE_SALT',       'BzQOTnX2AlsgzD8tOOxeEyGwrOjQ6DadNVJj5w7Y4KTYfUabzLFXY1MGat3BSYAh');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
