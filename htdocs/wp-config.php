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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('FS_METHOD', 'direct');
define('DB_NAME', 'wordpress_dp');

/** Database username */
define('DB_USER', 'wordpress_user');

/** Database password */
define('DB_PASSWORD', 'sandi_wordpress');

/** Database hostname */
define('DB_HOST', 'mysql-server');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_REDIS_HOST', 'redis-server');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_PREFIX', 'dolanan');
define('WP_REDIS_DATABASE', 0); // 0-15

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
define('AUTH_KEY',         'De<HL%H%=?b=g*E]`]!y.m7;r%t+t$`c{AWqj2FRrhY15@U<[OrW*>b$KaS4nNaG');
define('SECURE_AUTH_KEY',  'q.xz4OxZVmwo[!l?]PEt#Smlm ;>xD+12H4B6ysFS/Xj>|[|i`|HI$&$f.6YsX8/');
define('LOGGED_IN_KEY',    ';4O6U`iV~9`XVk{HCY)=_8rfkrDt2xv&410-{gED<L|S`6_u%b%fAjEE60md47=<');
define('NONCE_KEY',        'R))>[KTY> Qb(%y{cceA3iE1v|oKH=dhgAVTZ[JaI(l0f0A+0Tmb%A!F&t-F>QLZ');
define('AUTH_SALT',        '}sf{+3Njb{#. b2dCXwp<^%J=Vl:.;$*m{<]S>CH]z,q}vcw;z_bCh61x1q^f*Hc');
define('SECURE_AUTH_SALT', 'W4_YKubeW5Lf/BdbSK1t9c~o O--kl4J{#-d.Ok]l/;ZF-oQq13~|WuhN9bXOu+h');
define('LOGGED_IN_SALT',   '~k59MpQcC{y{F(b<PA%-CY7!~SSKQojL^mOV|1?Jy!F.bbai#7+9|dC)_F2iWoyg');
define('NONCE_SALT',       ']C4,&1`h?%!JIT:hl.@vao}dcPxse:=f.3$e%`b~(@LXje8(+()NF]iE1qQ_e|j{');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
