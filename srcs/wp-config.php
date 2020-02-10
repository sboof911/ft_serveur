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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '01n,f_{l>_C-U+gY=w2TdphPd{M8o&.H2Ce{{(XLejuhlzY>*Q.8ENg@Ke^@<)p*' );
define( 'SECURE_AUTH_KEY',  'ucQbuI^22sZ(;zga+OFJf%X)e,/nxTJoy;olY,U;L!`yubH-_WD<KAGi/>1FWy~>' );
define( 'LOGGED_IN_KEY',    '4WHFlxJv7;|Gv)33Z Qqs]h9Y6`rch]+^U5 I4qNv^@SK),)E~eV_a.7?JP_#%<m' );
define( 'NONCE_KEY',        '0H=IdCoDS5>c[3gJsHa2,17.6pR(_RUvO|q2~VHf{g/IOzD<2JdJVres{,Ci@/<+' );
define( 'AUTH_SALT',        '[hYmLAX?e=GwOeeX}y>P~F<HpU=}=k}C-;Qi1&)t-+SZz`QeU:$!Fs*LdG29SGyO' );
define( 'SECURE_AUTH_SALT', ']Y9W~&YYf3UcwY%^9Z+KzxG-(#hLQ.HF$5|kXP=]<H>^$7UzX-&J&,)68_]@0Ux0' );
define( 'LOGGED_IN_SALT',   'B:|RCk$GJ+c|iUGtg,<~_R*^@}!|D?|e_Hv#J)6,5wA$9Mb^cQJ%8 bO,_|W7GJt' );
define( 'NONCE_SALT',       'V2P!e&{J+}suo$AR~l_7NZIu?cA4LBuw8ig@Q:`8[JQD2UYIY996.-A7+{uzL;g[' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );