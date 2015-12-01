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
define('DB_NAME', 'portfolio_theme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'P#MEg;Oy7sl:i:8+eI!m|ACqQ>izY-zq9ls*?D|tVy^)Ds)@dO=j&0DLZ9>c}H[Q');
define('SECURE_AUTH_KEY',  's0:?:i]Q;9rI:E2(ZcLg8VO+*.FoUfR!toPTIn uX52A)EeN|I=Ye}HrxIJEok0Y');
define('LOGGED_IN_KEY',    '~71]e#Q[}gI.15tBspXN|A_5G:Kn+:>3-iAEBw{galDsY]V-F>fpxcdA4{|k{=~O');
define('NONCE_KEY',        'SIbtf-[Foq:0}[xG|>^C[Xn}:jeGm}TLSjoQpij<]Kgs%f<+U#9U%Q1[-t FI]Kb');
define('AUTH_SALT',        '#]=)dlt/W+/f!xvB]K5PZdtVP@yrw3G)C|lx-NI?5SV^Y^g)3%{f:T+u!~mM]q/+');
define('SECURE_AUTH_SALT', 'Ey-PtG@W R7,)zz>(x|TK[$+(9G+m^8EK/jroZ{)V:zJ`N:Q74mLYw]>MC.>e_kA');
define('LOGGED_IN_SALT',   '7ECZfkk+O:?%c#,],[S4BjB5oxL97tKgeW:-)]^Mj0>CCkVdi@Zp5sn^)UZE=.i,');
define('NONCE_SALT',       'q^N=0n5Ne+`d3_0kyj9B,bn YmytU9lAYq2DI/8v;dC^m,fPQMP:>GLuN^K>sRN-');

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
