<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Tienda_online' );

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
define( 'AUTH_KEY',         'K{oiH#|`1;w994ce$U,>v,ZXLACen~0q{rKd|iwIktD!>}XgPa/s[+ /$xUd66-W' );
define( 'SECURE_AUTH_KEY',  '9[6d[`YY9[>sDIis%U;FhGkx?vf9j_eSlR{z`@5Irt$eCZhV&iJ[eBqC_s)7JI$B' );
define( 'LOGGED_IN_KEY',    '<Z<D,TMOhr%C`8kjpd99 6Y/v a?:zdYnX`uSv#k,gFlWH30CAZ*Y_0#xmqYU2Dk' );
define( 'NONCE_KEY',        ';vjhf9[DUt&Y$g1s0@8cY)|it?>&Zz$t34KDAkbP}vbql*V6Q( D>7R4H&<s;:D_' );
define( 'AUTH_SALT',        '$(wke7y-rsRfDTboEq2#XW,-$N5y8-+y8Zg|P[X`qU#7FV@}DUq,,7VLX[^W4XyM' );
define( 'SECURE_AUTH_SALT', '2)[V)-1I*#jN$Vb.n|)mjU].u.Kjqo!Jfjnvl@3TL)?DzJK+9`0zAqA7ksyWrpV[' );
define( 'LOGGED_IN_SALT',   '@4u+ C9;*;~IN#dQtc!,Xx-H7!uUIDR@V:kIg:ZazN+8qUk_Pl-;5lGa]wzLA>vS' );
define( 'NONCE_SALT',       'sFF3T`{Mo?f,AL8&(8$+;M8V_v{_;O(PK^5lWR`mxkpPl4T&b&kFyM*?>B+`)hf!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_tienda_online';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
