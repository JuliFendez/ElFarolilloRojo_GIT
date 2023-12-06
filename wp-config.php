<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache




//define( 'WPCACHEHOME', '/homepages/44/d840988199/htdocs/clickandbuilds/ElFarolilloRojo335655/wp-content/plugins/wp-super-cache/' );
define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'u592993109_efr' );

/** MySQL database username */
define( 'DB_USER', 'u592993109_julifendez' );

/** MySQL database password */
define( 'DB_PASSWORD', '#eFR.2908' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '6N-N)*|y&d:TBg_7K8az`rYQoY} <^.d$)Vb49,-Pu_ 2>Le8i%x}|vRu;$A  ^B' );
define( 'SECURE_AUTH_KEY',   'f0+_35yj0SAeg!BRT|)UYxxezfqD5c)Iapqt2ERRQhO{x-&(_boo w*%haC1Gak_' );
define( 'LOGGED_IN_KEY',     '@sP.`dW?v3dVE3RXCBO>{S`yQMMJ hzYag=yeH#jcDgJ*iM{ 8PzswFDBY2.CaE7' );
define( 'NONCE_KEY',         'kzQ`lQ773vV<LjPjh/<IXX(>Q&ZXst;c@oM#C=b7lpd|,dCXV0cQ=kNPejI;(Bf2' );
define( 'AUTH_SALT',         'l[#=fBO)9WmXhl:#}Jzz$csN#Z*K/9mBiE}<p?cPvsC1W%sv~ZZ<t7Sh]jO0#PdP' );
define( 'SECURE_AUTH_SALT',  '2), Iy?6m:o~45`ifGx6VmKNwmk>>owHg4yu=K3~27:MOZ[By8)+;tl8#dJ/P-Yw' );
define( 'LOGGED_IN_SALT',    '%q;9QZ!*{F0]#1u.G9|sF**4l&Qkd81H#W;[*T JkXhgc10/F0LR<4B.KPfZP];o' );
define( 'NONCE_SALT',        '#i<{6L6v[|IUn-c;W}!@#.t:a+PP~Uo[P BbDE-)Kfw]BpBATNi&E4jDQ{V&TQF<' );
define( 'WP_CACHE_KEY_SALT', 'A<,=-84@l<*.VAxLxV-)&xW+WBLT>sq;NP36RQRr&`OJw6_UX.6%eUwt lll/G!F' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'RlIFg';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
