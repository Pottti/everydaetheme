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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'everydae' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'U)x6NzvJKgHLUj/I?+.mh7MnNCqZ,DIJ/kQcY&u< ]-mvSW!f5XFBmKg.)6cZ:}s' );
define( 'SECURE_AUTH_KEY',  '5`rA~1-C^0S^N%%&tz@tsR_Q4P8@qyLO4|bHZBUn7#g?3q+,ms[:2Ab9a^>2:C{<' );
define( 'LOGGED_IN_KEY',    'N<t:g5)$Z.Z!+frydZ?>8ck0Xd@tQ!U-#t+dC8ffh>q?i}$f6O&6f[mRBK0w[@t_' );
define( 'NONCE_KEY',        '`Jl>Ok!J5fE7nH{|K6?CyF-)RjV 2oj-&;cM](qg]PQ7+Hii>8I[^~iR^+V*s.=+' );
define( 'AUTH_SALT',        'm6B}XQ|Kvww6T6s@#~e`>VYMAPRx0htyVE7o N[mNg]Jbd-UJ/QMiuVH_vr[t%Go' );
define( 'SECURE_AUTH_SALT', '89=:f@Vc`a$$-#UgI]O2;p0heNDaK?N V&(UlRLrpg]]3DMK7z:7^5Kon`x14Zb>' );
define( 'LOGGED_IN_SALT',   'ZS&3_!`v *RZR [:UOpwpRf?@{d:MAqL&4qQNAxSjVT]4LtNX%Ae*!mY0rAWQ=A=' );
define( 'NONCE_SALT',       '*fFFUI-exzh2HMK3%K6#,Em.$hKg=Klv%8O4O{{Dz(]ZU,0NQIHH(cE=6QG R!$7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
