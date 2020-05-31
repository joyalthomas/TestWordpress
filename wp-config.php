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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         's:IVwZLYN?W!{WuU~cTgK|)5UM:gU6iN-RH<J~E5hg)<{L9rMi/3OeUpLOuo}#Th' );
define( 'SECURE_AUTH_KEY',  '5^5wSKjs:sW3wBu1y)L!]8U?/akR%#,w|>&3?t@?*<Ea=,rr:3Ovl2EIZIWk=57|' );
define( 'LOGGED_IN_KEY',    'P%3xb~^IfTP~.En3S/,.>t4w_0Cg=:5Tq;Q;jQ]h!!4e,O=ZlP FyQEvT5gk $>l' );
define( 'NONCE_KEY',        '$qay!q}V[RV>l-{4NsLYb3X9mQ(]< tH_+(B-ja,/mu2Ebv!rf<[IVEl/4{m9?G7' );
define( 'AUTH_SALT',        'qf-T<cNV_b+rG-7l:5NQrt%P^7KT}T/t}mNE>-^|(gptuF$9uC[yyIi(a)P?L-`m' );
define( 'SECURE_AUTH_SALT', '@!+2I!5,L.:.^xnm->O[}fxtJY]Sw`{fI,lp/q:d$3,V}H^644$ZWJq:J$eLUDsX' );
define( 'LOGGED_IN_SALT',   'l19OAh)hh]#WUw^}u:M&}N^v/bAz>g^99+mZ_8$NH{D`;Tifti4&+|{f,M/,(#Ov' );
define( 'NONCE_SALT',       'p<g(Q=^B2s#7ph=7/t]&!+k,a;I4$5>z-GG^-)Lsb #[}?A~`zb+8?,GQL6r`b!J' );

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
