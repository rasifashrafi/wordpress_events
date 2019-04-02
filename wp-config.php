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
define('DB_NAME', 'events');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'aedaHul+%GLp^WFwSj[HFK!?}9[X%iZ%^HD9L*,>0aNXtd|B;_8Q/S G1q6U$T:8');
define('SECURE_AUTH_KEY',  'Rv ZYYWEl|$bZ(ohC)P+7ZNe$/J!Y$vu$}D8GUv%m90<qMlxp&7 clgvsR4@=-n!');
define('LOGGED_IN_KEY',    'U:`5Yp(ZMrrai0n0S|<&dteJ5Dne%OAnV8;=KlQhBMek#e(b)$55{47M?gRfaF P');
define('NONCE_KEY',        'N c)hN!YgmfeL3.F_#O(AX]bbr1Cvf[Jh Eq.5nr#YEk}w|cb`fx;#@xs2cCO1!2');
define('AUTH_SALT',        'yn&mU.ROb^`-A;+9HeCu*=r^?--s>O~BofSTGWT$j/lmIwcJ =i/T*E~,-~v`M@S');
define('SECURE_AUTH_SALT', ';|3^%TZ58V8`(k~anA4-_!g(NzAv>}D{`PhhPb>ZXX8a88fg]mRN|-RuS4uwgp(r');
define('LOGGED_IN_SALT',   'Evm`e@w^k/>)fP*)?6DiViF9>~oc(|=qID|z@ x!7ab8^_n?Ov<;A]FN3vO*^a@l');
define('NONCE_SALT',       ' MnZ)-W_[#yAr&WJZWso*tl.<~q@]&r!BRa |xs[)2eL-bg- r9:2e>O4A>Ez?27');

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
