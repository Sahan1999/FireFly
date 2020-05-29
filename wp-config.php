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
define( 'DB_NAME', 'firefly_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sahan1234' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'xn_>Z^^,brW:<Z9%Q!.u%U3wJ[0|?|[acQg3% J$x6ZnrBtZJ>8cffM v~B!0az>' );
define( 'SECURE_AUTH_KEY',  '0o(tcXTD*S+P7m,Q_>HevvV}RqZT+IQ]!Os~_(yN$P,2>J7K5u>a[Z]]l1mr4+&Q' );
define( 'LOGGED_IN_KEY',    '= 0rTZ(_M.&^HwVh#!tr4.zRB;B W{r(7.y$1~f=]#3;KTqAU/5j?`^r|51D;&ad' );
define( 'NONCE_KEY',        'oBMO8I{!Gq|uR*T_gaL/lHu74v$c=wP4t4;`Y/iS;5~I(*3CjBXzgAO u![q2jC|' );
define( 'AUTH_SALT',        'Gt,BYtC9AcVrfup uaeWh:= L)nq2H{|Ke<)+=y.7b80FnbT+T8QH7tPlpb@@n7I' );
define( 'SECURE_AUTH_SALT', '2ScIaMyZxT+}{u*_7Thg7)Ef28Y@6w][b)BU(sOuqu2HvXoU0Efr`:rXr{+W3M>3' );
define( 'LOGGED_IN_SALT',   'YN5-+yjzI@o$*yh^ r4.c8jam/n5]33DRdz+%$a)n7S4/j%uNUF$H BhMErAn7&`' );
define( 'NONCE_SALT',       'l8,L@;A[GiZFP8u.x0QdWy[6$H6b&ZS(R7opx*5CE(&_XgceTtF,n@y;~v1i;H0)' );

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
