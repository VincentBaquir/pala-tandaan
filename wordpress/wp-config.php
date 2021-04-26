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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '09128955130' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vM *K$r2A`hb4g.q0pIb.gWIRr&c`{O`I#XyElV;[ 2<6)rtEp1[2I[5YqeaV$0(' );
define( 'SECURE_AUTH_KEY',  '~&C$Fd}lN0d_]m{StP4Ips,!v//SAx*OxWixbq/nm3vUY{6[,;,OB%Y]Y#5RjEm1' );
define( 'LOGGED_IN_KEY',    'Gt_7:<#8khjYeSE#s2bR%O1wlGv@>)s{N(oO7nW;zSM>_,CGd<OjQ#wvel9=G/Z4' );
define( 'NONCE_KEY',        'S85i1C42]UPe5lD:R]P>9?P(Jv-$hC8qF]| fd#Co;sJgqq27iP#?$q+D,,}8>Y;' );
define( 'AUTH_SALT',        'KD#T]R~s_a[!fgTfB~sc)7[6= JmE7=PlaE,VGBI^_b[H[#nBFgUm15D%Wqf_fK ' );
define( 'SECURE_AUTH_SALT', 'od,ibS..Sy@uc=Zy_,HN,n8q7|{7 fvbQ+}%fD^~nI:fcegI=9;LW(k|Wq,r>uFy' );
define( 'LOGGED_IN_SALT',   'dI,ZvQB{)5poWlWZZsspr^Zn(fc<N6MnTq@h6_D, Sj`&7V/EHjIC9o,;^-cZp|,' );
define( 'NONCE_SALT',       ' J/8W&5V-k5b_ We#pkqp EIT`qCWO/!wU1k%g6Nk),,P#nAn0}_gZ-q[kj56_~T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
