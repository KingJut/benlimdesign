<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kehaji_benlimdesign');

/** MySQL database username */
define('DB_USER', 'kehaji_blim');

/** MySQL database password */
define('DB_PASSWORD', 'JGMq2B0@d%{QAxs4ops311GGsup321');

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
define('AUTH_KEY',         '.a=,pC^h4y@[D(3]6Kk5;|*=Wr>iB@S:P(9Bc>yG9,*3UQ0[`#CJ]=oV(?TKw0O*');
define('SECURE_AUTH_KEY',  '/uD4$|-AL~$=^Pulv!N Ozm+(vvW o?d0J5j}D*f23T4M#D,OoYP&8a.-41,ms@Y');
define('LOGGED_IN_KEY',    'BqZCU;i[Nqj*,oF1tl)(kH_<vKUNw_vt[1/-cuPxebkRo-nXjV7XJXCTHq,#jKVC');
define('NONCE_KEY',        'AYuS$w#b9sIDiU`7{ Y1Zr-$0}6>]huJ}zjC-!rZ68 q>]+}tg(TOJv<z@LE0D2)');
define('AUTH_SALT',        '&y>IS7)X)8c,v,1dgs?m+p^np/#C86*Yb{is6+T+dmX]{Mq0G(V55BQE@P`R]b34');
define('SECURE_AUTH_SALT', ')M=Wh{XRH#fg5?8|i=w|=k+oL3<4}LKy_[(>$BF0~<.W1eI/6,0A}ihWaGg4-TKf');
define('LOGGED_IN_SALT',   '*It7U9*m$|dgX-|Ojh%N<x2z9b>_t:eJQ!=F|%8XeVM8eQA&yezH/L?h[5pE>7.=');
define('NONCE_SALT',       'Mn>H-R:dI8CH?-$}KexSPKX,Fq?v,&-y&;?D#M,4o|LQkW=:$*Fwnni$~Ja-U9sP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mantislim_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
