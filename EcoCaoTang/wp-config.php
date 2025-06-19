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
define( 'DB_NAME', 'railway' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'KWMfSQzfGyEdjorJeRHRGgExYTHCCNTs' );

/** Database hostname */
define( 'DB_HOST', 'mysql.railway.internal:3306' );

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
define( 'AUTH_KEY',         '+O_~Zy;z=q6:q3YmV`yv?]VsQGoL.381wSU8zQT(;T,ZYkJ6f@MM;^`oRQ!/NAiO' );
define( 'SECURE_AUTH_KEY',  'qj|O|O&f5-xdZsED<`!v$g+EMs>MW&+9izpvR%6QCP6K$USCms}.2;bw[Ewufb]:' );
define( 'LOGGED_IN_KEY',    'z9P#n+1*~V,ayjkhi,A7YeO#nj[0U8y17Zt~q)D^;eSE@~grwbmLhL<Zv;4?%$@u' );
define( 'NONCE_KEY',        'jD7e<.jJjz1jyk3_{*$Sj^Y{4@qCYQ@vRkxCXx#d!XA#S2<6JKZ=hC<vV 3TUnJ?' );
define( 'AUTH_SALT',        ';j*a=% #?O3T2 C]ES4W|{$i25q:cG6g>pf9`tj[CKWMDk:Vw0Fnfyv;^3ivze3g' );
define( 'SECURE_AUTH_SALT', 'CO<<[^yIm*kW9~ssuhRhuIyu5;:V@kUHJCbmRU05jBCLu815v&GM:RYpj!]@g$DU' );
define( 'LOGGED_IN_SALT',   '{TZ_;S/|:U$;(omR>pXT&.s.OARbG8$PV]gGJzl:Et_4ojr3Fq2oY:1`he/p*[cu' );
define( 'NONCE_SALT',       'xZY.Gf}r;Wzt:Tz$noI hKW8NOhPS-O>I]du?my)E#N C;$c!<VaY)R8Bn&i_|]x' );

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
